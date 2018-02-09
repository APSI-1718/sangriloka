
 <div class="right_col" role="main">

<div class="clearfix"></div>
   <form method="post" action="absensi/selesai_absensi">
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Absensi Pegawai <small>Tanggal : <?php echo date('d M Y') ?></small></small></h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
            
                    <table id="table_cs" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th width="5">No</th>
                          <th>Nama Pegawai</th>
                          <th>Nama Tugas</th>
                          <th width="180">Masuk/Tidak</th>
                        </tr>
                      </thead>

    
                      <tbody>
                     
                        <?php $x = 1; ?>
                        <?php foreach ($data_pegawai as $data) { ?>
                        <tr>
                          <td><?php echo $x; ?></td>
                          <td><?php echo $data['nama_pegawai'] ?></td>
                          <td><?php echo $data['Nama_tugas'] ?></td>
                          <td>
                          <?php if ($this->absensi_model->jumlah_absensi_sekarang()>=1){ ?>  
                          <?php echo $this->absensi_model->tampil_status($data['id_pegawai']) ?>
                          <?php }else{ ?>
                          <input type="hidden" name="id_pegawai<?php echo $data['id_pegawai'] ?>" value="<?php echo $data['id_pegawai'] ?>" >
                          <div id="absensi<?php echo $data['id_pegawai'] ?>" class="btn-group" data-toggle="buttons">
                            <label class="btn btn-default active" data-toggle-class="btn-primary active" data-toggle-passive-class="btn-default active" >
                              <input type="radio" name="absensi<?php echo $data['id_pegawai'] ?>" value="Tidak Masuk" checked> Tidak Masuk
                            </label>
                            <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                              <input type="radio" name="absensi<?php echo $data['id_pegawai'] ?>" value="Masuk" > Masuk
                            </label>
                          </div>                    
                          </td>
                          <?php } ?>
                        </tr>
                        <?php $x++; } ?>      

                       
                      </tbody>
                    </table>

                  </div>

                    <div class="title_right">
                      <div class="  form-group pull-right top_search">
                        <div class="input-group">

                          <input <?php if ($this->absensi_model->jumlah_absensi_sekarang()>=1){echo "disabled";} ?>   class="btn btn-primary" type="submit" name="selesai" value="Selesai">
                          </div>
                      </div>
                    </div>                  
                </div>
                 
              </div>
               
                </div>
            </div>
           </form> 
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
                    <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">First Name <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Last Name <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="last-name" name="last-name" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Middle Name / Initial</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="middle-name" class="form-control col-md-7 col-xs-12" type="text" name="middle-name">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Gender</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <div id="gender" class="btn-group" data-toggle="buttons">
                            <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                              <input type="radio" name="gender" value="male"> &nbsp; Male &nbsp;
                            </label>
                            <label class="btn btn-primary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                              <input type="radio" name="gender" value="female"> Female
                            </label>
                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Date Of Birth <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="birthday" class="date-picker form-control col-md-7 col-xs-12" required="required" type="text">
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
</div>

