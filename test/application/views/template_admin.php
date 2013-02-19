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
	
 <script type="text/javascript" src="<?php echo base_url();?>js/jquery.tools.min.js">
 </script>
  <script type="text/javascript" src="<?php echo base_url();?>js/jquery.validate.js"></script><!--validasi pendaftaran customer -->

  <script>

$(function() {

	// if the function argument is given to overlay,
	// it is assumed to be the onBeforeLoad event listener
	$("a[rel]").overlay({

		mask: 'darkred',
		effect: 'apple',

		onBeforeLoad: function() {

			// grab wrapper element inside content
			var wrap = this.getOverlay().find(".contentWrap");

			// load the page specified in the trigger
			wrap.load(this.getTrigger().attr("href"));
		}

	});
});
</script>

  
  <script type="text/javascript">
		$(document).ready(function() {
			$("#form1").validate({
				rules: {
				  username: "required", 
				  password: {
						required: true,
					   minlength: 5
				  },		
				  nama_lengkap:"required",
				  jabatan:"required",
				  departemen:"required",
				  mobile:{
						required: true,
					   minlength: 10
				  },		
				  phone:{
						required: true,
					   minlength: 6
				  },		
				  fax:{
						required: true,
					   minlength: 6
				  },		
				  email: {				
						required: true,
						email: true
					}

				},
			
      	messages: { 
			    username: {
				    required: '. Nama harus di isi'
			    },
			    password: {
				    required : '. Password harus di isi',
				    minlength: '. Password minimal 5 karakter'
			    },
				nama_lengkap:{
					required:'. Nama lengkap harus di isi'
				},
				jabatan:{
					required:'. Jabatan harus di isi'
				},
				departemen:{
					required:'. departement harus di isi'
				},
			    email: {
				    required: '. Email harus di isi',
				    email   : '. Email harus valid'
			    },
				mobile: {
				    required: '. mobile harus di isi',
			    },
				phone: {
				    required : '. phone harus di isi',
				    minlength: '. fax harus 6 karakter'
			    },
				fax: {
				    required : '. fax harus di isi',
				    minlength: '. fax harus 6 karakter'
			    }

			   },
         
         success: function(label) {
            label.text('OK!').addClass('valid');
         }
			});
		});
	</script>
    
    <script type="text/javascript">
		$(document).ready(function() {
			$("#form2").validate({
				rules: {
				  title: "required", 
				 
				  nomor:"required",
				  version:"required",
				  history:"required",
				  type:"required", 	

				},
			
      	messages: { 
			    title: {
				    required: '. Judul harus di isi'
			    },
			    
				nomor:{
					required:'. No harus di isi'
				},
				version:{
					required:'. Versi harus di isi'
				},
				history:{
					required:'. history harus di isi'
				},
			    type: {
				    required: '. Type harus di isi'
			    }

			   },
         
         success: function(label) {
            label.text('OK!').addClass('valid');
         }
			});
		});
	</script>
	
<script type="text/javascript">
function apply()
{
  document.form1.sub.disabled=true;
  if(document.form1.chk.checked==true)
  {
    document.form1.sub.disabled=false;
  }
  if(document.form1.chk.checked==false)
  {
    document.form1.sub.enabled=false;
  }
}
</script> 
      
      <link href="<?php echo base_url();?>css/style.css" rel="stylesheet" type="text/css" />
<script language="javascript">
// fungsi awal yang dijalankan dengan status id apabila block akan di tampilkan submenunya apabila none akan disembunyikan submenunya
function _treeawal(){
	buka = document.getElementById('keuangan').style.display="block";
	buka = document.getElementById('user').style.display="block";
}

//fungsi aksi tree apabila sebuah menu diklik akan menampilkan atau menyembunyikan submenunya
function _treeaksi(nama_id){
var buka = document.getElementById(nama_id).style.display;

	if (buka == "block") {
		buka = document.getElementById(nama_id).style.display="none";
	} 
	
	else 
	{
		buka = document.getElementById(nama_id).style.display="block";
	}

}


</script>



     <link rel="stylesheet" href="<?php echo base_url();?>css/val.css" type="text/css" />
 <link rel="stylesheet" href="<?php echo base_url();?>css/overlay-apple.css" media="screen" type="text/css" />




      

</head>
<body onLoad="_treeawal()">
	<?php echo $this->load->view('header');?>
    <?php echo $this->load->view('sidebar');?>
	<?php echo $this->load->view('content');?>
	<?php echo $this->load->view($isi);?>
	<?php echo $this->load->view('footer');?>
