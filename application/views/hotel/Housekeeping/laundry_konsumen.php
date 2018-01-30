<div class="right_col" role="main" style="min-height: 3971px;">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Laundry Konsumen</h3>
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
                    <h3><small>Daftar Laundry Konsumen</small></h3>
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
                          <th class="sorting_asc" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 102px;">Nama Laundry</th>

                          <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 172px;">Jenis Laundry</th>
                          
                          <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 71px;">Berat Laundry</th>
                          
                          <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 71px;">Total Laundry</th>

                          <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 71px;">Status Cucian</th>

                          <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 68px;">Aksi</th>
                          
                        </tr>
                      </thead>
                      <tbody>
                        <?php foreach ($data_laundry_konsumen as $data) { ?>
                          
                          <tr>
                            <td><?php echo $data['Nama_Laundry'] ?></td>
                            <td><?php echo $data['Jenis_Laundry'] ?></td>
                            <td><?php echo $data['Berat_Laundry'] ?></td>
                            <td><?php echo $data['Total_Laundry'] ?></td>
                            <td><?php echo $data['Status_Cucian'] ?></td>
                            <td>
                              <a  class="tooltip-success" data-rel="tooltip" title="Edit" data-placement="Ubah">
                                <button type="button" class="btn btn-primary tombol" 
                                data-toggle="modal" data-target="#editModal" 
                                data-NamaLaundry="<?php echo $data['Nama_Laundry']; ?>"
                                data-JenisLaundry="<?php echo $data['Jenis_Laundry']; ?>"
                                data-BeratLaundry="<?php echo $data['Berat_Laundry']; ?>"
                                data-TotalLaundry="<?php echo $data['Total_Laundry']; ?>"
                                data-StatusCucian="<?php echo $data['Status_Cucian']; ?>">
                                  <i style="color: white" class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                </button>
                              </a>
                              <a title="Hapus" href="<?php echo base_url() ?>Hotel/Housekeeping/laundry_konsumen/hapus_laundry_konsumen/<?php echo $data['Nama_Laundry']?>" <?php echo 'onclick="return confirm(\'Apakah Data '.$data['Nama_Laundry'].' akan di hapus ?\')"' ?>>
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
          <h4 class="modal-title">Form Laundry Hotel</h4>
        </div>
        <div class="modal-body">
          <div class="x_content">
                    <br />
                    <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="post" action='laundry_konsumen/tambah_laundry_konsumen'>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" >Nama Laundry <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name='Nama_Laundry' value="" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Jenis Laundry 
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input  name="Jenis_Laundry" class="date-picker form-control col-md-7 col-xs-12" required="required" type="text">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" >Berat Laundry 
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          
                            <input  name="Berat_Laundry" class="date-picker form-control col-md-7 col-xs-12" required="required" type="text">
              
                          
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Total Laundry 
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input  name="Total_Laundry" class="date-picker form-control col-md-7 col-xs-12" required="required" type="text">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Status Cucian 
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input  name="Status_Cucian" class="date-picker form-control col-md-7 col-xs-12" required="required" type="text">
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
          <h4 class="modal-title">Form Laundry Hotel</h4>
        </div>
        <div class="modal-body">
          <div class="x_content">
                    <br />
                    <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="post" action='laundry_konsumen/update_laundry_konsumen'>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" >Nama Laundry <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name='Nama_Laundry' value="<?php echo $data['Nama_Laundry'] ?>" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Jenis Laundry 
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input  name="Jenis_Laundry" class="date-picker form-control col-md-7 col-xs-12" required="required" type="text" value="<?php echo $data['Jenis_Laundry'] ?>">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" >Berat Laundry 
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          
                            <input  name="Berat_Laundry" class="date-picker form-control col-md-7 col-xs-12" required="required" type="text" value="<?php echo $data['Berat_Laundry'] ?>">
              
                          
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Total Laundry 
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input  name="Total_Laundry" class="date-picker form-control col-md-7 col-xs-12" required="required" type="text" value="<?php echo $data['Total_Laundry'] ?>">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Status Cucian 
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input  name="Status_Cucian" class="date-picker form-control col-md-7 col-xs-12" required="required" type="text" value="<?php echo $data['Status_Cucian'] ?>">
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
  var Nama_Laundry = $(this).data('Nama_Laundry');
  var Jenis_Laundry = $(this).data('Jenis_Laundry');
  var Berat_Laundry = $(this).data('Berat_Laundry');
  var Total_Laundry = $(this).data('Total_Laundry');
  var Status_Cucian = $(this).data('Status_Cucian');


  $(".Nama_Laundry").val(Nama_Laundry);
  $(".Jenis_Laundry").val(Jenis_Laundry);
  $(".Berat_Laundry").val(Berat_Laundry);
  $(".Total_Laundry").val(Total_Laundry);
  $(".Status_Cucian").val(Status_Cucian);
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