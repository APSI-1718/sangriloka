        <!-- Modal Tambah Stok-->
  <div class="modal fade" id="detail" tabindex="-1" role="dialog" aria-labelledby="tambahModalLabel" >
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title detail" id="tambahModalLabel">Detail Penjualan</h4>
        </div>

         <!-- Modal body Stok-->
         <div class="modal-body">
         <form method="post" action="<?php echo base_url()?>kolam_renang/foodcourt/daftar_penjualan/lihat_detail_penjualan">
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

