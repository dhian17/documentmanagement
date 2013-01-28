<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>.::TOTALINDO::.</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<!--<link href="css/style.css" rel="stylesheet" type="text/css" media="screen" />-->
<?php
	/* versi 1.7.2 masih ada bug di link_tag
	$this->load->helper('html');
	echo link_tag('css/style.css');
	*/
?>
<style type="text/css">@import url("<?php echo base_url() . 'css/style.css'; ?>");</style>

</head>
<body>
<div id="wrapper">

	
	<!--untuk header-->
	 <?php echo $this->load->view('header');?>
	

    <?php echo $this->load->view('sidebar1');?>
	
	<div id="page">
	<div id="page-bgtop">
		
		<!--untuk tengah ini yang akan berubah-->
		<?php echo $this->load->view($isi);?>
		
		<div style="clear: both;">&nbsp;</div>
        
	</div>
	</div>
	<!-- end #page -->
	
	
	
</div>
</body>
</html>
