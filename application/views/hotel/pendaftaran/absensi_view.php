 
<div class="right_col" role="main">
<div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Data Absensi</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
              
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                  <table id="datatable" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Tanggal </th>
                          <th>ID Pegawai</th>
                          <th>Status</th>
                        </tr>
                      </thead>

                      <tbody>
                        <?php $i=1;
                        foreach ($absensi as $key =>$value){ ?>
                          <tr>
                            <td><?php echo $i; ?></td>
                            <td><?php echo $value['tanggal'] ?></td>
                            <td><?php echo $value['id_pegawai'] ?></td>
                            <td><?php echo $value['status'] ?></td>
                          </tr>
                      <?php $i++;}?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
                </div>
            </div>
          </div>
        </div>
