 <div class="right_col" role="main">
<div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Data Stok Bahan Makanan <small>Users</small></h2>
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
                          <th>Kode Makanan</th>
                          <th>Nama Makanan</th>
                          <th>Stok</th>
                          <th width="150px">Aksi</th>    
                        </tr>
                      </thead>


                      <tbody>
                 
                       <?php $i=1; foreach ($kitchen as $value) { ?>
                                <tr>
                                <td><?php echo $i?></td>
                                <td><?php echo $value['id_mkn']; ?></td>
                                <td><?php echo $value['nama_mkn']; ?></td>
                                <td><?php echo $value['stok']; ?></td>
                                <td><?php
                                echo "
                                        <button type='button' class='btn btn-success btn-xs tombol'
                                              data-toggle='modal' data-target='#pengajuanModal'
                                              data-id_mkn='". $value['id_mkn']."'
                                              data-nama_mkn='". $value['nama_mkn']."'
                                              data-stok='". $value['stok']."'>
                                              <i class='fa fa-mail-forward'></i> Pengajuan Stok
                                       </button>&nbsp;&nbsp;"?></td>
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

        <div class="modal fade" id="pengajuanModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" >
    <div class="modal-dialog" role="document" >
      <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title pengajuan" id="pengajuanModalLabel">Pengajuan Stok</h4>
        </div>
        <div class="modal-body">
           <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="post" action="<?php echo base_url()?>Restoran/kitchen/alat_makan/tambah_data">
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="id_mkn">Kode Makanan <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="id_mkn" name="id_mkn" required="required" class="form-control col-md-7 col-xs-12 id_mkn" disabled>
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nama_mkn">Nama Makanan <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="nama_mkn" name="nama_mkn" required="required" class="form-control col-md-7 col-xs-12 nama_mkn">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nama_mkn">Jumlah Permintaan<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="" name="" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
          <!-- <form method="post" action="<?php echo base_url() ?>Restoran/kitchen/alat_makan/edit_data">

            <div class="form-group">
              <label for="id_mkn" class="control-label">Id Makanan :</label>
              <input type="text" name="id_mkn" class="form-control id_mkn" id="id_mkn" disabled>            
            </div>

            <div class="form-group">
              <label for="nama_mkn" class="control-label">Nama Makanan :</label>
              <input type="text" name="nama_mkn" class="form-control nama_mkn" id="nama_mkn">
            </div>

            <div class="form-group">
              <label for="stok" class="control-label">Stok :</label>
              <input type="text" name="stok" class="form-control stok" id="stok">
            </div> -->

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-btn-default" data-dismiss="modal">Cancel</button>
          <button type="submit" class="btn btn-primary">Kirim</button>
        </div>
        </form>
      </div>
    </div>
</div>