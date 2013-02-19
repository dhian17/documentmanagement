<legend align="center">ADD YOUR DOCUMENT</legend>
<div class="well">
<table class="table table-striped" >

	<?php echo form_open_multipart('posts/add');?>

	<tr>
  	<td width="125"> Judul File</td>
    <td align="justify" width="32">:</td>
    <td width="301"><input type="text" name="title" class="textfield" size="50">&nbsp;<font color="#FF0000"><i><?php echo form_error('title');?></i></font></td>
    
    </tr>

	<tr>
    <td width="125">Nomor Document</td>
    <td width="32">:</td>
    <td><input type="text" name="nomor" class="textfield" size="50">&nbsp; <font color="#FF0000"><i><?php echo form_error('nomor');?></i></font></td>
   
    </tr>

	<tr>
    <td width="125">Version</td>
    <td width="32">:</td>
    <td><select name="version">
    <option value="">--Version Document--</option>
    <option value="1.0">1.0</option>
    <option value="1.1">1.1</option>
    <option value="2.0">2.0</option></select>&nbsp; <font color="#FF0000"><i><?php echo form_error('version');?></i></font>
    </td>
    </tr>
    
    <tr>
<td width="125">Kategori</td>
    <td width="32">:</td>
<td><select name="id_kategori">
 <?php $kat=$this->mkategori->getkategori();
foreach($kat->result() as $id_kategori):?>
<option value="<?php echo $id_kategori->id;?>" ><?php echo $id_kategori->kat_doc?></option>
<?php endforeach;?>
</select> </td></tr>
	<tr>
    <td width="125">Type Document</td>
    <td width="32">:</td>
    <td><select name="type">
    <option value="">--Type--</option>
    <option value="form">Form</option>
    <option value="instruksi kerja">Instruksi Kerja</option>
    <option value="prosedur">Prosedur</option></select>&nbsp; <font color="#FF0000"><i><?php echo form_error('type');?></i></font>
    </td>
    </tr>

	<tr>
	<td width="125" valign="top">File</td>
    <td width="32" valign="top">:</td>
    <td><input type="file" name="image" class="textfield">&nbsp; <font color="#FF0000"><i><?php echo form_error('image');?></i></font></td>
    </tr>
       
       <?php

echo form_hidden('status', set_value('status', '0'));
?>
       
	

	<tr>
    <td width="125">History</td>
    <td width="32">:</td>
    <td><textarea rows="3" input type="text" name="history" class="textfield" size="50"></textarea>&nbsp; <font color="#FF0000"><i><?php echo form_error('history');?></i></font></td>
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


