
<?php foreach($posts->result() as $row):?>
<table class="table">


<td width="125"><strong><?php echo anchor('posts/view_each/'.$row->id,$row->title)?></strong></td>
<td width="305"><p><?php echo $row->image;?></p></td>
<td width="125"><p><?php echo $row->created;?></p></td>

<hr>
</table>

<?php endforeach;?>

