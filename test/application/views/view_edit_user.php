<div class="container-fluid">
<div class="row-fluid">
<div class="span10">
<legend align="center">EDIT USER</legend>	
<div class="well">
<table class="table table-striped" > 

<?php foreach($user->result() as $use){}?>
<?php echo form_open_multipart('user2/edit_submit_user'); ?>

<tr>
<td width="125">Username</td>
<td width="32">:</td>
<td>
<?php echo form_input(array('name' => 'username', 'value' => $use->username )); ?><br/>
<font color="#FF0000"><i><?php echo form_error('username');?></i></font>
</td>
</tr>

<tr>
<td width="125">Password</td>
<td width="32">:</td>
<td>
<?php echo form_password(array('name' => 'password')); ?><br/>
<font color="#FF0000"><i><?php echo form_error('password');?></i></font>
</td>
</tr>

<tr>
<td width="125">Full Name</td>
<td width="32">:</td>
<td>
<?php echo form_input(array('name' => 'nama_lengkap', 'value' => $use->nama_lengkap)); ?><br/>
<font color="#FF0000"><i><?php echo form_error('nama_lengkap');?></i></font>
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
'3' => 'CTO',
'4' => 'VP',
'5' => 'Staff',

);
echo form_dropdown('level', $options,$use->level);
?>
<font color="#FF0000"><i><?php echo form_error('level');?></i></font> 
</td>
</tr>


<tr>
<td width="125">Position</td>
<td width="32">:</td>
<td>
<?php echo form_input(array('name' => 'jabatan', 'value' => $use->jabatan)); ?><br/>
<font color="#FF0000"><i><?php echo form_error('jabatan');?></i></font> 
</td>
</tr> 

<tr>
<td width="125">Department</td>
<td width="32">:</td>
<td>
<?php echo form_input(array('name' => 'departemen', 'value' => $use->departemen)); ?><br/>
<font color="#FF0000"><i><?php echo form_error('departemen');?></i></font> 
</td>
</tr> 

<tr>
<td width="125">Email</td>
<td width="32">:</td>
<td>
<?php echo form_input(array('name' => 'email', 'value' => $use->email)); ?><br/>
<font color="#FF0000"><i><?php echo form_error('email');?></i></font>
</td>
</tr>
<tr>
<td width="125">Mobile</td>
<td width="32">:</td>
<td>
<?php echo form_input(array('name' => 'mobile', 'value' => $use->mobile)); ?><br/>
<font color="#FF0000"><i><?php echo form_error('mobile');?></i></font>
</td>
</tr> 

<tr>
<td width="125">Phone</td>
<td width="32">:</td>
<td>
<?php echo form_input(array('name' => 'phone', 'value' => $use->phone)); ?><br/>
<font color="#FF0000"><i><?php echo form_error('phone');?></i></font>
</td>
</tr>

<tr>
<td width="125">Fax</td>
<td width="32">:</td>
<td>
<?php echo form_input(array('name' => 'fax', 'value' => $use->fax)); ?><br/>
<font color="#FF0000"><i><?php echo form_error('fax');?></i></font>
</td>
</tr>
<?php echo form_hidden('id',$use->id);?>
<tr>
<td width="125">Image</td>
<td width="32">:</td>
<td>
<img src="<?php echo base_url().$use->photo; ?>"width="100" height="100" class="img-polaroid"/>
<?php echo form_upload('photo');?>
</td>
</tr> 


<tr>
<td width="125" valign="top"></td>
<td width="32" valign="top"></td>
<td><button type="submit" class="btn btn-success" rel="tooltip" title="first tooltip" name="submit" id="submit" >Update</button></td>
</tr>
<?php echo form_close(); ?>

</table>


</div>
</div>
</div>
</div>