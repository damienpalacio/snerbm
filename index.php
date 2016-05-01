<?php

/** 
 * index.php
 * 
 * Damien Palacio
 * Geocomputation - UZH
 * 2016
 * 
**/

require_once('header.php');

if($_on_work == true) {
	$tpl = 'onwork.tpl';
}else{
	$tpl = 'index.tpl';
}

include('footer.php');

?>
