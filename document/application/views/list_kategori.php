<style>
#content{
margin-top : -750px;	
}
</style>

<div id="content">

<?php $i=1;?>
<h2><font color="#FFFFFF" face="Cheri, Helvetica, sans-serif" size="6">List Category</font></h2><br />
<table width="403" border="3" cellspacing="2" cellpadding="1" align="left">
<tr>
<td width="69" align="center">No</td>
<td width="191" align="center">Kategori</td>
<td width="117" align="center">Aksi</td>
</tr>
<?php foreach($kategori->result() as $kat):?>
<tr>
<td align="center"><?php echo $i;?></td>
<td align="center"><?php echo $kat->kat_doc;?></td>
<td align="center"><?php echo anchor('kategori/edit/'.$kat->id,'edit')."|".anchor('kategori/delete/'.$kat->id,'delete',array
('onClick' => "return confirm('apakah anda yakin ')"));?></td>
</tr>
<?php $i++; endforeach;?>

</table>
</div>