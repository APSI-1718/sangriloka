
 <div class="right_col" role="main">

<div class="clearfix"></div>

            <div class="row">
              <?php $i=1; ?>
              <?php foreach ($data_tugas as $data) { ?>
                <div class="col-md-12 col-sm-12 col-xs-12">
                  <div class="x_panel">
                    <div class="x_title">
                      <h2>Tugas : <?php echo $data['nama_tugas'] ?></small></h2>
                      <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
              
                      <table id="table_kk<?php echo $i; ?>" class="table table-striped table-bordered">
                        <thead>
                          <tr>
                            <th width="5">No</th>
                            <th width="70">ID Pegawai</th>
                            <th>Nama Pegawai</th>
                            <th width="5">Action</th>
                          </tr>
                        </thead>

      
                        <tbody>
                          <?php $x=1; ?>
                          <?php foreach ($data_pegawai as $dataP) { ?>

                            <?php if($dataP['id_tugas'] == $data['id_tugas']){ ?>

                                <tr>
                                  <td><?php echo $x; ?></td>
                                  <td><?php echo $dataP['id_pegawai'] ?></td>
                                  <td><?php echo $dataP['nama_pegawai'] ?></td>
                                  <td>
                                    <?php if($x==1){ ?>
                                      <a title="Tugas Selesai" href="<?php echo base_url() ?>Restoran/pegawai/Kontrol_Kerja/update_status_ck/<?php echo $dataP['id_pegawai']?>">
                                        <button type="button" class="btn btn-primary btn-xs">Selesai Tugas</button>
                                      </a>
                                    <?php }else{ ?>
                                      <a title="Tugas Selesai" href="<?php echo base_url() ?>Restoran/pegawai/Kontrol_Kerja/update_status_ck/<?php echo $dataP['id_pegawai']?>" <?php echo 'onclick="return confirm(\'Pegawai diatas belum melakukan tugas!!! Apakah ingin Melanjutkan?\')"' ?>>
                                        <button type="button" class="btn btn-primary btn-xs">Selesai Tugas</button>
                                      </a>
                                    <?php } ?>
                                  </td>
        	                      </tr>
                                <?php $x++; } ?>
                            <?php } ?>
                          
                        
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              <?php  $i++; } ?>
          </div>
        </div>

        <!-- Modal -->

</div>



<script type="text/javascript">
    $(document).ready(function() {
    $('#table_kk').DataTable( {
        "paging":   false,
        "ordering": true,
        "info":     true
    } );

} );
</script>
