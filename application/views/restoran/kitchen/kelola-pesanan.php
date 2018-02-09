 <div class="right_col" id="load_content" role="main">
<div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Kelola Pesanan</h2>
                   
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content" style="height: 700px">
                                 <?php
              $berhasil = $this->session->flashdata('statuspesanan');
              if ((isset($berhasil)) && (!empty($berhasil))) {?>
              <div class="alert alert-success alertpenerimaan">
              <a href="#" class="close" data-dismiss="alert">&times;</a>
              <?php print_r($berhasil);?>
              </div>
              <?php } ?>
            
                    <table class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>No.</th>
                          <th width="120px">ID Pemesanan</th>
                          <th>Nama Menu</th>
                          <th>Qty</th>
                          <th>No Meja</th>
                          <th>Tanggal</th>
                          <th width="250">Aksi</th>    
                        </tr>
                      </thead>


                      <tbody>
                 
                       <?php $i=1; foreach ($kitchen as $value) { ?>
                                <tr>
                                <td><?php echo "$i."?></td>
                                <td><?php echo $value['id_pemesanan']; ?></td>
                                <td><?php echo $value['nama_menu']; ?></td>
                                <td><?php echo $value['Qty']; ?></td>
                                <td><?php echo $value['no_meja']; ?></td>
                                <td><?php echo $value['tgl_pemesanan']; ?></td>
                                <td>
                                  <form method="post" action="<?php echo base_url()?>restoran/kitchen/Kelola_pesanan/set_status">

                                    <input type="hidden" name="id_pemesanan" class="id_pemesanan">
                                    <input type="hidden" name="status" class="status">
                                    <?php
                                  
                                      if ($value['status']==1) {?>
                                      <button type='submit' class='btn btn-info btn-xs status1'
                                      data-id_pemesanan="<?php echo $value['id_pemesanan']?>"
                                      data-status="<?php echo $value['status']?>">
                                              <i class='fa fa-mail-forward'></i> Sedang Dimasak
                                       </button>
                                       <br>
                                       <button type='button' class='btn btn-warning btn-xs tombol'>
                                              <i class='fa fa-mail-forward'></i> Selesai Dimasak
                                       </button>
                                    <?php

                                   } else if ($value['status']==2) { ?>

                                       <button type='submit' class='btn btn-warning btn-xs status1'
                                        data-id_pemesanan="<?php echo $value['id_pemesanan']?>"
                                        data-status="<?php echo $value['status']?>">
                                              <i class='fa fa-mail-forward'></i> Selesai Dimasak
                                       </button>

                                   <?php  } else if ($value['status']==3) { ?>

                                       <button type='button' class='btn btn-success btn-xs'><i class="fa fa-check"></i> Pesanan Selesai 
                                       </button>

                                   <?php  }  ?> 

                                 </form>

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

