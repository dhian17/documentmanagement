</br>

<div class="navbar">
<div class="navbar-inner">
<div class="container">

	<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
	</a>
 
	<a class="brand" href="#">TOTALINDO</a>

	<div class="nav-collapse collapse">
		<ul class="nav">
			<li class="active">
				<a href="<?php echo base_url('home1');?>">Home</a>
			</li>
			<li><a href="<?php echo base_url('posts/add');?>">Add Document </a></li>
			<li><a href="<?php echo base_url('posts/index');?>">All Document </a></li>
			
		</ul>
 
        <ul  class="nav nav-tabs">
			<li class="dropdown" ><a class="dropdown-toggle"  data-toggle="dropdown" href="#">User <?php echo $this->session->userdata('nama_lengkap');?><b class="caret"></b></a>
  				<ul class="dropdown-menu">
					<li><a href="#"><i class="icon-user icon-white"></i> Profil</a></li>
					<li><a href="#"><i class="icon-wrench icon-white"></i>     Setting</a></li>
    				<li class="divider"></li>
      				<li><a href="<?php echo base_url('akun/logout');?>"><i class="icon-off icon-white"></i>     Log Out</a></li>
  				</ul>
			</li>
		</ul>

	</div>
 
</div>
</div>
</div>
