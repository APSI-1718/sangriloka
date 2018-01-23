
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
                          <th>No</th>
                          <th>Nama Pegawai</th>
                          <th>Alamat</th>
                          <th>Jenis Kelamin</th>
                          <th>Tugas</th>
                          <th>Action</th>

                        </tr>
                      </thead>

    
                      <tbody>
                        <?php foreach ($pembagian_tugas as $data) { ?>
                          
                          <tr>
                            <td>1</td>
                            <td><?php echo $data['nama_pegawai'] ?></td>
                            <td><?php echo $data['alamat'] ?></td>
                            <td><?php echo $data['jk'] ?></td>
                            <td><?php echo $data['Nama_tugas'] ?></td>
                            <td>
                              <a  class="tooltip-success" data-rel="tooltip" title="Edit" data-placement="Ubah">
                                <button type="button" class="btn btn-primary tombol" 
                                data-toggle="modal" data-target="#editModal" 
                                data-no="<?php echo $data['no'] ?>"
                                data-id_pegawi="<?php echo $data['id_pegawai'] ?>"
                                data-id_tugas="<?php echo $data['id_tugas'] ?>">
                                  <i style="color: white" class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                </button>
                              </a>
                              <a title="Hapus" href="<?php echo base_url() ?>Restoran/pegawai/Pembagian_Tugas/hapus_pegawai/<?php echo $data["no"] ?>" <?php echo 'onclick="return confirm(\'Apakah Data akan di hapus ?\')"' ?>>
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
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" >Pilih Pegawai  <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select name="pegawai" class="form-control" id='selectpegawai' ninvalid="this.setCustomValidity('Kolom Pegawai Tidak Boleh di Kosongkan!!!')" required>
                            <option value="000">Pilih Pegawai...</option>
                            <?php foreach ($data_pegawai as $data) { ?>
                              <option  value="<?php echo $data['id_pegawai'] ?>"><?php echo $data['id_pegawai'].' - '.$data['nama_pegawai']; ?></option>
                            <?php } ?>
              
                          </select>
                        </div>
                      </div>      
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" >Nama Lengkap
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" class="form-control col-md-7 col-xs-12" id='nama' disabled>
                          <input type="hidden" name="status_ck" value="<?php echo $this->Pembagian_tugas_model->status_ck(); ?>">
                        </div>
                      </div>



                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" >Jenis Kelamin 
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text"  class="form-control col-md-7 col-xs-12" id='jk' disabled>
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" >Tanggal Lahir 
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text"   class="form-control col-md-7 col-xs-12" id='tl' disabled>
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" > No Telp 
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text"   class="form-control col-md-7 col-xs-12" id='nt' disabled>
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" >Email 
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text"  class="form-control col-md-7 col-xs-12" id='email' disabled>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Alamat</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <textarea class="resizable_textarea form-control" id='alamat' disabled></textarea>
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" >Jabatan 
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text"  class="form-control col-md-7 col-xs-12" id='jabatan' disabled>
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" >Posisi 
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text"  class="form-control col-md-7 col-xs-12" id='posisi' disabled>
                        </div>
                      </div>                                                                                
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" > Pilih Tugas <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select name="tugas" class="form-control" id='select' oninvalid="this.setCustomValidity('Kolom Tugas Tidak Boleh di Kosongkan!!!')" required>
                            <option value="">Pilih Tugas..</option>
                            <?php foreach ($data_tugas as $data) { ?>
                              <option value="<?php echo $data['id_tugas'] ?>"><?php echo $data['Nama_tugas'].' - '.$data['penempatan_tugas'] ?></option>
                            <?php } ?>
              
                          </select>

                        </div>
                      </div>                            
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <button type="submit" class="btn btn-primary">Save</button>
                          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
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
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" >Pilih Pegawai  
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select disabled name="pegawai" class="form-control" id='selectpegawai2' ninvalid="this.setCustomValidity('Kolom Pegawai Tidak Boleh di Kosongkan!!!')" required>
                            <option value="000">Pilih Pegawai...</option>
                            <?php foreach ($data_pegawai as $data) { ?>
                              <option id="<?php echo 'p'.$data['id_pegawai']; ?>" value="<?php echo $data['id_pegawai'] ?>"><?php echo $data['id_pegawai'].' - '.$data['nama_pegawai']; ?></option>
                            <?php } ?>
              
                          </select>
                        </div>
                      </div>      
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" >Nama Lengkap
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" class="form-control col-md-7 col-xs-12" id='nama2' disabled>
                          <input type="hidden" name="no" class="no">
                        </div>
                      </div>



                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" >Jenis Kelamin 
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text"  class="form-control col-md-7 col-xs-12" id='jk2' disabled>
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" >Tanggal Lahir 
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text"   class="form-control col-md-7 col-xs-12" id='tl2' disabled>
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" > No Telp 
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text"   class="form-control col-md-7 col-xs-12" id='nt2' disabled>
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" >Email 
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text"  class="form-control col-md-7 col-xs-12" id='email2' disabled>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Alamat</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <textarea class="resizable_textarea form-control" id='alamat2' disabled></textarea>
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" >Jabatan 
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text"  class="form-control col-md-7 col-xs-12" id='jabatan2' disabled>
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" >Posisi 
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text"  class="form-control col-md-7 col-xs-12" id='posisi2' disabled>
                        </div>
                      </div>                                                                                
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" > Pilih Tugas <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select name="tugas" class="form-control" id='select' oninvalid="this.setCustomValidity('Kolom Tugas Tidak Boleh di Kosongkan!!!')" required>
                            <option value="">Pilih Tugas..</option>
                            <?php foreach ($data_tugas as $data) { ?>
                              <option id="<?php echo 't'.$data['id_tugas'] ?>" value="<?php echo $data['id_tugas'] ?>"><?php echo $data['Nama_tugas'].' - '.$data['penempatan_tugas'] ?></option>
                            <?php } ?>
              
                          </select>

                        </div>
                      </div>                            
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <button type="submit" class="btn btn-primary">Save</button>
                          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
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
  var no = $(this).data('no');
  var id_tugas = $(this).data('id_tugas');




  $(".id_pegawai").val(id_pegawai);
  $(".id_tugas").val(id_tugas);
  $(".no").val(no);

  //$("#p").addClass("active");
  <?php foreach ($pembagian_tugas as $data): ?>
  if (no == '<?php echo $data['no'] ?>') {
    $('#p<?php echo $data['id_pegawai'] ?>').attr('selected', true);
     <?php foreach ($data_pegawai as $data2) { ?> 
     <?php 
      if ($data2['jk']=='L') {
        $jk2 = 'Laki - Laki';
      }else if ($data2['jk']=='P') {
        $jk2 = 'Perempuan';
      }        
     ?>   
      $('#nama2').val('<?php echo $data2['nama_pegawai']; ?>');
      $('#jk2').val('<?php echo $jk2; ?>');
      $('#tl2').val('<?php echo $data2['tgl_lahir']; ?>');
      $('#nt2').val('<?php echo $data2['no_tlp']; ?>');
      $('#email2').val('<?php echo $data2['email']; ?>');
      $('#alamat2').val('<?php echo $data2['alamat']; ?>');
      $('#jabatan2').val('<?php echo $data2['jabatan']; ?>');
      $('#posisi2').val('<?php echo $data2['posisi']; ?>');    
     <?php } ?>      
  }
  <?php endforeach ?>


  <?php foreach ($pembagian_tugas as $data): ?>
  if (no == '<?php echo $data['no'] ?>') {
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

$('#selectpegawai').change(function(){
  var pilihpegawai = $(this).val();
  <?php foreach ($data_pegawai as $data) { ?>
  <?php 
    if ($data['jk']=='L') {
      $jk = 'Laki - Laki';
    }else if ($data['jk']=='P') {
      $jk = 'Perempuan';
    }

   ?>
    if (pilihpegawai == '<?php echo $data['id_pegawai'] ?>') {
      $('#nama').val('<?php echo $data['nama_pegawai']; ?>');
      $('#jk').val('<?php echo $jk; ?>');
      $('#tl').val('<?php echo $data['tgl_lahir']; ?>');
      $('#nt').val('<?php echo $data['no_tlp']; ?>');
      $('#email').val('<?php echo $data['email']; ?>');
      $('#alamat').val('<?php echo $data['alamat']; ?>');
      $('#jabatan').val('<?php echo $data['jabatan']; ?>');
      $('#posisi').val('<?php echo $data['posisi']; ?>');
    }else if (pilihpegawai == '000') {
      $('#nama').val('');
      $('#jk').val('');
      $('#tl').val('');
      $('#nt').val('');
      $('#email').val('');
      $('#alamat').val('');
      $('#jabatan').val('');
      $('#posisi').val('');
    }
    


  <?php } ?>

}); 
$('#selectpegawai2').change(function(){
  var pilihpegawai = $(this).val();
  <?php foreach ($data_pegawai as $data) { ?>
  <?php 
    if ($data['jk']=='L') {
      $jk = 'Laki - Laki';
    }else if ($data['jk']=='P') {
      $jk = 'Perempuan';
    }

   ?>
    if (pilihpegawai == '<?php echo $data['id_pegawai'] ?>') {
      $('#nama2').val('<?php echo $data['nama_pegawai']; ?>');
      $('#jk2').val('<?php echo $jk; ?>');
      $('#tl2').val('<?php echo $data['tgl_lahir']; ?>');
      $('#nt2').val('<?php echo $data['no_tlp']; ?>');
      $('#email2').val('<?php echo $data['email']; ?>');
      $('#alamat2').val('<?php echo $data['alamat']; ?>');
      $('#jabatan2').val('<?php echo $data['jabatan']; ?>');
      $('#posisi2').val('<?php echo $data['posisi']; ?>');
    }else if (pilihpegawai == '000') {
      $('#nama2').val('');
      $('#jk2').val('');
      $('#tl2').val('');
      $('#nt2').val('');
      $('#email2').val('');
      $('#alamat2').val('');
      $('#jabatan2').val('');
      $('#posisi2').val('');
    }
    


  <?php } ?>

}); 

</script>