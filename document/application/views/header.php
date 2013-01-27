<style>
#header {
	width: 1410px;
	height: 100px;
	margin-left:0px;
	/*margin: 0 auto;*/
	/*background: url(../images/img03.jpg) no-repeat left top;*/
	background: url(http://weebtutorials.com/wp-content/uploads/2012/11/a.png);
/* Menu */

#menu {
	float: left;
	width: 540px;
	height: 45px;
}

#menu ul {
	margin: 0;
	padding: 0px 0px 0px 5px;
	list-style: none;
	line-height: normal;
}

#menu li {
	display: block;
	float: left;
}

#menu a {
	display: block;
	float: left;
	height: 20px;
	margin-right: 3px;
	padding: 14px 25px 15px 25px;
	/*background: url(../images/img09.jpg) no-repeat left 18px;*/
	text-decoration: none;
	text-transform: capitalize;
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
	color:#F0C;
}

#menu a:hover { text-decoration: underline; }

#menu .current_page_item a {
	height: 20px;
	color: #FF0000;
}

#menu .first {
	background: none;
}

</style>

	<hr />
	<!-- end #logo -->
	<div id="header"><br/>
    <center><font color="#FFFFFF" face="Digital-7" size="9">Document Management System</font></center>
 
		<div id="menu">
        <?php echo anchor('akun/logout','Klik untuk logout');?>
			<ul>
				
               
				
			</ul>
		</div>
		<!-- end #menu -->
		
	</div>
	<!-- end #header -->
	<!-- end #header-wrapper -->