


<legend align="center">REJECT DOCUMENT</legend>
<div class="well">
<table class="table table-striped" >

<?php echo form_open_multipart('posts/reject'); ?>
<?php echo form_hidden('id', $post['id']); ?>

<tr>
<td width="125" valign="top">Coment</td>
<td width="5" valign="top">:</td> 
<td><?php echo form_textarea(array('name' => 'history', 'value' => set_value('history', isset($post['history']) ? $post['history'] : ''))); ?><br/></td></tr>
<tr>
<td width="125" valign="top"></td>
<td width="5" valign="top"></td>
<td><button type="submit" class="btn btn-success" rel="tooltip" title="first tooltip" name="submit" id="submit" >Save</button></td>
    </tr>


<?php echo form_close(); ?>

</table>
</div>