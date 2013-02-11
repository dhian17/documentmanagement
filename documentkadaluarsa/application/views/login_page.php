<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>.:: TOTALINDO ::.</title>


<link href='../../images/images_login/totalindologo.png' rel='shortcut icon' type='image/vnd.microsoft.icon'/>
<script language="javascript" type="text/javascript" src=<?php echo '"' . base_url() . 'resources/niceform/niceforms.js'; ?>"></script>
<link rel="stylesheet" type="text/css" media="all" href=<?php echo '"' . base_url() . 'resources/niceform/niceforms-default.css'; ?>" />
<link rel="stylesheet" type="text/css" media="all" href=<?php echo '"' . base_url() . 'resources/css/style.css'; ?>" /> 

</head>
<body>
<div class="login1">
<img src="<?php echo base_url().'images/images_login/img_header_tunasmedia.png'; ?>" align="absmiddle" /></div>
<div class="login" >
		<?php echo "<form action='akun/login' method='post' class='niceform'>";
			echo "<fieldset>
				<table >";
			$username = array(
						'name' => 'username',
						'size' => '33'
				);
			$password = array(
					'name' => 'password',
					'size' => '33'
			);
        	echo "<tr>
        	<td ><label for='username'>Username:</label></td>
            <td>".form_input($username)."
            </td>
        </tr>
        <tr>
        	<td><label for='password'>Password:</label></td>
            <td>".form_password($password)."</td>
        </tr>
			<tr height='20px;'>
        	<td colspan='2'></td>
        	</tr> 
        <tr>
			<td colspan='2' align='center'>".form_submit('','Login')."&nbsp; &nbsp;
            ".form_reset('','Clear')."</td>
            <td colspan='2'>
            </td>
        </tr>";
        ?>
       </table>
 </fieldset>
 		<?php echo form_close();?>

</div>
</body>
</html>