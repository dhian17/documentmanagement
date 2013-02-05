<!DOCTYPE html>
<html lang="en">
<head>

	<link href="<?php echo base_url();?>css/bootstrap.css" rel="stylesheet" media="screen"> 
	<link href="<?php echo base_url();?>css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
	<script src="<?php echo base_url();?>js/jquery.js"></script>
 	<script src="<?php echo base_url();?>js/site.js"></script>
  	<script src="<?php echo base_url();?>js/ajaxfileupload.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>js/bootstrap.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>js/bootstrap.min.js"></script>
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
    
</head>
<body>
<br/>
	 
     <div class="navbar">
  <div class="navbar-inner">
    <div class="container">
 
      <!-- .btn-navbar is used as the toggle for collapsed navbar content -->
      <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>
 
      <!-- Be sure to leave the brand out there if you want it shown -->
      <a class="brand" href="#">TOTALINDO</a>
 
      <!-- Everything you want hidden at 940px or less, place within here -->
      <div class="nav-collapse collapse">
      
      
      <ul class="nav">
  <li class="active">
    <a href="#">Home</a>
  </li>
  <li><a href="<?php echo base_url('user2/register');?>">Add User </a></li>
  <li><a href="<?php echo base_url('user2/view');?>">View User</a></li>
  <li><a href="<?php echo base_url('akun/logout');?>">Log Out</a></li>
  
</ul>
      
      
      
        <!-- .nav, .navbar-search, .navbar-form, etc -->
        
        
        
        <ul class="nav nav-tabs">
  <li class="dropdown">
    <a class="dropdown-toggle"
       data-toggle="dropdown"
       href="#">
        Dropdown
        <b class="caret"></b>
      </a>
    <ul class="dropdown-menu">
      <!-- links -->
      
      <div class="dropdown">
  <!-- Link or button to toggle dropdown -->
  <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
    <li><a tabindex="-1" href="#">Action</a></li>
    <li><a tabindex="-1" href="#">Another action</a></li>
    <li><a tabindex="-1" href="#">Something else here</a></li>
    <li class="divider"></li>
    <li><a tabindex="-1" href="#">Separated link</a></li>
  </ul>
</div>
      
      
    </ul>
  </li>
</ul>



      </div>
 
    </div>
  </div>
</div>



    
		
 
        		
</body>

</body>