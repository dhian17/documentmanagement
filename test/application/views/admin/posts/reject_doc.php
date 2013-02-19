<legend align="center">EDIT YOUR DOCUMENT</legend>
<div class="form-div">
<form name="form2" id="form2" method="post" enctype="multipart/form-data" action="<?php echo base_url(); ?>posts/reject">
<table class="table table-striped" >

<?php echo form_hidden('id', $post['id']); ?>



           
           


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