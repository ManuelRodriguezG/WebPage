#!/usr/bin/python

import os, sys, string

ANY=1
COPY=2
SKIP=3
SKIPONE=4

state = ANY
static = 0

file = open(sys.argv[1])
name = sys.argv[1][:-2]

out = open(name + ".h", "w")
class writer:
   def __init__(self, file):
      self.file = file
   def write(self, text):
      self.file.write(text + "\n")
out = writer(out)

print("Generating "+name+".h")

selfheader = '#include "' + name + '.h"'

out.write( "/* Do not edit this file. It was automatically generated. */" )
out.write( "" )

out.write( "#ifndef HEADER_" + name )
out.write( "#define HEADER_" + name )
is_blank = False
for line in file.readlines():
   line = line[:-1]
   if state == ANY:
      if line == '/*{':
         state = COPY
      elif line == selfheader:
         pass
      elif line.find("#include") == 0:
         pass
      elif line.find("htop - ") == 0 and line[-2:] == ".c":
         out.write(line[:-2] + ".h")
      elif line.find("static ") != -1:
         if line[-1] == "{":
            state = SKIP
            static = 1
         else:
            state = SKIPONE
      elif len(line) > 1:
         static = 0
         equals = line.find(" = ")
         if line[-3:] == "= {":
            out.write( "extern " + line[:-4] + ";" )
            state = SKIP
         elif equals != -1:
            out.write("extern " + line[:equals] + ";" )
         elif line[-1] == "{":
            out.write( line[:-2].replace("inline", "extern") + ";" )
            state = SKIP
         else:
            out.write( line )
         is_blank = False
      elif line == "":
         if not is_blank:
            out.write( line )
         is_blank = True
      else:
         out.write( line )
         is_blank = False
   elif state == COPY:
      is_blank = False
      if line == "}*/":
         state = ANY
      else:
         out.write( line )
   elif state == SKIP:
      is_blank = False
      if len(line) >= 1 and line[0] == "}":
         if static == 1:
            state = SKIPONE
         else:
            state = ANY
         static = 0
   elif state == SKIPONE:
      is_blank = False
      state = ANY

out.write( "" )
out.write( "#endif" )
