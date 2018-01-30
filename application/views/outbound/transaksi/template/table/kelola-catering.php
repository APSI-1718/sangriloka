
 <div class="right_col" role="main">
<div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Default Example <small>Users</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>

                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
             <button type="button" class="btn btn-info  glyphicon glyphicon-plus" data-toggle="modal" data-target="#myModal"></button>
                    <table id="datatable" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th width="70">ID Catering</th>
                          <th>Nama Catering</th>
                          <th width="50">Harga</th>
                          <th>Keterangan</th>
                          <th width="140">Aksi</th>
                        </tr>
                      </thead>


                      <tbody>
                  <?php
                      foreach ($catering as $key => $value) {

                      ?>
                        <tr>
                          <td><?php echo $value['id_catering'];?></td>
                          <td><?php echo $value['nama_catering'];?></td>
                          <td><?php echo $value['harga'];?></td>
                          <td><?php echo $value['keterangan'];?></td>

                          <td>
                            <button type="button" class="btn btn-primary tblcatering" data-toggle="modal" data-target="#ModalUbahHargaAlat" data-idcatering="<?php echo $value['id_catering'];?>" data-namacatering="<?php echo $value['nama_catering'];?>" data-harga="<?php echo $value['harga'];?>" data-keterangan="<?php echo $value['keterangan'];?>">
                              <i style="color: white" class="fa fa-pencil-square-o" aria-hidden="true"></i>Edit
                            </button>
                            <button type="button" class="btn btn-danger tblcatering" data-toggle="modal" data-target="#ModalHapusHargaAlat" data-idcatering="<?php echo $value['id_catering'];?>" data-namacatering="<?php echo $value['nama_catering'];?>">
                              <i style="color: white" class="fa fa-trash-o" aria-hidden="true"></i>Hapus
                            </button>
                          </td>

                        </tr>
                        <?php
                        } ?>
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
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog ">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modal Header</h4>
        </div>
        <div class="modal-body">
          <div class="x_content">
                    <br />

                    <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="post" action="<?php echo base_url() ?>outbound/transaksi/kelolacatering/insert">
                      <input type="hidden" id="id-catering" name="id-catering" required="required" class="form-control col-md-7 col-xs-12">
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Nama Catering <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="nama-catering" name="nama-catering" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Harga <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="harga" name="harga" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Keterangan <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="keterangan" name="keterangan" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Kode Tiket <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="id-tiket" name="id-tiket" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Kode Pembelian <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="id-pembelian" name="id-pembelian" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <button class="btn btn-primary" type="button">Cancel</button>
              <button class="btn btn-primary" type="reset">Reset</button>
                          <button type="submit" class="btn btn-success">Submit</button>
                        </div>
                      </div>

                    </form>
                  </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal edit -->
  <div class="modal fade" id="ModalUbahHargaAlat" role="dialog">
      <div class="modal-dialog ">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title editcatering">Ubah Harga Alat</h4>
          </div>
          <div class="modal-body">
            <div class="x_content">
                      <br />
                      <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="post" action="<?php echo base_url() ?>outbound/transaksi/KelolaCatering/update">

                        <div class="form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nama-paket">Id Alat <span class="required">*</span>
                          </label>
                          <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" id="id-catering" name="id-catering" required="required" class="form-control col-md-7 col-xs-12 id_catering">
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="id-barang">Id Barang <span class="required">*</span>
                          </label>
                          <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" id="nama-catering" name="nama-catering" required="required" class="form-control col-md-7 col-xs-12 nama_catering">
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="harga-alat">Harga <span class="required">*</span>
                          </label>
                          <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" id="harga" name="harga" required="required" class="form-control col-md-7 col-xs-12 harga">
                          </div>
                        </div>

                        <div class="form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="harga-alat">Harga <span class="required">*</span>
                          </label>
                          <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" id="keterangan" name="keterangan" required="required" class="form-control col-md-7 col-xs-12 keterangan">
                          </div>
                        </div>

                        <div class="ln_solid"></div>
                        <div class="form-group">
                          <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">


                          </div>
                        </div>


                    </div>

          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-success"><i class="fa fa-edit"></i> Ubah</button>
          </form>
          </div>
        </div>
      </div>
    </div>
  </div>



<!-- hupus -->

<div class="modal fade" id="ModalHapusHargaAlat" role="dialog">
    <div class="modal-dialog ">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Hapus Alat</h4>
        </div>
        <div class="modal-body">
          <div class="deletecatering alert alert-danger" role="alert"></div>
          <div class="x_content">
                    <br />
                    <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="post" action="<?php echo base_url() ?>outbound/transaksi/KelolaCatering/delete">

                          <input type="hidden" name="id-catering" class="id_catering">

                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">


                        </div>
                      </div>


                  </div>

        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-danger">Ya</button>
          <button type="button" class="btn btn-default"  data-dismiss="modal">Tidak</button>
        </form>
        </div>
      </div>
    </div>
  </div>




</div>
