 
<div class="right_col" role="main">
<div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Data Kamar</h2>
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

             <button type="button" class="btn btn-info fa fa-plus-circle" data-toggle="modal" data-target="#tambahModal"> Kamar</button>
                    <table id="datatable" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>#</th>
                          <td>No Kamar</td><!-- 
                          <th>Jenis</th> -->
                          <th>Lokasi</th>
                          <th>Status</th>
                          <th>Rincian</th>
                          <th>Aksi</th>
                        </tr>
                      </thead>

                      <tbody>
                        <?php 
                        $i=1;
                        foreach ($kamar as $key =>$value){ ?>
                          <tr>
                            <td><?php echo $i; ?></td>
                            <td><?php echo $value['no_kmr'] ?></td><!-- 
                            <td><?php echo $value['jenis'] ?></td> -->
                            <td><?php echo $value['lokasi'] ?></td>
                            <td><button class="btn btn-info" data-toggle='modal' data-target="#Status<?php echo $value['id_kmr'];?>">
                              <?php if ($value['no_kmr']==0) {
                                echo "Verifikasi";
                              }
                              else {
                                echo "Terverifikasi";
                              } ?></button>
                            </td>    
                            <td>
                          <button class="btn btn-info" data-toggle='modal' data-target="#rincian<?php echo $value['id_kmr'];?>"><i style="color: white" class="fa fa-file-text-o" aria-hidden="true"></i></button></td>

                          <td>
                          <button class="btn btn-info" data-toggle='modal' data-target="#edit<?php echo $value['id_kmr'];?>"><i style="color: white" class="fa fa-pencil-square-o" aria-hidden="true"></i></button>

                            <a href='<?php echo base_url() ?>hotel/Pemesanan/Kamar/hapus_kamar/<?php echo $value['id_kmr']?>' onclick="javascript: return confirm('Anda Yakin Ingin Menghapus Data?')"><button type="button" class="btn btn-danger"><i style="color: white" class="fa fa-trash-o" aria-hidden="true"></i></button></a></td>  
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
          <h4 class="modal-title">Form Kamar</h4>
        </div>
        <div class="modal-body">
          <div class="x_content">
                    <br />
                    <form id="tambahmodal" data-parsley-validate class="form-horizontal form-label-left" method="post" action="<?php echo base_url() ?>hotel/Pemesanan/Kamar/tambah_kamar">

                      <div class="form-group">
                        <label for="id_kmr" class="control-label col-md-3 col-sm-3 col-xs-12" >ID</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text"  name="id_kmr" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo "$kode"; ?>">
                        </div>
                      </div>
                                        
                      <div class="form-group">
                        <label for="no_kmr" class="control-label col-md-3 col-sm-3 col-xs-12" >No Kamar</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text"  name="no_kmr" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
\
                      <div class="form-group">
                        <label for="jenis" class="control-label col-md-3 col-sm-3 col-xs-12">Jenis</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                         <select name="jenis" class="form-control col-md-7 col-xs-12">
                          <?php 
                          foreach ($jenis as $key => $value) {
                            ?>
                            <option value="<?php echo $value['jenis'];?>"><?php echo $value['jenis'];?></option>
                            <?php
                            }
                            ?>
                        </select>
                        </div>
                      </div>

                      <div class="form-group">
                        <label for="lokasi" class="control-label col-md-3 col-sm-3 col-xs-12">Lokasi</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text"  name="lokasi" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

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
<?php
$i = 1;
    foreach ($kamar as $key => $value) {
?>
  <div class="modal fade" id="rincian<?php echo $value['id_kmr'];?>" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog ">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Rincian Data Kamar</h4>
        </div>
        <div class="modal-body">
                    <table style="margin:20px auto;">
                            
                            <tr>
                                <td>ID Kamar</td>
                                <td>: <?php echo $value['id_kmr'];?></td>
                             </tr>
                             <tr>
                             <tr>
                                <td>No Kamar</td>
                                <td>: <?php echo $value['no_kmr'];?></td>
                             </tr>
                             <tr>
                                <td>Jenis</td>
                                <td>: <?php echo $value['jenis'];?></td>
                             </tr>
                             <tr>
                                <td>Lokasi</td>
                                <td>: <?php echo $value['lokasi'];?></td>
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
?>

<!-- modal edit -->
   <?php $i = 1; foreach($kamar as $key => $value){ ?>
  <div class="modal fade" id="edit<?php echo $value['id_kmr'];?>" role="dialog" aria-labelledby="myModalLabel">
<div class="modal-dialog ">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Form Ubah Data Kamar</h4>
        </div>
        <div class="modal-body">
          <div class="x_content">
                    <br />
                  <form id="editmodal" data-parsley-validate class="form-horizontal form-label-left" method="post" action="<?php echo base_url() ?>hotel/Pemesanan/Kamar/ubah_kamar">

                    
                      <div class="form-group">
                        <label for="no_kmr" class="control-label col-md-3 col-sm-3 col-xs-12" >No Kamar
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" name="no_kmr" value="<?php echo $value['no_kmr'];?>" class="form-control col-md-7 col-xs-12 " >
                        </div>
                      </div> 
                      
                      <div class="form-group">
                        <label for="jenis" class="control-label col-md-3 col-sm-3 col-xs-12" >Jenis
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text"  name="jenis" value="<?php echo $value['jenis'];?>" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                      <div class="form-group">
                        <label for="lokasi" class="control-label col-md-3 col-sm-3 col-xs-12" >Lokasi
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text"  name="lokasi" value="<?php echo $value['lokasi'];?>" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

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
