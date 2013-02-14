<legend align="center">EDIT YOUR DOCUMENT</legend>
<div class="well">
<table class="table table-striped" >


<?php echo form_open_multipart('posts/edit'); ?>
<?php echo form_hidden('id', $posts['id']); ?>


<tr>
<td width="125"> Judul File</td>
<td align="justify" width="5">:</td>
<td width="300"><?php echo form_input(array('name' => 'title', 'value' => set_value('title', isset($posts['title']) ? $posts['title'] : ''))); ?>&nbsp;<font color="#FF0000"><i><?php echo form_error('title');?></i></font></td></tr>


<tr>
    <td width="125">Nomor Document</td>
    <td width="5">:</td>
<td width="300"><?php echo form_input(array('name' => 'nomor', 'value' => set_value('nomor', isset($posts['nomor']) ? $posts['nomor'] : ''))); ?><br/>&nbsp; <font color="#FF0000"><i><?php echo form_error('nomor');?></i></font></td></tr>

<tr>
    <td width="125">Version</td>
    <td width="5">:</td>
    <td><?php
                $options = array(
                    '' => '- select Version -',
                    '1.0' => '1.0',
                    '1.1' => '1.1',	
                    '2.0'  => '2.0'
                    
                );
                echo form_dropdown('version', $options,$posts['version']);
				echo form_error('version');
            ?>&nbsp; <font color="#FF0000"><i><?php echo form_error('version');?></i></font></td></tr>

<tr>
    <td width="125">History</td>
    <td width="5">:</td>
	<td width="300"><?php echo form_input(array('name' => 'history', 'value' => set_value('history', isset($posts['history']) ? $posts['history'] : ''))); ?>&nbsp; <font color="#FF0000"><i><?php echo form_error('history');?></i></font></td></tr>

<tr>
    <td width="125">Type</td>
    <td width="5">:</td>
    <td><?php
                $options = array(
                    '' => '- select type -',
                    'form' => 'Form',
                    'instruksi kerja' => 'Instruksi Kerja',	
                    'prosedur'  => 'Prosedur'
                   
                );
                echo form_dropdown('type', $options,$posts['type']);
				echo form_error('type');
            ?>&nbsp; <font color="#FF0000"><i><?php echo form_error('type');?></i></font></td></tr>

<tr>
	<td width="125" valign="top">Current Document</td>
    <td width="5" valign="top">:</td>
<td width="300"><?php echo $posts['image']; ?></td></tr>   
    
<tr>
	<td width="125" valign="top">File</td>
    <td width="5" valign="top">:</td>
<td width="300"><?php echo form_upload('image'); ?></td></tr>

<tr>
<td width="125" valign="top">Category</td>
<td width="5" valign="top">:</td>
<td><select name="kategori">
<?php
$kat=$this->mkategori->getkategori();
foreach($kat->result() as $kategori):
if($kategori_id==$kategori->id){
$select="selected='elected'";
}
else {
$select="";
}
?>
<option value="<?php echo $kategori->id;?>" <?php echo $select;?>><?php echo $kategori->kat_doc?></option>
<?php endforeach;?>
</select>
</td>
</tr>

<tr>
    <td width="125" valign="top"></td>
    <td width="5" valign="top"></td>
    <td><button type="submit" class="btn btn-success" rel="tooltip" title="first tooltip" name="submit" id="submit" >Save</button></td>
    </tr>


<?php echo form_close(); ?>

</table>
</div>