<div class="right_col" role="main" style="min-height: 3971px;">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>RUANGAN</h3>
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
                    <h3><small>Tabel Kelola Ruangan</small></h3>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <div id="datatable_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
                      <div class="row"><div class="col-sm-12"><table id="datatable" class="table table-striped table-bordered dataTable no-footer" role="grid" aria-describedby="datatable_info">
                      <thead>
                        <tr role="row">
                          <th class="sorting_asc" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 102px;">ID_Ruangan</th>

                          <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 172px;">Nama Ruangan</th>
                          
                          <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 71px;">Keterangan</th>

                          <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 29px;">Status</th>
                          
                        </tr>
                      </thead>
                      <tbody>
                        <?php foreach ($data_ruangan as $data) { ?>
                          
                          <tr>
                            <td><?php echo $data['ID_Ruangan'] ?></td>
                            <td><?php echo $data['Nama_Ruangan'] ?></td>
                            <td><?php echo $data['Keterangan'] ?></td>
                            <td>
                              <?php if ($data['status']=='Ready'){?>
                                <a href="<?php echo base_url() ?>Hotel/Housekeeping/ruangan/update_status/<?php echo $data['ID_Ruangan'] ?>/Not Ready" class="tooltip-success" data-rel="tooltip" title="Edit" data-placement="Ubah">
                                  <button type="button" class="btn btn-danger tombol">
                                    Not Ready
                                  </button>
                                </a>      
                              <?php }else{ ?>
                                <a href="<?php echo base_url() ?>Hotel/Housekeeping/ruangan/update_status/<?php echo $data['ID_Ruangan'] ?>/Ready" class="tooltip-success" data-rel="tooltip" title="Edit" data-placement="Ubah">
                                  <button type="button" class="btn btn-primary tombol">
                                    Ready
                                  </button>
                                </a>                              
                              <?php } ?>
                            </td>

                          </tr>
                      
                        <?php } ?>

                      </tbody>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>