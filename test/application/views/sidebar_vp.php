<div class="container-fluid">
  <div class="row-fluid">
    <div class="span2">
      <ul class="nav nav-list">


<li class="active"><a href="#"  onclick="_treeaksi('keuangan')"><i class="icon-home icon-white"></i> Data Document </a></li> 
<ul id="keuangan">
<?php $categories=$this->Categories_model->getkategori(); ?>

<?php foreach($categories->result() as $kat){?>
<i class="icon-tags"></i>
<?php echo anchor('home1/perkategori_vp/'.$kat->id, $kat->name);?><br/>
<?php } ?>


	<a class="buat_baru" href="#"><i class="icon-book"></i> Add Document </a> <br/>
    <a class="laporan" href="#"><i class="icon-book"></i> View Document </a> 
    
</ul> 

 
 
 <li class="active"><a href="#"> Keluar / Log Out </a></li>
 

</ul>
    </div><div class="span10">