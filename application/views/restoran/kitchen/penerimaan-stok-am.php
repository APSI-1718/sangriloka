 <div class="right_col" role="main">
<div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_title">
                    <div class="dropdown">
                        <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">Pilih Penerimaan
                        &nbsp;&nbsp;&nbsp;&nbsp;<span class="caret"></span></button>
                        <ul class="dropdown-menu">
                          <li><a href="<?php echo base_url() ?>Restoran/kitchen/Penerimaan_stok_BM"><h5>Bahan Makanan</h5></a></li>
                          <li><a href="<?php echo base_url() ?>Restoran/kitchen/Penerimaan_stok_AM"><h5>Peralatan Makan</h5></a></li>
                        </ul>
                      </div> 
                  
                    <div class="clearfix"></div>
                  </div>
                <div class="x_panel">
            
                  <div class="x_title">
                    <h2>Penerimaan Stok &nbsp;<b>Peralatan Makan</b></h2>
                  
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                              <?php
              $berhasil = $this->session->flashdata('penerimaanam');
              if ((isset($berhasil)) && (!empty($berhasil))) {?>
              <div class="alert alert-success alertpenerimaan">
              <a href="#" class="close" data-dismiss="alert">&times;</a>
              <?php print_r($berhasil);?>
              </div>
              <?php } ?>

                    <table id="datatable" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th width="30px">No</th>
                          <th width="100px">ID Penerimaan</th>
                          <th width="100px">ID Pengajuan</th>
                          <th width="100px">Tanggal Kirim</th>
                          <th width="90px">Kode Makanan</th>
                          <th>Nama Makanan</th>
                          <th width="50px">Jumlah</th>
                          <th>Aksi</th>
                              
                        </tr>
                      </thead>


                      <tbody>
                 
                       <?php $i=1; foreach ($kitchen as $value) { ?>
                                <tr>
                                <td><?php echo "$i."?></td>
                                <td><?php echo $value['id_penerimaan']; ?></td>
                                <td><?php echo $value['id_pengajuan']; ?></td>
                                <td><?php echo date('d/m/Y', strtotime($value['tanggal_penerimaan']));?></td>
                                <td><?php echo $value['kode_am']; ?></td>
                                <td><?php echo $value['nama_am']; ?></td>
                                <td><?php echo $value['jumlah_masuk']; ?></td>
                                <td><button class="btn btn-success btn-sm tombolterima" data-toggle="modal" 
                                  data-target="#terimaModal"
                                              data-id_penerimaan="<?php echo $value['id_penerimaan']?>"
                                              data-tanggal_masuk="<?php echo $value['tanggal_penerimaan']?>"
                                              data-kode_am="<?php echo $value['kode_am']?>"
                                              data-nama_am="<?php echo $value['nama_am']?>"
                                              data-jumlah_masuk="<?php echo $value['jumlah_masuk']?>">Terima</button></td>
                                
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


        <!-- Modal tambah data -->
<div class="modal fade" id="terimaModal" role="dialog">
    <div class="modal-dialog ">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Form Penerimaan Alat Makan</h4>
        </div>
        <div class="modal-body">
         
                    <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="post" action="<?php echo base_url()?>Restoran/kitchen/Penerimaan_stok_AM/terima_stok">
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="id_penerimaan">ID Penerimaan <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="id_penerimaan" name="id_penerimaan" required="required" class="form-control col-md-7 col-xs-12 id_penerimaan" readonly="true">
                        </div>
                      </div>

                       <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="kode_am">Kode AM <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="kode_am" name="kode_am" required="required" class="form-control col-md-7 col-xs-12 kode_am" readonly="true">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nama_am">Nama AM <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="nama_am" name="nama_am" required="required" class="form-control col-md-7 col-xs-12 nama_am" readonly="true">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="jumlah_masuk">Jumlah Masuk<span class="required"></span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="jumlah_masuk" name="jumlah_masuk" required="required" class="form-control col-md-7 col-xs-12 jumlah_masuk" readonly="true">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="tanggal_masuk">Tanggal Masuk <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="tanggal_masuk" name="tanggal_masuk" required="required" class="form-control col-md-7 col-xs-12 tanggal_masuk" readonly="true">
                        </div>
                      </div>
                     
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-success">Terima</button>
        </div>
      </div>
    </form>
    </div>
  </div>