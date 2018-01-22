<script src="<?php echo base_url()?>assets/js/jquery-new.js" type="text/javascript"></script>
<script type="text/javascript" src="<?php echo base_url()?>assets/js/custom.js"></script>
<div class="right_col" role="main">
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
                  
          <div class="x_title">
            <h2>Form Kinerja Pegawai<small> mohon diisi dengan identitas asli</small></h2>
            <ul class="nav navbar-right panel_toolbox">
              <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
            </ul>
          <div class="clearfix"></div>
          </div>
                  
        <div class="x_content">
          <form id="demo-form2" method="post" action="<?php echo base_url('headoffice/hrd/kinerja_peg/insert_data');?>" data-parsley-validate class="form-horizontal form-label-left">
            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Id. Kinerja <span class="required">*</span></label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="text" id="id_kinerja" name="id_kinerja" required="required" class="form-control col-md-7 col-xs-12" value="<?= $kodeunik; ?>" readonly>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">NIP <span class="required">*</span></label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="text" id="id_pegawai" name="id_pegawai" required="required" class="form-control col-md-7 col-xs-12">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Nama Lengkap <span class="required">*</span></label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="text" id="nama" name="nama" required="required" class="form-control col-md-7 col-xs-12">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Tanggal Promosi/Demosi <span class="required">*</span></label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="text" id="tanggal" name="tanggal" required="required" class="form-control col-md-7 col-xs-12" Use value=<?php echo date('Y-m-d');?> readonly>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12">Pilihan Kinerja <span class="required">*</span></label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <div id="pro_dem" name="pro_dem" class="btn-group" data-toggle="buttons">
                  <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                    <input type="radio" name="pro_dem" value="Promosi"> &nbsp; Promosi &nbsp;
                  </label>
                  <label class="btn btn-primary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                    <input type="radio" name="pro_dem" value="Demosi"> Demosi
                  </label>
                  </div>
                </div>
            </div>
            <div class="form-group">
              <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Posisi <span class="required">*</span></label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="text" id="posisi" name="posisi" required="required" class="form-control col-md-7 col-xs-12" readonly>
              </div>
            </div>
            <div class="form-group">
              <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Jabatan <span class="required">*</span></label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <select class="form-control" id="jabatan" name="jabatan">
                    <option value="Admin">Admin</option>
                    <option value="Security">Security</option>
                    <option value="Koki">Koki</option>
                  </select>
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
                  <th>Id. Kinerja</th>
                  <th>NIP</th>
                  <th>Nama</th>
                  <th>Posisi</th>
                  <th>Jabatan</th>
                  <th>Pilihan Kinerja</th>
                  <th>Tanggal</th>
                  <th>Aksi</th>
                </tr>
              </thead>

              <tbody>
                <?php
                  $i = 1;
                    foreach ($hrd as $key => $value) {
                ?>
                <tr>
                  <td><?php echo $value['id_kinerja'];?></td>
                  <td><?php echo $value['id_pegawai'];?></td>
                  <td><?php echo $value['nama'];?></td>
                  <td><?php echo $value['posisi'];?></td>
                  <td><?php echo $value['jabatan'];?></td>
                  <td><?php echo $value['pro_dem'];?></td>
                  <td><?php echo $value['tanggal'];?></td>
                  <td><button type="button" class="btn btn-success panggilkinerja" data-toggle="modal" data-target="#editkinerjaModal"
                        data-id_kinerja="<?php echo $value['id_kinerja'];?>"
                        data-id_pegawai="<?php echo $value['id_pegawai'];?>"
                        data-nama="<?php echo $value['nama'];?>"
                        data-tanggal="<?php echo $value['tanggal'];?>"
                        data-posisi="<?php echo $value['posisi'];?>"
                        data-jabatan="<?php echo $value['jabatan'];?>">
                      <span class="glyphicon glyphicon-pencil"></span></button>
                      <button type="button" class="btn btn-danger panggilkinerja" data-toggle="modal" data-target="#deletekinerjaModal"
                        data-id_kinerja="<?php echo $value['id_kinerja'];?>"
                        data-nama="<?php echo $value['nama'];?>">
                      <span class="glyphicon glyphicon-trash"></span></button></td>
                </tr>
                <?php
                  $i++;
                  }
                ?>
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