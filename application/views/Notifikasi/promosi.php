
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
             
            
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Promosi</h2>
                    <div class="clearfix"></div>
                  </div>

                  <div class="x_content">
                    <div class="row">
                      
                  <?php foreach ($promosi as $key => $value){?>
                      <div class="col-md-55">
                        <div class="thumbnail">
                          <div class="image view view-first">
                            <img style="width: 100%; display: block;" src="<?php echo 'data:image/jpeg;base64,'.base64_encode( $value['gambar_promosi'] ).' '?>" alt="image" />
                            <div class="mask">
                             <a href="../notifikasi/detail_promosi"><p><?php echo $value ['judul_promosi']; ?></p></a>
                              <div class="tools tools-bottom">
                                 <a href="../notifikasi/detail_promosi"><i class="fa fa-link"></i></a>
                              </div>
                            </div>
                          </div>
                          <div class="caption">
                            <p><?php echo $value ['isi_promosi']; ?></p>
                          </div>
                        </div>
                      </div><?php } ?>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

        <!--/modal-->
        <div id="modaltambahpromosi" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">

          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h4 class="modal-title" id="myModalLabel">Tambah Promosi</h4>
          </div>
          <div class="modal-body">
            <div id="testmodal" style="padding: 5px 20px;">
              <form id="antoform" class="form-horizontal calender" role="form" method="post" action="<?php echo base_url() ?>notifikasi/kel_promosi/insert_data" >
                <div class="form-group">
                  <label class="col-sm-3 control-label">Judul</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" id="judul" name="judul">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 control-label">Isi promosi</label>
                  <div class="col-sm-9">
                    <textarea class="form-control" style="height:55px;" id="isi" name="isi"></textarea>
                  </div>
                </div>
                 <div class="form-group">
                  <div class="col-sm-9">
                    <input type="hidden" class="form-control" id="waktu" name="waktu" value="<?php echo date('Y-m-d') ?>" >
                  </div>
                </div>
                 <div class="form-group">
                  <label class="col-sm-3 control-label">Gambar</label>
                  <div class="col-sm-9">
                    <input type="file" class="form-control" id="gambar" name="gambar">
                  </div>
                </div>
             
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default antoclose" data-dismiss="modal">Batal</button>
            <button type="submit" class="btn btn-primary antosubmit">Simpan</button> </form>
          </div>
        </div>
      </div>
    </div>

    <div id="modaleditpromosi" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">

          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h4 class="modal-title" id="myModalLabel">Edit promosi</h4>
          </div>
          <div class="modal-body">
            <div id="testmodal" style="padding: 5px 20px;">
              <form id="antoform" class="form-horizontal calender" role="form" method="post" action="<?php echo base_url() ?>notifikasi/kel_promosi/edit_data" >
                <div class="form-group">
                  <input type="hidden" class="form-control" id="id" name="id">
                  <label class="col-sm-3 control-label">Judul</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control judul" id="judul" name="judul">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 control-label">Isi promosi</label>
                  <div class="col-sm-9">
                    <textarea class="form-control isi" style="height:55px;" id="isi" name="isi"></textarea>
                  </div>
                </div>
                 <div class="form-group">
                  <div class="col-sm-9">
                    <input type="hidden" class="form-control" id="waktu" name="waktu" value="<?php echo date('Y-m-d') ?>" >
                  </div>
                </div>
                 
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default antoclose" data-dismiss="modal">Batal</button>
            <button type="submit" class="btn btn-primary antosubmit">Simpan</button> </form>
          </div>
        </div>
      </div>
    </div>

    <div id="modalhapuspromosi" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">

          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h4 class="modal-title" id="myModalLabel">Hapus promosi</h4>
          </div>
          <div class="modal-body">
            <div class="delete alert alert-danger"></div>
            <div id="testmodal" style="padding: 5px 20px;">
              <form id="antoform" class="form-horizontal calender" role="form" method="post" action="<?php echo base_url() ?>notifikasi/kel_promosi/delete_data" >
                <div class="form-group">
                  <input type="hidden" class="form-control id" id="id" name="id">
                 
                </div>
               
                 
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default antoclose" data-dismiss="modal">Batal</button>
            <button type="submit" class="btn btn-primary antosubmit">Hapus</button> </form>
          </div>
        </div>
      </div>
    </div>