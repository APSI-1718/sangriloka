 
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
             <button type="button" class="btn btn-info fa fa-plus-circle" data-toggle="modal" data-target="#tambahModal">Form Pembayaran</button>
                    <table id="datatable" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                        <th>No</th>
                          <th>ID</th>
                          <!-- <th>Nama</th> -->
                          <th>tgl transaksi</th>
                          <th>pembayaran loudry</th>
                          <th>total harga</th>
                          <th>keterangan</th>
                          <th>Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php 
                        $i=1;
                        foreach ($pembayaran as $key =>$value){ ?>
                          
                          <tr>
                          <td><?php echo $i; ?></td>
                            <td><?php echo $value['id_pembayaran'];?></td>
                            <!-- <td><?php echo $value['nama_pendaftar'] ?></td> -->
                            <td><?php echo $value['tgl_transaksi'] ?></td>
                            <td><?php echo $value['pembayaran_loudry'] ?></td>
                            <td><?php echo $value['totalharga'] ?></td>
                            <td><?php echo $value['keterangan'] ?></td>
                            <td><button class="btn btn-info" data-toggle='modal' data-target="#rincian<?php echo $value['id_pembayaran'];?>"><i style="color: white" class="fa fa-file-text-o" aria-hidden="true"></i></button>

                          
                          <button class="btn btn-info" data-toggle='modal' data-target="#edit<?php echo $value['id_pembayaran'];?>"><i style="color: white" class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                          <a href='<?php echo base_url() ?>hotel/reservasi/Pembayaran/hapus_bayar/<?php echo $value['id_pembayaran']?>' onclick="javascript: return confirm('Anda Yakin Ingin Menghapus Data?')"><button type="button" class="btn btn-danger"><i style="color: white" class="fa fa-trash-o" aria-hidden="true"></i></button></a> </td>
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
          <h4 class="modal-title">Form Pendaftaran</h4>
        </div>
        <div class="modal-body">
          <div class="x_content">
                    <br />
                    <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="post" action="hotel/Pemesanan/Pembayaran/tambah_bayar">

                       <div class="form-group">
                        <label for="id" class="control-label col-md-3 col-sm-3 col-xs-12" >ID
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text"  name="id_pembayaran" class="form-control col-md-7 col-xs-12 id_pembayaran" id="id_pembayaran">
                        </div>
                      </div>

                      <div class="form-group">
                        <label for="id" class="control-label col-md-3 col-sm-3 col-xs-12" >Nama 
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
                          <input type="date"  name="tgl_transaksi" required="required" class="form-control col-md-7 col-xs-12" readonly="">
                        </div>
                      </div>
                      
                      <div class="form-group">
                        <label for="Loundry" class="control-label col-md-3 col-sm-3 col-xs-12">Pembayaran Loundry</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text"  name="Loundry" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                        <div class="form-group">
                        <label for="Total" class="control-label col-md-3 col-sm-3 col-xs-12">Total Harga</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                         <input type="text"  name="Total" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                      <div class="form-group">
                        <label for="Ket" class="control-label col-md-3 col-sm-3 col-xs-12">Keterangan</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                           <input type="text"  name="Ket" required="required" class="form-control col-md-7 col-xs-12">
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
          <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
        </div>
        </div>
      </div>
    </div>
  </div>


</div>

  <!--  Modal Edit-->
  <div class="modal fade" id="editModal" role="dialog">
    <div class="modal-dialog ">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Form Ubah Data Pembayaran</h4>
        </div>
        <div class="modal-body">
          <div class="x_content">
                    <br />
                    <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="post" action="hotel/Pemesanan/Pembayaran/ubah_pendaftar">

                    <div class="form-group">
                        <label for="id" class="control-label col-md-3 col-sm-3 col-xs-12" >ID
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text"  name="id_pembayaran" class="form-control col-md-7 col-xs-12 id_pembayaran" id="id_pembayaran">
                        </div>
                      </div>
                      
                      <!-- <div class="form-group">
                        <label for="nama" class="control-label col-md-3 col-sm-3 col-xs-12" >Nama Lengkap
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text"  name="nama_pendaftar" class="form-control col-md-7 col-xs-12 nama_pendaftar" id="nama_pendaftar">
                          <input type="hidden" name="id_pendaftar" class="form-control col-md-7 col-xs-12" id="id_pendaftar">
                        </div>
                      </div> -->

                                           
                     <div class="form-group">
                        <label for="tgl_transaksi" class="control-label col-md-3 col-sm-3 col-xs-12">Tgl Transaksi</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="tgl_transaksi" class="resizable_textarea form-control "></textarea>
                        </div>
                      </div>

                      <div class="form-group">
                        <label for="loudry" class="control-label col-md-3 col-sm-3 col-xs-12">Pembayaran Loundry</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                           <input type="text"  name="loudry" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div> 

                        <div class="form-group">
                        <label for="totalharga" class="control-label col-md-3 col-sm-3 col-xs-12">Total Harga</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                         <input type="text"  name="totalharga" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                      <div class="form-group">
                        <label for="ket" class="control-label col-md-3 col-sm-3 col-xs-12">Keterangan</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                           <input type="text"  name="ket" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div> 
                          
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">

                          <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
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
  </div>

  
