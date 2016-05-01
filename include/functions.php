<?php

/**
 * functions.php
 *
 * Damien Palacio
 * Geocomputation - UZH
 * 2016
 *
 **/

// Database connection
function db_connect($type) {
	include("config.php");

	$conn = "";
	if($type == "mysql") {
		$conn = mysqli_connect($_mysql_host, $_mysql_login, $_mysql_pass) or  die('Connection problem to Mysql');
		mysqli_select_db($conn,$_mysql_dbname) or  die('Connection problem to database');
		mysqli_query($conn,"SET NAMES 'utf8'");
	}

	if($type == "pg") {
		$pg_infos = "host=".$_pg_host." dbname=".$_pg_dbname." user=".$_pg_login." password=".$_pg_pass;
		$conn = pg_connect($pg_infos) or  die('Connection problem to PostgreSQL');
	}

	if($type == "ora") {
		$conn = oci_connect($ora_user, $ora_pass, $ora_server, 'UTF8') or  die('Connection problem to Oracle');
	}

	return $conn;
}

// Database close
function db_close($type, $conn) {
	if($type == "mysql") {
		mysqli_close($conn);
	}

	if($type == "pg") {
		pg_close($conn);
	}
	
	if($type == "ora") {
		oci_close($conn);
	}
}

// Get time in seconds
function get_time() {  
    $time = microtime();
    $time  = explode(' ', $time);
    return $time[1] + $time[0]; 
}

// Get time of execution with begin given
function get_chrono($begin) {
	$end = get_time();
	$chrono = round($end - $begin,4);
	return $chrono;
}

// Reload to another page
function reload($url) {
	echo '<script language="Javascript">
		<!--
		var t=setTimeout("document.location.replace(\''.$url.'\')", 1000);
		// -->
		</script>';
}

?>
