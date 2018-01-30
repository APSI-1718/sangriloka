<div class="right_col" role="main" style="min-height: 3971px;">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Jadwal Housekeeper</h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                  </div>
                </div>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h3><small>Daftar Jadwal Shif</small></h3>
                    <div class="input-group">
                          <button type="button" class="btn btn-primary"><a href="<?php echo base_url() ?>Hotel/Housekeeping/barang/pengajuan">Pengajuan Barang</a></button>
                          </div>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <div id="datatable_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
                      <div class="row"><div class="col-sm-12"><table id="datatable" class="table table-striped table-bordered dataTable no-footer" role="grid" aria-describedby="datatable_info">
                      <thead>
                        <tr role="row">
                          <th class="sorting_asc" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 102px;">ID Pengajuan</th>

                          <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 172px;">Tanggal</th>
                          
                          <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 71px;">Keterangan</th>
                          
                          <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 68px;">Jumlah</th>

                          <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 68px;">Jenis</th>
                          
                        </tr>
                      </thead>
                      <tbody>
                        <?php foreach ($data_pengajuan as $data) { ?>
                          
                          <tr>
                            <td><?php echo $data['id_pengajuan'] ?></td>
                            <td><?php echo $data['tanggal_pengajuan'] ?></td>
                            <td><?php echo $data['keterangan_pengajuan'] ?></td>
                            <td><?php echo $data['jumlah'] ?></td>
                            <td><?php echo $data['jenis'] ?></td>

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
    </div>

  

          </div>
        </div>

<script src="<?php echo base_url() ?>vendors/jquery/dist/jquery.min.js"></script>

