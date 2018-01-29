<script src="<?php echo base_url()?>assets/js/jquery-new.js" type="text/javascript"></script>
<script type="text/javascript" src="<?php echo base_url()?>assets/js/hrdcustom.js"></script>
<div class="right_col" role="main">
  <div class="clearfix"></div>
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">

          <div class="x_title">
            <h2>Daftar Para Pegawai</h2>
            <div class="clearfix"></div>
          </div>
                  
          <div class="x_content">
            <table id="datatable" class="table table-striped table-bordered">
              <thead>
                <tr>
                  <th>NIP</th>
                  <th>Nama</th>
                  <th>Posisi</th>
                  <th>Jabatan</th>
                  <th>Pilihan Kinerja</th>
                  <th>Aksi</th>
                </tr>
              </thead>

              <tbody>
              <?php
                $i = 1;
                  foreach ($gabung as $g){
              ?>
                <tr>
                  <td><?php echo $g->id_pegawai?></td>
                  <td><?php echo $g->nama?></td>
                  <td><?php echo $g->posisi?></td>
                  <td><?php echo $g->jabatan?></td>
                  <td><?php echo $g->pil_kinerja?></td>
                  <td><button type="button" class="btn btn-success panggilmutasi" data-toggle="modal" data-target="#editkinerjaModal"
                        data-id_mutasi="<?php echo $g->id_mutasi?>"
                        data-no_pendaftaran="<?php echo $g->no_pendaftaran?>"                       
                        data-tanggal="<?php echo $g->tanggal?>"
                        data-id_pegawai="<?php echo $g->id_pegawai?>"
                        data-nama="<?php echo $g->nama?>"
                        data-jabatan="<? echo $g->jabatan?>"
                        data-status="<? echo $g->status?>"
                        data-pil_kinerja="<? echo $g->pil_kinerja?>"
                        data-posisi="<? echo $g->posisi?>"
                        data-no_tlp="<?php echo $g->no_tlp?>"
                        data-email="<?php echo $g->email?>"
                        data-username="<?php echo $g->username?>"
                        data-password="<?php echo $g->password?>">Promosi/Demosi
                      </button>
                      <button type="button" class="btn btn-danger panggilkinerja" data-toggle="modal" data-target="#deletekinerjaModal"
                        data-id_kinerja="#"
                        data-nama="#">
                      <span class="glyphicon glyphicon-trash"></span></button></td>
                </tr>
                <?php
                  $i++;
                }
                ?>
              </tbody>
           </table>
          </div>

        </div>
      </div>
    </div>
</div>

  <footer>
    <div class="pull-right">Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a></div>
    <div class="clearfix"></div>
  </footer>