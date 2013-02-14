
<?php echo form_open('posts/view_each')?>



<h2><?php echo $this->session->userdata('id');?></h2><br/>

<?php foreach($data_doc ->result() as $row):?>
<tr><br/>
<br/>
<div class="control-group center">  
<div class="well well-large" align="center"> 
<div class="dl-horizontal">

<dt>Title :</dt>
  <dd><?php echo $row->title;?></dd>

  <dt>File Name :</dt>
  <dd><?php echo $row->image;?></dd>
  
  <dt>Version :</dt>
  <dd><?php echo $row->version;?></dd>

  <dt>History :</dt>
  <dd><?php echo $row->history;?></dd>

  <dt>Type :</dt>
  <dd><?php echo $row->type;?></dd>

  <dt>Date Modified :</dt>
  <dd><?php echo $row->created;?></dd>

  
  



</dl>
</div>

<br/>
<p>
  <button class="btn btn-primary" type="button"><?php echo anchor('posts/edit/'.$row->id,'edit');?></button>
  <button class="btn btn-primary" type="button"><?php echo anchor('posts/delete/'.$row->id,'delete',array
('onClick' => "return confirm('apakah anda yakin ')"));?></button>
 
  
</p>
</div>
</div>
</tr>

<?php  endforeach;?>

<?php echo form_close();?>


 