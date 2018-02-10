<script type="text/javascript">
            // To conform clear all data in cart.
            function clear_cart() {
                var result = confirm('Hapus semua item yang ada di keranjang?');

                if (result) {
                    window.location = "<?php echo base_url(); ?>Restoran/transaksi/cart/hapus/all";
                } else {
                    return false; // cancel button
                }
            }
</script>

                  <div class="x_panel">
                    <div class="jumbotron" style="background-color: #C7CAC9">
                    <h1 style="font-size: 50px;">&nbsp; SANGRILOKA Restoran</h1>
                  </div>
                  <nav class="navbar navbar-inverse">
                       
                        <ul class="nav navbar-nav" style="font-size: 20px">
                          <li class="active"><a href="<?php echo base_url()?>Restoran/transaksi/cart">Home</a></li>
                          <li><a href="<?php echo base_url()?>Restoran/transaksi/cart/tampil_kategori/Appetizer" style="background-color: #FF8636">Appetizer</a></li>
                          <li><a href="<?php echo base_url()?>Restoran/transaksi/cart/tampil_kategori/Main_Course" style="background-color: #E8E231">Main Course</a></li>
                          <li><a href="<?php echo base_url()?>Restoran/transaksi/cart/tampil_kategori/Dessert" style="background-color: #E559B2">Dessert</a></li>
                          <li><a href="<?php echo base_url()?>Restoran/transaksi/cart/tampil_kategori/Minuman" style="background-color: #59B9E5">Minuman</a></li>

                        </ul>
                        
                    </nav>
                  <div class="x_title">
                    
                  </div>
                  <div class="x_content" style="height: 500px">
                    <center><h2>Daftar Pesanan Anda</h2></center>
                    <hr>

            <?php  $cart_check = $this->cart->contents();
            
            // If cart is empty, this will show below message.
             if(empty($cart_check)) {
             echo '<h4 align="center">Silahkan tambahkan menu terlebih dahulu</h4>'; 
             }  ?> 
                    <div class="container-fluid">
                      <div class="row">
                        <div class="col-md-2"></div>
                        <div class="col-md-8">
            <center>
                    <table class="table table-striped table-bordered table-responsive">
                    <?php if ($cart = $this->cart->contents()): ?>
                      <thead>
                        <tr>
                          <th>ID Pemesanan</th>
                          <th>Nama Pesanan</th>
                          <th>Harga</th>
                          <th>Qty</th>
                          <th>Total</th>
                          <th>Status</th>
                        </tr>
                      </thead>


                      <tbody>
                 		 <?php
                     // Create form and send all values in "shopping/update_cart" function.
                    echo form_open('Restoran/transaksi/cart/update_cart');
                    $grand_total = 0;
                    $i = 1;

                    foreach ($cart as $item):
                        //   echo form_hidden('cart[' . $item['id'] . '][id]', $item['id']);
                        //  Will produce the following output.
                        // <input type="hidden" name="cart[1][id]" value="1" />
                        
                        echo form_hidden('cart[' . $item['id'] . '][id]', $item['id']);
                        echo form_hidden('cart[' . $item['id'] . '][rowid]', $item['rowid']);
                        echo form_hidden('cart[' . $item['id'] . '][name]', $item['name']);
                        echo form_hidden('cart[' . $item['id'] . '][price]', $item['price']);
                        echo form_hidden('cart[' . $item['id'] . '][qty]', $item['qty']);
                        ?>
                        <tr>
                            <td>
                       <?php echo $i++; ?>
                            </td>
                            <td>
                      <?php echo $item['name']; ?>
                            </td>
                            <td>
                                Rp. <?php echo number_format($item['price'], 2); ?>
                            </td>
                            <td>
                            <?php echo form_input('cart[' . $item['id'] . '][qty]', $item['qty'], 'maxlength="3" size="1" style="text-align: right"'); ?>
                            </td>
                        <?php $grand_total = $grand_total + $item['subtotal']; ?>
                            <td>
                                Rp. <?php echo number_format($item['subtotal'], 2) ?>
                            </td>
                            <td>
                              
                            <?php 
                            // cancle image.
                            $path = "<img src='http://localhost/codeigniter_cart/images/cart_cross.jpg' width='25px' height='20px'>";
                            echo anchor('Restoran/transaksi/cart/hapus/' . $item['rowid'], $path); ?>
                            </td>
                     <?php endforeach; ?>
                    </tr>
                    <tr>
                        <td><b>Order Total: Rp.<?php 
                        
                        //Grand Total.
                        echo number_format($grand_total, 2); ?></b></td>
                        
                        <?php // "clear cart" button call javascript confirmation message ?>
                        <td colspan="5" align="right"><input type="button" class ='btn btn-primary btn-sm' value="Kosongkan" onclick="clear_cart()">
                            
                            <?php //submit button. ?>
                            <input type="submit" class ='btn btn-primary btn-sm' value="Tambah">
                            <?php echo form_close(); ?>
                            
                            <!-- "Place order button" on click send "billing" controller  -->
                            <input type="button" class ='btn btn-primary btn-sm tombolBilling' value="Pesan" data-toggle="modal" data-target="#billingModal"></td>
                    </tr>
<?php endif; ?>
                        
                      </tbody>
                    </table>
                  </center>
                </div>
                </div>
              </div>
                  </div>
                </div>
<div class="modal fade" id="billingModal" role="dialog" aria-labelledby="BillingModalLabel">
    <div class="modal-dialog ">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Pemesanan</h4>
        </div>
        <div class="modal-body">
          <div class="x_content">
                    <br />
                    <form id="billingModal" data-parsley-validate class="form-horizontal form-label-left" method="post" action="<?php echo base_url() ?>Restoran/transaksi/cart/save_order">

<div class="form-group">
  <label>Order Total</label>
  <strong>Rp. <?php echo number_format($this->cart->total());?>
  <input type="hidden" name="total" value="<?php echo $this->cart->total(); ?>" 
  class="form-control" readonly>
  </strong>
</div>
<div class="form-group">
  <label>Nama Menu</label>
  <?php echo $item['name']; ?>
  <input type="hidden" name="nama_menu" value="  <?php echo $item['name']; ?>" readonly>
</div>
<div class="form-group">
  <label>Qty</label>
  <?php echo $item['qty']; ?>
  <input type="hidden" name="Qty" value="  <?php echo $item['qty']; ?>" readonly>
</div>
<div class="form-group">
  <label>No Meja</label>
  <input type="text" name="no_meja" class="form-control" required=""/>
</div>
<input type="hidden" name="status" value="1">
<input type="hidden" name="id_pemesanan" class="form-control col-md-7 col-xs-12 id_pemesanan">
<input type="hidden" name="statusBayar" value="Belum Dibayar">
<input type="hidden" name="tgl_pemesanan" value="<?php echo date("Y-m-d");?>">
                   
                             <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">

                          <button class="btn btn-danger" type="reset">Reset</button>
                          <button type="submit" class="btn btn-success" href=" . base_url() . Restoran/kitchen/kelola_order/lihat_pesanan">Pesan</button>
                        </div>
                      </div>

                    </form>
                  </div>

        </div>
        <div class="modal-footer">
        </div>
        </div>
      </div>
    </div>
  </div>


</div>