<div class="container-fluid">
  <div class="row-fluid">
    <div class="span2">
      <ul class="nav nav-list">


<li class="active"><a href="#"  onclick="_treeaksi('keuangan')"><i class="icon-home icon-white"></i> Data Document </a></li> 
<ul id="keuangan">
<?php $kategori=$this->mkategori->getkategori(); ?>
<?php foreach($kategori->result() as $kat){?>
<i class="icon-book"></i><?php echo anchor('home/perkategori/'.$kat->id, $kat->kat_doc);?><br/>
<?php } ?>

	<a class="buat_baru" href="#"><i class="icon-book"></i> Add Document </a> <br/>
    <a class="laporan" href="#"><i class="icon-book"></i> View Document </a> 
    <li><a class="file" href="#">File data keuangan </a></li>
    <li><a class="statistik" href="#">Statistik data keuangan </a></li>
</ul> 
<li class="active"><a href="#" onclick="_treeaksi('user')"> Data User </a></li> 
<ul id="user">
	<li><a class="buat_user" href="#">Add User</a> </li>
    <li><a class="data_user" href="#">View User </a> </li>
</ul> 
 <li class="active"><a href="#"> Keluar / Log Out </a></li>
 

</ul>
    </div><div class="span10">