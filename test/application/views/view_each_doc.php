<div class="container-fluid">
<div class="row-fluid">
<div class="span10">
<legend align="center">DOCUMENT</legend>	
<div class="well">
<table class="table table-striped" >
<?php echo form_open('posts/view_each')?>



<h2><?php echo $this->session->userdata('id');?></h2><br/>

<?php foreach($data_doc ->result() as $row):?>
<tr>
<td width="125">Title</td>
<td width="32">:</td>
<td>
<?php echo $row->title;?>
</td>
</tr>

<tr>
<td width="125">File Name</td>
<td width="32">:</td>
<td>
<?php echo $row->image;?>
</td>
</tr>

<tr>
<td width="125">Version</td>
<td width="32">:</td>
<td>
<?php echo $row->version;?>
</td>
</tr>



<tr>
<td width="125">Type</td>
<td width="32">:</td>
<td>
<?php echo $row->type;?>
</td>
</tr>

<tr>
<td width="125">Date Modified</td>
<td width="32">:</td>
<td>
<?php echo $row->created;?>
</td>
</tr>
  
<tr>
<td width="125">Comment</td>
<td width="32">:</td>
<td>
<?php echo $row->history;?>
</td>
</tr>
  
  




<tr>
<td>
  
</td>
<td >


<td ><button class="btn btn-primary" type="button"><?php echo anchor('posts/edit/'.$row->id,'edit');?></button>
<button class="btn btn-primary" type="button"><?php echo anchor('posts/delete/'.$row->id,'delete',array
('onClick' => "return confirm('apakah anda yakin ')"));?></button></td></td>
 </tr>
  



<?php  endforeach;?>

<?php echo form_close();?>

</table>


</div>
</div>
</div>
</div>
 