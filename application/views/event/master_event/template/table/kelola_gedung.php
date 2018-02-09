
 <div class="right_col" role="main">
<div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Kelola Gedung</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
              
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                  <?php
              $berhasil = $this->session->flashdata('tambahdata');
              if ((isset($berhasil)) && (!empty($berhasil))) {?>
              <div class="alert alert-success alertgedung">
              <a href="#" class="close" data-dismiss="alert">&times;</a>
        <?php print_r($berhasil);?>
          </div>
        <?php } ?>

        <?php
              $berhasil = $this->session->flashdata('editdata');
              if ((isset($berhasil)) && (!empty($berhasil))) {?>
              <div class="alert alert-success alertgedung">
              <a href="#" class="close" data-dismiss="alert">&times;</a>
        <?php print_r($berhasil);?>
          </div>
        <?php } ?>

        <?php
              $berhasil = $this->session->flashdata('deletedata');
              if ((isset($berhasil)) && (!empty($berhasil))) {?>
              <div class="alert alert-success alertgedung">
              <a href="#" class="close" data-dismiss="alert">&times;</a>
        <?php print_r($berhasil);?>
          </div>
        <?php } ?>

             <button type="button" class="btn btn-info " data-toggle="modal" data-target="#ModalTambahBarang"> Tambah</button>
                    <table id="datatable" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>Id Gedung</th>
                          <th>Jenis Gedung</th>
                          <th>Jumlah Kuota</th>
                          <th>Status Gedung</th>
                          <th >Aksi</th>
                        </tr>
                      </thead>


                      <tbody>
                  <?php 
                      foreach ($gedung as $key => $value) {
                        
                      ?>
                        <tr>
                          <td><?php echo $value['id_gedung'];?></td>
                          <td><?php echo $value['jenis_gedung'];?></td>
                          <td><?php echo $value['jumlah_kuota'];?></td>
                          <td><?php echo $value['status_gedung'];?></td>
                          <td><button type="button" class="btn btn-primary tombolgedung" data-toggle="modal" data-target="#ModalUbahBarang" 
                          data-idgedung="<?php echo $value['id_gedung'];?>" 
                          data-jenisgedung="<?php echo $value['jenis_gedung'];?>" 
                          data-jumlahkuota="<?php echo $value['jumlah_kuota'];?>" 
                          data-statusgedung="<?php echo $value['status_gedung'];?>" > Ubah</button>
                          
                          <button type="button" class="btn btn-danger tombolgedung" data-toggle="modal" data-target="#ModalHapusBarang" 
                          data-idgedung="<?php echo $value['id_gedung'];?>" 
                          data-jenisgedung="<?php echo $value['jenis_gedung'];?>" > Hapus</button></td>
                        </tr>
                        <?php
                        } ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
                </div>
            </div>
          </div>
        </div>

        <!-- Modal -->
  <div class="modal fade" id="ModalTambahBarang" role="dialog">
    <div class="modal-dialog ">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Form Tambah Gedung</h4>
        </div>
        <div class="modal-body">
          <div class="x_content">
                    <br />
                    <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left"
                    method="post" action="<?php echo base_url() ?>event/master_event/kelola_gedung/tambah">

                     
                          <input type="hidden" id="id-gedung" name="id-gedung" required="required" class="form-control col-md-7 col-xs-12">

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nama-barang">Jenis Gedung <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="jenis-gedung" name="jenis-gedung" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="jenis-barang">Jumlah Kuota <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="jumlah-kuota" name="jumlah-kuota" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>                      
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="jenis-barang">Status Gedung <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="status-gedung" name="status-gedung" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                         
                          
                        </div>
                      </div>

                    
                  </div>

        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Simpan</button>
        </form>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- 
<!-- Modal edit -->
  
<div class="modal fade" id="ModalUbahBarang" role="dialog">
    <div class="modal-dialog ">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Form Ubah Gedung</h4>
        </div>
        <div class="modal-body">
          <div class="x_content">
                    <br />
                    <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left"
                    method="post" action="<?php echo base_url() ?>event/master_event/kelola_gedung/ubah">


                      <input type="hidden" id="id-gedung" name="id-gedung" required="required" class="form-control col-md-7 col-xs-12 id_gedung">
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nama-barang">Jenis Gedung <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="jenis-gedung" name="jenis-gedung" required="required" class="form-control col-md-7 col-xs-12 jenis_gedung">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="jenis-barang">Jumlah Kuota <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="jumlah-kuota" name="jumlah-kuota" required="required" class="form-control col-md-7 col-xs-12 jumlah_kuota">
                        </div>
                      </div>                      
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="jenis-barang">Status Gedung <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="status-gedung" name="status-gedung" required="required" class="form-control col-md-7 col-xs-12 status_gedung">
                        </div>
                      </div>


                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                         
                          
                        </div>
                      </div>

                    
                  </div>

        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Simpan</button>
        </form>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Modal hapus -->

<div class="modal fade" id="ModalHapusBarang" role="dialog">
    <div class="modal-dialog ">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Hapus Gedung</h4>
        </div>
        <div class="modal-body">
          <div class="deletegedung alert alert-danger" role="alert"></div>
          <div class="x_content">
                    <br />
                    <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="post" action="<?php echo base_url() ?>event/master_event/kelola_gedung/hapus">

                      <input type="text" name="id_gedung" class="id_gedung">                  
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                         
                          
                        </div>
                      </div>

                    
                  </div>

        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-danger">Ya</button>
          <button type="button" data-dismiss="modal" class="btn btn-default">Tidak</button>
        </form>
        </div>
      </div>
    </div>
  </div>
</div>