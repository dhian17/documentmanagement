
<?php foreach($posts->result() as $row):?>

<h2><?php echo $row->judul_file?></h2>
<p><?php echo $row->image;?></p>
<p><?php echo anchor('home1','Kembali');?></p>
<hr>

<?php endforeach;?>
