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
                  <th>No.</th>
<<<<<<< HEAD
                  <th>Id. Pelatihan</th>
                  <th>Tanggal</th>
                  <th>Id. Mutasi</th>
                  <th>Nama</th>
                  <th>Posisi</th>
                  <th>Jabatan</th>
                  <th>Aksi</th>
=======
                  <th>NIP</th>
                  <th>Nama</th>
                  <th>Posisi</th>
                  <th>Jabatan</th>
>>>>>>> fd58cdfb379aadf2ff2c70a0f8bf8325c698e7e0
                </tr>
              </thead>

              <tbody>
<<<<<<< HEAD
                <tr>
                  <td>NULL</td>
                  <td>NULL</td>
                  <td>NULL</td>
                  <td>NULL</td>
                  <td>NULL</td>
                  <td>NULL</td>
                  <td>NULL</td>
                  <td><button type="button" class="btn btn-success panggilpelatihan" data-toggle="modal" data-target="#tambahpelatihanModal"
                        data-id_pelatihan="#"
                        data-nama="#">
                  <span class="glyphicon glyphicon-pencil"></span></button>
                  <button type="button" class="btn btn-danger panggilpelatihan" data-toggle="modal" data-target="#deletepelatihanModal"
                        data-id_pelatihan="#"
                        data-nama="#">
                      <span class="glyphicon glyphicon-trash"></span></button></td>
                </tr>
=======
              <?php
                $i = 1;
                  foreach ($gabungpel as $gp){
              ?>
                <tr>
                  <td><?php echo $i;?></td>
                  <td><?php echo $gp->id_pegawai?></td>
                  <td><?php echo $gp->nama?></td>
                  <td><?php echo $gp->posisi?></td>
                  <td><?php echo $gp->jabatan?></td>
                </tr>
                <?php
                  $i++;
                }
                ?>
>>>>>>> fd58cdfb379aadf2ff2c70a0f8bf8325c698e7e0
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