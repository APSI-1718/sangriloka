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
                  <th>Id. Kinerja</th>
                  <th>NIP</th>
                  <th>Nama</th>
                  <th>Posisi</th>
                  <th>Jabatan</th>
                  <th>Pilihan Kinerja</th>
                  <th>Tanggal</th>
                  <th>Aksi</th>
                </tr>
              </thead>

              <tbody>
                <tr>
                  <td>NULL</td>
                  <td>NULL</td>
                  <td>NULL</td>
                  <td>NULL</td>
                  <td>NULL</td>
                  <td>NULL</td>
                  <td>NULL</td>
                  <td><button type="button" class="btn btn-success panggilkinerja" data-toggle="modal" data-target="#editkinerjaModal"
                        data-id_kinerja="#"
                        data-id_pegawai="#"
                        data-nama="#"
                        data-tanggal="#"
                        data-posisi="#"
                        data-jabatan="#">Promosi/Demosi
                      </button>
                      <button type="button" class="btn btn-danger panggilkinerja" data-toggle="modal" data-target="#deletekinerjaModal"
                        data-id_kinerja="#"
                        data-nama="#">
                      <span class="glyphicon glyphicon-trash"></span></button></td>
                </tr>
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