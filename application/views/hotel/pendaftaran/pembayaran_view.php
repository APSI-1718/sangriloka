 
  <div class="right_col" role="main">
<div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Data Pembayaran</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
              
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

            <!-- flashdata -->
             <?php
              $berhasil = $this->session->flashdata('tambahdata');
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
                          <th>No Pembayaran</th>                          
                          <th>Tgl Transaksi</th>
                          <th>Nama</th>
                          <th>Pembayaran Loudry</th>
                          <th>Total Harga</th>
                          <th>Rincian</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php 
                        $i=1;
                        foreach ($pembayaran_homestay as $key =>$value){ ?>
                          
                          <tr>
                          <td><?php echo $i; ?></td>
                            <td><?php echo $value['id_pembayaran'];?></td>
                            <td><?php echo $value['tgl_transaksi'] ?></td>
                            <td><?php echo $value['nama_pendaftar'] ?></td>
                            <td></td>
                            <td><?php echo $value['Total'] ?></td>
                            
                            <td><button class="btn btn-info" data-toggle='modal' data-target="#rincian<?php echo $value['id_pembayaran'];?>"><i style="color: white" aria-hidden="true">Rincian
                            </i></button>
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

<!-- tambah modal -->
<div class="modal fade" id="tambahModal" role="dialog">
    <div class="modal-dialog ">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Form Tambah Data</h4>
        </div>
        <div class="modal-body">
          <div class="x_content">
                    <br />
                    <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="post" action="Pembayaran/tambah_bayar">

                       <div class="form-group">
                        <label for="id" class="control-label col-md-3 col-sm-3 col-xs-12" >No Pembayaran
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text"  name="id_pembayaran" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo "$kode"; ?>">
                        </div>
                      </div>

                      <div class="form-group">
                        <label for="id" class="control-label col-md-3 col-sm-3 col-xs-12" >Nama Pemesan
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select name="nama_pendaftar" class="form-control col-md-7 col-xs-12">
                          <?php 
                          foreach ($pendaftaran as $key => $value) {

                            ?>
                            <option value="<?php echo $value['nama_pendaftar'];?>"><?php echo $value['nama_pendaftar'];?></option>
                          <?php
                          }
                          ?>
                            
                          </select>
                        </div>
                      </div>
                     
                      <div class="form-group">
                        <label for="tgl_transaksi" class="control-label col-md-3 col-sm-3 col-xs-12">Tanggal Transaksi</label>
                         <div class="col-md-6 col-sm-6 col-xs-12">
                          <?php
                            $tanggal=date("Y/m/d");
                          ?>
                           <input type="text"  name="tgl_transaksi" required="required" class="form-control col-md-7 col-xs-12" readonly="date-now" value="<?php echo "$tanggal"?>">
                         </div>
                      </div>
                
                      <div class="form-group">
                        <label for="Total" class="control-label col-md-3 col-sm-3 col-xs-12">Total Harga</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                         <input type="text"  name="Total" required="required" class="form-control col-md-7 col-xs-12">
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


</div>

  <!--  Modal rincian-->
<?php
$i = 1;
    foreach ($pembayaran_homestay as $key => $value) {
?>
  <div class="modal fade" id="rincian<?php echo $value['id_pembayaran'];?>" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog ">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Rincian Data</h4>
        </div>
        <div class="modal-body">
                    <table style="margin:20px auto;">
                            <tr>
                                <td>Tgl Transaksi</td>
                                <td>: <?php echo $value['tgl_transaksi']; ?></td>
                            </tr>
                             <tr>
                                <td>No Pembayaran</td>
                                <td>: <?php echo $value['id_pembayaran'];?></td>
                             </tr>
                             <tr>
                                <td>Nama Lengkap</td>
                                <td>: <?php echo $value['nama_pendaftar'];?></td>
                             </tr>
                             <tr>
                             <td>Total Harga</td>
                               <td>: <?php echo $value['Total'];?></td>
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


