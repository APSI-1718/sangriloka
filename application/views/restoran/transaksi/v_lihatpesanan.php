<script type="text/javascript">
   setTimeout(function(){
       location.reload();
   },1000);
</script>

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
                          <th>ID Order</th>
                          <th>No. Meja</th>
                          <th>Nama Pesanan</th>
                          <th>Qty</th>
                          <th>Status</th>
                          <th>Aksi</th>    
                        </tr>
                      </thead>


                      <tbody>
                 
                       <?php $i=1; foreach ($kitchen as $value) { ?>
                                <tr>
                                <td><?php echo "$i."?></td>
                                <td><?php echo $value['id_pemesanan']; ?></td>
                                <td><?php echo $value['no_meja']; ?></td>
                                <td><?php echo $value['nama_menu']; ?></td>
                                <td><?php echo $value['Qty']; ?></td>
                                <td>
                                <?php
                                  if ($value['status'] == 1) {
                                    echo "<button class='btn btn-warning'>Pending</button>";
                                  } else if ($value['status'] == 2) {
                                    echo "<button class='btn btn-primary'>Sedang Dimasak</button>";
                                  } else if ($value['status'] == 3) {
                                    echo "<button class='btn btn-success'>Selesai Dimasak</button>";
                                  }
                                   
                                ?>
                                </td>
                                <td><button class="btn btn-danger btn-sm"><i class="fa fa-close"></i> Batalkan Pesanan</button></td>
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
