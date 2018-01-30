 <div class="right_col" role="main">
<div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Penerimaan Stok <small>Users</small></h2>
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
                                <td><?php echo $value['kode_mkn']; ?></td>
                                <td><?php echo $value['nama_mkn']; ?></td>
                                <td><?php echo $value['jumlah_masuk']; ?></td>
                                <td><button class="btn btn-success tombolterima" data-toggle="modal" 
                                  data-target="#terimaModal"
                                              data-id_penerimaan="<?php echo $value['id_penerimaan']?>"
                                              data-tanggal_masuk="<?php echo $value['tanggal_penerimaan']?>"
                                              data-kode_mkn="<?php echo $value['kode_mkn']?>"
                                              data-nama_mkn="<?php echo $value['nama_mkn']?>"
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
          <h4 class="modal-title">Form Penerimaan Bahan Makanan</h4>
        </div>
        <div class="modal-body">
         
                    <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="post" action="<?php echo base_url()?>Restoran/kitchen/stok_makanan/terima_stok">
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="id_penerimaan">ID Penerimaan <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="id_penerimaan" name="id_penerimaan" required="required" class="form-control col-md-7 col-xs-12 id_penerimaan" readonly="true">
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
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nama_mkn">Nama Bahan <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="nama_mkn" name="nama_mkn" required="required" class="form-control col-md-7 col-xs-12 nama_mkn" readonly="true">
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

                        <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="tanggal_masuk">Set Kadaluarsa <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="date" id="tanggal_expired" name="tanggal_expired" required="required" class="form-control col-md-7 col-xs-12 tanggal_expired">
                        </div>
                      </div>

                     

        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-success">Simpan</button>
        </div>
      </div>
    </form>
    </div>
  </div>