
 <div class="right_col" role="main">

<div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Data Pembagian Tugas </small></h2>
                    <div class="title_right">
                      <div class="  form-group pull-right top_search">
                        <div class="input-group">
                          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Pembagian Tugas</button>
                          </div>
                      </div>
                    </div>
                    <div class="clearfix"></div>
                  </div>

                  <div class="x_content">
            
                    <table id="datatable" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>Id Pegawai</th>
                          <th>Nama Pegawai</th>
                          <th>Alamat</th>
                          <th>Jabatan</th>
                          <th>Tugas</th>
                          <th>Aksi</th>
                        </tr>
                      </thead>

    
                      <tbody>
                        <?php foreach ($data_pegawai as $data) { ?>
                          
                          <tr>
                            <td><?php echo $data['id_pegawai'] ?></td>
                            <td><?php echo $data['nama_pegawai'] ?></td>
                            <td></td>
                            <td><?php echo $data['jabatan'] ?></td>
                            <td><?php echo $data['nama_tugas'] ?></td>
                            <td>
                              <a  class="tooltip-success" data-rel="tooltip" title="Edit" data-placement="Ubah">
                                <button type="button" class="btn btn-primary tombol" 
                                data-toggle="modal" data-target="#editModal" 
                                data-id_pegawai="<?php echo $data['id_pegawai']; ?>"
                                data-nama="<?php echo $data['nama_pegawai']; ?>"
                                data-alamat="Cianjur"
                                data-jabatan="<?php echo $data['jabatan']; ?>"
                                data-id_tugas="<?php echo $data['id_tugas']; ?>"
                                data-nama_tugas="<?php echo $data['nama_tugas']; ?>">
                                  <i style="color: white" class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                </button>
                              </a>
                              <a title="Hapus" href="<?php echo base_url() ?>Restoran/pegawai/Pembagian_Tugas/hapus_pegawai/<?php echo $data['id_pegawai']?>" <?php echo 'onclick="return confirm(\'Apakah Data '.$data['nama_pegawai'].' akan di hapus ?\')"' ?>>
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

        <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog ">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Form Pembagian Tugas</h4>
        </div>
        <div class="modal-body">
          <div class="x_content">
                    <br />
                    <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="post" action='Pembagian_tugas/tambah_pegawai'>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" >ID Pegawai 
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name='id_pegawai' value="<?php echo $this->Pembagian_tugas_model->id_pegawai(); ?>" required="required" class="form-control col-md-7 col-xs-12" readonly>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" >Nama Lengkap <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text"  name="nama_pegawai" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Alamat</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <textarea name="alamat" class="resizable_textarea form-control"></textarea>
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
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Jabatan <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input  name="jabatan" class="date-picker form-control col-md-7 col-xs-12" required="required" type="text">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" >Tugas 
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select name="tugas" class="form-control" required>
                            <option value="">Pilih Tugas..</option>
                            <?php foreach ($data_tugas as $data) { ?>
                              <option value="<?php echo $data['id_tugas'] ?>"><?php echo $data['nama_tugas'] ?></option>

                            <?php } ?>
              
                          </select>
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
  <!-- Modal Edit-->
  <div class="modal fade" id="editModal" role="dialog">
    <div class="modal-dialog ">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Form Pembagian Tugas</h4>
        </div>
        <div class="modal-body">
          <div class="x_content">
                    <br />
                    <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="post" action='Pembagian_tugas/update_pegawai'>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" >ID Pegawai 
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name='id_pegawai'  required="required" class="form-control col-md-7 col-xs-12 id_pegawai"  readonly>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12 " >Nama Lengkap <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text"  name="nama_pegawai" required="required" class="form-control col-md-7 col-xs-12 nama" >
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Alamat</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <textarea name="alamat" class="resizable_textarea form-control alamat"></textarea>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Jenis Kelamin</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <div  class="btn-group" data-toggle="buttons">
                            <label class="btn btn-default" id='p' data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                              <input type="radio" name="jk" value="Pria" > &nbsp; Pria &nbsp;
                            </label>
                            <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                              <input type="radio" name="jk" value="Wanita" id="w"> Wanita 
                            </label>
                          </div>
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Jabatan <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input  name="jabatan" class="date-picker form-control col-md-7 col-xs-12 jabatan" required="required" type="text">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" >Tugas 
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select name="tugas" class="form-control" required>
                            <option value="">Pilih Tugas..</option>
                            <?php foreach ($data_tugas as $data) { ?>
                              <option id="<?php echo 't'.$data['id_tugas'] ?>" value="<?php echo $data['id_tugas'] ?>"><?php echo $data['nama_tugas'] ?></option>

                            <?php } ?>
              
                          </select>
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




<script src="<?php echo base_url() ?>vendors/jquery/dist/jquery.min.js"></script>

<script type="text/javascript">
 $(document).on("click", '.tombol', function(e){
  var id_pegawai = $(this).data('id_pegawai');
  var nama = $(this).data('nama');
  var alamat = $(this).data('alamat');
  var jabatan = $(this).data('jabatan');
  var id_tugas = $(this).data('id_tugas');
  var nama_tugas = $(this).data('nama_tugas');



  $(".id_pegawai").val(id_pegawai);
  $(".nama").val(nama);
  $(".alamat").val(alamat);
  $(".jabatan").val(jabatan);
  $(".id_tugas").val(id_tugas);
  $(".nama_tugas").val(nama_tugas);

  //$("#p").addClass("active");
  <?php foreach ($data_tugas as $data): ?>
  if (id_tugas == '<?php echo $data['id_tugas'] ?>') {
    $('#t<?php echo $data['id_tugas'] ?>').attr('selected', true);
  }
  <?php endforeach ?>

  $(".edit").text('Edit Data "' + idpegawai + '"');
  $(".delete").html('Apakah anda yakin akan menghapus data dengan nama <strong>"' + idpegawai + '"</strong> ?');
  $(".logout").html('Apakah anda yakin ingin <strong>logout</strong> ?');

  // $('#pass').tooltip({
  //  'placement': 'top',
  //  'title': 'Kosongkan kolom password bila tidak ada perubahan',
  //  'trigger': 'focus'
  // });
});
</script>