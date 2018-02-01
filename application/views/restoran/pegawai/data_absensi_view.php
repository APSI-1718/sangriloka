
 <div class="right_col" role="main">

<div class="clearfix"></div>

            <div class="row">


<!--               <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Data Absensi Hari Ini<small>Tanggal : <?php echo date('Y-m-d') ?></small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <table class="table">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Nama</th>
                          <th>Status</th>
                        </tr>
                      </thead>
                      <tbody>
                        <form action="update_absensi_hari" method="post">
                        <?php $x = 1; $status_full = '0'; ?>
                        <?php foreach ($data_pegawai as $data) { ?>
                          <tr>
                            <th scope="row"><?php echo $x; ?></th>
                            <td><?php echo $data['nama_pegawai'] ?></td>
                            <td>
                              
                              <?php 
                               $xs = '';
                                foreach ($data_absensi as $dataa) {
                                 
                                  if ($dataa['id_pegawai'] == $data['id_pegawai']) {
                                      $xs = $dataa['status']; 
                                     
                                      
                                  }
                                }
                                if ($xs){
                                  echo $xs;
                                  echo "<input type='hidden' name='status".$data['id_pegawai']."'  value='Masuk'>";
                                }else{
                                  echo "<input type='text' name='status".$data['id_pegawai']."' placeholder='Keterangan Tidak Masuk'";
                                  $status_full = '1';
                                }
                                $xs = '';
                               ?>
                            </td>
                          
                          </tr>
                        <?php $x++; } ?>
                        <tr >
                          <td  colspan="3">
                            <input style="float:right" <?php if($status_full=='0'){echo 'disabled';} ?> type="submit" name="submit" value="Absensi Selesai" class="btn btn-primary btn-sm" <?php echo 'onclick="return confirm(\'Data Tidak Bisa di Rubah!!! Apakah ingin Melanjutkan?\')"' ?>>
                          </td>
                        </tr>
                        </form>
                      </tbody>
                    </table>

                  </div>
                </div>
              </div>
 -->
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <ul class="nav navbar-right panel_toolbox">
                      <div class="btn-group">
                        <button data-toggle="dropdown" class="btn btn-primary dropdown-toggle btn-sm" type="button" aria-expanded="false">Hari Ini <span class="caret"></span>
                        </button>
                        <ul role="menu" class="dropdown-menu">
                          <li><a href="#">Hari Ini</a>
                          </li>
                          <li><a href="#">Bulan Ini</a>
                          </li>

                          <li class="divider"></li>
                        </ul>
                      </div>
                    </ul>                  
                  <div class="x_title">
                    <h2>Data Absensi Bulan Ini<small>Bulan : <?php echo date('M') ?></small></h2>


                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <?php 
                      $tahun = date('Y'); //Mengambil tahun saat ini
                      $bulan = date('m'); //Mengambil bulan saat ini
                      $tanggal = cal_days_in_month(CAL_GREGORIAN, $bulan, $tahun);
                    ?>            

                    <table id="" class="table table-striped table-bordered table-responsive" >

                      <thead >
                        <tr>
                          <th style="text-align: center; vertical-align: middle;" rowspan="2">No</th>
                          <th style="text-align: center; vertical-align: middle;" rowspan="2">Nama</th>
                          <th style="text-align: center; vertical-align: middle;" colspan="31">Tanggal</th>

                        </tr>
                        <tr>
                          <?php for ($i=1; $i <= $tanggal ; $i++) { ?>
                            <th><?php echo $i; ?></th>
                          <?php } ?>
                          

                        </tr>

                      </thead>

                      <tbody>
                        <?php foreach ($data_pegawai as $data) { ?>                        
                          <tr>
                            <td>1</td>
                            <td><?php echo $data['nama_pegawai'] ?></td>
                            <?php for ($y=1; $y <= $tanggal ; $y++) { ?>
                            <td>
                              <?php foreach ($data_absensi_bulan as $dataa) { ?> 
                                <?php if($dataa['id_pegawai']==$data['id_pegawai']){ ?>
                                  <?php if(substr($dataa['tanggal'], 8,2)==$y){ ?>
                                    <?php if($dataa['status']=='Masuk'){ ?>
                                      <?php echo 'M' ?>
                                    <?php }elseif($dataa['status']=='Sakit'){ ?>
                                      <?php echo 'S' ?>
                                    <?php } ?>
                                  <?php } ?>
                                <?php } ?>
                              <?php } ?>
                            </td>   
                            <?php } ?>                          
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
