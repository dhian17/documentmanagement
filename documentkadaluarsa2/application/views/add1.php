<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Registration Page</title>
    
    <link rel="stylesheet" media="screen" href="<?php echo base_url();?>css/bootstrap.css"/>
   <link href="<?php echo base_url();?>css/bootstrap-responsive.css"  rel="stylesheet" media="screen"/> 

  </head>
  <body>	
  <div class="control-group center">  
	<div class="well">
  <div class="container">
  <div class="row">
  <div class="span8">
  
<?php echo validation_errors(); ?>
<?php echo form_open_multipart('user2/add'); ?>
<form class="form-horizontal" id="upload" method='post' action=''>
	  <fieldset>
	    <legend>Registration</legend>
	    <div class="control-group success">
        <label class="control-label" for="username"></label>
	      <div class="controls">
         
	       Username :<br/>
<?php echo form_input(array('name' => 'username', 'value' => set_value('username', isset($page['username']) ? $page['username'] : ''))); ?>
            
	      </div>
	</div>
	

<div class="control-group success">
        <label class="control-label" for="password"></label>
	      <div class="controls">
Password :<br/>
<?php echo form_password(array('name' => 'password', 'value' => set_value('password', isset($page['password']) ? $page['password'] : ''))); ?><br/>
</div>
	</div>
<div class="control-group success">
        <label class="control-label" for="nama_lengkap"></label>
	      <div class="controls">
Full Name :<br/>
<?php echo form_input(array('name' => 'nama_lengkap', 'value' => set_value('nama_lengkap', isset($page['nama_lengkap']) ? $page['nama_lengkap'] : ''))); ?><br/>
</div></div>

<div class="control-group success">
        <label class="control-label" for="jabatan"></label>
	      <div class="controls">
Position :<br/>
<?php echo form_input(array('name' => 'jabatan', 'value' => set_value('jabatan', isset($page['jabatan']) ? $page['jabatan'] : ''))); ?><br/></div></div>

<div class="control-group success">
        <label class="control-label" for="departemen"></label>
	      <div class="controls">

Department :<br/>
<?php echo form_input(array('name' => 'departemen', 'value' => set_value('departemen', isset($page['departemen']) ? $page['departemen'] : ''))); ?><br/></div></div>

<div class="control-group success">
        <label class="control-label" for="email"></label>
	      <div class="controls">

Email :<br/>
<?php echo form_input(array('name' => 'email', 'value' => set_value('email', isset($page['email']) ? $page['email'] : ''))); ?><br/>
</div></div>

<div class="control-group success">
        <label class="control-label" for="mobile"></label>
	      <div class="controls">
Mobile :<br/>
<?php echo form_input(array('name' => 'mobile', 'value' => set_value('mobile', isset($page['mobile']) ? $page['mobile'] : ''))); ?><br/>
</div></div>

<div class="control-group success">
        <label class="control-label" for="phone"></label>
	      <div class="controls">
Phone :<br/>
<?php echo form_input(array('name' => 'phone', 'value' => set_value('phone', isset($page['phone']) ? $page['phone'] : ''))); ?><br/>
</div></div>

<div class="control-group success">
        <label class="control-label" for="fax"></label>
	      <div class="controls">
Fax :<br/>
<?php echo form_input(array('name' => 'fax', 'value' => set_value('fax', isset($page['fax']) ? $page['fax'] : ''))); ?><br/>
</div></div>

Image : <br/>
<?php echo form_upload('photo');?><br/><br/><br/>
<button type="submit" class="btn btn-success" rel="tooltip" title="first tooltip" name="submit" id="submit" >Create Account</button>
<?php echo form_close(); ?><br/><br/>

<footer>
	 
        <p>&copy;2013</p>
</footer><!--/.fluid-container-->
   
      

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    

      </fieldset></form></div></div></div></div>
  
<script src="js/jquery.js"></script>
 <script src="js/site.js"></script>
  <script src="js/ajaxfileupload.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap-transition.js"></script>
    <script src="js/bootstrap-alert.js"></script>
    <script src="js/bootstrap-modal.js"></script>
    <script src="js/bootstrap-dropdown.js"></script>
    <script src="js/bootstrap-scrollspy.js"></script>
    <script src="js/bootstrap-tab.js"></script>
    <script src="js/bootstrap-tooltip.js"></script>
    <script src="js/bootstrap-popover.js"></script>
	<script type="text/javascript" src="js/jquery.validate.js"></script>
	  <script type="text/javascript">
	  $(document).ready(function(){
			$('input').hover(function()
			{
			$(this).popover('show')
		});
			$("#register").validate({
				rules:{
					username:"required",
					password:{
						required:true,
						minlength: 6
					},
					nama_lengkap:"required",
					jabatan:"required",
					departemen:"required",
					email:{
							required:true,
							email: true
						},
						mobile:{
						required:true,
						minlength: 6
					},
						phone:{
						required:true,
						minlength: 6
					},
						fax:{
						required:true,
						minlength: 6
					},
					
					
					
				},
				messages:{
					username:"Enter your username",
					password:{
						required:"Enter your password",
						minlength:"Password must be minimum 6 characters"
					},
					nama_lengkap:"Enteryour first and last name",
					jabatan:"Enter your position",
					departemen:"Enter your department",
					email:{
						required:"Enter your email address",
						email:"Enter valid email address"
					},
					mobile:{
						required:"Enter your mobile number",
						email:"Enter valid number"
					},
					phone:{
						required:"Enter your phone number",
						email:"Enter valid number"
					},
					fax:{
						required:"Enter your fax number",
						email:"Enter valid number"
					},
					
					
				},
				errorClass: "help-inline",
				errorElement: "span",
				highlight:function(element, errorClass, validClass) {
					$(element).parents('.control-group').addClass('error');
				},
				unhighlight: function(element, errorClass, validClass) {
					$(element).parents('.control-group').removeClass('error');
					$(element).parents('.control-group').addClass('success');
				}
			});
		});
	  </script>
   </div>
  </body>
</html>