<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>.:: TOTALINDO ::.</title>


<link href='../../images/images_login/totalindologo.png' rel='shortcut icon' type='image/vnd.microsoft.icon'/>


<script src="http://code.jquery.com/jquery-latest.js"></script>
<script src="js/bootstrap.min.js"></script>
<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
<link href="css/bootstrap.css" rel="stylesheet" media="screen">


</head>
<body><br /><br/><br/><br/><br/><div class="control-group center">
<div class=""><img src="<?php echo base_url().'images/images_login/img_header_tunasmedia.png'; ?>"  /><br/>

		<?php echo "<form action='akun/login' method='post' class=''>";
			echo "<fieldset>
				<table >";
			$username = array(
						'name' => 'username',
						'size' => '33'
				);
			$password = array(
					'name' => 'password',
					'size' => '33'
			);?>

        <div class="well">
        
       <div class="container">
    
        <form class="form-horizontal" action="akun.php" method="post">
          <fieldset>
              <legend>Sign In:</legend>
              
  <div class="controls">
        	<?php echo "<label class='l'  for='username'>Username </label>".form_input($username).""?>
            
      
    </div><div class="controls">
    <?php echo"<label class='l' for='password'>Password </label>".form_password($password).""?>
    
    
    
      </div>
       <label class="checkbox">
        <input type="checkbox"> Remember me
      </label>
       <div class="l">
         
         <button type="submit" class="btn" >Sign in</button>
 </div>
          </fieldset> 
            </form></div></div>
</div></table>
 </div></div>

       </div></div>
     
<?php echo form_close();?></div></div></div>
</body>
</html>