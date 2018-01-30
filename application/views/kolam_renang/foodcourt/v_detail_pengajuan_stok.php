
 <div class="right_col" role="main">
<div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Detail Pengajuan </h2>
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
              $berhasil = $this->session->flashdata('tambah_data');
              if ((isset($berhasil)) && (!empty($berhasil))) {?>
              <div class="alert alert-success">
              <a href="#" class="close" data-dismiss="alert">&times;</a>
        <?php print_r($berhasil);?>
          </div>
        <?php } ?>

        <?php
              $berhasil = $this->session->flashdata('edit_data');
              if ((isset($berhasil)) && (!empty($berhasil))) {?>
              <div class="alert alert-success">
              <a href="#" class="close" data-dismiss="alert">&times;</a>
        <?php print_r($berhasil);?>
          </div>
        <?php } ?>

        <?php
              $berhasil = $this->session->flashdata('delete_data');
              if ((isset($berhasil)) && (!empty($berhasil))) {?>
              <div class="alert alert-success">
              <a href="#" class="close" data-dismiss="alert">&times;</a>
        <?php print_r($berhasil);?>
          </div>
        <?php } ?>


    <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
      <?php foreach ($data2 as $key => $value) { ?>
    <div class="form-group">
        <label class="control-label col-md-2 col-sm-3 col-xs-12" for="first-name">ID Pengajuan <span class="required"></span>
        </label>
            <div class="col-md-3 col-sm-6 col-xs-12">
                <input type="text" id="id_penjualan" name="id_pengajuan" required="required" class="form-control col-md-7 col-xs-12 id_pengajuan" value="<?php echo $value['id_pengajuan']?>" readonly>
            </div>
    </div>

    <div class="form-group">
        <label class="control-label col-md-2 col-sm-3 col-xs-12" for="first-name">Tanggal <span class="required"></span>
        </label>
            <div class="col-md-3 col-sm-6 col-xs-12">
                <input type="text" id="tanggal" name="tanggal" required="required" class="form-control col-md-7 col-xs-12 tanggal" value="<?php echo $value['tanggal']?>" readonly>
            </div>
    </div>
    <?php } ?>
</form>  
             <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Tambah detail</button>
                    
                    <table class="table table-bordered">
                      <thead>
                      <tr>
                          <th>No</th>
                          <th>Nama</th>
                          <th>Jumlah</th>
                          <th>Satuan</th>
                          <th>Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php $no = 1; foreach ($data as $value) { ?>
                        <tr>
                          <td><?php echo $no;?></td>
                          <td><?php echo $value['nama_stok'];?></td>
                          <td><?php echo $value['jumlahps'];?></td>
                          <td><?php echo $value['satuan'];?></td>
                          <td><?php echo 
                                      "<button type='button' class='btn btn-warning tomboldm'
                                        data-toggle='modal'
                                        data-target='#editModal'
                                        data-id_detail_pengajuan='". $value['id_detail_pengajuan']."'
                                        data-id_stok='". $value['id_stok']."'
                                        data-nama_stok='". $value['nama_stok']."'
                                        data-id_pengajuan='". $value['id_pengajuan']."'
                                        data-id_penerimaan='". $value['id_penerimaan']."'
                                        data-jumlahps='". $value['jumlahps']."'>
                                              Ubah
                                       </button>&nbsp;&nbsp;
                                       <button type='button' class='btn btn-danger tomboldm'
                                        data-toggle='modal'
                                        data-target='#deleteModal'
                                        data-id_detail_pengajuan='". $value['id_detail_pengajuan']."'
                                        data-id_stok='". $value['id_stok']."'
                                        data-nama_stok='". $value['nama_stok']."'
                                         >
                                          Hapus
                                      </button>" ?>
                          </td>
                        </tr>
                       <?php  $no++; } ?>
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
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="tambahModalLabel" >
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="tambahModalLabel">Form Tambah Detail Pengajuan</h4>
        </div>

         <!-- Modal body Stok-->
         <div class="modal-body">
          <form method="post" action="<?php echo base_url()?>kolam_renang/foodcourt/detail_pengajuan_stok/tambah_detail_pengajuan_stok">
          <?php foreach ($data2 as $value){ ?>
                <input type="hidden" name="id_pengajuan" value="<?php echo $value['id_pengajuan']; ?>" class="form-control" id="jumlah" required oninvalid="this.setCustomValidity('jumlah tidak boleh kosong')" oninput="setCustomValidity('')" readonly>
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
              <label for="jumlahps" class="control-label">Jumlah </label>
              <input type="number" name="jumlahps" class="form-control jumlahps" id="jumlahps" required oninvalid="this.setCustomValidity('jumlah tidak boleh kosong')" oninput="setCustomValidity('')">
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
            <h4 class="modal-title editps" id="editModalLabel">Form Ubah Detail Pengajuan</h4>
        </div>
        <div class="modal-body">
          <form method="post" action="<?php echo base_url() ?>kolam_renang/foodcourt/detail_pengajuan_stok/ubah_detail_pengajuan_stok">

          <?php foreach ($data2 as $value){ ?>
                <input type="hidden" name="id_pengajuan" value="<?php echo $value['id_pengajuan']; ?>" class="form-control" id="jumlah" required oninvalid="this.setCustomValidity('jumlah tidak boleh kosong')" oninput="setCustomValidity('')" readonly>
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
              <label for="jumlahps" class="control-label">Jumlah </label>
              <input type="number" name="jumlahps" class="form-control jumlahps" id="jumlahps" required oninvalid="this.setCustomValidity('jumlah tidak boleh kosong')" oninput="setCustomValidity('')">
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
            <h4 class="modal-title" id="deleteModalLabel">Hapus Detail Pengajuan</h4>
        </div>
        <div class="modal-body">
          <div class="deleteps alert alert-danger">
            <!-- <p><?php echo "Apakah Anda yakin akan menghapus data ?" ?></p> -->
          </div>
        </div>
        <div class="modal-footer">
            <form method="post" action="<?php echo base_url() ?>kolam_renang/foodcourt/detail_pengajuan_stok/hapus_detail_pengajuan_stok">
              <input type="hidden" name="id_detail_pengajuan" class="form-control id_detail_pengajuan" id="id_detail_pengajuan">
          <button type="button" class="btn btn-btn-default" data-dismiss="modal">Batal</button>
          <button class="btn btn-danger" type="submit">Hapus</button>
        </div>
        </form>
      </div>
    </div>
</div>

