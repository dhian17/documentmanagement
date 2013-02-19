<table class="table">

  <thead>
    <tr>
      <th width="125">Title</th>
      <th width="305">File Name</th>
      <th width="125">Date Modified</th>
      <th width="50">download</th>
    </tr>
  </thead>
  <?php echo form_open('posts/add')?>
<?php foreach($posts->result() as $row):?>


<table class="table table-striped">
<tr>


<td width="125"><strong><?php echo $row->title;?></strong></td>
<td width="305"><?php echo $row->image;?></td>
<td width="125"><?php echo $row->created;?></td>
<td width="50"><?php echo "<b><a href='".base_url()."./public/media/posts/".$row->image."'>[ Download ]</a></b>"?></td>




<?php endforeach;?>
<?php echo form_close();?>
</tr>
</table></table>
