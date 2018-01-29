<div class="right_col" role="main">
<div class="clearfix"></div>

<div class="row">
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
      <div class="x_title">
        <h2>Data Stok </h2>
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


       <button type="button" class="btn btn-primary " data-toggle="modal" data-target="#tambahModal">Tambah Stok</button>
              <table id="datatable" class="table table-striped table-bordered">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>ID Stok</th>
                    <th>Nama</th>
                    <th>Jenis</th>
                    <th>Jumlah</th>
                    <th>Satuan</th>
                    <th width="130px">Aksi</th>
                  </tr>
                </thead>


                <tbody>
           
                   <?php $i=1; foreach ($stok_foodcourt as $value) { ?>
                          <tr>
                          <td><?php echo $i?></td>
                          <td><?php echo $value['id_stok']; ?></td>
                          <td><?php echo $value['nama_stok']; ?></td>
                          <td><?php echo $value['jenis']; ?></td>
                          <td><?php echo $value['jumlah']; ?></td>
                          <td><?php echo $value['satuan']; ?></td>
                          <td><?php
                          echo "
                                  <button type='button' class='btn btn-warning tombol'
                                    data-toggle='modal'
                                    data-target='#editModal'
                                    data-id_stok='". $value['id_stok']."'
                                    data-nama_stok='". $value['nama_stok']."'
                                    data-jenis='". $value['jenis']."'
                                    data-jumlah='". $value['jumlah']."'
                                    data-satuan='". $value['satuan']."'>
                                    Ubah
                                  </button>&nbsp;&nbsp;
                                  <button type='button' class='btn btn-danger tombol'
                                    data-toggle='modal'
                                    data-target='#deleteModal'
                                    data-id_stok='". $value['id_stok']."'
                                    data-nama_stok='". $value['nama_stok']."'>
                                    Hapus
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


        <!-- Modal Tambah Stok-->
  <div class="modal fade" id="tambahModal" tabindex="-1" role="dialog" aria-labelledby="tambahModalLabel" >
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="tambahModalLabel">Form Tambah Data Stok</h4>
        </div>

         <!-- Modal body Stok-->
         <div class="modal-body">
          <form method="post" action="<?php echo base_url()?>kolam_renang/foodcourt/kelola_stok/tambah_stok">
            <div class="form-group">
              <label for="id_stok" class="control-label ">ID Stok </label>
            <input type="text" name="id_stok" class="form-control id_stok" id="id_stok" value="<?php echo $kode; ?>" readonly>
          </div>
            <div class="form-group">
              <label for="nama_stok" class="control-label ">Nama Stok </label>
              <input type="text" name="nama_stok" class="form-control" id="nama_stok" required oninvalid="this.setCustomValidity('Nama tidak boleh kosong')" oninput="setCustomValidity('')">
            </div>

            <div class="form-group">
              <label for="jenis" class="control-label">Jenis </label>
              <select type="text" name="jenis" class="form-control jenis" id="jenis">
                <option value="Buah">Buah</option>
                <option value="Sayur">Sayur</option>
                <option value="Bumbu">Bumbu</option>
              </select>
              <style type="text/css">
                option{margin-bottom:10px;}
              </style>
            </div>

             <div class="form-group">
              <label for="jumlah" class="control-label">Jumlah </label>
              <input type="number" name="jumlah" class="form-control" id="jumlah" required oninvalid="this.setCustomValidity('jumlah tidak boleh kosong')" oninput="setCustomValidity('')">
            </div>

             <div class="form-group">
              <label for="satuan" class="control-label">Satuan </label>
              <select type="text" name="satuan" class="form-control satuan" id="satuan" >
                <option value="Kilogram">Kilogram</option>
                <option value="Liter">Liter</option>
              </select>
              <style type="text/css">
                option{margin-bottom:10px;}
              </style>
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



<!-- Modal edit data -->

<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" >
    <div class="modal-dialog" role="document" >
      <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title editstok" id="editModalLabel">Edit Data</h4>
        </div>
        <div class="modal-body">
          <form method="post" action="<?php echo base_url() ?>kolam_renang/foodcourt/kelola_stok/ubah_stok">
            <div class="form-group">
              <label for="id_stok" class="control-label ">ID Stok </label>
            <input type="text" name="id_stok" class="form-control id_stok" id="id_stok" value="<?php echo $kode; ?>" readonly>
          </div>
            <div class="form-group">
              <label for="nama_stok" class="control-label">Nama Stok</label>
              <input type="text" name="nama_stok" class="form-control nama_stok" id="nama_stok">
            </div>

            <div class="form-group">
              <label for="jenis" class="control-label">Jenis </label>
              <select type="text" name="jenis" class="form-control jenis" id="jenis">
                <option value="Buah">Buah</option>
                <option value="Sayur">Sayur</option>
                <option value="Bumbu">Bumbu</option>
              </select>
              <style type="text/css">
                option{margin-bottom:10px;}
              </style>
            </div>

            <div class="form-group">
              <label for="jumlah" class="control-label">Jumlah</label>
              <input type="number" name="jumlah" class="form-control jumlah" id="jumlah">
            </div>

            <div class="form-group">
              <label for="satuan" class="control-label">Satuan </label>
              <select type="text" name="satuan" class="form-control satuan" id="satuan">
                <option value="Kilogram">Kilogram</option>
                <option value="Liter">Liter</option>
              </select>
              <style type="text/css">
                option{margin-bottom:10px;}
              </style>
            </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-btn-default" data-dismiss="modal">Batal</button>
          <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
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
            <h4 class="modal-title" id="deleteModalLabel">Hapus Data Stok</h4>
        </div>
        <div class="modal-body">
          <div class="deletestok alert alert-danger"></div>
        </div>
        <div class="modal-footer">
            <form method="post" action="<?php echo base_url() ?>kolam_renang/foodcourt/kelola_stok/hapus_stok">
              <input type="hidden" name="id_stok" class="form-control id_stok" id="id_stok">
          <button type="button" class="btn btn-btn-default" data-dismiss="modal">Batal</button>
          <button class="btn btn-danger" type="submit">Hapus</button>
        </div>
        </form>
      </div>
    </div>
</div>
