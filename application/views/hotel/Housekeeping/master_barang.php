<div class="right_col" role="main" style="min-height: 3971px;">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Barang</h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                  </div>
                </div>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h3><small>Daftar Tabel Master Barang</small></h3>
                    <div class="input-group" >
                          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Tambah Barang</button>
                          </div>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <div id="datatable_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
                      <div class="row"><div class="col-sm-12"><table id="datatable" class="table table-striped table-bordered dataTable no-footer" role="grid" aria-describedby="datatable_info">
                      <thead>
                        <tr role="row">
                          <th class="sorting_asc" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 102px;">ID barang</th>

                          <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 172px;">Nama Barang</th>
                          
                          <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 71px;">Jenis Barang</th>
                          
                          <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 29px;">Keterangan Barang</th>
                          
                          <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 29px;">Jumlah</th>

                          <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 68px;">Jumlah barang bagus</th>

                          <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 68px;">Jumlah barang Rusak</th>

                          <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 68px;">Status Barang</th>

                        <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 68px;">Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php foreach ($data_barang as $data) { ?>
                          
                          <tr>
                            <td><?php echo $data['id_barang'] ?></td>
                            <td><?php echo $data['nama_barang'] ?></td>
                            <td><?php echo $data['jenis_barang'] ?></td>
                            <td><?php echo $data['keterangan_barang'] ?></td>
                            <td><?php echo $data['jumlah'] ?></td>
                            <td><?php echo $data['jumlah_barang_bagus'] ?></td>
                            <td><?php echo $data['jumlah_barang_rusak'] ?></td>
                            <td><?php echo $data['status_barang'] ?></td>
                            <td>
                              <a  class="tooltip-success" data-rel="tooltip" title="Edit" data-placement="Ubah">
                                <button type="button" class="btn btn-primary tombol" 
                                data-toggle="modal" data-target="#editModal" 
                                data-idbarang="<?php echo $data['id_barang']; ?>"
                                data-nama_barang="<?php echo $data['nama_barang']; ?>"
                                data-jenis_barang="<?php echo $data['jenis_barang']; ?>"
                                data-keterangan_barang="<?php echo $data['keterangan_barang']; ?>"
                                data-jumlah="<?php echo $data['jumlah']; ?>"
                                data-jumlah_barang_bagus="<?php echo $data['jumlah_barang_bagus']; ?>"
                                data-jumlah_barang_rusak="<?php echo $data['jumlah_barang_rusak']; ?>"
                                data-status_barang="<?php echo $data['status_barang']; ?>">
                                  <i style="color: white" class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                </button>
                              </a>
                              <a title="Hapus" href="<?php echo base_url() ?>Hotel/Housekeeping/Barang/Hapus_Barang/<?php echo $data['id_barang']?>" <?php echo 'onclick="return confirm(\'Apakah Data '.$data['nama_barang'].' akan di hapus ?\')"' ?>>
                                <button type="button" class="btn btn-danger" >
                                  <i style="color: white" class="fa fa-trash-o" aria-hidden="true"></i>
                                </button> 
                              </a>                                                        
                            </td>

                          </tr>
                      
                        <?php } ?>

                      </tbody>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--From modal-->
        <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog ">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Form Data Barang</h4>
        </div>
        <div class="modal-body">
          <div class="x_content">
                    <br />
                    <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="post" action='barang/tambah_barang'>

                      <div class="form-group">
                        <label class="control-label col-md-12 col-sm-12 col-xs-12" >ID Barang<span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name='id_barang' value="" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <br>
                      <div class="form-group">
                        <label class="control-label col-md-12 col-sm-12 col-xs-12">Nama Barang <span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input  name="nama_barang" class="date-picker form-control col-md-7 col-xs-12" required="required" type="text">
                        </div>
                      </div>
                      <br>
                      <div class="form-group">
                        <label class="control-label col-md-12 col-sm-12 col-xs-12" >Keterangan Barang </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input  name="keterangan_barang" class="date-picker form-control col-md-7 col-xs-12" required="required" type="text">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-12 col-sm-12 col-xs-12" >Jenis Barang </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input  name="jenis_barang" class="date-picker form-control col-md-7 col-xs-12" required="required" type="text">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-12 col-sm-12 col-xs-12" >Jumlah</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input  name="jumlah" class="date-picker form-control col-md-7 col-xs-12" required="required" type="text">
                        </div>
                      </div>
                      <br>
                      <div class="form-group">
                        <label class="control-label col-md-12 col-sm-12 col-xs-12" >Jumlah Barang Bagus</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input  name="jumlah_barang_bagus" class="date-picker form-control col-md-7 col-xs-12" required="required" type="text">
                        </div>
                      </div>
                      <br>
                      <div class="form-group">
                        <label class="control-label col-md-12 col-sm-12 col-xs-12" >Jumlah Barang Rusak</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input  name="jumlah_barang_rusak" class="date-picker form-control col-md-7 col-xs-12" required="required" type="text">
                        </div>
                      </div>
                      <br>
                      <div class="form-group">
                        <label class="control-label col-md-12 col-sm-12 col-xs-12" >Status Barang</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input  name="status_barang" class="date-picker form-control col-md-7 col-xs-12" required="required" type="text">
                        </div>
                      </div>                            
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-12 col-sm-12 col-xs-12 col-md-offset-12">

                          <button class="btn btn-danger" type="reset">Reset</button>
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

