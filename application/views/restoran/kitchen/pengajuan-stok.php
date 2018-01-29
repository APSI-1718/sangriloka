<!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
        

             
            </div>
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Pengajuan Stok <small>Bahan Makanan</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="post" action="<?php echo base_url()?>Restoran/kitchen/pengajuan_stok/tambah_pengajuan">
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
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="kode_mkn">Kode Makanan <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          
                          <input type="text" name="kode_mkn" required="required" class="form-control col-md-7 col-xs-12 kode_mkn" readonly="true">
                        </div>
                      </div>
                      
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nama_mkn">Nama Makanan <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select id="cboItem" name="nama_mkn" required="required" class="form-control col-md-7 col-xs-12 nama_mkn" 
                          data-kode_mkn="<?php echo $value['kode_mkn']?>" data-jenis_mkn="<?php echo $value['jenis_mkn']?>">
                              
                            <option>Pilih Bahan Makanan</option>
                              <?php $i=1; foreach ($kitchen as $value) { ?>
                               
                              <option data-kode_mkn="<?php echo $value['kode_mkn']?>" data-jenis_mkn="<?php echo $value['jenis_mkn']?>" value="<?php echo $value['nama_mkn']?>"><?php echo $value['nama_mkn']?>
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
                    <h2>Data Pengajuan Makanan </h2>
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
                          <th width="100px">Kode Makanan</th>
                          <th>Nama Makanan</th>
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
                                <td><?php echo $value['kode_mkn']; ?></td>
                                <td><?php echo $value['nama_mkn']; ?></td>
                                <td><?php echo $value['jumlah_permintaan']; ?></td>
                                <td>
                                <?php
                                  if ($value['status_pengajuan'] == 1) {
                                    echo "<button class='btn btn-warning'>Pending</button>";
                                  } else if ($value['status_pengajuan'] == 2) {
                                    echo "<button class='btn btn-primary'>Sedang Dimasak</button>";
                                  } else if ($value['status_pengajuan'] == 3) {
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