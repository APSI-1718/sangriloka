<<<<<<< HEAD
=======
<script src="<?php echo base_url()?>assets/js/jquery-new.js" type="text/javascript"></script>
<script type="text/javascript" src="<?php echo base_url()?>assets/js/hrdcustom.js"></script>
>>>>>>> fd58cdfb379aadf2ff2c70a0f8bf8325c698e7e0
<div class="right_col" role="main">   
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
                  
          <div class="x_title">
<<<<<<< HEAD
            <h2>Form Cuti Pegawai<small> mohon diisi dengan identitas asli</small></h2>
=======
            <h2>Form Cuti Pegawai</h2>
>>>>>>> fd58cdfb379aadf2ff2c70a0f8bf8325c698e7e0
            <ul class="nav navbar-right panel_toolbox">
              <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
            </ul>
          <div class="clearfix"></div>
          </div>
                  
        <div class="x_content">
<<<<<<< HEAD
          <form id="demo-form2" method="#" action="#" data-parsley-validate class="form-horizontal form-label-left">
            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Id. Cuti <span class="required">*</span></label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="text" id="id_cuti" name="id_cuti" required="required" class="form-control col-md-7 col-xs-12" readonly>
=======
          <form id="demo-form2" method="post" action="<?php echo base_url('headoffice/hrd/cadm_cuti/insert_data');?>" data-parsley-validate class="form-horizontal form-label-left">
            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Id. Cuti <span class="required">*</span></label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="text" id="id_cuti" name="id_cuti" required="required" class="form-control col-md-7 col-xs-12" value="<?= $kodeunik; ?>" readonly>
>>>>>>> fd58cdfb379aadf2ff2c70a0f8bf8325c698e7e0
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Id. Pegawai <span class="required">*</span></label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="text" id="id_pegawai" name="id_pegawai" required="required" class="form-control col-md-7 col-xs-12">
              </div>
            </div>
            <div class="form-group">
<<<<<<< HEAD
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Nama Lengkap <span class="required">*</span></label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="text" id="nama" name="nama" required="required" class="form-control col-md-7 col-xs-12">
              </div>
            </div>
            <div class="form-group">
=======
>>>>>>> fd58cdfb379aadf2ff2c70a0f8bf8325c698e7e0
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Tanggal Mulai <span class="required">*</span></label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="text" id="tgl_mulai" name="tgl_mulai" required="required" class="form-control col-md-7 col-xs-12" use value=<?php echo date('Y-m-d');?> readonly>
              </div>
            </div>
            <div class="form-group">
              <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Tanggal Akhir <span class="required">*</span></label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="text" id="tgl_akhir" name="tgl_akhir" required="required" class="form-control col-md-7 col-xs-12">
              </div>
            </div>
            <div class="form-group">
              <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Keterangan <span class="required">*</span></label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="text" id="ket" name="ket" required="required" class="form-control col-md-7 col-xs-12">
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

  <div class="clearfix"></div>

    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
                  
          <div class="x_title">
            <h2>Daftar Para Pegawai</h2>
            <div class="clearfix"></div>
          </div>
                  
          <div class="x_content">
            <table id="datatable" class="table table-striped table-bordered">
              <thead>
                <tr>
                  <th>Id. Cuti</th>
                  <th>Id. Pegawai</th>
                  <th>Nama</th>
                  <th>Tgl. Mulai</th>
                  <th>Tgl. Akhir</th>
                  <th>Ketarangan</th>
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
                  <td>NULL</td>
                  <td>NULL</td>
                  <td><button type="button" class="btn btn-danger panggilcuti" data-toggle="modal" data-target="#deletecutiModal"
                        data-id_cuti="#"
                        data-nama="#">
                      <span class="glyphicon glyphicon-trash"></span></button></td>
                </tr>
=======
              <?php
                $i = 1;
                  foreach ($gabungcuti as $c){
              ?>
                <tr>
                  <td><?php echo $c->id_cuti?></td>
                  <td><?php echo $c->id_pegawai?></td>
                  <td><?php echo $c->nama?></td>
                  <td><?php echo $c->tgl_mulai?></td>
                  <td><?php echo $c->tgl_akhir?></td>
                  <td><?php echo $c->ket?></td>
                  <td><button type="button" class="btn btn-danger panggilcuti" data-toggle="modal" data-target="#deletecutiModal"
                        data-id_cuti="<?php echo $c->id_cuti?>"
                        data-nama="<?php echo $c->nama?>">
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