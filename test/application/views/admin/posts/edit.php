<legend align="center">EDIT YOUR DOCUMENT</legend>
<div class="form-div">
<form name="form2" id="form2" method="post" enctype="multipart/form-data" action="<?php echo base_url(); ?>posts/edit">
<table class="table table-striped" >

<?php echo form_hidden('id', $post['id']); ?>


<tr>
<td width="125"> Judul File</td>
<td align="justify" width="5">:</td>
<td width="300"><?php echo form_input(array('name' => 'title', 'value' => set_value('title', isset($post['title']) ? $post['title'] : ''))); ?>&nbsp;<font color="#FF0000"><i><?php echo form_error('title');?></i></font></td></tr>


<tr>
    <td width="125">Nomor Document</td>
    <td width="5">:</td>
<td width="300"><?php echo form_input(array('name' => 'nomor', 'value' => set_value('nomor', isset($post['nomor']) ? $post['nomor'] : ''))); ?><br/>&nbsp; <font color="#FF0000"><i><?php echo form_error('nomor');?></i></font></td></tr>

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
                echo form_dropdown('version', $options,$post['version']);
				echo form_error('version');
            ?>&nbsp; <font color="#FF0000"><i><?php echo form_error('version');?></i></font></td></tr>
            
            <tr>
<td width="125" valign="top">Category</td>
<td width="5" valign="top">:</td>
<td><?php echo form_dropdown('categories_id', $categories,$post['categories_id']); ?>
</td>
</tr>


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
                echo form_dropdown('type', $options,$post['type']);
				echo form_error('type');
            ?>&nbsp; <font color="#FF0000"><i><?php echo form_error('type');?></i></font></td></tr>
            
            
           

<tr>
	<td width="125" valign="top">Current Document</td>
    <td width="5" valign="top">:</td>
<td width="300"><?php echo $post['image']; ?></td></tr>   
    
<tr>
	<td width="125" valign="top">File</td>
    <td width="5" valign="top">:</td>
<td width="300"><?php echo form_upload('image'); ?></td></tr>

<tr>
<td width="125" valign="top">Coment</td>
<td width="5" valign="top">:</td> 
<td><?php echo form_textarea(array('name' => 'history', 'value' => set_value('history', isset($post['history']) ? $post['history'] : ''))); ?><br/></td></tr>



<?php

echo form_hidden('status', set_value('status', '0'));
?>


<tr>
<td width="125" valign="top"></td>
<td width="5" valign="top"></td>
<td><button type="submit" class="btn btn-success" rel="tooltip" title="first tooltip" name="submit" id="submit" >Save</button></td>
    </tr>


</table>
</form>
</div>