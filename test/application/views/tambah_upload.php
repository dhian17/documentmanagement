<div class="container-fluid">
  <div class="row-fluid">
<div class="span10">
<legend align="center">ADD YOUR DOCUMENT</legend>
<div class="well">
<table class="table table-striped" >

	<?php echo form_open_multipart('doc/simpanupload');?>

	<tr>
  	<td width="125"> Judul File</td>
    <td align="justify" width="32">:</td>
    <td width="301"><input type="text" name="judul" class="textfield" size="50"></td>
    </tr>

	<tr>
    <td width="125">Nomor Document</td>
    <td width="32">:</td>
    <td><input type="text" name="nomor_document" class="textfield" size="50"></td>
    </tr>

	<tr>
    <td width="125">Version</td>
    <td width="32">:</td>
    <td><label class="checkbox">
        <input type="checkbox" name="version_document" option value="1.1">1.1<br/>
        <input type="checkbox" name="version_document" option value="2.0">2.0
      </label></td>
    </tr>

	<tr>
    <td width="125">History</td>
    <td width="32">:</td>
    <td><input type="text" name="history_document" class="textfield" size="50"></td>
    </tr>

	<tr>
    <td width="125">Type Document</td>
    <td width="32">:</td>
    <td><select name="type_document">
    <option value="form">Form</option>
    <option value="intruksi kerja">Interuksi Kerja</option>
    <option value="prosedur">Prosedur</option></select>
    </td>
    </tr>

	<tr>
    <td width="125">Kategori File / Download</td>
    <td width="32">:</td>
    <td>
	<select name="kategori" class="textfield-option">
	<?php foreach($kat->result_array() as $k)
	{ 
	echo "<option value='".$k["id_kategori_download"]."'>".$k["nama_kategori_download"]."</option>";
	}
	?>
	</select>
	</td>
	</tr>

	<tr>
	<td width="125" valign="top">File</td>
    <td width="32" valign="top">:</td>
    <td><input type="file" name="userfile" class="textfield"></td>
    </tr>

	<tr>
    <td width="125" valign="top"></td>
    <td width="32" valign="top"></td>
    <td><button type="submit" class="btn btn-success" rel="tooltip" title="first tooltip" name="submit" id="submit" >Upload</button></td>
    </tr>

	<?php echo form_close();?>

</table>
</div>


<ul>
<li class="li-class">Nama file yang akan di-upload harap tidak mengandung karakter seperti ."`~* dan sebagainya.</li>
</ul>

</div></div>
</div>