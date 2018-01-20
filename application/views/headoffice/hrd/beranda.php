<div class="right_col" role="main">
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          
          <div class="x_title">
            <h2>Form Tambah Pegawai<small> mohon diisi dengan identitas asli</small></h2>
            <ul class="nav navbar-right panel_toolbox">
              <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
            </ul>             
          <div class="clearfix"></div>
          </div>

        <div class="x_content">
          <form id="demo-form2" method="post" action="<?php echo base_url('headoffice/hrd/hal_awal_hrd/insert_data');?>" data-parsley-validate class="form-horizontal form-label-left">
            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Id. Mutasi <span class="required">*</span></label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="text" id="id_mutasi" name="id_mutasi" required="required" class="form-control col-md-7 col-xs-12">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">NIP <span class="required">*</span></label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="text" id="id_pegawai" name="id_pegawai" required="required" class="form-control col-md-7 col-xs-12">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Nama Lengkap <span class="required">*</span></label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="text" id="nama" name="nama" required="required" class="form-control col-md-7 col-xs-12" >
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Posisi <span class="required">*</span></label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="text" id="posisi" name="posisi" required="required" class="form-control col-md-7 col-xs-12">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Jabatan <span class="required">*</span></label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="text" id="jabatan" name="jabatan" required="required" class="form-control col-md-7 col-xs-12">
              </div>
            </div>
            <div class="form-group">
              <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Alamat <span class="required">*</span></label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <textarea id="alamat" required="required" class="form-control" name="alamat" data-parsley-trigger="keyup" data-parsley-maxlength="100" data-parsley-validation-threshold="10"></textarea>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12">Jenis Kelamin <span class="required">*</span></label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <div id="j_kelamin" name="j_kelamin" class="btn-group" data-toggle="buttons">
                  <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                    <input type="radio" name="j_kelamin" id="j_kelamin" value="L"> &nbsp; Laki-Laki &nbsp;
                  </label>
                  <label class="btn btn-primary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                    <input type="radio" name="j_kelamin" id="j_kelamin" value="P"> Perempuan
                  </label>
                </div>
              </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Tanggal Lahir <span class="required">*</span></label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input id="tgl_lahir" name="tgl_lahir" class="date-picker form-control col-md-7 col-xs-12" required="required" type="text">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">No. Telepon <span class="required">*</span></label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="no_tlp" name="no_tlp" required="required" class="form-control col-md-7 col-xs-12">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Email <span class="required">*</span></label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="email" name="email" required="required" class="form-control col-md-7 col-xs-12">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Username <span class="required">*</span></label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="username" name="username" required="required" class="form-control col-md-7 col-xs-12">
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
                  <th>NIP</th>
                  <th>Nama</th>
                  <th>Posisi</th>
                  <th>Jabatan</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              
              <tbody>
                <?php
                  $i = 1;
                    foreach ($hrd as $key => $value) {
                ?>
                <tr>
                  <td><?php echo $value['id_pegawai'];?></td>
                  <td><?php echo $value['nama'];?></td>
                  <td><?php echo $value['posisi'];?></td>
                  <td><?php echo $value['jabatan'];?></td>
                  <td><button type="button" class="btn btn-success" data-toggle="modal" data-target="#editpegawaiModal"
                        data-id_pegawai="<?php echo $value['id_pegawai'];?>"
                        data-nama="<?php echo $value['nama'];?>"
                        data-posisi="<?php echo $value['posisi'];?>"
                        data-jabatan="<?php echo $value['jabatan'];?>"
                        data-alamat="<?php echo $value['alamat'];?>"
                        data-j_kelamin="<?php echo $value['j_kelamin'];?>"
                        data-tgl_lahir="<?php echo $value['tgl_lahir'];?>"
                        data-no_tlp="<?php echo $value['no_tlp'];?>"
                        data-email="<?php echo $value['email'];?>"
                        data-username="<?php echo $value['username'];?>">
                      <span class="glyphicon glyphicon-pencil"></span></button>
                      <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deletepegawaiModal"  data-id_pegawai="<?php echo $value['id_pegawai'];?>">
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