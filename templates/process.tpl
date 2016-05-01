{* Smarty *}

{* 
/** 
 * process.tpl
 * 
 * Damien Palacio
 * Geocomputation - UZH
 * 2016
 * 
**/
 *}

{include file='header.tpl'}

{assign var='error' value=$error|default:''}
{assign var='text' value=$text|default:''}
{assign var='res' value=$res|default:''}

<div class="center_pos">
<div class="center_box"> 
 <div class="txt_center">
 <br />
  {if $error != ''}
   <p>ERROR(S) : </p>
   <ul>   
    {$error}
   </ul>
  {/if}
 
 {if $data != '' }
	Results: <br />	
	<ul class="txt_left">
	{foreach from=$data key=k item=row}
		<li>{$k}: {$row}</li>
	{/foreach}
	</ul>
	<br /><br /><br />
 {/if}
   
 <br />
 </div>
</div>
</div>

{include file='footer.tpl'}
