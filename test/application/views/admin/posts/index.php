
<h2>&nbsp;</h2><br />
<?php echo form_open('posts/add')?>
<?php foreach($posts as $post):?>
<tr>


<div class="control-group center"> 

<div class="well well-large" align="center">

<strong><td ><?php echo $post ['title'];?></td></strong><br/>
<td ><?php echo $post ['image'];?></td><br/>
<td ><?php echo $post ['created'];?></td><br/>

<br/>
<td ><?php echo anchor('posts/edit/'.$post['id'],'edit')."|".anchor('posts/delete/'.$post['id'],'delete',array
('onClick' => "return confirm('apakah anda yakin ')"));?></td>
<td><?php echo "<b><a href='".base_url()."./public/media/posts/".$post['image']."'>[ Download ]</a></b>"?></td>

</div></div>
</tr>


<?php  endforeach;?>

<?php echo form_close();?>