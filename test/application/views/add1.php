

<div class="container-fluid">
  <div class="row-fluid">
<div class="span10">
<legend align="center">REGISTRATION</legend>	
<div class="form-div">

<form name="form1" id="form1" method="post" enctype="multipart/form-data" action="<?php echo base_url(); ?>user2/add">
 
<table class="table table-striped" >

 
 
<tr>
    <td width="125">Username</td>
    <td width="32">:</td>
  
	<td><?php echo form_input(array('name'=>'username', 'value'=>set_value('username', isset($page['username']) ? $page['username']: ''))); ?>
	</td>
	</tr>
        
    <tr>
    <td width="125">Password</td>
    <td width="32">:</td>
    <td>
	<?php echo form_password(array('name' => 'password', 'value' => set_value('password', isset($page['password']) ? $page['password'] : ''))); ?>
	</td>
	</tr>
    
    <tr>
    <td width="125">Full Name</td>
    <td width="32">:</td>
    <td>
	<?php echo form_input(array('name'=>'nama_lengkap', 'value'=>set_value('nama_lengkap', isset($page['nama_lengkap']) ? $page['nama_lengkap'] : ''))); ?>
	</td>
	</tr>
    
    <tr>
    <td width="125">Role</td>
    <td width="32">:</td>
    <td>
	<?php
                $options = array(
                    '' => '',
                    '1' => 'Admin',
                    '2' => 'MR',	
                    '3'  => 'CTO',
					'4'  => 'VP',
					'5'  => 'Staff',
                   
                );
                echo form_dropdown('level', $options);
            ?></td>
	</tr>
    
    
	<tr>
    <td width="125">Position</td>
    <td width="32">:</td>
    <td>
	<?php echo form_input(array('name'=>'jabatan', 'value' => set_value('jabatan', isset($page['jabatan']) ? $page['jabatan'] : ''))); ?>
	</td>
	</tr>    
        
    <tr>
    <td width="125">Department</td>
    <td width="32">:</td>
    <td>
	<?php echo form_input(array('name' => 'departemen', 'value' => set_value('departemen', isset($page['departemen']) ? $page['departemen'] : ''))); ?>
         
	</td>
	</tr>      
	
	<tr>
    <td width="125">Email</td>
    <td width="32">:</td>
    <td>
	<?php echo form_input(array('name' => 'email', 'value' => set_value('email', isset($page['email']) ? $page['email'] : ''))); ?></td>
	</tr> 

	<tr>
    <td width="125">Mobile</td>
    <td width="32">:</td>
    <td>
	<?php echo form_input(array('name' => 'mobile', 'value' => set_value('mobile', isset($page['mobile']) ? $page['mobile'] : ''))); ?></td>
	</tr> 
		
	<tr>
    <td width="125">Phone</td>
    <td width="32">:</td>
    <td>
	<?php echo form_input(array('name' => 'phone', 'value' => set_value('phone', isset($page['phone']) ? $page['phone'] : ''))); ?></td>
	</tr>
		
	<tr>
    <td width="125">Fax</td>
    <td width="32">:</td>
    <td>
	<?php echo form_input(array('name' => 'fax', 'value' => set_value('fax', isset($page['fax']) ? $page['fax'] : ''))); ?></td>
	</tr>
		
	<tr>
    <td width="125">Image</td>
    <td width="32">:</td>
    <td>
	<?php echo form_upload('photo');?>
	</td>
	</tr>


	<tr>
    <td width="125" valign="top"></td>
    <td width="32" valign="top"></td>
    <td><button type="submit" class="btn btn-success" rel="tooltip" title="first tooltip" name="submit" id="submit"  >Create Account</button></td>
    </tr>


</table>
</form>
  </div>
</div>
</div>
</div>

  
