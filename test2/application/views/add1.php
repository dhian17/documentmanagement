	
<div class="control-group center">  
<div class="well">
<div class="container">
<div class="row">
<div class="span8">
  
	<?php echo form_open_multipart('user2/add'); ?>

		<form class="form-horizontal" id="upload" method='post' action=''>
	  	<fieldset>
	    <legend><strong>Registration</strong></legend>
	    
        
        <div class="control-group success">
        <label class="control-label" for="username"></label>
	    <div class="controls">
		Username :<br/>
		<?php echo form_input(array('name'=>'username', 'value'=>set_value('username', isset($page['username']) ? $page['username']: ''))); ?><br/>
		<font color="#FF0000"><i><?php echo form_error('username');?></i></font>        
	    </div>
		</div>
	

		<div class="control-group success">
        <label class="control-label" for="password"></label>
	    <div class="controls">
		Password :<br/>
		<?php echo form_password(array('name' => 'password', 'value' => set_value('password', isset($page['password']) ? $page['password'] : ''))); ?><br/>
		<font color="#FF0000"><i><?php echo form_error('password');?></i> </font>
		</div>
		</div>


		<div class="control-group success">
        <label class="control-label" for="nama_lengkap"></label>
	    <div class="controls">
		Full Name :<br/>
		<?php echo form_input(array('name'=>'nama_lengkap', 'value'=>set_value('nama_lengkap', isset($page['nama_lengkap']) ? $page['nama_lengkap'] : ''))); ?><br/>
        <font color="#FF0000"><i><?php echo form_error('nama_lengkap');?></i> </font>
		</div>
        </div>


		<div class="control-group success">
        <label class="control-label" for="jabatan"></label>
	    <div class="controls">
		Position :<br/>
		<?php echo form_input(array('name'=>'jabatan', 'value' => set_value('jabatan', isset($page['jabatan']) ? $page['jabatan'] : ''))); ?><br/>
        <font color="#FF0000"><i><?php echo form_error('jabatan');?></i></font> 
        </div>
        </div>


		<div class="control-group success">
        <label class="control-label" for="departemen"></label>
	    <div class="controls">
		Department :<br/>
		<?php echo form_input(array('name' => 'departemen', 'value' => set_value('departemen', isset($page['departemen']) ? $page['departemen'] : ''))); ?><br/>
        <font color="#FF0000"><i><?php echo form_error('departemen');?></i> </font>
        </div>
        </div>


		<div class="control-group success">
        <label class="control-label" for="email"></label>
	    <div class="controls">
		Email :<br/>
		<?php echo form_input(array('name' => 'email', 'value' => set_value('email', isset($page['email']) ? $page['email'] : ''))); ?><br/>
        <font color="#FF0000"><i><?php echo form_error('email');?></i> </font>
		</div>
        </div>
		

		<div class="control-group success">
        <label class="control-label" for="mobile"></label>
	    <div class="controls">
		Mobile :<br/>
		<?php echo form_input(array('name' => 'mobile', 'value' => set_value('mobile', isset($page['mobile']) ? $page['mobile'] : ''))); ?><br/>
        <font color="#FF0000"><i><?php echo form_error('mobile');?></i> </font>
		</div>
        </div>


		<div class="control-group success">
        <label class="control-label" for="phone"></label>
	    <div class="controls">
		Phone :<br/>
		<?php echo form_input(array('name' => 'phone', 'value' => set_value('phone', isset($page['phone']) ? $page['phone'] : ''))); ?><br/>
        <font color="#FF0000"><i><?php echo form_error('phone');?></i> </font>
		</div>
        </div>


		<div class="control-group success">
        <label class="control-label" for="fax"></label>
	    <div class="controls">
		Fax :<br/>
		<?php echo form_input(array('name' => 'fax', 'value' => set_value('fax', isset($page['fax']) ? $page['fax'] : ''))); ?><br/>
        <font color="#FF0000"><i><?php echo form_error('fax');?></i> </font>
		</div>
        </div>


		Image : <br/>
		<?php echo form_upload('photo');?><br/><br/><br/>
		<button type="submit" class="btn btn-success" rel="tooltip" title="first tooltip" name="submit" id="submit" >Create Account</button>
		<?php echo form_close(); ?><br/><br/>


		</fieldset>
        </form>
        
</div>
</div>
</div>
</div>
</div>
  
