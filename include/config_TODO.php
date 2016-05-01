<?php

/** 
 * config.php
 * 
 * Damien Palacio
 * Geocomputation - UZH
 * 2015
 * 
**/

// SERVER
$_serv = $_SERVER["DOCUMENT_ROOT"]."/";					// local URL of server
//$_serv = "/var/www/";
$_local_url = $_serv."snerbm/";								// site local URL
//$_site_url = "http://geocomp.geo.uzh.ch/snerbm/";					// site URL
$_site_url = "http://localhost/snerbm/";
//$_libs = "/var/opt/weblibs/";
$_libs = $_serv."libs/";
$_smarty = $_libs.'Smarty-3.1.27/libs/';		// path of Smarty
$_locale = "en_US.UTF-8";

// updating
$_on_work = false;

// MYSQL
$_mysql_host = "localhost";	// database host
$_mysql_login = "";			// database login
$_mysql_pass = "";		// database password
$_mysql_dbname = "snerbm";			// database name

// PGSQL
$_pg_host = "localhost";			// database host
$_pg_login = "";			// database login
$_pg_pass = "";					// database password
$_pg_dbname = "";			// database name

// data
$_dir_out = $_local_url."applis/";
$_dir_texts = $_dir_out."texts/";
$_dir_results = $_dir_out."results/geoloc/";
$_upload = $_dir_out."uploads/";						// path of uploads (this directory need chmod 777)

?>
