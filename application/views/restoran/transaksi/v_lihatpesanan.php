
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
                        
                    </nav>
                  <div class="x_title">
                    
                  </div>
                  <div class="x_content" style="height: 500px">
                    <center><h2>Daftar Pesanan Anda</h2></center>
                    <hr>
                    <div class="container-fluid">
                      <div class="row">
                        <div class="col-md-2"></div>
                        <div class="col-md-8">
            <center>
                    <table class="table table-striped table-bordered table-responsive">
                      <thead>
                        <tr>
                          <th>No.</th>
                          <th>ID Pemesanan</th>
                          <th>Nama Pesanan</th>
                          <th>No. Meja</th>
                          <th>Qty</th>
                          <th>Status</th>
                          <!-- <th>Aksi</th>  -->   
                        </tr>
                      </thead>


                      <tbody>
                 
                       <?php $i=1; foreach ($kitchen as $value) { ?>
                                <tr>
                                <td><?php echo "$i."?></td>
                                <td><?php echo $value['id_pemesanan']; ?></td>
                                <td><?php echo $value['nama_menu']; ?></td>
                                <td><?php echo $value['no_meja']; ?></td>
                                <td><?php echo $value['Qty']; ?></td>
                                <td>
                                <?php
                                  if ($value['status'] == 1) {
                                    echo "<button class='btn btn-warning btn-sm'>Pending</button>";
                                  } else if ($value['status'] == 2) {
                                    echo "<button class='btn btn-info btn-sm'>Sedang Dimasak</button>";
                                  } else if ($value['status'] == 3) {
                                    echo "<button class='btn btn-success btn-sm'>Selesai Dimasak</button>";
                                  } else if ($value['status'] == 4) {
                                    echo "<button class='btn btn-danger btn-sm'>Pesanan Habis</button>";
                                  }
                                   
                                ?>
                                </td>
                               <!--  <td>
                                  <button class="btn btn-info btn-sm Tomboleditpesanan" data-toggle="modal" data-target="#editpemesananModal" 
                                  data-id_pemesanan="<?php echo $value['id_pemesanan']?>"
                                  data-nama_menu="<?php echo $value['nama_menu']?>"
                                  data-total_harga="<?php echo $value['total']?>"
                                  data-Qty="<?php echo $value['Qty']?>"><i class="fa fa-edit"></i> Edit</button>
                                  <button class="btn btn-danger btn-sm"><i class="fa fa-close"></i> Batalkan Pesanan</button></td> -->
                                </tr>


                              <?php $i++; } ?>
                        
                      </tbody>
                    </table>
                  </center>
                </div>
                </div>
              </div>
                  </div>
                </div>

<!-- Modal preview pemesanan -->

<div class="modal fade" id="editpemesananModal" tabindex="-1" role="dialog" aria-labelledby="pemesananModalLabel" >
    <div class="modal-dialog" role="document" >
      <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title pemesanan" id="pemesananModalLabel">Form Edit Pesanan</h4>
        </div>
        <div class="modal-body">
          <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="post" action="<?php echo base_url() ?>Restoran/kitchen/kelola_order/order_makanan">

                <input type="hidden" name="statusBayar" class="form-control col-md-7 col-xs-12 statusBayar" value="Belum Dibayar">
                <input type="hidden" name="status" class="form-control col-md-7 col-xs-12 status" value="1">
                <input type="hidden" name="tgl_pemesanan" required="required" class="form-control col-md-7 col-xs-12 tgl_pemesanan" value="<?php echo date('Y-m-d')?>">
                <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nama_menu">ID Pemesanan <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="id_pemesanan" name="id_pemesanan" required="required" class="form-control col-md-7 col-xs-12 id_pemesanan" readonly="true" style="background-color: white; font-size: 18px; font-weight: bold; color: #152865">
                        </div>
                      </div>

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
                          <input type="number" id="qty" name="Qty" required="required" class="form-control col-md-7 col-xs-12 Qty" min="1">
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
          <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
        </form>
      </div>
    </div>
</div>