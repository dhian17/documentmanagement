<?php echo form_open('user2/view')?>
<h2><?php echo $this->session->userdata('id');?></h2><br/>
<?php foreach($data_user ->result() as $row):?>

<div class="row-fluid">
<td>
<div class="span4 offset2"> 
<div class="well well-small" align="center">

	<img src="<?php echo base_url().$row->photo; ?>"width="100" height="100" class="img-polaroid"/><br/>
		<div class="dl-horizontal">
		<strong> <?php echo anchor('user2/view_each/'.$row->id,$row->nama_lengkap)?></strong>
		<br/><br/>

  		<dt>Position :</dt>
  		<dd><?php echo $row->jabatan;?></dd>
  
  		<dt>Department :</dt>
  		<dd><?php echo $row->departemen;?></dd>
  
		</div>
        <br/>

	<p>
	<button class="btn btn-primary" type="button"><?php echo anchor('user2/edit_user/'.$row->id,'edit');?></button>
	<button class="btn btn-primary" type="button"><?php echo anchor('user2/hapus_user/'.$row->id,'delete',array('onClick' => "return confirm('apakah anda yakin ')"));?></button>
	</p>

</div>
</div>
</td>

<?php  endforeach;?>
<?php echo form_close();?>
</div>




