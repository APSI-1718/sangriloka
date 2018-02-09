7 
<div class="right_col" role="main">
<div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Data Pendaftaran</h2>
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
                          <th>Tgl Pendaftaran</th>
                          <th>No Pendaftaran</th>
                          <th>Nama Pendaftar</th>
                          <th>Tgl Checkin</th>
                          <th>Tgl Checkout</th>
                          <th>Kamar</th> 
                         <!--  <th>Harga</th> -->
                          <th>Rincian</th>
                          <th>Aksi</th>
                        </tr>
                      </thead>

                      <tbody>
                        <?php 
                        $i=1;
                        foreach ($pendaftaran as $key =>$value){ ?>
                        <tr>
                          <td><?php echo $i; ?></td>
                          <td><?php echo $value['tgl_pendaftaran'] ?></td>
                          <td><?php echo $value['id_pendaftar'] ?></td>
                          <td><?php echo $value['nama_pendaftar'] ?></td>
                          <td><?php echo $value['tgl_checkin'] ?></td>
                          <td><?php echo $value['tgl_checkout'] ?></td>
                          <td><?php echo $value['jenis']; ?></td> 
                          <td>            
                          <button class="btn btn-success" data-toggle='modal' data-target="#rincian<?php echo $value['id_pendaftar'];?>"><i style="color: white" aria-hidden="true">Rincian</i></button></td>

                          <td>
                          <button class="btn btn-info" data-toggle='modal' data-target="#edit<?php echo $value['id_pendaftar'];?>"><i style="color: white" aria-hidden="true">Ubah</i></button>
                            <a href='<?php echo base_url() ?>hotel/Pemesanan/Pendaftaran/hapus_pendaftar/<?php echo $value['id_pendaftar']?>' onclick="javascript: return confirm('Anda Yakin Ingin Menghapus Data?')"><button type="button" class="btn btn-danger"><i style="color: white"  aria-hidden="true">Hapus</i></button></a>
                          </td>  
                          
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
                    <form id="tambahmodal" data-parsley-validate class="form-horizontal form-label-left" method="post" action="<?php echo base_url() ?>hotel/Pemesanan/Pendaftaran/tambah_pendaftar">

                    <div class="form-group">
                        <label for="tgl_pendaftaran" class="control-label col-md-3 col-sm-3 col-xs-12">Tgl Pendaftaran</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <?php
                            $tanggal=date("Y/m/d");
                          ?>
                           <input type="text"  name="tgl_pendaftaran" required="required" class="form-control col-md-7 col-xs-12" readonly="date-now" value="<?php echo "$tanggal"?>">
                        </div>
                      </div>

                      <div class="form-group">
                        <label for="id" class="control-label col-md-3 col-sm-3 col-xs-12" >No Pendaftaran
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text"  name="id_pendaftar" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo "$kode"; ?>">
                        </div>
                      </div>
                     
                      <div class="form-group">
                        <label for="nama" class="control-label col-md-3 col-sm-3 col-xs-12" >Nama Lengkap
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text"  name="nama_pendaftar" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Jenis Kelamin</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <div  class="btn-group" data-toggle="buttons">
                            <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                              <input type="radio" name="jk" value="Pria"> &nbsp; Pria &nbsp;
                            </label>
                            <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                              <input type="radio" name="jk" value="Wanita"> Wanita
                            </label>
                          </div>
                        </div>
                      </div>

                       <div class="form-group">
                        <label for="alamat" class="control-label col-md-3 col-sm-3 col-xs-12">Alamat Lengkap</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <textarea name="alamat" class="resizable_textarea form-control"></textarea>
                        </div>
                      </div>

                        <div class="form-group">
                        <label for="notlp" class="control-label col-md-3 col-sm-3 col-xs-12">No Tlp</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                         <input type="text"  name="notlp" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                       <div class="form-group">
                        <label for="status" class="control-label col-md-3 col-sm-3 col-xs-12">Status Perkawinan</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text"  name="status" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      
                    
                      <div class="form-group">
                        <label for="email" class="control-label col-md-3 col-sm-3 col-xs-12">Email</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                           <input type="text"  name="email" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>     

                      <div class="form-group">
                        <label for="id" class="control-label col-md-3 col-sm-3 col-xs-12" >Kamar
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        <select name="jenis" class="form-control col-md-7 col-xs-12">
                          <?php 
                          foreach ($jenis_kamar as $key => $value) {
                            ?>
                            <option value="<?php echo $value['jenis'];?>"><?php echo $value['jenis'];?></option>
                            <?php 
                            }
                            ?>
                        </select>
                      </div>
                      </div>

                      <div class="form-group">
                        <label for="tgl_checkin" class="control-label col-md-3 col-sm-3 col-xs-12">Tgl Checkin</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                           <input type="date"  name="tgl_checkin" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>  

                       <div class="form-group">
                        <label for="tgl_checkout" class="control-label col-md-3 col-sm-3 col-xs-12" >Tgl Checkout
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                           <input type="date"  name="tgl_checkout" required="required" class="form-control col-md-7 col-xs-12">
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
    foreach ($pendaftaran as $key => $value) {
?>
  <div class="modal fade" id="rincian<?php echo $value['id_pendaftar'];?>" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog ">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Rincian Data</h4>
        </div>
        <div class="modal-body">
                    <table style="margin:20px auto;">
                            <tr>
                                <td>Tgl Pendaftaran</td>
                                <td>: <?php echo $value['tgl_pendaftaran']; ?></td>
                            </tr>
                             <tr>
                                <td>No Pendaftaran</td>
                                <td>: <?php echo $value['id_pendaftar'];?></td>
                             </tr>
                             <tr>
                                <td>Nama Lengkap</td>
                                <td>: <?php echo $value['nama_pendaftar'];?></td>
                             </tr>
                             <tr>
                             <td>Jenis Kelamin</td>
                             <td>: <?php if (($value['jk'])=="P") {
                                      echo "Pria";
                                    }
                                    else {
                                      echo "Wanita";
                                    }?></td>
                              </tr>
                             <tr>
                             <td>Alamat Lengkap</td>
                               <td>: <?php echo $value['alamat'];?></td>
                             </tr>
                             <tr>
                             <td>No Telpon</td>
                               <td> : <?php echo $value['notlp'];?></td>
                             </tr>
                              <tr>
                             <td>Status Perkawinan</td>
                               <td>: <?php echo $value['status'];?></td>
                             </tr>
                             <tr>
                             <td>Email</td>
                               <td>: <?php echo $value['email'];?></td>
                             </tr>
                              <tr>
                             <td>Kamar</td>
                               <td>: <?php echo $value['jenis'];?></td>
                             </tr>
                             <tr>
                             <td>Tgl Checkin</td>
                               <td> : <?php echo $value['tgl_checkin'];?></td>
                             </tr>
                             <tr>
                              <td>Tgl Checkout</td>
                                <td>: <?php echo $value['tgl_checkout'];?></td>
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
   <?php $i = 1; foreach($pendaftaran as $key => $value){ ?>
  <div class="modal fade" id="edit<?php echo $value['id_pendaftar'];?>" role="dialog" aria-labelledby="myModalLabel">
<div class="modal-dialog ">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Form Ubah Data</h4>
        </div>
        <div class="modal-body">
          <div class="x_content">
                    <br />
                  <form id="editmodal" data-parsley-validate class="form-horizontal form-label-left" method="post" action="<?php echo base_url() ?>hotel/Pemesanan/Pendaftaran/ubah_pendaftar">
                  <input type="hidden" name="id_pendaftar" value="<?php echo $value['id_pendaftar'];?>" class="form-control">

                    <div class="form-group">
                        <label for="tgl_pendaftaran" class="control-label col-md-3 col-sm-3 col-xs-12">Tgl Pendaftaran</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                           <input type="date-now"  name="tgl_pendaftaran" value="<?php echo $value['tgl_pendaftaran'];?>" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                      <div class="form-group">
                        <label for="id" class="control-label col-md-3 col-sm-3 col-xs-12" >No Pendaftaran
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" name="id_pendaftar" value="<?php echo $value['id_pendaftar'];?>" class="form-control col-md-7 col-xs-12" >
                        </div>
                      </div> 
                      
                      <div class="form-group">
                        <label for="nama" class="control-label col-md-3 col-sm-3 col-xs-12" >Nama Lengkap
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text"  name="nama_pendaftar" value="<?php echo $value['nama_pendaftar'];?>" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Jenis Kelamin</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <div  class="btn-group" data-toggle="buttons">
                            <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                              <input type="radio" name="jk" value="Pria <?php echo $value['jk'];?>" id="jk"> &nbsp; Pria &nbsp;
                            </label>
                            <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                              <input type="radio" name="jk" value="Wanita <?php echo $value['jk'];?>" id="jk"> Wanita
                            </label>
                          </div>
                        </div>
                      </div>

                       <div class="form-group">
                        <label for="alamat" class="control-label col-md-3 col-sm-3 col-xs-12">Alamat Lengkap</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type='textarea' name="alamat" value="<?php echo $value['alamat'];?>" class="resizable_textarea form-control alamat"></textarea>
                        </div>
                      </div>

                      <div class="form-group">
                        <label for="notlp" class="control-label col-md-3 col-sm-3 col-xs-12">No Tlp</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                         <input type="text"  name="notlp" value="<?php echo $value['notlp'];?>" class="form-control col-md-7 col-xs-12 notlp">
                        </div>
                      </div>
                    
                      <div class="form-group">
                        <label for="status" class="control-label col-md-3 col-sm-3 col-xs-12">Status Perkawinan</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text"  name="status" value="<?php echo $value['status'];?>" class="form-control col-md-7 col-xs-12 ">
                        </div>
                      </div>
                      
                      <div class="form-group">
                        <label for="email" class="control-label col-md-3 col-sm-3 col-xs-12">Email</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                           <input type="text"  name="email" class="form-control col-md-7 col-xs-12 email" value="<?php echo $value['email'];?>">
                        </div>
                      </div>

                      <div class="form-group">
                        <label for="jenis" class="control-label col-md-3 col-sm-3 col-xs-12">Kamar</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text"  name="jenis" class="form-control col-md-7 col-xs-12 jenis" value="<?php echo $value['jenis'];?>">
                        </div>
                      </div>      

                      <div class="form-group">
                        <label for="tgl_checkin" class="control-label col-md-3 col-sm-3 col-xs-12">Tgl Checkin</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="date"  name="tgl_checkin" class="form-control col-md-7 col-xs-12 tgl_checkin" value="<?php echo $value['tgl_checkin'];?>">
                        </div>
                      </div>     
                      
                      <div class="form-group">
                        <label for="tgl_checkout" class="control-label col-md-3 col-sm-3 col-xs-12" >Tgl Checkout
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                           <input type="date"  name="tgl_checkout" class="form-control col-md-7 col-xs-12 tgl_checkout" value="<?php echo $value['tgl_checkout'];?>">
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
