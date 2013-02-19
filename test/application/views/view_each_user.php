
<?php echo form_open('user2/view_each')?>



<h2><?php echo $this->session->userdata('id');?></h2><br/>

<?php foreach($data_user ->result() as $row):?>
<tr><br/>
<br/>
<div class="control-group center">  
<div class="well well-large" align="center">
<table class="table table-striped" >
<tr>
<td width="125">

<img src="<?php echo base_url().$row->photo; ?>"width="100" height="100" class="img-polaroid"/><br/>
<div class="dl-horizontal">

<dt>Full Name :</dt>
  <dd><?php echo $row->nama_lengkap;?></dd>

  <dt>Position :</dt>
  <dd><?php echo $row->jabatan;?></dd>
  
  <dt>Department :</dt>
  <dd><?php echo $row->departemen;?></dd>

  <dt>Email :</dt>
  <dd><?php echo $row->email;?></dd>

  <dt>Mobile :</dt>
  <dd><?php echo $row->mobile;?></dd>

  <dt>Phone :</dt>
  <dd><?php echo $row->phone;?></dd>

  <dt>Fax :</dt>
  <dd><?php echo $row->fax;?></dd>
  



</dl>
</div>

<br/>
<p>
  <button class="btn btn-primary" type="button"><?php echo anchor('user2/edit_user/'.$row->id,'edit');?></button>
  <button class="btn btn-primary" type="button"><?php echo anchor('user2/hapus_user/'.$row->id,'delete',array
('onClick' => "return confirm('apakah anda yakin ')"));?></button>
  <button class="btn btn-primary" type="button"><?php echo anchor('user2/view/'.$row->id,'back');?></button>
  
</p>
</div>
</div>
</tr>

<?php  endforeach;?>

<?php echo form_close();?>


 