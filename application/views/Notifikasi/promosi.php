<!-- page content -->
    <div class="right_col" role="main">


              <div class="title_left">
                <div class="col-md-4 col-sm-6 col-xs-6 form-group">
                  <div class="input-group">
                   <button class="btn btn-primary btn-sm" type="button" data-toggle="modal" data-target="#modaltambahpromosi"><i class="fa fa-plus-circle">&nbsp;Tambah</i></button>
                
                  </div>
                </div>
            </div>

         
             <div class="title_right">
              <div class="col-md-3 col-sm-6 col-xs-6 form-group pull-right top_search">
               <form action="<?php echo base_url('notifikasi/cari_promosi/hasil')?>" action="GET">
                <div class="input-group">
                    <input type="text" class="form-control" id="cari" name="cari" placeholder="Cari promosi...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="submit">Cari</button>
                    </span>
                  </div>
                </form>
              </div>
            </div>

     <div class="col-md-12 col-sm-6 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2>Promosi</h2>
                  <div class="clearfix"></div>
                </div>
               <?php foreach ($promosi as $key => $value){?>

                <div class="x_content">
                  <ul class="list-unstyled timeline">
                    <li>
                      <div class="block">
                        <div class="tags">
                           <img width="70" src="<?php echo 'data:image/jpeg;base64,'.base64_encode( $value['gambar_promosi'] ).' '?>">
                        </div>
                        <div class="block_content">
                          <h2 class="title">
                                          <span><?php echo $value ['judul_promosi']; ?></span>
                                      </h2>
                          <div class="byline">
                            <span><?php echo $value ['waktu_tanggal']; ?></span>
                          </div>
                          <p class="excerpt"><?php echo ( $value ['isi_promosi']); ?>
                          </p>
                          <button href="#" class="btn btn-info btn-sm tombol3" data-toggle="modal" data-target="#modaleditpromosi" data-id="<?php echo $value ['id_promosi'];?>" data-judul="<?php echo $value ['judul_promosi'];?>" data-isi="<?php echo $value ['isi_promosi'];?>" ><i class="fa fa-pencil"></i></button>
                            
                            <button href="#" class="btn btn-danger btn-sm tombol3" data-toggle="modal" data-target="#modalhapuspromosi" data-id="<?php echo $value ['id_promosi'];?>" data-judul="<?php echo $value ['judul_promosi'];?>"><i class="fa fa-trash-o"></i></button>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div> <?php } ?>
              </div>
            </div>
          </div>
        
       


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
                    <input type="text" class="form-control" id="judul" name="judul" required>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 control-label">Isi promosi</label>
                  <div class="col-sm-9">
                    <textarea class="form-control" style="height:55px;" id="isi" name="isi" required></textarea>
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
                    <input type="file" class="form-control" id="gambar" name="gambar" required>
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
            <h4 class="modal-title" id="myModalLabel">Ubah promosi</h4>
          </div>
          <div class="modal-body">
            <div id="testmodal" style="padding: 5px 20px;">
              <form id="antoform" class="form-horizontal calender" role="form" method="post" action="<?php echo base_url() ?>notifikasi/kel_promosi/edit_data" >
                <div class="form-group">
                  <input type="hidden" class="form-control" id="id" name="id">
                  <label class="col-sm-3 control-label">Judul</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control judul" id="judul" name="judul" required>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 control-label">Isi promosi</label>
                  <div class="col-sm-9">
                    <textarea class="form-control isi" style="height:55px;" id="isi" name="isi" required></textarea>
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
            <button type="submit" class="btn btn-primary antosubmit">Ubah</button> </form>
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