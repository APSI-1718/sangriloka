<<<<<<< HEAD
<div class="right_col" role="main">
  <div class="clearfix"></div>
=======
<script src="<?php echo base_url()?>assets/js/jquery-new.js" type="text/javascript"></script>
<script type="text/javascript" src="<?php echo base_url()?>assets/js/hrdcustom.js"></script>
<div class="right_col" role="main">
>>>>>>> fd58cdfb379aadf2ff2c70a0f8bf8325c698e7e0
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
                  
          <div class="x_title">
<<<<<<< HEAD
=======
            <h2>Form Mutasi</h2>
            <ul class="nav navbar-right panel_toolbox">
              <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
            </ul>
          <div class="clearfix"></div>
          </div>
                  
        <div class="x_content">
          <form id="demo-form2" method="post" action="<?php echo base_url('headoffice/hrd/cadm_mutasi/insert_data');?>" data-parsley-validate class="form-horizontal form-label-left">
            <div class="form-group">
              <div class="form-group">
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="hidden" name="id_mutasi" id="id_mutasi" required="required" class="form-control col-md-7 col-xs-12" value="<?= $kodeunik; ?>" readonly>
              </div>
            </div>
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Tanggal <span class="required">*</span></label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="text" id="tanggal" name="tanggal" required="required" class="form-control col-md-7 col-xs-12" use value=<?php echo date('Y-m-d');?> readonly>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">NIP <span class="required">*</span></label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="text" id="id_pegawai" name="id_pegawai" required="required" class="form-control col-md-7 col-xs-12" value="<?= $nipoto; ?>" readonly>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12">No. Daftar <span class="required">*</span></label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input id="no_pendaftaran" name="no_pendaftaran" class="date-picker form-control col-md-7 col-xs-12" required="required" type="text">
              </div>
            </div>
              <div class="ln_solid"></div>
                <div class="form-group">
                  <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                    <button class="btn btn-primary" type="reset">Batal</button>
                    <button type="submit" class="btn btn-success">Simpan</button>
                  </div>
                </div>
          </form>
        </div>
                
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
  
          <div class="x_title">
>>>>>>> fd58cdfb379aadf2ff2c70a0f8bf8325c698e7e0
            <h2>Daftar Para Pegawai</h2>
            <div class="clearfix"></div>
          </div>

          <div class="x_content">
            <table id="datatable" class="table table-striped table-bordered">
              <thead>
                <tr>
                  <th>NIP</th>
                  <th>Nama</th>
                  <th>Posisi</th>
                  <th>Jabatan</th>
<<<<<<< HEAD
=======
                  <th>Status</th>
>>>>>>> fd58cdfb379aadf2ff2c70a0f8bf8325c698e7e0
                  <th>Aksi</th>
                </tr>
              </thead>

              <tbody>
<<<<<<< HEAD
                <tr>
                  <td>NULL</td>
                  <td>NULL</td>
                  <td>NULL</td>
                  <td>NULL</td>
                  <td><button type="button" class="btn btn-success panggilmutasi" data-toggle="modal" data-target="#editmutasiModal" 
                        data-id_mutasi="#"
                        data-tanggal="#"
                        data-id_pegawai="#"
                        data-nama_mutasi="#"
                        data-posisi="#"
                        data-jabatan="#">
                      Mutasi</button>
                      <button type="button" class="btn btn-danger panggilmutasi" data-toggle="modal" data-target="#deletemutasiModal"
                        data-id_mutasi="#"
                        data-nama_mutasi="#">
                      <span class="glyphicon glyphicon-trash"></span></button></td>
                </tr>
=======
              <?php
                $i = 1;
                  foreach ($gabung as $g){
              ?>
                <tr>
                  <td><?php echo $g->id_pegawai?></td>
                  <td><?php echo $g->nama?></td>
                  <td><?php echo $g->posisi?></td>
                  <td><?php echo $g->jabatan?></td>
                  <td><?php echo $g->status?></td>
                  <td><button type="button" class="btn btn-success panggilmutasi" data-toggle="modal" data-target="#editmutasiModal"
                        data-id_mutasi="<?php echo $g->id_mutasi?>"
                        data-no_pendaftaran="<?php echo $g->no_pendaftaran?>"                       
                        data-tanggal="<?php echo $g->tanggal?>"
                        data-id_pegawai="<?php echo $g->id_pegawai?>"
                        data-nama="<?php echo $g->nama?>"
                        data-jabatan="<? echo $g->jabatan?>"
                        data-status="<? echo $g->status?>"
                        data-posisi="<? echo $g->posisi?>"
                        data-no_tlp="<?php echo $g->no_tlp?>"
                        data-email="<?php echo $g->email?>"
                        data-username="<?php echo $g->username?>"
                        data-password="<?php echo $g->password?>">
                      Mutasi</button>
                      <button type="button" class="btn btn-danger panggilmutasi" data-toggle="modal" data-target="#deletemutasiModal"
                        data-id_mutasi="<?php echo $g->id_mutasi?>"
                        data-nama="<?php echo $g->nama?>">
                      <span class="glyphicon glyphicon-trash"></span></button></td>
                </tr>
                <?php
                  $i++;
                }
                ?>
>>>>>>> fd58cdfb379aadf2ff2c70a0f8bf8325c698e7e0
              </tbody>
            </table>
          </div>

        </div>
      </div>
    </div>
        
</div>
  <footer>
    <div class="pull-right">Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a></div>
    <div class="clearfix"></div>
  </footer>