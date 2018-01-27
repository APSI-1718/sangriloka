
 <div class="right_col" role="main">
<div class="clearfix"></div>

<div class="row">
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
      <div class="x_title">
        <h2>Pengajuan Stok</h2>
        <ul class="nav navbar-right panel_toolbox">
          <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
          </li>
  
          <li><a class="close-link"><i class="fa fa-close"></i></a>
          </li>
        </ul>
        <div class="clearfix"></div>
      </div>
      <div class="x_content">

<?php
      $berhasil = $this->session->flashdata('tambahdata');
      if ((isset($berhasil)) && (!empty($berhasil))) {?>
      <div class="alert alert-success">
      <a href="#" class="close" data-dismiss="alert">&times;</a>
<?php print_r($berhasil);?>
  </div>
<?php } ?>
     <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Tambah Pengajuan</button>
            <table id="datatable" class="table table-striped table-bordered">
              <thead>
                <tr>
                  <th>No</th>
                  <th>ID Pengajuan</th>
                  <th>Tanggal</th>
                  <th>Status</th>
                  <th>Aksi</th>
                </tr>
              </thead>


              <tbody>
                <?php $i=1; foreach ($pengajuan_stok_foodcourt as $value) { ?>
                <tr>
                  <td><?php echo $i; ?></td>
                  <td><?php echo $value['id_pengajuan']; ?></td>
                  <td><?php echo $value['tanggal']; ?></td>
                  <td><?php echo $value['status_pengajuan']; ?></td>
                  <td><a href="<?php echo base_url()?>kolam_renang/foodcourt/detail_pengajuan_stok?id=<?php echo $value['id_pengajuan']?>" ><button type='button' class='btn btn-info tomboldm'>Detail</button></a>
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

        <!-- Modal -->
  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="tambahModalLabel" >
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="tambahModalLabel">Form Tambah Data Pengajuan</h4>
        </div>

         <!-- Modal body Stok-->
         <div class="modal-body">
          <form method="post" action="<?php echo base_url()?>kolam_renang/foodcourt/pengajuan_stok/tambah_pengajuan_stok">
                      <div class="form-group row">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">ID Pengajuan
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="id_pengajuan" class="form-control id_pengajuan" id="id_pengajuan" value="<?php echo $kode; ?>" readonly> 
                        </div>
                      </div>

                      <div class="form-group row">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Tanggal
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="date" name="tanggal" id="tanggal" id="last-name" name="last-name" required="required" class="form-control col-md-7 col-xs-12 tanggal">
                        </div>
                      </div>
                       <div class="form-group row">
                        <!-- <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Status
                        </label> -->
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="hidden" name="status_pengajuan" id="status_pengajuan" id="last-name" name="last-name" required="required" class="form-control col-md-7 col-xs-12 status_pengajuan">
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


