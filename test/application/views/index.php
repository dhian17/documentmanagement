<table class="table">

  <thead>
    <tr>
      <th width="100">Title</th>
      <th width="200">File Name</th>
      <th width="125">Date Modified</th>
      <th width="50">Status</th>
      <th width="10">Aksi</th>
      <th width="10">Aksi</th>
      <th width="50">download</th>
    </tr>
  </thead>
<?php echo form_open('posts/add')?>
<?php foreach($posts as $post):?>
<table class="table table-striped">
<tr>




<td   width="100"><strong><?php echo $post ['title'];?></strong></td> 
<td   width="200"><?php echo $post ['image'];?></td>
<td   width="125"><?php echo $post ['created'];?></td>
<td width="50"></td>

<td   width="10"><?php echo anchor('posts/edit/'.$post['id'],'<i class="  icon-pencil"></i>');?></td>

<td   width="10"><?php echo anchor('posts/delete/'.$post['id'],'<i class=" icon-trash"></i>',array
('onClick' => "return confirm('Are you sure you want to delete this file? ')"));?></td>
<td width="50"><?php echo "<b><a href='".base_url()."./public/media/posts/".$post['image']."'>Download</a></b>"?></td>





<?php  endforeach;?>

</tr>
</table></table>
<?php echo form_close();?>
