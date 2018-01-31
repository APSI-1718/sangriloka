 
<div class="right_col" role="main">
<div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Data Fasilitas Tambahan</h2>
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
              $berhasil = $this->session->flashdata('ubahdata');
              if ((isset($berhasil)) && (!empty($berhasil))) {?>
              <div class="alert alert-success">
              <a href="#" class="close" data-dismiss="alert">&times;</a>
        <?php print_r($berhasil);?>
          </div>
        <?php } ?>

        <?php
              $berhasil = $this->session->flashdata('hapusdata');
              if ((isset($berhasil)) && (!empty($berhasil))) {?>
              <div class="alert alert-success">
              <a href="#" class="close" data-dismiss="alert">&times;</a>
        <?php print_r($berhasil);?>
          </div>
        <?php } ?>

             <button type="button" class="btn btn-info fa fa-plus-circle" data-toggle="modal" data-target="#tambahModal"> Tambah Data</button>
                    <table id="datatable" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>ID </th>
                          <th>Nama Fasilitas</th>
                         
                          <th>Aksi</th>
                        </tr>
                      </thead>

                      <tbody>
                        <?php 
                        $i=1;
                        foreach ($fasilitas as $key =>$value){ ?>
                          <tr>
                            <td><?php echo $i; ?></td>
                            <td><?php echo $value['id_fas'] ?></td>
                            <td><?php echo $value['nama_fas'] ?></td>
                            

                          <td>
                          <button class="btn btn-info" data-toggle='modal' data-target="#edit<?php echo $value['id_fas'];?>"><i style="color: white" aria-hidden="true">Ubah</i></button>

                            <a href='<?php echo base_url() ?>hotel/Pemesanan/Fasilitas/hapus_fasilitas/<?php echo $value['id_fas']?>' onclick="javascript: return confirm('Anda Yakin Ingin Menghapus Data?')"><button type="button" class="btn btn-danger"><i style="color: white" aria-hidden="true">Hapus</i></button></a></td>  
                          </tr>
                      <?php $i++;}?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
                </div>
            </div>
          </div>
        </div>

        <!-- tambahmodal -->
    <div class="modal fade" id="tambahModal" role="dialog" aria-labelledby="TambahModalLabel">
    <div class="modal-dialog ">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Form Tambah Data</h4>
        </div>
        <div class="modal-body">
          <div class="x_content">
                    <br />
                    <form id="tambahmodal" data-parsley-validate class="form-horizontal form-label-left" method="post" action="<?php echo base_url() ?>hotel/Pemesanan/Fasilitas/tambah_fasilitas">

                      <div class="form-group">
                        <label for="id" class="control-label col-md-3 col-sm-3 col-xs-12" >ID
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text"  name="id_fas" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo "$kode"; ?>">
                        </div>
                      </div>
                     
                      <div class="form-group">
                        <label for="nama_fas" class="control-label col-md-3 col-sm-3 col-xs-12" >Nama Fasilitas</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text"  name="nama_fas" required="required" class="form-control col-md-7 col-xs-12" id="id_fas">
                        </div>
                      </div>
\
                      <!-- <div class="form-group">
                        <label for="jml" class="control-label col-md-3 col-sm-3 col-xs-12">Jumlah</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text"  name="jml" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                      <div class="form-group">
                        <label for="harga" class="control-label col-md-3 col-sm-3 col-xs-12">Harga</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                         <input type="text"  name="harga" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div> -->

                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">

                          <button class="btn btn-danger" type="reset">Riset</button>
                          <button type="submit" class="btn btn-success">Simpan</button>
                        </div>
                      </div>

                    </form>
                  </div>

        </div>
        <div class="modal-footer">
        </div>
        </div>
      </div>
    </div>
  </div>


</div>

  <!--  Modal rincian-->
<!-- <?php
$i = 1;
    foreach ($fasilitas as $key => $value) {
?>
  <div class="modal fade" id="rincian<?php echo $value['id_fas'];?>" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog ">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Rincian Data Fasilitas</h4>
        </div>
        <div class="modal-body">
                    <table style="margin:20px auto;">
                            <tr>
                                <td>ID</td>
                                <td>: <?php echo $value['id_fas']; ?></td>
                            </tr>
                             <tr>
                                <td>Nama Fasilitas</td>
                                <td>: <?php echo $value['nama_fas'];?></td>
                             </tr>
                             <tr>
                                <td>Jumlah</td>
                                <td>: <?php echo $value['jml'];?></td>
                             </tr>
                             <tr>
                             <td>Harga</td>
                               <td>: <?php echo $value['harga'];?></td>
                             </tr>
                             
                        </label>
                       
                    </table>
                  </div>

        </div>
        <div class="modal-footer">
        </div>
        </div>
      </div>
    </div>
  </div>
  <?php
$i++;
}
?> -->

<!-- modal edit -->
   <?php $i = 1; foreach($fasilitas as $key => $value){ ?>
  <div class="modal fade" id="edit<?php echo $value['id_fas'];?>" role="dialog" aria-labelledby="myModalLabel">
<div class="modal-dialog ">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Form Ubah Data</h4>
        </div>
        <div class="modal-body">
          <div class="x_content">
                    <br />
                  <form id="editmodal" data-parsley-validate class="form-horizontal form-label-left" method="post" action="<?php echo base_url() ?>hotel/Pemesanan/Fasilitas/ubah_fasilitas">
                  <input type="hidden" name="id_fas" value="<?php echo $value['id_fas'];?>" class="form-control">

                   <!--  <div class="form-group">
                        <label for="id_fas" class="control-label col-md-3 col-sm-3 col-xs-12">ID</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                           <input type="text"  name="id_fas" value="<?php echo $value['id_fas'];?>" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div> -->

                      <div class="form-group">
                        <label for="nama_fas" class="control-label col-md-3 col-sm-3 col-xs-12" >Nama Fasilitas
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" name="nama_fas" value="<?php echo $value['nama_fas'];?>" class="form-control col-md-7 col-xs-12 " >
                        </div>
                      </div> 
                      
                      <!-- <div class="form-group">
                        <label for="jml" class="control-label col-md-3 col-sm-3 col-xs-12" >Jumlah
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text"  name="jml" value="<?php echo $value['jml'];?>" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                      <div class="form-group">
                        <label for="harga" class="control-label col-md-3 col-sm-3 col-xs-12">Harga</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text"  name="harga" value="<?php echo $value['harga'];?>" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div> -->                                              
                        
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <button data-dismiss="modal" class="btn btn-primary btn-md">Batal</button>
                          <button class="btn btn-success">Simpan</button>
                        </div>
                      </div>
                    </form>
                   
                  </div>
        </div>
        <div class="modal-footer">
        </div>
        </div>
        </div>
        </div>
          <?php
$i++;} ?>
