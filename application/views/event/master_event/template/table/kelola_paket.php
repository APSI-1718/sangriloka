
 <div class="right_col" role="main">
<div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Kelola Paket</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
              
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
             <button type="button" class="btn btn-info " data-toggle="modal" data-target="#ModalTambahBarang"> Tambah</button>
                    <table id="datatable" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>Id Paket</th>
                          <th>Nama Paket</th>
                          <th>Harga Paket</th>
                          <th>Detail Paket</th>
                          <th >Aksi</th>
                        </tr>
                      </thead>


                      <tbody>
                  <?php 
                      foreach ($paket as $key => $value) {
                        
                      ?>
                        <tr>
                          <td><?php echo $value['id_paket'];?></td>
                          <td><?php echo $value['nama_paket'];?></td>
                          <td><?php echo $value['harga_paket'];?></td>
                          <td><?php echo $value['detail_paket'];?></td>
                          <td><button type="button" class="btn btn-primary tombolbarang" data-toggle="modal" data-target="#ModalUbahBarang" 
                          data-idpaket="<?php echo $value['id_paket'];?>" 
                          data-namapaket="<?php echo $value['nama_paket'];?>" 
                          data-hargapaket="<?php echo $value['harga_paket'];?>" 
                          data-detailpaket="<?php echo $value['detail_paket'];?>" > Edit</button>
                          
                          <button type="button" class="btn btn-danger tombolbarang" data-toggle="modal" data-target="#ModalHapusBarang" 
                          data-idpaket="<?php echo $value['id_paket'];?>" 
                          data-namapaket="<?php echo $value['nama_paket'];?>" > Hapus</button></td>
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
          <h4 class="modal-title">Form Kelola Gedung</h4>
        </div>
        <div class="modal-body">
          <div class="x_content">
                    <br />
                    <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left"
                    method="post" action="<?php echo base_url() ?>event/master_event/kelola_paket/insert">

                     
                          <input type="hidden" id="id-paket" name="id-paket" required="required" class="form-control col-md-7 col-xs-12">

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nama-paket">Nama Paket <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="nama-paket" name="nama-paket" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="harga-paket">Harga Paket <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="harga-paket" name="harga-paket" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>                      
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="detail-paket">Detail Paket <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="detail-paket" name="detail-paket" required="required" class="form-control col-md-7 col-xs-12">
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
          <button type="submit" class="btn btn-success"> Tambah</button>
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
          <h4 class="modal-title">Edit Paket</h4>
        </div>
        <div class="modal-body">
          <div class="x_content">
                    <br />
                    <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left"
                    method="post" action="<?php echo base_url() ?>event/master_event/kelola_paket/update">


                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="id-paket">Id Paket <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="id-paket" name="id-paket" required="required" class="form-control col-md-7 col-xs-12 id_paket">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nama-paket">Nama Paket <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="nama-paket" name="nama-paket" required="required" class="form-control col-md-7 col-xs-12 nama_paket">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="harga-paket">Harga Paket <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="harga-paket" name="harga-paket" required="required" class="form-control col-md-7 col-xs-12 harga_paket">
                        </div>
                      </div>                      
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="detail-paket">Detail Paket <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="detail-paket" name="detail-paket" required="required" class="form-control col-md-7 col-xs-12 detail_paket">
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
          <button type="submit" class="btn btn-primary"> Edit</button>
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
          <h4 class="modal-title">Hapus Paket</h4>
        </div>
        <div class="modal-body">
          <div class="deletealat alert alert-danger" role="alert"></div>
          <div class="x_content">
                    <br />
                    <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="post" action="<?php echo base_url() ?>event/master_event/kelola_paket/delete">

                      <input type="text" name="id_paket" class="id_paket">                  
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
</div>