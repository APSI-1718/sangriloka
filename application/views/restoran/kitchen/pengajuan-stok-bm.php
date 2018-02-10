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
                          <li><a href="<?php echo base_url() ?>Restoran/kitchen/pengajuan_stok_AM"><h5>Peralatan Makan</h5></a></li>
                        </ul>
                      </div> 
                  
                    <div class="clearfix"></div>
                  </div>
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Pengajuan Stok &nbsp;<b>Bahan Makanan</b></h2>
                  
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
                    <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="post" action="<?php echo base_url()?>Restoran/kitchen/pengajuan_stok_BM/kirim_pengajuan">
                      <input type="hidden" name="id_pengajuan">
                    
                      <input type="hidden" name="status_pengajuan" value="1">
                      
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="tanggal_pengajuan">Tanggal Pengajuan <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="tanggal_pengajuan" required="required" class="form-control col-md-7 col-xs-12 tanggal_pengajuan" value="<?php echo date('d/m/Y')?>" readonly="true">
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

                    <h2>Data Pengajuan Bahan Makanan </h2>
                  
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <?php
              $berhasil = $this->session->flashdata('hapuspengajuan');
              if ((isset($berhasil)) && (!empty($berhasil))) {?>
              <div class="alert alert-success alertpenerimaan">
              <a href="#" class="close" data-dismiss="alert">&times;</a>
              <?php print_r($berhasil);?>
              </div>
              <?php } ?>

              <?php
              $berhasil = $this->session->flashdata('editpengajuan');
              if ((isset($berhasil)) && (!empty($berhasil))) {?>
              <div class="alert alert-success alertpenerimaan">
              <a href="#" class="close" data-dismiss="alert">&times;</a>
              <?php print_r($berhasil);?>
              </div>
              <?php } ?>
            
                    <table id="datatable" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>No.</th>
                          <th width="100px">ID Pengajuan</th>
                          <th>Tanggal Pengajuan</th>
                          <th width="100px">Kode Makanan</th>
                          <th>Nama Makanan</th>
                          <th width="120px">Jumlah Permintaan</th>
                          <th>Status</th>
                          <th>Aksi</th>    
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
                                    echo "<button class='btn btn-warning btn-sm'>Menunggu</button>";
                                  } else if ($value['status_pengajuan'] == 2) {
                                    echo "<button class='btn btn-success btn-sm'><i class='fa fa-check'></i> Diterima</button>";
                                  } 
                                   

                                ?>

                                </td>
                                <td>
                                  <?php
                                  if ($value['status_pengajuan'] == 1) { ?>
                                    <button class="btn btn-info btn-sm tomboleditpengajuan" data-target="#editpengajuanModal"
                                  data-toggle="modal"
                                  data-id_pengajuan="<?php echo $value['id_pengajuan'];?>"
                                  data-kode_mkn="<?php echo $value['kode_mkn'];?>"
                                  data-nama_mkn="<?php echo $value['nama_mkn'];?>"
                                  data-jumlah_permintaan="<?php echo $value['jumlah_permintaan'];?>"><i class="fa fa-edit"></i> Ubah</button> 
                                  <a href="<?php echo base_url()?>Restoran/kitchen/pengajuan_stok_BM/hapus_pengajuan/<?php echo $value['id_pengajuan'];?>"><button class="btn btn-danger btn-sm"><i class="fa fa-close"></i> Batalkan</button></a>
                                 <?php } else if ($value['status_pengajuan'] == 2) {
                                    echo "<button class='btn btn-default btn-sm'> Tidak ada aksi</button>";
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



      <div class="modal fade" id="editpengajuanModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" >
    <div class="modal-dialog" role="document" >
      <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title editpengajuan" id="editModalLabel">Ubah Data Pengajuan</h4>
        </div>
        <div class="modal-body">
          <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="post" action="<?php echo base_url() ?>Restoran/kitchen/pengajuan_stok_BM/edit_data">
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="id_pengajuan">ID Pengajuan<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="id_pengajuan" name="id_pengajuan" required="required" class="form-control col-md-7 col-xs-12 id_pengajuan" readonly="true">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="kode_mkn">Kode Makanan <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="kode_mkn" name="kode_mkn" required="required" class="form-control col-md-7 col-xs-12 kode_mkn" readonly="true">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nama_mkn">Nama Makanan <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="nama_mkn" name="nama_mkn" required="required" class="form-control col-md-7 col-xs-12 nama_mkn" readonly="true">
                        </div>
                      </div>
                     
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nama_am">Jumlah Permintaan <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="jumlah_permintaan" name="jumlah_permintaan" required="required" class="form-control col-md-7 col-xs-12 jumlah_permintaan">
                        </div>
                      </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-btn-default" data-dismiss="modal">Batal</button>
          <button type="submit" class="btn btn-primary">Ubah</button>
        </div>
        </form>
      </div>
    </div>
</div>