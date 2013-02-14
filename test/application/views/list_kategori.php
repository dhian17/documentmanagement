
    <link href="css/bootstrap.css" rel="stylesheet" media="screen">
   
<link href="css/bootstrap-responsive.css" rel="stylesheet" media="screen">
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
	  </script><style>
#content{
margin-top : -550px;	
}
th {
	                font: bold 11px "Trebuchet MS", Verdana, Arial, Helvetica,sans-serif;
	                color: #6D929B;
	                border-right: 1px solid #C1DAD7;
	                border-bottom: 1px solid #C1DAD7;
	                border-top: 1px solid #C1DAD7;
	                letter-spacing: 2px;
	                text-transform: uppercase;
	                text-align: center;
	                padding: 6px 6px 6px 12px;
	                background: #CAE8EA;
	            }
	            td {
	                border-right: 1px solid #C1DAD7;
	                border-bottom: 1px solid #C1DAD7;
	                background: #fff;
	                padding: 6px 6px 6px 12px;
	                color: #6D929B;
	            }
</style>

<div id="content">

<?php $i=1;?>
<h2><font color="#FFFFFF" face="Cheri, Helvetica, sans-serif" size="6">List Category</font></h2><br />
<table width="403" border="3" cellspacing="2" cellpadding="1" align="left">
<tr><center>
<th >No</th>
<th  >Kategori</th>
<th>Aksi</th></center>
</tr>
<?php foreach($kategori->result() as $kat):?>
<tr>
<td align="center"><?php echo $i;?></td>
<td align="center"><?php echo $kat->kat_doc;?></td>
<td align="center"><?php echo anchor('kategori/edit/'.$kat->id,'edit')."|".anchor('kategori/delete/'.$kat->id,'delete',array
('onClick' => "return confirm('apakah anda yakin ')"));?></td>
</tr>
<?php $i++; endforeach;?>

</table>
</div>