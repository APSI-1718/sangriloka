<!-- page content -->
    <div class="right_col" role="main">
       <div class="title_left">
                <div class="col-md-4 col-sm-6 col-xs-6 form-group">
                  <div class="input-group">
                   <a href="../notifikasi/utama" class="btn btn-default btn-sm" type="button" ><i class="fa fa-chevron-left">&nbsp; Halaman utama</i></a>
                  </div>
                </div>
            </div>

     <div class="col-md-9 col-sm-6 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2>Semua Notifikasi</h2>
                  
                  <div class="clearfix"></div>
                </div>
               <?php foreach ($notifikasi as $key => $value){?>

                <div class="x_content">
                  <ul class="list-unstyled timeline">
                    <li>
                      <div class="block">
                        <div class="tags">
                          <span><?php echo $value ['waktu_tanggal']; ?></span>
                        </div>
                        <div class="block_content">
                          <h2 class="title">
                                          <span><?php echo $value ['judul_notifikasi']; ?></span>
                                      </h2>
                          <div class="byline">
                            <span><?php echo $value ['waktu_tanggal']; ?></span>
                          </div>
                          <p class="excerpt"><?php echo ( $value ['isi_notifikasi']); ?>
                          </p>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div> <?php } ?>
              </div>
            </div>

            <?php foreach ($notifikasi as $key => $value) {
                  ?>
            <div class="col-md-3 col-sm-6 col-xs-9">
              <div class="x_panel">
                <div class="x_title">
                  <h2><i class="fa fa-gear"></i>&nbsp;AKSI</h2>
                  <div class="clearfix"></div>
                </div>
                
                <div class="x_content">
                  <ul class="list-unstyled timeline">
                    <li>
                         <center>
                          
                            <button href="#" class="btn btn-danger btn-sm tomboln" data-toggle="modal" data-target="#modalhapusnotifikasi" data-id="<?php echo $value ['id_notifikasi'];?>" data-judul="<?php echo $value ['judul_notifikasi'];?>"><i class="fa fa-trash-o"></i> Hapus </button>
                        
                        </center>
                    </li>
                  </ul>
                </div>

              </div>
            </div><?php } ?>
          </div> 

  

    <div id="modalhapusnotifikasi" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">

          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h4 class="modal-title" id="myModalLabel">Hapus notifikasi</h4>
          </div>
          <div class="modal-body">
            <div class="delete alert alert-danger"></div>
            <div id="testmodal" style="padding: 5px 20px;">
              <form id="antoform" class="form-horizontal calender" role="form" method="post" action="<?php echo base_url() ?>notifikasi/all_notifikasi/delete_data" >
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
        <!-- /page content -->

