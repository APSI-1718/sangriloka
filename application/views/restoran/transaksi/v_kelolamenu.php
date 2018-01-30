<!-- page content -->
<script>
function readURL(input) { // Mulai membaca inputan gambar
if (input.files && input.files[0]) {
var reader = new FileReader(); // Membuat variabel reader untuk API FileReader
 
reader.onload = function (e) { // Mulai pembacaan file
$('#preview_gambar') // Tampilkan gambar yang dibaca ke area id #preview_gambar
.attr('src', e.target.result)
.width(150); // Menentukan lebar gambar preview (dalam pixel)
//.height(200); // Jika ingin menentukan lebar gambar silahkan aktifkan perintah pada baris ini
};
 
reader.readAsDataURL(input.files[0]);
}
}
</script>

 <!-- Flash Data -->

        <?php
              $berhasil = $this->session->flashdata('tambahdata');
              if ((isset($berhasil)) && (!empty($berhasil))) {?>
              <div class="alert alert-info alertkelmenu">
              <a href="#" class="close" data-dismiss="alert">&times;</a>
        <?php print_r($berhasil);?>
          </div>
        <?php } ?>

        <?php
              $berhasil = $this->session->flashdata('editdata');
              if ((isset($berhasil)) && (!empty($berhasil))) {?>
              <div class="alert alert-info alertkelmenu">
              <a href="#" class="close" data-dismiss="alert">&times;</a>
        <?php print_r($berhasil);?>
          </div>
        <?php } ?>

        <?php
              $berhasil = $this->session->flashdata('deletedata');
              if ((isset($berhasil)) && (!empty($berhasil))) {?>
              <div class="alert alert-info alertkelmenu">
              <a href="#" class="close" data-dismiss="alert">&times;</a>
        <?php print_r($berhasil);?>
          </div>
        <?php } ?>

        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3></h3>
              </div>
            </div>

<div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Tambah Menu Makanan</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="post" action="<?php echo base_url()?>restoran/transaksi/kelola_menu/tambah_menu">
                      <input type="hidden" name="id_menu">
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nama_menu">Nama Menu <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="nama_menu" name="nama_menu" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="jenis_menu">Jenis Menu <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select type="text" id="jenis_menu" name="jenis_menu" required="required" class="form-control col-md-7 col-xs-12">
                            <option>Pilih jenis menu</option>
                            <option value="Appetizer">Appetizer</option>
                            <option value="Main_Course">Main Course</option>
                            <option value="Dessert">Dessert</option>
                            <option value="Minuman">Minuman</option>
                          </select>
                        </div>
                        </div>
                    
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="harga_menu">Harga <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="harga_menu" name="harga_menu" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                        </div>

                       

                        <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="gambar_menu">Gambar Makanan <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="file" onchange="readURL(this);" name="gambar_menu"><br>
                          <img src="#" id="preview_gambar" alt="preview_gambar">
                        </div>
                        </div>

                      
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                        <button class="btn btn-primary" type="reset">Batal</button>
                          <button type="submit" class="btn btn-success">Simpan</button>
                        </div>
                      </div>

                    </form>
                  </div>
                </div>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Daftar Menu Makanan</h2>
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
                          <th>No</th>
                          <th>ID Menu</th>
                          <th>Nama Makanan</th>
                          <th>Jenis Makanan</th>
                          <th>Harga</th>
                          <th>Aksi</th>
                          
                        </tr>
                      </thead>

                      <tbody>
                 
                       <?php $i=1; foreach ($menumkn as $value) { ?>
                                <tr>
                                <td><?php echo "$i."?></td>
                                <td><?php echo $value['id_menu']; ?></td>
                                <td><?php echo $value['nama_menu']; ?></td>
                                <td><?php echo $value['jenis_menu']; ?></td>
                                <td> Rp. <?php echo number_format($value['harga_menu'],2,",",".");?></td>
                                <td><button class="btn btn-primary btn-sm tombolmenu" data-toggle="modal" data-target="#editmenuModal"
                                  data-id_menu="<?php echo $value['id_menu']?>"
                                  data-nama_menu="<?php echo $value['nama_menu']?>"
                                  data-jenis_menu="<?php echo $value['jenis_menu']?>"
                                  data-harga_menu="<?php echo $value['harga_menu']?>"
                                  data-gambar_menu="<?php echo $value['gambar_menu']?>"><i class="fa fa-edit"></i> Edit</button>
                                  <button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deletemenuModal"
                                  data-id_menu="<?php echo $value['id_menu']?>"
                                  data-nama_menu="<?php echo $value['nama_menu']?>"><i class="fa fa-trash"></i> Hapus</button></td>
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
              </div>


    <!-- Modal edit data -->

<div class="modal fade" id="editmenuModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" >
    <div class="modal-dialog" role="document" >
      <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title editmenu" id="editModalLabel">Edit Data</h4>
        </div>
        <div class="modal-body">
          <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="post" action="<?php echo base_url() ?>Restoran/transaksi/kelola_menu/edit_data">
                      
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="gambar_menu">
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="file" id="gambar_menu" name="gambar_menu" required="required" class="form-control col-md-7 col-xs-12 gambar_menu">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="id_menu">ID Menu <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="id_menu" name="id_menu" required="required" class="form-control col-md-7 col-xs-12 id_menu" readonly="true">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nama_menu">Nama Menu <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="nama_menu" name="nama_menu" required="required" class="form-control col-md-7 col-xs-12 nama_menu">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="jenis_menu">Jenis Menu <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select type="text" name="jenis_menu" class="form-control col-md-7 col-xs-12 jenis_menu" id="jenis_menu" required="required">
                                  <option>Pilih jenis menu</option>
                                  <option value="Appetizer">Appetizer</option>
                                  <option value="Main_Course">Main Course</option>
                                  <option value="Dessert">Dessert</option>
                                  <option value="Minuman">Minuman</option>
                            </select>
                                <style type="text/css">
                                 option{margin-bottom:10px;}
                                </style>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="harga_menu">Harga <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="harga_menu" name="harga_menu" required="required" class="form-control col-md-7 col-xs-12 harga_menu">
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

<div class="modal fade" id="deletemenuModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" >
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="deleteModalLabel">Delete Data</h4>
        </div>
        <div class="modal-body">
          <div class="deletemenu alert alert-danger"></div>
        </div>
        <div class="modal-footer">
            <form method="post" action="#">
              <input type="hidden" name="id_menu" class="form-control id_menu" id="id_menu">
          <button type="button" class="btn btn-btn-default" data-dismiss="modal">Cancel</button>
          <button class="btn btn-danger" type="submit">Delete</button>
        </div>
        </form>
      </div>
    </div>
</div>
