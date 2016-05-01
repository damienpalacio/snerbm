{* Smarty *}

{* 
/** 
 * left_menu.tpl
 * 
 * Damien Palacio
 * Geocomputation - UZH
 * 2016
 * 
**/
 *}

{assign var='user' value=$user|default:''}

<div class="left_menu">

<div class="left_box">
<h4 class="left_header">Website</h4>
<p class="txt_center">
<a href="{$siteurl}index.php" title="Home">Home</a>
</p>
<hr />
<p class="txt_center">
<a href="{$siteurl}contact.php" title="Contact">Contact</a>
</p>
</div>
<br />
<div class="left_box">
<h4 class="left_header">Benchmark</h4>
<p class="txt_center">
<a href="{$siteurl}submit.php" title="Submit">Submit Results</a>
</p>
<hr />
<p class="txt_center">
History
</p>
</div>

</div>
