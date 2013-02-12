<div class="control-group center">  
<div class="well">
<div class="container">
<div class="row">
<div class="span8">
  
	<?php foreach($user->result() as $use){}?>
	<?php echo form_open_multipart('user2/edit_submit_user'); ?>
	<form class="form-horizontal" id="upload" method='post' action=''>
	<fieldset>
	<legend>Edit User</legend>
	    
        
		<div class="control-group success">
		<label class="control-label" for="username"></label>
		<div class="controls">
		Username :<br/>
		<?php echo form_input(array('name' => 'username', 'value' => $use->username )); ?><br/>
        <font color="#FF0000"><i><?php echo form_error('username');?></i></font>
		</div>
		</div>
	

		<div class="control-group success">
		<label class="control-label" for="password"></label>
		<div class="controls">
		Password :<br/>
		<?php echo form_password(array('name' => 'password', 'value' => $use->password)); ?><br/>
        <font color="#FF0000"><i><?php echo form_error('password');?></i></font>
		</div>
		</div>
    
    
		<div class="control-group success">
		<label class="control-label" for="nama_lengkap"></label>
		<div class="controls">
		Full Name :<br/>
		<?php echo form_input(array('name' => 'nama_lengkap', 'value' => $use->nama_lengkap)); ?><br/>
        <font color="#FF0000"><i><?php echo form_error('nama_lengkap');?></i></font>
		</div>
		</div>


		<div class="control-group success">
		<label class="control-label" for="jabatan"></label>
		<div class="controls">
		Position :<br/>
		<?php echo form_input(array('name' => 'jabatan', 'value' => $use->jabatan)); ?><br/>
        <font color="#FF0000"><i><?php echo form_error('jabatan');?></i></font>
		</div>
		</div>


		<div class="control-group success">
		<label class="control-label" for="departemen"></label>
		<div class="controls">
		Department :<br/>
		<?php echo form_input(array('name' => 'departemen', 'value' => $use->departemen)); ?><br/>
        <font color="#FF0000"><i><?php echo form_error('departemen');?></i></font>
		</div>
		</div>


		<div class="control-group success">
		<label class="control-label" for="email"></label>
		<div class="controls">
		Email :<br/>
		<?php echo form_input(array('name' => 'email', 'value' => $use->email)); ?><br/>
        <font color="#FF0000"><i><?php echo form_error('email');?></i></font>
		</div>
		</div>


		<div class="control-group success">
		<label class="control-label" for="mobile"></label>
		<div class="controls">
		Mobile :<br/>
		<?php echo form_input(array('name' => 'mobile', 'value' => $use->mobile)); ?><br/>
        <font color="#FF0000"><i><?php echo form_error('mobile');?></i></font>
		</div>
		</div>


		<div class="control-group success">
		<label class="control-label" for="phone"></label>
		<div class="controls">
		Phone :<br/>
		<?php echo form_input(array('name' => 'phone', 'value' => $use->phone)); ?><br/>
        <font color="#FF0000"><i><?php echo form_error('phone');?></i></font>
		</div>
		</div>


		<div class="control-group success">
		<label class="control-label" for="fax"></label>
		<div class="controls">
		Fax :<br/>
		<?php echo form_input(array('name' => 'fax', 'value' => $use->fax)); ?><br/>
        <font color="#FF0000"><i><?php echo form_error('fax');?></i></font>
		</div>
		</div>

		<?php echo form_hidden('id',$use->id);?>
		Image : <br/>
        <img src="<?php echo base_url().$use->photo; ?>"width="100" height="100" class="img-polaroid"/>
		<?php echo form_upload('photo');?><br/><br/><br/>
		<button type="submit" class="btn btn-success" rel="tooltip" title="first tooltip" name="submit" id="submit" >Update</button>

	<?php echo form_close(); ?><br/><br/>


