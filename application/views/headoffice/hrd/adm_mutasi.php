<script src="<?php echo base_url()?>assets/js/jquery-new.js" type="text/javascript"></script>
<script type="text/javascript" src="<?php echo base_url()?>assets/js/hrdcustom.js"></script>
<div class="right_col" role="main">
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
                  <th>Nama</th>
                  <th>J. Kelamin</th>
                  <th>tgl_lahir</th>
                  <th>Alamat</th>
                  <th>Aksi</th>
                </tr>
              </thead>

              <tbody>
              <?php
                $i = 1;
                  foreach ($mutpeg as $key => $value){
              ?>
                <tr>
                  <td><?php echo $value['nama']?></td>
                  <td><?php echo $value['j_kelamin']?></td>
                  <td><?php echo $value['tgl_lahir']?></td>
                  <td><?php echo $value['alamat']?></td>
                  <td><button type="button" class="btn btn-success panggilmutasi" data-toggle="modal" data-target="#editmutasiModal" 
                        
                        data-nama="<?php echo $value['nama'];?>"
                        data-j_kelamin="<?php echo $value['j_kelamin'];?>"
                        data-tgl_lahir="<?php echo $value['tgl_lahir'];?>"
                        data-alamat="<?php echo $value['alamat'];?>"
                        data-posisi="<?php echo $value['posisi'];?>"
                        data-jabatan="<?php echo $value['jabatan'];?>">
                      Mutasi</button>
                      <button type="button" class="btn btn-danger panggilmutasi" data-toggle="modal" data-target="#deletemutasiModal"
                        data-id_mutasi="#"
                        data-nama_mutasi="#">
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