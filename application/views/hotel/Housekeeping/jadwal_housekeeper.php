<div class="right_col" role="main" style="min-height: 3971px;">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Jadwal Housekeeper</h3>
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
                    <h3><small>Daftar Jadwal Shif</small></h3>
                    <div class="input-group">
                          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Tambah Data</button>
                          </div>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <div id="datatable_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
                      <div class="row"><div class="col-sm-12"><table id="datatable" class="table table-striped table-bordered dataTable no-footer" role="grid" aria-describedby="datatable_info">
                      <thead>
                        <tr role="row">
                          <th class="sorting_asc" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 102px;">ID Jadwal</th>

                          <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 172px;">Tanggal</th>
                          
                          <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 71px;">Shif</th>
                          
                          <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 68px;">Aksi</th>
                          
                        </tr>
                      </thead>
                      <tbody>
                        <?php foreach ($data_jadwal as $data) { ?>
                          
                          <tr>
                            <td><?php echo $data['ID_Jadwal'] ?></td>
                            <td><?php echo $data['tanggal'] ?></td>
                            <td><?php echo $data['shif'] ?></td>
                            <td>
                              <a  class="tooltip-success" data-rel="tooltip" title="Edit" data-placement="Ubah">
                                <button type="button" class="btn btn-primary tombol" 
                                data-toggle="modal" data-target="#editModal" 
                                data-idjadwal="<?php echo $data['ID_Jadwal']; ?>"
                                data-tanggal="<?php echo $data['tanggal']; ?>"
                                data-shif="<?php echo $data['shif']; ?>">
                                  <i style="color: white" class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                </button>
                              </a>
                              <a title="Hapus" href="<?php echo base_url() ?>Hotel/Housekeeping/jadwal/Hapus_Jadwal/<?php echo $data['ID_Jadwal']?>" <?php echo 'onclick="return confirm(\'Apakah Data '.$data['tanggal'].' akan di hapus ?\')"' ?>>
                                <button type="button" class="btn btn-danger" >
                                  <i style="color: white" class="fa fa-trash-o" aria-hidden="true"></i>
                                </button> 
                              </a>                                                        
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
    </div>

  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog ">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Form Jadwal</h4>
        </div>
        <div class="modal-body">
          <div class="x_content">
                    <br />
                    <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="post" action='jadwal/tambah_jadwal'>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" >ID Jadwal 
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name='ID_Jadwal' value="" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Tanggal <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input  name="tanggal" class="date-picker form-control col-md-7 col-xs-12" required="required" type="date">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" >Shif 
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          
                            <input  name="shif" class="date-picker form-control col-md-7 col-xs-12" required="required" type="text">
              
                          
                        </div>
                      </div>                            
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">

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
          <h4 class="modal-title">Form Jadwal</h4>
        </div>
        <div class="modal-body">
          <div class="x_content">
                    <br />
                    <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="post" action='jadwal/update_jadwal'>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" >ID Jadwal 
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name='ID_Jadwal' value="" required="required" class="form-control col-md-7 col-xs-12 idjadwal">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Tanggal <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input  name="tanggal" class="date-picker form-control col-md-7 col-xs-12 tanggal" required="required" type="date">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" >Shif 
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          
                            <input  name="shif" class="date-picker form-control col-md-7 col-xs-12 shif" required="required" type="text">
              
                          
                        </div>
                      </div>                            
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">

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
  var idjadwal = $(this).data('idjadwal');
  var tanggal = $(this).data('tanggal');
  var shif = $(this).data('shif');


  $(".idjadwal").val(idjadwal);
  $(".tanggal").val(tanggal);
  $(".shif").val(shif);

  //$("#p").addClass("active");
 
  $(".edit").text('Edit Data "' + idjadwal + '"');
  $(".delete").html('Apakah anda yakin akan menghapus data dengan nama <strong>"' + idjadwal + '"</strong> ?');
  $(".logout").html('Apakah anda yakin ingin <strong>logout</strong> ?');

  // $('#pass').tooltip({
  //  'placement': 'top',
  //  'title': 'Kosongkan kolom password bila tidak ada perubahan',
  //  'trigger': 'focus'
  // });
});
</script>        