
 <div class="right_col" role="main">
<div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Penerimaan Stok </h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
              
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                       
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>ID Penerimaan</th>
                          <th>Tanggal</th>
                          <th>ID Pengajuan</th>
                          <th>Status Penerimaan</th>
                        </tr>
                      </thead>
                     <tbody>
                        <?php $i=1; foreach ($penerimaan as $value) { ?>
                        <tr>
                          <td><?php echo $i; ?></td>
                          <td><?php echo $value['id_penerimaan']; ?></td>
                          <td><?php echo $value['tanggal']; ?></td>
                          <td><?php echo $value['id_pengajuan']; ?></td>
                          <td><a href=""><button type='button' class='btn btn-info tombol'>Terima</button></a>
                          </td>
                        </tr>
                        <?php $i++; } ?>
                      </tbody>
                    </table>

                  </div>
                </div>
              </div>
                </div>
            </div>
          </div>
        </div>

 