{* Smarty *}

{* 
/** 
 * submit_successful.tpl
 * 
 * Damien Palacio
 * Geocomputation - UZH
 * 2016
 * 
**/
 *}

{include file='header.tpl'}

{assign var='error' value=$error|default:''}
{assign var='fileName' value=$fileName|default:''}

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
  <p>File {$fileName} correctly upload.</p>
 <br /><br /><br />
 <p class="txt_center"><a href="{$siteurl}process.php?f={$filename}" title="submit results" class="button">Process file</a></p>
 <br />
 </div>
</div>
</div>

{include file='footer.tpl'}
