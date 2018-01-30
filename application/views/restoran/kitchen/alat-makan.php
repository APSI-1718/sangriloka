 <div class="right_col" role="main">
<div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Data Peralatan Makan </h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>

                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

        <!-- Flash Data -->

        <?php
              $berhasil = $this->session->flashdata('tambahdata');
              if ((isset($berhasil)) && (!empty($berhasil))) {?>
              <div class="alert alert-success alertalat">
              <a href="#" class="close" data-dismiss="alert">&times;</a>
        <?php print_r($berhasil);?>
          </div>
        <?php } ?>

        <?php
              $berhasil = $this->session->flashdata('editdata');
              if ((isset($berhasil)) && (!empty($berhasil))) {?>
              <div class="alert alert-success alertalat">
              <a href="#" class="close" data-dismiss="alert">&times;</a>
        <?php print_r($berhasil);?>
          </div>
        <?php } ?>

        <?php
              $berhasil = $this->session->flashdata('deletedata');
              if ((isset($berhasil)) && (!empty($berhasil))) {?>
              <div class="alert alert-success alertalat">
              <a href="#" class="close" data-dismiss="alert">&times;</a>
        <?php print_r($berhasil);?>
          </div>
        <?php } ?>

             
                <button class="btn btn-info fa fa-plus-circle" type="button" data-toggle="modal" data-target="#tambahModal"> Tambah Data</button>
             
                    <table id="datatable" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Kode Barang</th>
                          <th>Nama Barang</th>
                          <th>Kategori</th>
                          <th width="50px">Stok</th>
                          <th width="150px">Aksi</th>

                        </tr>
                      </thead>


                      <tbody>

                       <?php $i=1; foreach ($kitchen as $value) { ?>
                                <tr>
                                <td><?php echo "$i."?></td>
                                <td><?php echo $value['kode_am']; ?></td>
                                <td><?php echo $value['nama_am']; ?></td>
                                <td><?php echo $value['kategori_am']; ?></td>
                                <td><?php echo $value['stok_am']; ?></td>
                                <td><?php
                                echo "
                                        <button type='button' class='btn btn-primary btn-xs tombolalat'
                                              data-toggle='modal' data-target='#editModal'
                                              data-kode_am='". $value['kode_am']."'
                                              data-nama_am='". $value['nama_am']."'
                                              data-kategori_am='". $value['kategori_am']."'
                                              data-stok_am='". $value['stok_am']."'>
                                              <i class='fa fa-pencil-square-o'></i> Edit
                                       </button>&nbsp;&nbsp;
                                      <button type='button' class='btn btn-danger btn-xs tombolalat'
                                          data-toggle='modal' data-target='#deleteModal'
                                          data-kode_am='". $value['kode_am']."'
                                          data-nama_am='". $value['nama_am']."'><i class='glyphicon glyphicon-trash'></i> Hapus
                                      </button>

                                       "?>  </td>
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
          <h4 class="modal-title">Tambah Alat Makan</h4>
        </div>
        <div class="modal-body">
                    <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="post" action="<?php echo base_url()?>Restoran/kitchen/alat_makan/tambah_data">
                         <input type="hidden" name="kode_am" class="form-control kode_am" id="kode_am">
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nama_am">Nama Barang <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="nama_am" name="nama_am" required="required" class="form-control col-md-7 col-xs-12 nama_am">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="kategori_am">Kategori <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select type="text" name="kategori_am" class="form-control col-md-7 col-xs-12 kategori_am" id="kategori_am" required="required">
                                <option value="Chinaware">Chinaware</option>
                                <option value="Silverware">Silverware</option>
                                 <option value="Glassware">Glassware</option>
                            </select>
                                <style type="text/css">
                                 option{margin-bottom:10px;}
                                </style>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nama_am">Stok <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="stok_am" name="stok_am" required="required" class="form-control col-md-7 col-xs-12 stok_am">
                        </div>
                      </div>
                  </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
          <button type="submit" class="btn btn-success">Tambah</button>
        </div>
      </div>
    </form>
    </div>
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
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="kode_am">Kode Barang <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="kode_am" name="kode_am" required="required" class="form-control col-md-7 col-xs-12 kode_am" readonly="true">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nama_am">Nama Barang <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="nama_am" name="nama_am" required="required" class="form-control col-md-7 col-xs-12 nama_am">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="kategori_am">Kategori <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select type="text" name="kategori_am" class="form-control col-md-7 col-xs-12 kategori_am" id="kategori_am" required="required">
                                <option value="Chinaware">Chinaware</option>
                                <option value="Silverware">Silverware</option>
                                 <option value="Glassware">Glassware</option>
                            </select>
                                <style type="text/css">
                                 option{margin-bottom:10px;}
                                </style>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nama_am">Stok <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="stok_am" name="stok_am" required="required" class="form-control col-md-7 col-xs-12 stok_am">
                        </div>
                      </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-btn-default" data-dismiss="modal">Cancel</button>
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
            <h4 class="modal-title" id="deleteModalLabel">Delete Data</h4>
        </div>
        <div class="modal-body">
          <div class="delete alert alert-danger"></div>
        </div>
        <div class="modal-footer">
            <form method="post" action="<?php echo base_url() ?>Restoran/kitchen/alat_makan/delete_data">
              <input type="hidden" name="kode_am" class="form-control kode_am" id="kode_am">
          <button type="button" class="btn btn-btn-default" data-dismiss="modal">Cancel</button>
          <button class="btn btn-danger" type="submit">Delete</button>
        </div>
        </form>
      </div>
    </div>
</div>
