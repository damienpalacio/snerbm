{* Smarty *}

{* 
/** 
 * header.tpl
 * 
 * Damien Palacio
 * Geocomputation - UZH
 * 2016
 * 
**/
 *}
 
<!DOCTYPE html>
<html>
<head>
<!--[if ie]><meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge"/><![endif]-->
<title>{$title}</title>
<link rel="stylesheet" type="text/css" href="{$siteurl}site.css" />
<script src="{$siteurl}include/functions.js" type="text/javascript"></script>
</head>

<body>

<div class="header_box">
<a id="top"></a>
<a href="{$siteurl}index.php" title='Home' class="band"></a>
<br />
</div>

<div>
	<br /><br />
</div>

{if $onwork==false}
{include file='left_menu.tpl'}
{/if}
