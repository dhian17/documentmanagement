<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>.::TOTALINDO::.</title>
<meta name="keywords" content="" />
<meta name="description" content="" />

	<link href="<?php echo base_url();?>css/bootstrap.css" rel="stylesheet" media="screen">
	<link href="<?php echo base_url();?>css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
	<script src="<?php echo base_url();?>js/jquery-latest.js"></script>
	<script src="<?php echo base_url();?>js/bootstrap.min.js"></script>
	<script src="<?php echo base_url();?>js/jquery.js"></script>
	<script src="<?php echo base_url();?>js/site.js"></script>
	<script src="<?php echo base_url();?>js/ajaxfileupload.js"></script>
	<script src="<?php echo base_url();?>js/bootstrap.min.js"></script>
	<script src="<?php echo base_url();?>js/bootstrap-transition.js"></script>
	<script src="<?php echo base_url();?>js/bootstrap-alert.js"></script>
	<script src="<?php echo base_url();?>js/bootstrap-modal.js"></script>
	<script src="<?php echo base_url();?>js/bootstrap-dropdown.js"></script>
	<script src="<?php echo base_url();?>js/bootstrap-scrollspy.js"></script>
	<script src="<?php echo base_url();?>js/bootstrap-tab.js"></script>
	<script src="<?php echo base_url();?>js/bootstrap-tooltip.js"></script>
	<script src="<?php echo base_url();?>js/bootstrap-popover.js"></script>
	<script src="<?php echo base_url();?>js/jquery.validate.js" type="text/javascript" ></script>
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

</head>
<body>
	<?php echo $this->load->view('header_vp');?>
	<?php echo $this->load->view('content');?>
	<?php echo $this->load->view($isi);?>
	<?php echo $this->load->view('footer');?>
