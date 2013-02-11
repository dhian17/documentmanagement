<style>
#content{
margin-top : -750px;	
}
</style>

<div id="content">

<h2><font color="#FFFFFF" face="Cheri, Helvetica, sans-serif" size="7">Edit Kategori</font></h2>
<?php foreach($kategori->result() as $kat){
//$judul=$kat->kat_doc;
//$id=$kat->id;
}?>
<?php echo form_open('kategori/edit_submit')?>
<table width="200" border="0" cellspacing="2" cellpadding="1">
<tr>
<td><input name="category" size="40" type="text" value="<?php echo $kat->kat_doc;?>"/></td>
</tr>
<?php echo form_hidden('id',$kat->id);?>
<tr><td><input type="submit" value="Update"/></td>
</tr>
</table>
<?php echo form_close();?>

</div>