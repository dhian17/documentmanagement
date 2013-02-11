<style>
#body{
	margin-left:100px;
	margin-top:-550px;
}

</style>

<!doctype html>
<html>
<head>
<div id="body">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
   <script src="<?php echo base_url()?>js/site.js"></script>
   <script src="<?php echo base_url()?>js/ajaxfileupload.js"></script>
   <link href="<?php echo base_url()?>css/style.css" rel="stylesheet" />
</head>
<body>

   

   <?php echo form_open('add_doc/index');?>
<table width="200" border="0" cellspacing="2" cellpadding="1" align="center">

<tr>
<td>No Document<br><input name="no_doc" type="text" size="50"/></td>
</tr>

<tr>
<td>Document Title<br><input name="judul_doc" type="text" size="50"/></td>
</tr>

<tr>
<td>Document Type<br><input name="jenis_doc" type="text" size="50"/></td>
</tr>

<tr>
<td>Category<br><input name="kat_doc" type="text" size="50"/></td>
</tr>

<tr>
<td>Version<br><input name="versi_doc" type="text" size="50"/></td>
</tr>

<tr>
<td>Date<br><input name="tanggal_doc" type="text" size="50"/></td>
</tr>

<tr>
<td>Author<br><input name="author" type="text" size="50"/></td>
</tr>

<tr>
<td>History<br><input name="sejarah_revisi" type="text" size="50"/></td>
</tr>

<tr>
<td><label for="userfile">File</label><br>
      <input type="file" name="userfile" id="userfile" size="20" /></td>
</tr>

<tr>
<td><input type="submit" value="Post">|<input type="reset" value="Reset"></td>
</tr>
</table>
<?php echo form_close();?>

</div>
</body>
</html>


