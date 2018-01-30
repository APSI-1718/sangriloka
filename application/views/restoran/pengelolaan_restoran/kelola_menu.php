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
                    <h2>Menu Makanan</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                  <form id="demo-form2" method="post" action="<?php echo base_url('Restoran/kelola_tugas/kelola_menu/insert_data');?>" data-parsley-validate class="form-horizontal form-label-left">
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">No Menu <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="no_menu" name="no_menu" required="required" class="form-control col-md-7 col-xs-12" value="<?= $kodeunik; ?>">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Daftar Menu <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="daftar_menu" name="daftar_menu" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                        </div>
                        <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Harga <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="harga" name="harga" required="required" class="form-control col-md-7 col-xs-12">
                      </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Jenis Makanan <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="jenismakanan" name="jenismakanan" required="required" class="form-control col-md-7 col-xs-12">
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
                          <th>No. Menu</th>
                          <th>Daftar Menu</th>
                          <th>Harga</th>
                          <th>Jenis Makanan</th>
                          <th>Aksi</th>
                        </tr>
                      </thead>

                      <tbody>
                      <?php
                        $i=1;
                        foreach($kelm as $key => $value){
                          ?>
                        <tr>
                          <td><?php echo $value['no_menu'];?></td>
                          <td><?php echo $value['daftar_menu'];?></td>
                          <td><?php echo $value['harga'];?></td>
                          <td><?php echo $value['jenismakanan'];?></td>
                          <td><button type="button" class="btn btn-success panggilmenu" data-toggle="modal" data-target="#editmenuModal"
                          data-no_menu="<?php echo $value['no_menu'];?>"
                          data-daftar_menu="<?php echo $value['daftar_menu'];?>"
                          data-harga="<?php echo $value['harga'];?>"
                          data-jenismakanan="<?php echo $value['jenismakanan'];?>"><span class="glyphicon glyphicon-pencil"></span></button>
                          <button type="button" class="btn btn-danger panggilmenu" data-toggle="modal" data-target="#deletemenuModal"
                          data-no_menu="<?php echo $value['no_menu'];?>"
                          data-daftar_menu="<?php echo $value['daftar_menu'];?>"><span class="glyphicon glyphicon-trash"></span></button></td>
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
                </div>
              </div>
