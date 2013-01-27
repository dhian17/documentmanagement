<style>
nav {
	/* Repeating background image */
	background: url(http://weebtutorials.com/wp-content/uploads/2012/11/a.png);
	width:350px;
	margin:20px;
}

nav ul {
	/* Removes bullet points */
	list-style:none;
	margin:0;
	padding:0;
	
}
nav ul li {
	/* Any child positioned absolutely will be positioned relative to this */
	position:relative;
}
nav a {
	color:#e8e8e8;
	padding:12px 0px;
	/* Fill all available horizontal space */
	display:block;
	/* Remove underline */
	text-decoration:none;
	/* 
	New CSS3 animations:
	apply transition to background property, taking 1s to change it 
	*/
	transition:background 1s;
	-moz-transition:background 1s;
	-webkit-transition:background 1s;
	-o-transition:background 1s;
	font-family:tahoma;
	font-size:13px;
	text-transform:uppercase;
	padding-left:20px;
}
nav a:hover {
	/* 
	RGBA background for transparancy: 
	last number(0.05) is the transparency 
	*/
	background: RGBA(255,255,255,0.05);
	color:#fff;
	
}
nav a:hover span {
	background: #7d2c41;
	transform:rotate(90deg);
	-moz-transform:rotate(90deg);
	-webkit-transform:rotate(90deg);
}
nav ul li:hover ul {
	display:block;
}
nav ul ul {
	position:absolute;
	left:350px;
	top:0;
	border-top:1px solid #e9e9e9;
	display:none;
}
nav ul ul li {
	width:200px;
	background:#f1f1f1;
	border:1px solid #e9e9e9;
	border-top:0;
}
nav ul ul li a {
	color:#a8a8a8;
	font-size:12px;
	text-transform:none;
}
nav ul ul li a:hover {
	color:#FF4500;
}
nav span {
	width:12px;
	height:12px;
	background:#fff;
	display:inline-block;
	float:left;
	margin-top:3px;
	margin-right:20px;
	position:relative;
	transition:all 0.5s;
	-moz-transition:all 0.5s;
	-o-transition:all 0.5s;
	-webkit-transition:all 0.5s;
}
nav span:before {
	content:"";
	width:12px;
	height:2px;
	background:#3a3b3b;
	position:absolute;
	left:0px;
	top:5px;
}
nav span:after {
	content:"";
	width:2px;
	height:12px;
	background:#3a3b3b;
	position:absolute;
	left:5px;
	position:top;
}

</style>
<body>
<nav>
	<ul>
		
		<li> <a href="#"><span></span> <img src="<?php echo base_url().'images/gambar1.png'; ?>" align="absmiddle" /><font color="#FFFFFF" face="Chintzy CPU BRK" size="6" align="middle">USER</font></a>
			<ul>
				<li> <a href="#">Add User </a></li>
				<li> <a href="#">View User</a></li>
				
			</ul>
		
</nav>

<nav>
	<ul>
		
		<li> <a href="#"><span></span> <img src="<?php echo base_url().'images/gambar3.png'; ?>" align="absmiddle" /><font color="#FFFFFF"  face="Chintzy CPU BRK" size="6" align="middle">DOCUMENT</font></a>
			<ul>
				<li> <a href="http://localhost/document/index.php/proses">Add Document</a></li>
				<li> <a href="#">View Document</a></li>
				
			</ul>
		
</nav>

<nav>
	<ul>
		
		<li> <a href="http://localhost/blog/index.php/proses/uploud"><span></span> <img src="<?php echo base_url().'images/gambar4.png'; ?>" align="absmiddle" /><font color="#FFFFFF" face="Chintzy CPU BRK" size="6" align="middle">CATEGORY</font></a>
			<ul>
				<li> <a href="#">Add Category</a></li>
				<li> <a href="#">View Category</a></li>
				
			</ul>
		
</nav>
</body>