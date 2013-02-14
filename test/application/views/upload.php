<div id="bg-isi">
<h2>&nbsp;</h2><br />
<div class="control-group center">
<p align="center">
<button class="btn btn-primary" type="button"><a href="<?php echo base_url(); ?>index.php/doc/tambahupload"><div class="pagingpage"><b>Add File / Upload File</b></div></a></button>
<button class="btn btn-primary" type="button"><a href="<?php echo base_url(); ?>index.php/doc/katdownload"><div class="pagingpage"><b>Add Category</b></div></a></button></p>

</div>


<?php echo form_open('admin/upload')?>
<?php foreach($query ->result() as $t):?>
<tr><br/>
<br/>


<div class="control-group center"> 

<div class="well well-large" align="center">

<strong><td ><?php echo $t->judul_file;?></td></strong><br/>
<td ><?php echo $t->nama_file;?></td><br/>
<td ><?php echo $t->tgl_posting;?></td><br/>
<td ><?php echo $t->author;?></td><br/>
<br/>
<td ><?php echo anchor('doc/editupload/'.$t->id_download,'edit')."|".anchor('doc/hapusupload/'.$t->id_download,'delete',array
('onClick' => "return confirm('apakah anda yakin ')"));?></td>
<td><?php echo "<b><a href='".base_url()."./upload/".$t->nama_file."'>[ Download ]</a></b>"?></td>
</div></div>
</tr>

</div>
<?php  endforeach;?>

<?php echo form_close();?>