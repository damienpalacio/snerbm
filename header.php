<?php

/** 
 * header.php
 * 
 * Damien Palacio
 * Geocomputation - UZH
 * 2016
 * 
**/

header('Content-type: text/html; charset=utf-8');

// show errors
error_reporting(E_ALL ^ E_DEPRECATED);
ini_set('display_errors', '1');

// change cookie lifetime
$limit = 60*24*3600;
session_set_cookie_params ($limit);

session_name('gpto');
session_start();
//echo session_id();

include("include/functions.php");
include("include/config.php");

// Smarty folder
define('SMARTY_DIR', $_smarty);

// load Smarty lib
require_once(SMARTY_DIR . 'Smarty.class.php');

// Smarty Configuration
$_smarty = new Smarty();
$_smarty->template_dir = $_local_url.'templates/';
$_smarty->compile_dir = $_local_url.'templates_c/';
$_smarty->config_dir = $_local_url.'configs/';
$_smarty->cache_dir = $_local_url.'cache/';

// for tests
$_smarty->caching = false;


$_smarty->assign('siteurl',$_site_url);
$_smarty->assign('onwork',$_on_work);

$begin = get_time();

$title = "Spatial Name Entity Recognition BenchMark";

?>
