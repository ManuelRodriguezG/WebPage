<?php

	//error_reporting(false);
	//Ruta de la aplicacion
	define('RUTA_APP',dirname(dirname(__FILE__)));

	//Ruta url Ejemplo: http://localhost/ExamplePanoramex/
	define('RUTA_URL','http://localhost/WebPage/mvc/');
	

	define('NOMBRE_SITIO','Black & White Bettas');
	
	//Fecha
	$date = new DateTime("now", new DateTimeZone('America/Mexico_City'));
    $date = $date->format("Y-m-d H:i:s");
	define('DATE_NOW',$date);
	
	//Constantes de nivel de rango
	define('TERCERO',1);
	define('USER',2);
	define('JEFE_DEPARTAMENTO',3);
	define('CONTABILIDAD',4);
	define('ADMINISTRATIVO',9);
	define('SOCIO',10);
	define('PROGRAMADOR',11);
	
	//define('LANGUAGES',array('ES','EN'));
	
	