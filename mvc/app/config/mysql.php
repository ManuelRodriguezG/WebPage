<?php

if ($_SERVER["SERVER_NAME"] == "localhost") {
    /**
   * Base de datos local
   * **/
  $mysqlHost = "localhost";
  $mysqlBase = "prueba";
  $mysqlUser = "root";
  $mysqlPass = '';
} else {
  /**
   * Base de datos de producción
   * **/
  $mysqlHost = "";
  $mysqlBase = "";
  $mysqlUser = "";
  $mysqlPass = "";
 
}
define("MYSQLHOST", $mysqlHost);
define("MYSQLBASE", $mysqlBase);
define("MYSQLUSER", $mysqlUser);
define("MYSQLPASS", $mysqlPass);
