<!-- page content -->
<script src="<?php echo base_url()?>assets/js/jquery-new.js" type="text/javascript"></script>
<script type="text/javascript" src="<?php echo base_url()?>assets/js/custom_kr.js"></script>
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3></h3>
              </div>
            </div>

<div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Kelola Tugas</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    <form id="demo-form2" method="post" action="<?php echo base_url('Restoran/kelola_tugas/kelola_tugas/insert_data');?>" data-parsley-validate class="form-horizontal form-label-left">
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">ID Tugas <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="id_tugas" name="id_tugas" required="required" class="form-control col-md-7 col-xs-12" value="<?= $kodeunik; ?>">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Nama Tugas <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="Nama_tugas" name="Nama_tugas" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                        </div>
                        <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Penempatan Tugas <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="penempatan_tugas" name="penempatan_tugas" required="required" class="form-control col-md-7 col-xs-12">
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
                    <h2>Daftar Menu Makanan</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <table id="datatable" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>ID Tugas</th>
                          <th>Nama Tugas</th>
                          <th>Penempatan Tugas</th>
                          <th>Aksi</th>
                        </tr>
                      </thead>

                      <tbody>
                      <?php
                      $i=1;
                        foreach($kelt as $key => $value){
                          ?>
                        <tr>
                          <td><?php echo $value['id_tugas'];?></td>
                          <td><?php echo $value['Nama_tugas'];?></td>
                          <td><?php echo $value['penempatan_tugas'];?></td>
                          <td><button type="button" class="btn btn-success panggiltugas" data-toggle="modal" data-target="#edittugasModal"
                          data-id_tugas="<?php echo $value['id_tugas'];?>"
                          data-Nama_tugas="<?php echo $value['Nama_tugas'];?>"
                          data-penempatan_tugas="<?php echo $value['penempatan_tugas'];?>"><span class="glyphicon glyphicon-pencil"></span></button>
                          <button type="button" class="btn btn-danger panggiltugas" data-toggle="modal" data-target="#deletetugasModal"
                          data-id_tugas="<?php echo $value['id_tugas'];?>"
                          data-Nama_tugas="<?php echo $value['Nama_tugas'];?>"><span class="glyphicon glyphicon-trash"></span></button></td>
                        </tr>
                        <?php
                        $i++;
                      }
                        ?>
                      </tbody>
                    </table>
                    <!-- <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
              <h3></h3>
              </div>
            </div> -->
            </div>
          </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <!-- <footer>
          <div class="pull-right">
            Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>
                  </div>
                
