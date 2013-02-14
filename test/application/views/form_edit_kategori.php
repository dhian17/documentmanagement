     <link href="<?php echo base_url();?>css/bootstrap.css" rel="stylesheet" media="screen"/> 
   <script src="http://code.jquery.com/jquery-latest.js"></script>
   <link href="<?php echo base_url();?>css/bootstrap-responsive.css"  rel="stylesheet" media="screen"/> 
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
			$("#registerHere").validate({
				rules:{
					username:"required",
					email:{
							required:true,
							email: true
						},
					pwd:{
						required:true,
						minlength: 6
					},
					cpwd:{
						required:true,
						equalTo: "#password"
					},
					
				},
				messages:{
					username:"Enter your first and last name",
					email:{
						required:"Enter your email address",
						email:"Enter valid email address"
					},
					password:{
						required:"Enter your password",
						minlength:"Password must be minimum 6 characters"
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
<style>
#content{
margin-top : -550px;	
}
</style>

<div id="content">

<h2><font color="#FFFFFF" face="Cheri, Helvetica, sans-serif" size="7">Edit Kategori</font></h2>
<?php foreach($kategori->result() as $kat){
//$judul=$kat->kat_doc;
//$id=$kat->id;
}?>
<?php echo form_open('kategori/edit_submit')?>
<table width="200" border="0" cellspacing="2" cellpadding="1">
<tr>
<td><input name="category" size="40" type="text" value="<?php echo $kat->kat_doc;?>"/></td>
</tr>
<?php echo form_hidden('id',$kat->id);?>
<tr><td><input type="submit" value="Update"/></td>
</tr>
</table>
<?php echo form_close();?>

</div>