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
<<<<<<< HEAD
=======
                  <th>No.</th>
>>>>>>> fd58cdfb379aadf2ff2c70a0f8bf8325c698e7e0
                  <th>NIP</th>
                  <th>Nama</th>
                  <th>Posisi</th>
                  <th>Jabatan</th>
<<<<<<< HEAD
                  <th>Aksi</th>
=======
                  <th>Kehadiran</th>
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
                  <td><button type="button" class="btn btn-success panggilkelola" data-toggle="modal" data-target="#editkelolaModal"
                        data-id_pegawai="#"
                        data-nama="#"
                        data-posisi="#"
                        data-jabatan="#"
                        data-alamat="#"
                        data-j_kelamin="#"
                        data-tgl_lahir="#"
                        data-no_tlp="#"
                        data-email="#"
                        data-username="#">
                      <span class="glyphicon glyphicon-pencil"></span></button>
                      <button type="button" class="btn btn-danger panggilkelola" data-toggle="modal" data-target="#deletekelolaModal"
                        data-id_kinerja="#"
                        data-nama="#">
                      <span class="glyphicon glyphicon-trash"></span></button></td>
                </tr>
=======
              <?php
                $i = 1;
                  foreach ($gabungkp as $kp){
              ?>
                <tr>
                  <td><?php echo $i;?></td>
                  <td><?php echo $kp->id_pegawai?></td>
                  <td><?php echo $kp->nama?></td>
                  <td><?php echo $kp->posisi?></td>
                  <td><?php echo $kp->jabatan?></td>
                  <td><?php echo $kp->tanggal_absen?></td>
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