<div class="modal fade" id="editModal" role="dialog">
    <div class="modal-dialog ">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Form Data Barang</h4>
        </div>
        <div class="modal-body">
          <div class="x_content">
                    <br />
                    <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="post" action='barang/update_barang'>

                      <div class="form-group">
                        <label class="control-label col-md-12 col-sm-12 col-xs-12" >ID Barang<span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name='id_barang' value="" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <br>
                      <div class="form-group">
                        <label class="control-label col-md-12 col-sm-12 col-xs-12">Nama Barang <span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input  name="nama_barang" class="date-picker form-control col-md-7 col-xs-12" required="required" type="text">
                        </div>
                      </div>
                      <br>
                      <div class="form-group">
                        <label class="control-label col-md-12 col-sm-12 col-xs-12" >Keterangan Barang </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input  name="keterangan_barang" class="date-picker form-control col-md-7 col-xs-12" required="required" type="text">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-12 col-sm-12 col-xs-12" >Jenis Barang </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input  name="jenis_barang" class="date-picker form-control col-md-7 col-xs-12" required="required" type="text">
                        </div>
                      </div>
                      <br>
                      <div class="form-group">
                        <label class="control-label col-md-12 col-sm-12 col-xs-12" >Jumlah</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input  name="jumlah" class="date-picker form-control col-md-7 col-xs-12" required="required" type="text">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-12 col-sm-12 col-xs-12" >Jumlah Barang Bagus</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input  name="jumlah_barang_bagus" class="date-picker form-control col-md-7 col-xs-12" required="required" type="text">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-12 col-sm-12 col-xs-12" >Jumlah Barang Rusak</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input  name="jumlah_barang_rusak" class="date-picker form-control col-md-7 col-xs-12" required="required" type="text">
                        </div>
                      </div>
                      <br>
                      <div class="form-group">
                        <label class="control-label col-md-12 col-sm-12 col-xs-12" >Status Barang</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input  name="status_barang" class="date-picker form-control col-md-7 col-xs-12" required="required" type="text">
                        </div>
                      </div>
                      <br>                            
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-12 col-sm-12 col-xs-12 col-md-offset-12">

                          <button class="btn btn-danger" type="reset">Reset</button>
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

          </div>
        </div>

<script src="<?php echo base_url() ?>vendors/jquery/dist/jquery.min.js"></script>

<script type="text/javascript">
 $(document).on("click", '.tombol', function(e){
  var idbarang = $(this).data('idbarang');
  var nama_barang = $(this).data('nama_barang');
  var keterangan_barang = $(this).data('keterangan_barang');
  var jumlah = $(this).data('jumlah');
  var jumlah_barang_bagus = $(this).data('jumlah_barang_bagus');
  var jumlah_barang_rusak = $(this).data('jumlah_barang_rusak');
  var status_barang = $(this).data('status_barang');


  $(".idbarang").val(idbarang);
  $(".nama_barang").val(nama_barang);
  $(".keterangan_barang").val(keterangan_barang);
  $(".jumlah").val(jumlah);
  $(".jumlah_barang_bagus").val(jumlah_barang_bagus);
  $(".jumlah_barang_rusak").val(jumlah_barang_rusak);
  $(".status_barang").val(status_barang);

  //$("#p").addClass("active");
 
  $(".edit").text('Edit Data "' + id_barang + '"');
  $(".delete").html('Apakah anda yakin akan menghapus data dengan nama <strong>"' + id_barang + '"</strong> ?');
  $(".logout").html('Apakah anda yakin ingin <strong>logout</strong> ?');

  // $('#pass').tooltip({
  //  'placement': 'top',
  //  'title': 'Kosongkan kolom password bila tidak ada perubahan',
  //  'trigger': 'focus'
  // });
});
</script>        