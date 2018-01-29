
 <div class="right_col" role="main">
<div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Daftar Penjualan </h2>
                   
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
              
                    <table id="datatable" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>ID Penjualan</th>
                          <th>Tanggal</th>
                          <th>Total</th>
                          <th>Aksi</th>
                        </tr>
                      </thead>


                      <tbody>
                      <tr>
                          <?php $no=1; foreach ($penjualan_foodcourt as $value){ ?>
                        <tr>
                          <td><?php echo $no ?></td>
                          <td><?php echo $value['id_penjualan'];?></td>
                          <td><?php echo $value['tanggal'];?></td>
                          <td><?php echo number_format($value['total_harga'],2)?></td>
                          <td><?php
                                echo "
                                  <button type='button' class='btn btn-info tomboldpenjualan'
                                    data-toggle='modal'
                                    data-target='#detail'
                                    data-id_penjualan='". $value['id_penjualan']."'
                                    data-tanggal='". $value['tanggal']."'
                                    data-total_harga='". $value['total_harga']."'>
                                    Detail
                                  </button>
                                 "?>  </td>
                        </tr>
                       <?php $no++; } ?>

                       
                        
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
                </div>
            </div>
          </div>
        </div>

         <!-- Modal Tambah Stok-->
  <div class="modal fade" id="detail" tabindex="-1" role="dialog" aria-labelledby="tambahModalLabel" >
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title " id="tambahModalLabel">Detail Penjualan</h4>
        </div>

         <!-- Modal body Stok-->
         <div class="modal-body">
         <form method="" action="">
          <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Menu</th>
                          <th>Harga</th>
                          <th>Jumlah</th>
                          <th>Total</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <?php $no=1; $total=0; foreach ($data as $value){ ?>
                        <tr>
                          <td><?php echo $no ?></td>
                          <td><?php echo $value['nama_menu'];?></td>
                          <td>Rp. <?php echo number_format($value['harga'],2) ?></td>
                          <td><?php echo $value['jumlah']; ?></td>
                          <td>Rp. <?php echo number_format($value['jumlah']*$value['harga'],2) ?></td>
                         
                        </tr>
                       <?php $no++; } ?>

                       
                      </tbody>
                    </table>

        </div>
        </form>
        <div class="modal-footer">
          
        </div>
        </form>
      </div>
    </div>

</div>

