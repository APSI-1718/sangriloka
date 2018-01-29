<div class="right_col" role="main">


            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="jumbotron" style="background-color: #C7CAC9">
                    <h1 style="font-size: 50px;">&nbsp; SANGRILOKA Restoran</h1>
                  </div>
                  <nav class="navbar navbar-inverse">
                       
                        <ul class="nav navbar-nav" style="font-size: 20px">
                          <li class="active"><a href="<?php echo base_url()?>Restoran/transaksi/menu_makanan">Home</a></li>
                          <li><a href="<?php echo base_url()?>Restoran/transaksi/menu_makanan/tampil_kategori/Appetizer" style="background-color: #FF8636">Appetizer</a></li>
                          <li><a href="<?php echo base_url()?>Restoran/transaksi/menu_makanan/tampil_kategori/Main_Course" style="background-color: #E8E231">Main Course</a></li>
                          <li><a href="<?php echo base_url()?>Restoran/transaksi/menu_makanan/tampil_kategori/Dessert" style="background-color: #E559B2">Dessert</a></li>
                          <li><a href="<?php echo base_url()?>Restoran/transaksi/menu_makanan/tampil_kategori/Minuman" style="background-color: #59B9E5">Minuman</a></li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right" >
                        <li><a href="<?php echo base_url()?>Restoran/kitchen/kelola_order/lihat_pesanan" style="background-color: #8EF193; font-size: 18px;"><span class="badge bg-red" style="font-size: 15px;"><?php echo $order ?></span> Pesanan</a></li>
                      </ul>
                    </nav>
                  <div class="x_title">
                    <br>

                    <?php foreach ($menumkn as $key => $value) {?>
                      <?php if ($value['jenis_menu'] == 'Appetizer'){ 
                                                  $r = "Appetizer";
                            } elseif ($value['jenis_menu'] == 'Main_Course') {
                               $r = "Main Course";
                            } elseif ($value['jenis_menu'] == 'Dessert') {
                               $r = "Dessert";
                            } elseif ($value['jenis_menu'] == 'Minuman') {
                               $r = "Minuman";
                            } ?>
                    <?php } ?>
                    <h2>Daftar Menu <?php echo $r?></h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content col-md-9 col-sm-12 col-xs-12" style="min-height: 500px" >
                
<div class="thumbnails">
<?php
echo('<br>');

$i = 1;
  foreach ($menumkn as $key => $value) { ?> 
<div class="col-md-2 col-xs-4 col-sm-4" id="frameprd" style="margin-right: 50px">
<div class="thumbnail" style="height: 200px; width: 300px;">

  <div class="tn" style="height: 130px"><a href="<?php echo base_url()?>dashboard/detail_prd/<?php echo $value['id_menu'];?>">
                        <img class="img img-responsive" style="width: 480px; height: 195px" src="<?php echo base_url() ?>assets/gambar_menu/<?php echo $value['gambar_menu'];?>"></a></div>
                        <div style=" position: relative ; top: 10px; background-color: black; opacity: 0.8"><center>
                          <a style=" font-family: 'roboto' ; font-size: 16px; font-weight: bold; color: white;" href="<?php echo base_url()?>dashboard/detail_prd/<?php echo $value['id_menu'];?>"><?php echo $value['nama_menu']; ?>
                          </a>
                        <center><b style="color: white; font-size: 18px">
            Rp. <?php echo number_format($value['harga_menu'],2,",","."); echo "<br><br>"?></b></center>
                        </div>
                        </div>
                        </div> 
                
            
          <?php $i++; } ?> 
</div>
<div class="col-md-3">
  
</div>
</div>

<center><?php echo $links ?></center>
</div>
                  </div>
                </div>
              </div>
                