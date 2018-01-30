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
                        <li><a href="<?php echo base_url()?>Restoran/transaksi/menu_makanan/insert_data" style="background-color: #8EF193; font-size: 18px;"><span class="badge bg-red" style="font-size: 15px;"><?php echo $order ?></span> Pesanan</a></li>
                      </ul>
                    </nav>
                  <div class="x_title">
                    <br>
                    <h2>Daftar Menu Makanan & Minuman</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content col-md-9 col-sm-12 col-xs-12" >
                
<div class="thumbnails">
<?php
echo('<br>');

$i = 1;
  foreach ($menumkn as $key => $value) { ?> 
<div class="col-md-2 col-xs-4 col-sm-4" id="frameprd" style="margin-right: 50px">
<div class="thumbnail" style="height: 200px; width: 300px;">

  <div class="tn" style="height: 130px"><a href="#" class="gambarTombol" data-toggle="modal" data-target="#pemesananModal"
                  data-id_pesanan="<?php echo $value['id_menu'];?>" 
                  data-gambar_menu="<?php echo $value['gambar_menu']?>" 
                  data-nama_menu="<?php echo $value['nama_menu']?>"
                  data-harga_menu="<?php echo $value['harga_menu'];?>"
                  data-harga_menuNum ="<?php echo $value['harga_menu'];?>">

                        <img class="img img-responsive gambar_menu" style="width: 480px; height: 195px" src="<?php echo base_url() ?>assets/gambar_menu/<?php echo $value['gambar_menu'];?>"></a></div>
                        <div style=" position: relative ; top: 10px; background-color: black; opacity: 0.8"><center>
                          <a style=" font-family: 'roboto' ; font-size: 16px; font-weight: bold; color: white;" href="#"><?php echo $value['nama_menu']; ?>
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


<!-- Modal preview pemesanan -->

<div class="modal fade" id="pemesananModal" tabindex="-1" role="dialog" aria-labelledby="pemesananModalLabel" >
    <div class="modal-dialog" role="document" >
      <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title pemesanan" id="pemesananModalLabel">Form Pemesanan</h4>
        </div>
        <div class="modal-body">
          <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="post" action="<?php echo base_url() ?>Restoran/transaksi/menu_makanan/insert_data">
                      <input type="hidden" name="id_pemesanan" class="form-control col-md-7 col-xs-12 id_pemesanan">
                      <input type="hidden" name="tgl_pemesanan" value="<?php echo date("Y-m-d");?>">
                      <input type="hidden" name="status" class="form-control col-md-7 col-xs-12 status" value="1">
                      <input type="hidden" name="statusBayar" class="form-control col-md-7 col-xs-12 statusBayar" value="Belum Dibayar">
                     
                    
                     <!--  <div class="form-group">
                        
                          <center><img class="img img-responsive gambar_menu" width="400px" src="<?php echo base_url('assets/gambar_menu/'.$value['gambar_menu']);?>"></center>
                        </div> -->
                      
                      

                     <!-- <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="tgl_pemesanan">Tanggal Pemesanan<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="date" id="tgl_pemesanan" name="tgl_pemesanan" value="<?php echo date("Y-m-d"); ?>" required="required" class="form-control col-md-7 col-xs-12 tgl_pemesanan" readonly>
                        </div>
                      </div>       -->       
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nama_menu">Nama Menu <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="nama_menu" name="nama_menu" required="required" class="form-control col-md-7 col-xs-12 nama_menu" readonly="true" style="background-color: white; font-size: 18px; font-weight: bold; color: #152865">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="qty">Qty <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="number" id="qty" name="qty" required="required" class="form-control col-md-7 col-xs-12 qty">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="harga_menu">Harga Menu <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="harga_menu" name="harga_menu" required="required" class="form-control col-md-7 col-xs-12 harga_menu" readonly="true" style="background-color: white; font-size: 18px; font-weight: bold; color: #2D7207">
                          
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="harga_menu">Total Harga <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="total" name="total_harga" required="required" class="form-control col-md-7 col-xs-12 total_harga" readonly="true" style="background-color: white; font-size: 18px; font-weight: bold; color: #2D7207">
                        </div>
                      </div>
            

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-btn-default" data-dismiss="modal">Batal</button>
          <button type="submit" class="btn btn-primary">Kirim Pesanan</button>
        </div>
        </form>
      </div>
    </div>
</div>
                