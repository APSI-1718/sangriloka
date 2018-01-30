<div class="right_col" role="main">
<div class="clearfix"></div>

<div class="row">
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
      <div class="x_title">
        <h2>Data Menu </h2>
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


   <button type="button" class="btn btn-primary " data-toggle="modal" data-target="#tambahModal">Tambah Menu</button>
          <table id="datatable" class="table table-striped table-bordered">
            <thead>
              <tr>
                <th>No</th>
                <th>ID Menu</th>
                <th>Nama</th>
                <th>Harga</th>
                <th width="200px">Aksi</th>
              </tr>
            </thead>


            <tbody>
       
               <?php $i=1; foreach ($menu_foodcourt  as $value) { ?>
                      <tr>
                        <td><?php echo $i?></td>
                        <td><?php echo $value['id_menu']; ?></td>
                        <td><?php echo $value['nama_menu']; ?></td>
                        <td>Rp. <?php echo number_format($value['harga'],2) ?></td>
                        <td><?php
                        echo "
                            <button type='button' class='btn btn-warning tombol'
                              data-toggle='modal' data-target='#editModal'
                              data-id_menu='". $value['id_menu']."'
                              data-nama_menu='". $value['nama_menu']."'
                              data-harga='". $value['harga']."'>
                              Ubah
                            </button>&nbsp;&nbsp;
                            <button type='button' class='btn btn-danger tombol'
                              data-toggle='modal' data-target='#deleteModal'
                              data-id_menu='". $value['id_menu']."'
                              data-nama_menu='". $value['nama_menu']."'>
                              Hapus
                            </button>"?>
                            <a href="<?php echo base_url()?>kolam_renang/foodcourt/detail_menu?id=<?php echo $value['id_menu']?>" ><button type='button' class='btn btn-info tombol'>Detail</button></a>
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


      <!-- Modal Tambah Stok-->
<div class="modal fade" id="tambahModal" tabindex="-1" role="dialog" aria-labelledby="tambahModalLabel" >
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="tambahModalLabel">Form Tambah Data Menu</h4>
      </div>

       <!-- Modal body Stok-->
       <div class="modal-body">
        <form method="post" action="<?php echo base_url()?>kolam_renang/foodcourt/kelola_menu/tambah_menu">
        <div class="form-group">
            <label for="id_menu" class="control-label ">ID Menu </label>
          <input type="text" name="id_menu" class="form-control id_menu" id="id_menu" value="<?php echo $kode; ?>" readonly>
        </div>
          <div class="form-group">
            <label for="nama_menu" class="control-label ">Nama Menu </label>
            <input type="text" name="nama_menu" class="form-control" id="nama_menu" required oninvalid="this.setCustomValidity('Nama tidak boleh kosong')" oninput="setCustomValidity('')">
          </div>

          
           <div class="form-group">
            <label for="harga" class="control-label">Harga </label>
            <input type="text" name="harga" class="form-control" id="harga" required oninvalid="this.setCustomValidity('Harga tidak boleh kosong')" oninput="setCustomValidity('')">
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
            <h4 class="modal-title editmenu" id="editModalLabel">Form Ubah Data Menu</h4>
        </div>
        <div class="modal-body">
          <form method="post" action="<?php echo base_url() ?>kolam_renang/foodcourt/kelola_menu/ubah_menu">
            <div class="form-group">
              <label for="id_menu" class="control-label ">ID Menu </label>
            <input type="text" name="id_menu" class="form-control id_menu" id="id_menu" value="<?php echo $kode; ?>" readonly>
            </div>

            <div class="form-group">
              <label for="nama_menu" class="control-label">Nama Menu</label>
              <input type="text" name="nama_menu" class="form-control nama_menu" id="nama_menu">
            </div>

            
            <div class="form-group">
              <label for="harga" class="control-label">Harga</label>
              <input type="text" name="harga" class="form-control harga" id="harga">
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
            <h4 class="modal-title" id="deleteModalLabel">Hapus Data Menu</h4>
        </div>
        <div class="modal-body">
          <div class="deletemenu alert alert-danger"></div>
        </div>
        <div class="modal-footer">
            <form method="post" action="<?php echo base_url() ?>kolam_renang/foodcourt/kelola_menu/hapus_menu">
              <input type="hidden" name="id_menu" class="form-control id_menu" id="id_menu">
          <button type="button" class="btn btn-btn-default" data-dismiss="modal">Batal</button>
          <button class="btn btn-danger" type="submit">Hapus</button>
        </div>
        </form>
      </div>
    </div>
</div>

<!-- Modal tambah detail menu -->

<div class="modal fade" id="tambahDetail" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" >
    <div class="modal-dialog" role="document" >
      <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title " id="editModalLabel">Form Ubah Detail Menu</h4>
        </div>
        <div class="modal-body">
          <form method="post" action="<?php echo base_url() ?>kolam_renang/foodcourt/kelola_menu/tambah_detail_menu">

            
              <input type="hidden" name="id_detail_menu" class="form-control id_detail_menu" id="id_detail_menu">
              <input type="hidden" name="id_menu" class="form-control id_menu" id="id_menu">
              <div class="form-group">
              <label for="id_stok" class="control-label ">Nama Stok </label>
                  <div class="form-group">
                    <select type="text" name="id_stok" class="form-control id_stok" id="id_stok">
                    <?php foreach ($stok_foodcourt as $value){ ?>
                        <option value="<?php echo $value['id_stok']; ?>"><?php echo $value['nama_stok']; ?></option>
                    <?php } ?>
                    </select>
                  </div>
            </div>
          
            <div class="form-group">
              <label for="harga" class="control-label">jumlah</label>
              <input type="text" name="jumlahstok" class="form-control jumlahstok" id="jumlahstok">
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

