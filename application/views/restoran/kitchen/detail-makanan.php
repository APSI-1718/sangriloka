<div class="right_col" role="main">
<div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Penerimaan Stok <small>Users</small></h2>
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
                          <th width="30px">No</th>
                          <th width="100px">ID Penerimaan</th>
                          <th width="100px">Tanggal Masuk</th>
                          <th width="100px">Kode Makanan</th>
                          <th>Nama Makanan</th>
                          <th width="50px">Jumlah</th>
                          <th>Tanggal Expired</th>
                          <th>Aksi</th>
                              
                        </tr>
                      </thead>


                      <tbody>
                 
                       <?php $i=1; foreach ($kitchen as $value) { ?>
                                <tr>
                                <td><?php echo "$i."?></td>
                                <td><?php echo $value['id_penerimaan']; ?></td>
                                <td><?php echo date('d/m/Y', strtotime($value['tanggal_masuk']));?></td>
                                <td><?php echo $value['kode_mkn']; ?></td>
                                <td><?php echo $value['nama_mkn']; ?></td>
                                <td><?php echo $value['jumlah_masuk']; ?></td>
                                <td><?php echo date('d/m/Y', strtotime($value['tanggal_expired']));?></td>

                                <td><button class="btn btn-danger tombolterima"><i class="fa fa-trash"></i> Hapus Stok</button></td>
                                
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