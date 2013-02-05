<style>
#content{
margin-top : -750px;	
}
</style>

<div id="content">

<?php $i=1;?>
<h2><font color="#FFFFFF" face="Cheri, Helvetica, sans-serif" size="6">View User</font></h2><br />
<table width="403" border="3" cellspacing="2" cellpadding="1" align="left">
<tr>
<td width="69" align="center">No</td>
<td width="191" align="center">Username</td>
<td width="117" align="center">Aksi</td>
</tr>
<?php foreach($data_user->result() as $row):?>
<tr>
<td align="center"><?php echo $i;?></td>
<td align="center"><?php echo $row->username;?></td>
<td align="center"><?php echo anchor('user/edit_user/'.$row->id,'edit')."|".anchor('user/hapus_user/'.$row->id,'delete',array
('onClick' => "return confirm('apakah anda yakin ')"));?></td>
</tr>

<?php $i++; endforeach;?>
<?php
echo anchor('user/download','Download Link');
?>
</table>
</div>