
 <div class="right_col" role="main">
<div class="clearfix"></div>

<div class="row">
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
      <div class="x_title">
        <h2>Detail Menu </h2>
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
    
<div id="detail">
  <form method="" action="" id="detail" class="form-horizontal form-label-left a">
    <?php foreach ($data2 as $key => $value) { ?>
    <div class="form-group">
        <label class="control-label col-md-2 col-sm-3 col-xs-12" for="first-name">ID Menu <span class="required"></span>
        </label>
            <div class="col-md-3 col-sm-6 col-xs-12">

                <input type="text" readonly  id="id_menu" name="id_menu" class="form-control col-md-7 col-xs-12 id_menu" value="<?php echo $value['id_menu']?>">
              
            </div>

    </div>

    <div class="form-group"><label class="control-label col-md-2 col-sm-3 col-xs-12" for="first-name">Menu <span class="required"></span>
        </label>
            <div class="col-md-3 col-sm-6 col-xs-12">
                <input type="text" readonly  id="nama-menu" name="nama_menu" required="required" class="form-control col-md-7 col-xs-12 nama_menu" value="<?php echo $value['nama_menu']?>">
            </div>
    </div>

    <div class="form-group">
        <label class="control-label col-md-2 col-sm-3 col-xs-12" for="first-name">Harga <span class="required"></span>
        </label>
            <div class="col-md-3 col-sm-6 col-xs-12">
                <input type="text" readonly id="harga" required="required" class="form-control col-md-7 col-xs-12" value="Rp. <?php echo number_format($value['harga'],2)?>" name="harga" placeholder="Rp.">
            </div>
    </div>
      <?php } ?>
</form> 
</div>
 

             <button type="button" class="btn btn-info " data-toggle="modal" data-target="#tambahModal">Tambah Detail</button>
                    
                    <table class="table table-bordered">
                      <thead>

                        <tr>
                          <th>Nama Stok</th>
                          <th>Jumlah</th>
                          <th>Satuan</th>
                          <th>Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php $i=1; foreach ($data as $value) { ?>
                        <tr>
                          <td><?php echo $value['nama_stok']?></td>
                          <td><?php echo $value['jumlahstok']?></td>
                          <td><?php echo $value['satuan']?></td>
                          <td><?php
                                echo "
                                  <button type='button' class='btn btn-warning tomboldm'
                                    data-toggle='modal' data-target='#editModal'
                                    data-id_detail_menu='". $value['id_detail_menu']."'data-id_stok='". $value['id_stok']."'                                      
                                    data-nama_stok='". $value['nama_stok']."'
                                    data-jumlahstok='". $value['jumlahstok']."'>
                                    Ubah
                                  </button>&nbsp;&nbsp;
                                  <button type='button' class='btn btn-danger tomboldm'
                                    data-toggle='modal' data-target='#deleteModal'
                                    data-id_detail_menu='". $value['id_detail_menu']."'
                                    data-nama_stok='". $value['nama_stok']."'>
                                    Hapus
                                  </button>
                                      
                                       "?>   </td>
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

        <!-- Modal -->
  <div class="modal fade" id="tambahModal" tabindex="-1" role="dialog" aria-labelledby="tambahModalLabel" >
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="tambahModalLabel">Form Tambah Detail Menu</h4>
        </div>

         <!-- Modal body Stok-->
         <div class="modal-body">
          <form method="post" action="<?php echo base_url()?>kolam_renang/foodcourt/detail_menu/tambah_detail_menu">
              <?php foreach ($data2 as $value){ ?>
                <input type="hidden" name="id_menu" value="<?php echo $value['id_menu']; ?>" class="form-control" id="jumlah" required oninvalid="this.setCustomValidity('jumlah tidak boleh kosong')" oninput="setCustomValidity('')" readonly>
              <?php } ?>
            <div class="form-group">
              <label for="id_stok" class="control-label ">Nama Stok </label>
                  <div class="form-group">
                    <select type="text" name="id_stok" class="form-control id_stok" id="id_stok">
                    <?php foreach ($stok as $value){ ?>
                        <option value="<?php echo $value['id_stok']; ?>"><?php echo $value['nama_stok']; ?></option>
                    <?php } ?>
                    </select>
                  </div>
            </div>
             <div class="form-group">
              <label for="jumlahstok" class="control-label">Jumlah </label>
              <input type="number" name="jumlahstok" class="form-control" id="jumlahstok" required oninvalid="this.setCustomValidity('jumlah tidak boleh kosong')" oninput="setCustomValidity('')">
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
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title editdm" id="editModalLabel">Edit Data</h4>
        </div>

         <!-- Modal body Stok-->
          <div class="modal-body">
          <form method="post" action="<?php echo base_url() ?>kolam_renang/foodcourt/detail_menu/ubah_detail_menu">

            <div class="form-group">
              <input type="hidden" name="id_detail_menu" class="form-control id_detail_menu" id="id_detail_menu">
              <?php foreach ($data2 as $value){ ?>
                <input type="hidden" name="id_menu" value="<?php echo $value['id_menu']; ?>" class="form-control" id="jumlah" required oninvalid="this.setCustomValidity('jumlah tidak boleh kosong')" oninput="setCustomValidity('')" readonly>
              <?php } ?>
            </div>
            <div class="form-group">
              <label for="id_stok" class="control-label ">Nama Stok </label>
                  <div class="form-group">
                    <select type="text" name="id_stok" class="form-control id_stok" id="id_stok">
                    <?php foreach ($stok as $value){ ?>
                        <option value="<?php echo $value['id_stok']; ?>"><?php echo $value['nama_stok']; ?></option>
                    <?php } ?>
                    </select>
                  </div>
            </div>

            <div class="form-group">
              <label for="jumlahstok" class="control-label">Jumlah</label>
              <input type="number" name="jumlahstok" class="form-control jumlahstok" id="jumlahstok">
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
            <h4 class="modal-title" id="deleteModalLabel">Hapus Detail Menu</h4>
        </div>
        <div class="modal-body">
          <div class="deletedm alert alert-danger"></div>
        </div>
        <div class="modal-footer">
            <form method="post" action="<?php echo base_url() ?>kolam_renang/foodcourt/detail_menu/hapus_detail_menu">
              <input type="hidden" name="id_detail_menu" class="form-control id_detail_menu" id="id_detail_menu">
          <button type="button" class="btn btn-btn-default" data-dismiss="modal">Batal</button>
          <button class="btn btn-danger" type="submit">Hapus</button>
        </div>
        </form>
      </div>
    </div>
</div>
