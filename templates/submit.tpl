{* Smarty *}

{* 
/** 
 * submit.tpl
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
  <p>Select the file to upload (UTF-8 only!)</p>
  <form method='post' action='submit.php?action=up' enctype="multipart/form-data">
   <div>
   <br />
   <input type="file" name="file" /><br /><br />   
   <br /><br />
   <input type="submit" value="Upload" />
   </div>
  </form>  
 <br /><br /><br /> 
   
 <br />
 </div>
</div>
</div>

{include file='footer.tpl'}
