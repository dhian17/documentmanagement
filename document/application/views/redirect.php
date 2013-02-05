<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
       
        <meta HTTP-EQUIV="REFRESH" content="5; url=<?php echo base_url().$redirect ?>">
       
        
    </head>
    <link href="<?php echo base_url();?>css/bootstrap.css" rel="stylesheet" media="screen">
    <link href="<?php echo base_url();?>css/bootstrap-progressbar.css" rel="stylesheet" media="screen">
   
<link href="<?php echo base_url();?>css/bootstrap-responsive.css" rel="stylesheet" media="screen">
<script src="<?php echo base_url();?>js/jquery.js"></script>
 	<script src="<?php echo base_url();?>js/site.js"></script>
  	<script src="<?php echo base_url();?>js/ajaxfileupload.js"></script>
	<script src="<?php echo base_url();?>js/bootstrap.js"></script>
    <script src="<?php echo base_url();?>js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>js/bootstrap-transition.js"></script>
    <script src="<?php echo base_url();?>js/bootstrap-alert.js"></script>
    <script src="<?php echo base_url();?>js/bootstrap-modal.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>js/bootstrap-dropdown.js">
		$(function(){
        	$('.dropdown-toggle').dropdown();
   		});
   	</script>
    <script src="<?php echo base_url();?>js/bootstrap-scrollspy.js"></script>
    <script src="<?php echo base_url();?>js/bootstrap-tab.js"></script>
    <script src="<?php echo base_url();?>js/bootstrap-tooltip.js"></script>
    <script src="<?php echo base_url();?>js/bootstrap-popover.js"></script>
        <script src="<?php echo base_url();?>js/bootstrap-progressbar.js"></script>
<script type="text/javascript">
 $('#progressbar').on("positionChanged", function (e) {
    console.log(e.position);
    console.log(e.percent);
});
</script>
    <body>
<div class="control-group center">


        <br/><br/><br/><br/><br/><br/>
            <h1>Selamat datang </h1>
    
<div class="progress progress-striped active">
  <div class="bar" style="width: 100%;"></div>

           
        </div>
</div>
    </body>
</html>