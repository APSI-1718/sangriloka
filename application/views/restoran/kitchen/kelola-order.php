 
<script type="text/javascript">
   setTimeout(function(){
       location.reload();
   },10000);
</script>
 <div class="right_col" id="load_content" role="main">
<div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Kelola Order <small>Users</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
              
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
            
                    <table id="datatable" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>No.</th>
                          <th>ID Pemesanan</th>
                          <th>Nama Pemesan</th>
                          <th>Pesanan</th>
                          <th>Tanggal</th>
                          <th>Status</th>
                          <th>Aksi</th>    
                        </tr>
                      </thead>


                      <tbody>
                 
                       <?php $i=1; foreach ($kitchen as $value) { ?>
                                <tr>
                                <td><?php echo "$i."?></td>
                                <td><?php echo $value['id_pesanan']; ?></td>
                                <td><?php echo $value['nama_pemesan']; ?></td>
                                <td><?php echo $value['pesanan']; ?></td>
                                <td><?php echo $value['tgl_pemesanan']; ?></td>
                                <td>
                                <?php
                                  if ($value['status'] == 1) {
                                    echo "<button class='btn btn-warning'>Pending</button>";
                                  } else if ($value['status_order'] == 2) {
                                    echo "<button class='btn btn-primary'>Sedang Dimasak</button>";
                                  } else if ($value['status_order'] == 3) {
                                    echo "<button class='btn btn-success'>Selesai Dimasak</button>";
                                  }
                                   

                                ?>

                                </td>
                                <td>
                                  <form method="post" action="<?php echo base_url()?>Restoran/kitchen/kelola_order/set_status">

                                    <input type="hidden" name="id_pesanan" class="id_pesanan">
                                    <input type="hidden" name="status" class="status">

                                    <?php
                                      if ($value['status']==1) {?>
                                      <button type='submit' class='btn btn-success btn-xs status1'
                                      data-id_order="<?php echo $value['id_order']?>"
                                      data-status_order="<?php echo $value['status_order']?>">
                                              <i class='fa fa-mail-forward'></i> Sedang Dimasak
                                       </button>

                                       <button type='button' class='btn btn-warning btn-xs tombol'>
                                              <i class='fa fa-mail-forward'></i> Selesai Dimasak
                                       </button>
                                    <?php

                                   } else if ($value['status']==2) { ?>

                                       <button type='submit' class='btn btn-warning btn-xs status1'
                                        data-id_order="<?php echo $value['id_pesanan']?>"
                                        data-status_order="<?php echo $value['status']?>">
                                              <i class='fa fa-mail-forward'></i> Selesai Dimasak
                                       </button>

                                   <?php  } 

                                   else { ?>
                                          <button class="btn btn-default" type="button">Orderan Selesai</button>
                                      
                                  <?php  }?>
        
                                    </form>
                                      </td>
                                </tr>


                              <?php $i++; } ?>
                        
                      </tbody>
                    </table>
                  </div>
                </div>

                  <div class="x_panel">
                  <div class="x_title">
                    <h2>Kelola Order <small>Users</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
              
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
            
                    <table id="datatable" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>No.</th>
                          <th>ID Order</th>
                          <th>No. Meja</th>
                          <th>Nama Order</th>
                          <th>Jumlah Order</th>
                          <th>Status</th>    
                        </tr>
                      </thead>


                      <tbody>
                 
                       <?php $i=1; foreach ($kitchen as $value) { ?>
                                <tr>
                                <td><?php echo "$i."?></td>
                                <td><?php echo $value['id_order']; ?></td>
                                <td><?php echo $value['no_meja']; ?></td>
                                <td><?php echo $value['nama_order']; ?></td>
                                <td><?php echo $value['jumlah_order']; ?></td>
                                <td>
                                <?php
                                  if ($value['status_order'] == 1) {
                                    echo "<button class='btn btn-warning'>Pending</button>";
                                  } else if ($value['status_order'] == 2) {
                                    echo "<button class='btn btn-primary'>Sedang Dimasak</button>";
                                  } else if ($value['status_order'] == 3) {
                                    echo "<button class='btn btn-success'>Selesai Dimasak</button>";
                                  }
                                   

                                ?>

                                </td>
                                </tr>


                              <?php $i++; } ?>
                        
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
                </div>
            </div>
          </div>
        </div>

