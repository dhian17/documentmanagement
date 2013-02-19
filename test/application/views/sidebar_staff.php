<div class="container-fluid">
  <div class="row-fluid">
    <div class="span2">
      <ul class="nav nav-list">


<li class="active"><a href="#"  onclick="_treeaksi('keuangan')"><i class="icon-home icon-white"></i> Data Document </a></li> 
<ul id="keuangan">
<?php $categories=$this->Categories_model->getkategori(); ?>

<?php foreach($categories->result() as $kat){?>
<i class="icon-tags"></i>
<?php echo anchor('home1/perkategori_staff/'.$kat->id, $kat->name);?><br/>
<?php } ?>



    
</ul> 
<li class="active"><a href="#"  onclick="_treeaksi('keuangan')"><i class=" icon-user icon-white"></i> User </a></li>
<ul id="user">
<a class="buat_user" href="<?php echo base_url('akun/logout');?>"><i class=" icon-off"></i> Log Out</a> <br /> 
 
</ul> 

 

</ul>
    </div><div class="span10">