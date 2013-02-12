<style>
#content{
margin-top : -550px;	
}
</style>


<?php echo form_open('kategori/submit')?>
<div id="content">
<h2><font color="#FFFFFF" face="Cheri, Helvetica, sans-serif" size="6">Add Category</font></h2><br />
<table width="200" border="0" cellspacing="2" cellpadding="1" align="left">
<tr>
<td><input name="category" size="40" type="text" /></td>
</tr>
<tr><td><input type="submit" value="Tambah"/></td>
</tr>
</table>
</div>
<?php echo form_close();?>
