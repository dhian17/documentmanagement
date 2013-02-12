<legend align="center">EDIT YOUR DOCUMENT</legend>
<div class="well">
<table class="table table-striped" >


<?php echo form_open_multipart('posts/edit'); ?>

<?php echo form_hidden('id', $post['id']); ?>


<tr>
<td width="125"> Judul File</td>
<td align="justify" width="32">:</td>
<?php echo form_input(array('name' => 'title', 'value' => set_value('title', isset($post['title']) ? $post['title'] : ''))); ?>&nbsp;<font color="#FF0000"><i><?php echo form_error('title');?></i></font></tr>


<tr>
    <td width="125">Nomor Document</td>
    <td width="32">:</td>
<?php echo form_input(array('name' => 'nomor', 'value' => set_value('nomor', isset($post['nomor']) ? $post['nomor'] : ''))); ?><br/>&nbsp; <font color="#FF0000"><i><?php echo form_error('nomor');?></i></font></tr>

<tr>
    <td width="125">Version</td>
    <td width="32">:</td>
    <td><label class="checkbox">
        <input type="checkbox" name="version" option value="1.1">1.1<br/>
        <input type="checkbox" name="version" option value="2.0">2.0&nbsp; <font color="#FF0000"><i><?php echo form_error('version');?></i></font><br/>
        
      </label></td></tr>

<tr>
    <td width="125">History</td>
    <td width="32">:</td><?php echo form_input(array('name' => 'history', 'value' => set_value('history', isset($post['history']) ? $post['history'] : ''))); ?>&nbsp; <font color="#FF0000"><i><?php echo form_error('history');?></i></font></tr>

<tr>
    <td width="125">Type Document</td>
    <td width="32">:</td>
    <td><select name="type">
    <option value="">--Type--</option>
    <option value="form">Form</option>
    <option value="intruksi kerja">Interuksi Kerja</option>
    <option value="prosedur">Prosedur</option></select>&nbsp; <font color="#FF0000"><i><?php echo form_error('type');?></i></font></td></tr>

<tr>
	<td width="125" valign="top">Current Document</td>
    <td width="32" valign="top">:</td>
<?php echo $post['image']; ?></tr>   
    
<tr>
	<td width="125" valign="top">File</td>
    <td width="32" valign="top">:</td>
<?php echo form_upload('image'); ?></tr>


<?php echo form_submit('submit', 'Save'); ?>

<?php echo form_close(); ?>

</table>
</div>