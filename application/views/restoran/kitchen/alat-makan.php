 <div class="right_col" role="main">
<div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Data Peralatan Makan <small>Users</small></h2>
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
              <div class="alert alert-success">
              <a href="#" class="close" data-dismiss="alert">&times;</a>
        <?php print_r($berhasil);?>
          </div>
        <?php } ?>

        <?php
              $berhasil = $this->session->flashdata('editdata');
              if ((isset($berhasil)) && (!empty($berhasil))) {?>
              <div class="alert alert-success">
              <a href="#" class="close" data-dismiss="alert">&times;</a>
        <?php print_r($berhasil);?>
          </div>
        <?php } ?>

        <?php
              $berhasil = $this->session->flashdata('deletedata');
              if ((isset($berhasil)) && (!empty($berhasil))) {?>
              <div class="alert alert-success">
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
                                <td><?php echo $i?></td>
                                <td><?php echo $value['kodeBrg']; ?></td>
                                <td><?php echo $value['namaBrg']; ?></td>
                                <td><?php echo $value['kategoriBrg']; ?></td>
                                <td><?php echo $value['stokBrg']; ?></td>
                                <td><?php
                                echo "
                                        <button type='button' class='btn btn-primary btn-xs tombol'
                                              data-toggle='modal' data-target='#editModal'
                                              data-kodeBrg='". $value['kodeBrg']."'
                                              data-namaBrg='". $value['namaBrg']."'
                                              data-kategoriBrg='". $value['kategoriBrg']."'
                                              data-stokBrg='". $value['stokBrg']."'>
                                              <i class='fa fa-pencil-square-o'></i> Edit
                                       </button>&nbsp;&nbsp;
                                      <button type='button' class='btn btn-danger btn-xs tombol'
                                          data-toggle='modal' data-target='#deleteModal'
                                          data-kodeBrg='". $value['kodeBrg']."'
                                          data-namaBrg='". $value['namaBrg']."'><i class='glyphicon glyphicon-trash'></i> Hapus
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
          <div class="x_content">
                    <br />
                    <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="post" action="<?php echo base_url()?>Restoran/kitchen/alat_makan/tambah_data">
                         <input type="hidden" name="kodeBrg" class="form-control kodeBrg" id="kodeBrg">
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="namaBrg">Nama Barang <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="namaBrg" name="namaBrg" required="required" class="form-control col-md-7 col-xs-12 namaBrg">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="kategoriBrg">Kategori <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select type="text" name="kategoriBrg" class="form-control col-md-7 col-xs-12 kategoriBrg" id="kategoriBrg" required="required">
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
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="namaBrg">Stok <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="stokBrg" name="stokBrg" required="required" class="form-control col-md-7 col-xs-12 stokBrg">
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-5">
              <button class="btn btn-primary" type="reset">Reset</button>
                          <button type="submit" class="btn btn-success">Submit</button>
                        </div>
                      </div>

                    </form>
                  </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
</div>




<!-- Modal tambah data2 -->

<div class="modal fade" id="Modal" tabindex="-1" role="dialog" aria-labelledby="tambahModalLabel" >
    <div class="modal-dialog modal" role="document">
      <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="tambahModalLabel">Tambah Alat Makan</h4>
        </div>

        <!-- Modal Body -->

        <div class="modal-body">
          <form method="post" action="<?php echo base_url()?>Restoran/kitchen/alat_makan/tambah_data">
            <input type="hidden" name="kodeBrg" class="form-control kodeBrg" id="kodeBrg">
            <div class="form-group">
              <label for="namaBrg" class="control-label">Nama barang :</label>
               <input  type="text" name="namaBrg" class="form-control" id="namaBrg" required oninvalid="this.setCustomValidity('Nama tidak boleh kosong')" oninput="setCustomValidity('')">

              <!-- <select name="namaBrg" class="form-control" id="namaBrg" required oninvalid="this.setCustomValidity('Nama tidak boleh kosong')" oninput="setCustomValidity('')">
                
                <?php $i=1; 

                foreach ($kitchen as $value) { ?>
                                
                    <option value="<?php echo $value['namaBrg']; ?>"><?php echo $value['namaBrg']; ?></option>

                                  <?php $i++; } ?>
              </select> -->
            </div>

            <div class="form-group">
              <label for="kategoriBrg" class="control-label">Kategori :</label>
              <select type="text" name="kategoriBrg" class="form-control kategoriBrg" id="kategoriBrg" style="width: 150px;">
                <option value="Chinaware">Chinaware</option>
                <option value="Silverware">Silverware</option>
                <option value="Glassware">Glassware</option>
              </select>
              <style type="text/css">
                option{margin-bottom:10px;}
              </style>
            </div>

            <div class="form-group">
              <label for="stokBrg" class="control-label">Stok :</label>
              <input type="text" name="stokBrg" class="form-control" id="stokBrg" required oninvalid="this.setCustomValidity('Stok tidak boleh kosong')" oninput="setCustomValidity('')">
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
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="kodeBrg">Kode Barang <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="kodeBrg" name="kodeBrg" required="required" class="form-control col-md-7 col-xs-12 kodeBrg" disabled>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="namaBrg">Nama Barang <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="namaBrg" name="namaBrg" required="required" class="form-control col-md-7 col-xs-12 namaBrg">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="kategoriBrg">Kategori <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select type="text" name="kategoriBrg" class="form-control col-md-7 col-xs-12 kategoriBrg" id="kategoriBrg" required="required">
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
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="namaBrg">Stok <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="stokBrg" name="stokBrg" required="required" class="form-control col-md-7 col-xs-12 stokBrg">
                        </div>
                      </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-btn-default" data-dismiss="modal">Cancel</button>
          <button type="submit" class="btn btn-primary">Update</button>
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
              <input type="hidden" name="kodeBrg" class="form-control kodeBrg" id="kodeBrg">
          <button type="button" class="btn btn-btn-default" data-dismiss="modal">Cancel</button>
          <button class="btn btn-danger" type="submit">Delete</button>
        </div>
        </form>
      </div>
    </div>
</div>
