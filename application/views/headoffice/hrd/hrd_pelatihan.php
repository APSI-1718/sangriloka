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
                  <th>NIP</th>
                  <th>Nama</th>
                  <th>Posisi</th>
                  <th>Jabatan</th>
                </tr>
              </thead>

              <tbody>
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