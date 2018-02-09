<!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
        

             
            </div>
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                 <div class="x_title">
                   <div class="dropdown">
                        <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">Pilih Pengajuan
                        &nbsp;&nbsp;&nbsp;&nbsp;<span class="caret"></span></button>
                        <ul class="dropdown-menu">
                          <li><a href="<?php echo base_url() ?>Restoran/kitchen/pengajuan_stok_BM"><h5>Bahan Makanan</h5></a></li>
                          <li><a href="<?php echo base_url() ?>Restoran/kitchen/pengajuan_stok_BM"><h5>Peralatan Makan</h5></a></li>
                        </ul>
                      </div> 
                  
                    <div class="clearfix"></div>
                  </div>
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Pengajuan Stok &nbsp;<b>Peralatan Makan</b></h2>
                  
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                     <?php
              $berhasil = $this->session->flashdata('pengajuanstok');
              if ((isset($berhasil)) && (!empty($berhasil))) {?>
              <div class="alert alert-success alertpenerimaan">
              <a href="#" class="close" data-dismiss="alert">&times;</a>
              <?php print_r($berhasil);?>
              </div>
              <?php } ?>
                    <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="post" action="<?php echo base_url()?>Restoran/kitchen/pengajuan_stok/kirim_pengajuan">
                      <input type="hidden" name="id_pengajuan">
                    
                      <input type="hidden" name="status_pengajuan" value="1">
                      
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="tanggal_pengajuan">Tanggal Pengajuan <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="tanggal_pengajuan" required="required" class="form-control col-md-7 col-xs-12 tanggal_pengajuan" value="<?php echo date('d/m/Y')?>">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="kode_am">Kode AM <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          
                          <input type="text" name="kode_am" required="required" class="form-control col-md-7 col-xs-12 kode_am" readonly="true">
                        </div>
                      </div>
                      
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nama_am">Nama AM <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select id="cboItem" name="nama_am" required="required" class="form-control col-md-7 col-xs-12 nama_am" 
                          data-kode_am="<?php echo $value['kode_am']?>" data-jenis_mkn="<?php echo $value['jenis_mkn']?>">
                              
                            <option>Pilih Alat Makan</option>
                              <?php $i=1; foreach ($kitchen as $value) { ?>
                               
                              <option data-kode_am="<?php echo $value['kode_am']?>" data-jenis_mkn="<?php echo $value['jenis_mkn']?>" value="<?php echo $value['nama_am']?>"><?php echo $value['nama_am']?>
                              </option>

                              <?php $i++; } ?>
                          </select>
                        </div>
                      </div>
              
                
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Jumlah Permintaan <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="jumlah_permintaan" class="form-control col-md-7 col-xs-12" required="required">
                        </div>
                      </div>
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
              <button class="btn btn-primary" type="reset">Reset</button>
                          <button type="submit" class="btn btn-success">Kirim Permintaan</button>
                        </div>
                      </div>

                    </form>
                  </div>
                </div>

                  <div class="x_panel">
                  <div class="x_title">
                    <h2>Data Pengajuan Peralatan Makan </h2>
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
                          <th width="100px">ID Pengajuan</th>
                          <th>Tanggal</th>
                          <th width="100px">Kode AM</th>
                          <th>Nama AM</th>
                          <th width="120px">Jumlah Permintaan</th>
                          <th>Status</th>    
                        </tr>
                      </thead>


                      <tbody>
                 
                       <?php $i=1; foreach ($pengajuan as $value) { ?>
                                <tr>
                                <td><?php echo "$i."?></td>
                                <td><?php echo $value['id_pengajuan']; ?></td>
                                <td><?php echo $value['tanggal_pengajuan']; ?></td>
                                <td><?php echo $value['kode_am']; ?></td>
                                <td><?php echo $value['nama_am']; ?></td>
                                <td><?php echo $value['jumlah_permintaan']; ?></td>
                                <td>
                                <?php
                                  if ($value['status_pengajuan'] == 1) {
                                    echo "<button class='btn btn-warning btn-sm'>Menunggu</button>";
                                  } else if ($value['status_pengajuan'] == 2) {
                                    echo "<button class='btn btn-primary btn-sm'><i class='fa fa-check'></i> Diterima</button>";
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