<div class="right_col" role="main">
<div class="clearfix">

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Data Pemesanan</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
              
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <table id="datatable" class="table table-striped table-bordered data">
                      <thead>
                        <tr>
                          <th>ID Pemesanan</th>
                          <!-- <th>Nama Pemesan</th> -->
                          <th>Nama Menu</th>
                          <th>Qty</th>
                          <th>Total Harga</th>
                          <th>Tanggal Pemesanan</th>
                          <th>No Meja</th>
                          <th>Aksi</th>
                        </tr>
                      </thead>

                      <tbody>
                        <?php 
                        foreach($data as $value) { ?>
                        <tr>
                          <td><?php echo $value->id_pemesanan; ?></td>
                         <!-- <td><?php echo $value->nama_pemesan;?></td> -->
                          <td><?php echo $value->nama_menu;?></td>
                          <td><?php echo $value->Qty;?></td>
                          <td><?php echo $value->total;?></td>
                          <td><?php echo $value->tgl_pemesanan;?></td>
                          <td><?php echo $value->no_meja;?></td>
                          <td><?php if ($value->statusBayar == "Belum Dibayar"){
                            ?>
                          <button type="button" class="btn btn-primary tombolBayar"
                            data-toggle="modal" data-target="#bayarModal"
                            data-id_pemesanan="<?php echo $value->id_pemesanan;?>"
                            data-nama_menu="<?php echo $value->nama_menu;?>"
                            data-Qty="<?php echo $value->Qty;?>"               
                            data-total="<?php echo $value->total;?>"
                            data-tgl_pemesanan="<?php echo $value->tgl_pemesanan;?>"
                            data-no_meja="<?php echo $value->no_meja;?>">Bayar
                            </button>

                            <?php } else {
                              ?>
                            <button type="button" class="btn btn-success tombolBayar"> Sudah Dibayar
                            </button>
                            <?php } ?>
                          </td>
                        </tr>
                        <?php } ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
                </div>
            </div>
          </div>
        </div>
<div class="modal fade" id="bayarModal" role="dialog" aria-labelledby="BayarModalLabel">
    <div class="modal-dialog ">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Transaksi</h4>
        </div>
        <div class="modal-body">
          <div class="x_content">
                    <br />
                    <form id="bayarmodal" data-parsley-validate class="form-horizontal form-label-left" method="post" action="<?php echo base_url() ?>restoran/transaksi/transaksi/insert_data">

                    <div class="form-group">
                        <label for="id_pemesanan" class="control-label col-md-3 col-sm-3 col-xs-12">ID Pemesanan</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                           <input type="text"  name="id_pemesanan" required="required" class="form-control col-md-7 col-xs-12 id_pemesanan">
                        </div>
                      </div>

                      <div class="form-group">
                        <label for="tgl_transaksi" class="control-label col-md-3 col-sm-3 col-xs-12" >Tanggal Transaksi
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="date"  name="tgl_transaksi"  readonly="readonly" value="<?php echo date("Y-m-d"); ?>" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                       <div class="form-group">
                        <label for="total" class="control-label col-md-3 col-sm-3 col-xs-12">Total Harga</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                         <input type="text" name="total" required="required" class="form-control col-md-7 col-xs-12 total" readonly>
                         <input type="hidden" name="totalNum" required="required" class="form-control col-md-7 col-xs-12 totalNum">
                        </div>
                      </div>

                        <div class="form-group">
                        <label for="total_bayar" class="control-label col-md-3 col-sm-3 col-xs-12">Total Bayar</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                         <input type="number"  name="total_bayar" required="required" class="form-control col-md-7 col-xs-12 total_bayar">
                        </div>
                      </div>

                       <div class="form-group">
                        <label for="kembali" class="control-label col-md-3 col-sm-3 col-xs-12">Total Kembali</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text"  name="kembali" required="required" class="form-control col-md-7 col-xs-12 kembali" readonly>
                          <input type="hidden"  name="kembaliNum" required="required" class="form-control col-md-7 col-xs-12 kembaliNum">
                        </div>
                      </div>
                    
                             <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">

                          <button class="btn btn-danger" type="reset">Reset</button>
                          <button type="submit" class="btn btn-success" href=" . base_url() . restoran/transaksi/transaksi">Bayar</button>
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
        <!-- footer content -->
        <footer>
          <div class="pull-right">
            Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="<?php echo base_url() ?>vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="<?php echo base_url() ?>vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="<?php echo base_url() ?>vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="<?php echo base_url() ?>vendors/nprogress/nprogress.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="<?php echo base_url() ?>vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="<?php echo base_url() ?>vendors/iCheck/icheck.min.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="<?php echo base_url() ?>vendors/moment/min/moment.min.js"></script>
    <script src="../vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
    <!-- bootstrap-wysiwyg -->
    <script src="<?php echo base_url() ?>vendors/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js"></script>
    <script src="<?php echo base_url() ?>vendors/jquery.hotkeys/jquery.hotkeys.js"></script>
    <script src="<?php echo base_url() ?>vendors/google-code-prettify/src/prettify.js"></script>
    <!-- jQuery Tags Input -->
    <script src="<?php echo base_url() ?>vendors/jquery.tagsinput/src/jquery.tagsinput.js"></script>
    <!-- Switchery -->
    <script src="<?php echo base_url() ?>vendors/switchery/dist/switchery.min.js"></script>
    <!-- Select2 -->
    <script src="<?php echo base_url() ?>vendors/select2/dist/js/select2.full.min.js"></script>
    <!-- Parsley -->
    <script src="<?php echo base_url() ?>vendors/parsleyjs/dist/parsley.min.js"></script>
    <!-- Autosize -->
    <script src="<?php echo base_url() ?>vendors/autosize/dist/autosize.min.js"></script>
    <!-- jQuery autocomplete -->
    <script src="<?php echo base_url() ?>vendors/devbridge-autocomplete/dist/jquery.autocomplete.min.js"></script>
    <!-- starrr -->
    <script src="<?php echo base_url() ?>vendors/starrr/dist/starrr.js"></script>
    <!-- Custom Theme Scripts -->
    <script src="<?php echo base_url() ?>build/js/custom.min.js"></script>