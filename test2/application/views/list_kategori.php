<style>
#content{
margin-top : -550px;	
}
th {
	                font: bold 11px "Trebuchet MS", Verdana, Arial, Helvetica,sans-serif;
	                color: #6D929B;
	                border-right: 1px solid #C1DAD7;
	                border-bottom: 1px solid #C1DAD7;
	                border-top: 1px solid #C1DAD7;
	                letter-spacing: 2px;
	                text-transform: uppercase;
	                text-align: center;
	                padding: 6px 6px 6px 12px;
	                background: #CAE8EA;
	            }
	            td {
	                border-right: 1px solid #C1DAD7;
	                border-bottom: 1px solid #C1DAD7;
	                background: #fff;
	                padding: 6px 6px 6px 12px;
	                color: #6D929B;
	            }
</style>

<div id="content">

<?php $i=1;?>
<h2><font color="#FFFFFF" face="Cheri, Helvetica, sans-serif" size="6">List Category</font></h2><br />
<table width="403" border="3" cellspacing="2" cellpadding="1" align="left">
<tr><center>
<th >No</th>
<th  >Kategori</th>
<th>Aksi</th></center>
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