
 <div class="right_col" role="main">
<div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Kelola Harga Alat</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>

                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
             <button type="button" class="btn btn-info fa fa-plus-circle" data-toggle="modal" data-target="#ModalTambahHargaAlat"> Tambah</button>
                    <table id="datatable2" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>Id Alat</th>
                          <th>Id Barang</th>
                          <th>Harga</th>
                          <th>Status</th>
                          <th>Keterangan</th>
                          <th >edit</th>
                          <th>hapus</th>
                        </tr>
                      </thead>


                      <tbody>
                  <?php
                      foreach ($alat as $key => $value) {

                      ?>
                        <tr>
                          <td><?php echo $value['id_alat'];?></td>
                          <td><?php echo $value['id_barang'];?></td>
                          <td>Rp. <?php echo number_format($value['harga_alat'],0,",",".");?></td>
                          <td><?php echo $value['status'];?></td>
                          <td><?php echo $value['keterangan'];?></td>
                          <td><button type="button" class="btn btn-primary tombolalat" data-toggle="modal" data-target="#ModalUbahHargaAlat" data-idalat="<?php echo $value['id_alat'];?>" data-idbarang="<?php echo $value['id_barang'];?>" data-hargaalat="<?php echo $value['harga_alat'];?>" data-keterangan="<?php echo $value['keterangan'];?>" data-status="<?php echo $value['status'];?>">
                          <i style="color: white" class="fa fa-pencil-square-o" aria-hidden="true"></i></button></td>

                          <td ><button type="button" class="btn btn-danger tombolalat" data-toggle="modal" data-target="#ModalHapusHargaAlat" data-idalat="<?php echo $value['id_alat'];?>" data-idbarang="<?php echo $value['id_barang'];?>" ><i style="color: white" class="fa fa-trash-o" aria-hidden="true"></i></button></td>
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
  <div class="modal fade" id="ModalTambahHargaAlat" role="dialog">
    <div class="modal-dialog ">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Tambah Harga Alat</h4>
        </div>
        <div class="modal-body">
          <div class="x_content">
                    <br />
                    <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left"
                    method="post" action="<?php echo base_url() ?>kolamrenang/transaksi/transaksikr/insertdatahargaalat">

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nama-paket">Id Alat <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="id-alat" name="id-alat" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="id-barang">Id Barang <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="id-barang" name="id-barang" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="harga-alat">Harga <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="harga-alat" name="harga-alat" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="keterangan" class="control-label col-md-3 col-sm-3 col-xs-12">Keterangan</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <textarea id="keterangan" class="form-control col-md-7 col-xs-12" type="text" name="keterangan">
                          </textarea>
                        </div>
                      </div>
                      <div class="form-group">

                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="status" type="hidden" class="form-control col-md-7 col-xs-12"  name="status" value="Sedang Tidak Disewa">

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
          <button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Simpan</button>
        </form>
        </div>
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
          <h4 class="modal-title">Ubah Harga Alat</h4>
        </div>
        <div class="modal-body">
          <div class="x_content">
                    <br />
                    <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="post" action="<?php echo base_url() ?>kolamrenang/transaksi/transaksikr/updatedatahargaalat">

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nama-paket">Id Alat <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="id-alat" name="id-alat" required="required" class="form-control col-md-7 col-xs-12 id_alat">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="id-barang">Id Barang <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="id-barang" name="id-barang" required="required" class="form-control col-md-7 col-xs-12 id_barang">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="harga-alat">Harga <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="harga-alat" name="harga-alat" required="required" class="form-control col-md-7 col-xs-12 harga_alat">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="keterangan" class="control-label col-md-3 col-sm-3 col-xs-12">Keterangan</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <textarea id="keterangan" class="form-control col-md-7 col-xs-12 keterangan" type="text" name="keterangan">
                          </textarea>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Status</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <div id="status" class="btn-group" data-toggle="buttons">
                            <label class="btn btn-default tombolradio1" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                              <input type="radio" name="status" value="Sedang Disewa"> &nbsp; Sedang Disewa &nbsp;
                            </label>
                            <label class="btn btn-primary tombolradio2" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                              <input type="radio" name="status" value="Sedang Tidak Disewa"> Sedang Tidak Disewa
                            </label>
                          </div>
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

<!-- Modal hapus -->
<div class="modal fade" id="ModalHapusHargaAlat" role="dialog">
    <div class="modal-dialog ">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Hapus Alat</h4>
        </div>
        <div class="modal-body">
          <div class="deletealat alert alert-danger" role="alert"></div>
          <div class="x_content">
                    <br />
                    <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="post" action="<?php echo base_url() ?>kolamrenang/transaksi/transaksikr/deletedatahargaalat">

                      <input type="text" name="id-alat" class="id_alat">

                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">


                        </div>
                      </div>


                  </div>

        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-danger">Ya</button>
          <button type="submit" class="btn btn-default">Tidak</button>
        </form>
        </div>
      </div>
    </div>
  </div>
</div>
