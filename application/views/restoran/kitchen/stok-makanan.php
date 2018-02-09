 <div class="right_col" role="main">
<div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Data Stok Bahan Makanan</h2>
                  
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <?php
              $berhasil = $this->session->flashdata('tambahdatamkn');
              if ((isset($berhasil)) && (!empty($berhasil))) {?>
              <div class="alert alert-success alertmakanan">
              <a href="#" class="close" data-dismiss="alert">&times;</a>
              <?php print_r($berhasil);?>
              </div>
              <?php } ?>
                                 <?php
              $berhasil = $this->session->flashdata('hapusstok');
              if ((isset($berhasil)) && (!empty($berhasil))) {?>
              <div class="alert alert-success alertmakanan">
              <a href="#" class="close" data-dismiss="alert">&times;</a>
              <?php print_r($berhasil);?>
              </div>
              <?php } ?>
             <button class="btn btn-info fa fa-plus-circle" type="button" data-toggle="modal" data-target="#tambahModal"> Tambah Data</button>
                    <table id="datatable" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Kode Makanan</th>
                          <th>Nama Makanan</th>
                          <th>Jenis Makanan</th>
                          <th>Stok</th>
                          <th>Tanggal Masuk</th>
                          <th>Tanggal Expired</th>
                          <th>Kelayakan</th>
                          <th width="250px">Aksi</th>
                              
                        </tr>
                      </thead>


                      <tbody>
                 
                       <?php $i=1; foreach ($kitchen as $value) { ?>
                                <tr>
                                <td><?php echo "$i."?></td>
                                <td><?php echo $value['kode_mkn']; ?></td>
                                <td><?php echo $value['nama_mkn']; ?></td>
                                <td><?php echo $value['jenis_mkn']; ?></td>
                                <td><?php if ($value['stok_mkn'] == 0){
                                  echo "0";
                                } else {
                                  echo $value['stok_mkn'];
                                } ?></td>
                                <td><?php echo $value['tanggal_masuk']; ?></td>
                                <td><?php echo $value['tanggal_expired']; ?></td>
                                <?php if (date('Y-m-d') > ['tanggal_expired']) { ?>
                                  <td>Kadaluarsa</td>
                               <?php } else if ($value['tanggal_masuk'] == null && $value['tanggal_expired'] == null){ ?>
                                <td></td>
                              <?php } else {?>
                                <td>Layak</td>
                             <?php } ?>
                                


                                <td>
                                  <a href="<?php echo base_url()?>Restoran/kitchen/stok_makanan/hapus_stok/<?php echo $value['kode_mkn'];?>"><button class="btn btn-warning btn-xs"><i class="fa fa-refresh"></i> Reset Stok</button></a>
                                  <button type="button" class="btn btn-primary btn-xs"><span class="fa fa-edit"></span> Ubah</button>
                                  <button type="button" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Hapus</button>
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


<!-- Modal tambah data -->
<div class="modal fade" id="tambahModal" role="dialog">
    <div class="modal-dialog ">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Tambah Bahan Makanan</h4>
        </div>
        <div class="modal-body">
                    <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="post" action="<?php echo base_url()?>Restoran/kitchen/stok_makanan/tambah_data">
                         <input type="hidden" name="kode_mkn" class="form-control kode_mkn" id="kode_mkn">
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nama_mkn">Nama Bahan <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="nama_mkn" name="nama_mkn" required="required" class="form-control col-md-7 col-xs-12 nama_mkn">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="jenis_mkn">Jenis Makanan <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select type="text" name="jenis_mkn" class="form-control col-md-7 col-xs-12 jenis_mkn" id="jenis_mkn" required="required">
                                <option selected="false">Pilih Jenis Bahan</option>
                                <option value="Daging">Daging</option>
                                <option value="Ikan">Ikan</option>
                                <option value="Telur">Telur</option>
                                <option value="Keju">Keju</option>
                                <option value="Buah dan Sayur">Buah dan Sayur</option>
                                <option value="Beras">Beras</option>
                                <option value="Bumbu Masak">Bumbu Masak</option>
                            </select>
                                <style type="text/css">
                                 option{margin-bottom:10px;}
                                </style>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="stok_mkn"><span class="required"></span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="hidden" id="stok_mkn" name="stok_mkn" required="required" class="form-control col-md-7 col-xs-12 stok_mkn" disabled  value="0">
                        </div>
                      </div>
        </div>
        <div class="modal-footer">
          <button class="btn btn-primary" type="button" data-dismiss="modal">Batal</button>
          <button type="submit" class="btn btn-success">Tambah</button>
        </div>
      </div>
    </div>
  </form>
  </div>
</div>


<!-- Modal edit data -->

<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" >
    <div class="modal-dialog" role="document" >
      <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title edit" id="editModalLabel">Edit Data</h4>
        </div>
        <div class="modal-body">
          <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="post" action="<?php echo base_url() ?>Restoran/kitchen/alat_makan/edit_data">
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nama_mkn">Nama Bahan <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="kode_mkn" class="form-control col-md-7 col-xs-12 kode_mkn" id="kode_mkn" readonly="true">
                        
                        </div>
                      </div>
            
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nama_mkn">Nama Bahan <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="nama_mkn" name="nama_mkn" required="required" class="form-control col-md-7 col-xs-12 nama_mkn">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="jenis_mkn">Jenis Makanan <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select type="text" name="jenis_mkn" class="form-control col-md-7 col-xs-12 jenis_mkn" id="jenis_mkn" required="required">
                                <option selected="false">Pilih Jenis Bahan</option>
                                <option value="Daging">Daging</option>
                                <option value="Ikan">Ikan</option>
                                <option value="Telur">Telur</option>
                                <option value="Keju">Keju</option>
                                <option value="Buah dan Sayur">Buah dan Sayur</option>
                                <option value="Beras">Beras</option>
                                <option value="Bumbu Masak">Bumbu Masak</option>
                            </select>
                                <style type="text/css">
                                 option{margin-bottom:10px;}
                                </style>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="stok_mkn"><span class="required"></span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="hidden" id="stok_mkn" name="stok_mkn" required="required" class="form-control col-md-7 col-xs-12 stok_mkn" disabled  value="0">
                        </div>
                      </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-btn-default" data-dismiss="modal">Batal</button>
          <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
        </form>
      </div>
    </div>
</div>

<!-- Modal delete data -->

<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" >
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="deleteModalLabel">Hapus Data</h4>
        </div>
        <div class="modal-body">
          <div class="delete alert alert-danger"></div>
        </div>
        <div class="modal-footer">
            <form method="post" action="<?php echo base_url() ?>Restoran/kitchen/alat_makan/delete_data">
              <input type="hidden" name="kode_am" class="form-control kode_am" id="kode_am">
          <button type="button" class="btn btn-btn-default" data-dismiss="modal">Batal</button>
          <button class="btn btn-danger" type="submit">Hapus</button>
        </div>
        </form>
      </div>
    </div>
</div>