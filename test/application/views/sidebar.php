<div class="container-fluid">
  <div class="row-fluid">
    <div class="span2">
      <ul class="nav nav-list">


<li class="active"><a href="#"  onclick="_treeaksi('keuangan')"><i class="icon-home icon-white"></i> Data Document </a></li> 
<ul id="keuangan">
<?php $id_kategori=$this->mkategori->getkategori(); ?>

<?php foreach($id_kategori->result() as $kat){?>
<i class="icon-tags"></i>
<?php echo anchor('home1/perkategori/'.$kat->id, $kat->kat_doc);?><br/>
<?php } ?>


	<a class="buat_baru" href="#"><i class="icon-book"></i> Add Document </a> <br/>
    <a class="laporan" href="#"><i class="icon-book"></i> View Document </a> 
    
</ul> 
<li class="active"><a href="#" onclick="_treeaksi('user')"><i class=" icon-user icon-white"></i> Data User </a></li> 
<ul id="user">

	<a class="buat_user" href="<?php echo base_url('user2/register');?>"><i class=" icon-pencil"></i> Add User</a> <br />
    <a class="data_user" href="<?php echo base_url('user2/view');?>"><i class="icon-share"></i> View User </a>
</ul> 
 
 
 <li class="active"><a href="#"> Keluar / Log Out </a></li>
 

</ul>
    </div><div class="span10">