<legend align="center">ADD YOUR DOCUMENT</legend>
<div class="form-div">
<form name="form2" id="form2" method="post" enctype="multipart/form-data" action="<?php echo base_url(); ?>posts/add">
<table class="table table-striped" >

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
<td><?php echo form_dropdown('categories_id',$categories);?><br />
 </td></tr>
 
 
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


</table>
</form>
</div>


<ul>
<li class="li-class">Nama file yang akan di-upload harap tidak mengandung karakter seperti ."`~* dan sebagainya.</li>
</ul>


