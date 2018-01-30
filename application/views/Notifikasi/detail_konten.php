<!-- page content -->
    <div class="right_col" role="main">


              <div class="title_left">
                <div class="col-md-4 col-sm-6 col-xs-6 form-group">
                  <div class="input-group">
                   <a href="../notifikasi/utama" class="btn btn-default btn-sm" type="button" ><i class="fa fa-chevron-left">&nbsp; Kembali</i></a>
                   <button class="btn btn-primary btn-sm" type="button" data-toggle="modal" data-target="#modaltambahevent"><i class="fa fa-plus-circle">&nbsp;Tambah</i></button>
                
                  </div>
                </div>
            </div>

         
             <div class="title_right">
              <div class="col-md-4 col-sm-6 col-xs-6 form-group pull-right top_search">
               <form action="<?php echo base_url('notifikasi/cari_konten/hasil')?>" action="GET">
                <div class="input-group">
                    <input type="text" class="form-control" id="cari" name="cari" placeholder="Cari konten...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="submit">Cari</button>
                    </span>
                  </div>
                </form>
              </div>
            </div>

     <div class="col-md-9 col-sm-6 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2>Konten</h2>
                  
                  <div class="clearfix"></div>
                </div>
               <?php foreach ($event as $key => $value){?>

                <div class="x_content">
                  <ul class="list-unstyled timeline">
                    <li>
                      <div class="block">
                        <div class="tags">
                          <img width="70" src=" <?php echo 'data:image/jpeg;base64,'.base64_encode( $value['gambar_konten'] ).' '?>">
                        </div>
                        <div class="block_content">
                          <h2 class="title">
                                          <a href="../notifikasi/detail_konten"><?php echo $value ['judul_konten']; ?></a>
                                      </h2>
                          <div class="byline">
                            <span><?php echo $value ['waktu_tanggal']; ?></span>
                          </div>
                          <p class="excerpt"><?php echo word_limiter( $value ['isi_konten'], 23); ?>
                          </p>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div> <?php } ?>
              </div>
            </div>

            <?php foreach ($event as $key => $value) {
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
                            
                            <button href="#" class="btn btn-info btn-sm tombol2" data-toggle="modal" data-target="#modaleditevent" data-id="<?php echo $value ['id_konten'];?>" data-judul="<?php echo $value ['judul_konten'];?>" data-isi="<?php echo $value ['isi_konten'];?>" ><i class="fa fa-pencil"></i> Ubah </button>
                            
                            <button href="#" class="btn btn-danger btn-sm tombol2" data-toggle="modal" data-target="#modalhapusevent" data-id="<?php echo $value ['id_konten'];?>" data-judul="<?php echo $value ['judul_konten'];?>"><i class="fa fa-trash-o"></i> Hapus </button>
                        
                        </center>
                    </li>
                  </ul>
                </div>

              </div>
            </div><?php } ?>
          </div> 

   <div id="modaltambahevent" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">

          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h4 class="modal-title" id="myModalLabel">Tambah konten</h4>
          </div>
          <div class="modal-body">
            <div id="testmodal" style="padding: 5px 20px;">
              <form id="antoform" class="form-horizontal calender" role="form" method="post" action="<?php echo base_url() ?>notifikasi/kel_konten/insert_data" >
                <div class="form-group">
                  <label class="col-sm-3 control-label">Judul</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" id="judul" name="judul">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 control-label">Isi Konten</label>
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

    <div id="modaleditevent" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">

          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h4 class="modal-title" id="myModalLabel">Edit konten</h4>
          </div>
          <div class="modal-body">
            <div id="testmodal" style="padding: 5px 20px;">
              <form id="antoform" class="form-horizontal calender" role="form" method="post" action="<?php echo base_url() ?>notifikasi/kel_konten/edit_data" >
                <div class="form-group">
                  <input type="hidden" class="form-control" id="id" name="id">
                  <label class="col-sm-3 control-label">Judul</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control judul" id="judul" name="judul">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 control-label">Isi Konten</label>
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

    <div id="modalhapusevent" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">

          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h4 class="modal-title" id="myModalLabel">Hapus konten</h4>
          </div>
          <div class="modal-body">
            <div class="delete alert alert-danger"></div>
            <div id="testmodal" style="padding: 5px 20px;">
              <form id="antoform" class="form-horizontal calender" role="form" method="post" action="<?php echo base_url() ?>notifikasi/kel_konten/delete_data" >
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

