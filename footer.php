<?php

/** 
 * footer.php
 * 
 * Damien Palacio
 * Geocomputation - UZH
 * 2016
 * 
**/

$_smarty->assign('title',$title);
$chrono = get_chrono($begin);
$_smarty->assign('chrono',$chrono);
$_smarty->display($tpl);

?>
