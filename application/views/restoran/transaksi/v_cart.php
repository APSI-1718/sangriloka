<div class="right_col" role="main">
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="jumbotron" style="background-color: #C7CAC9">
                    <h1 style="font-size: 50px;">&nbsp; SANGRILOKA Restoran</h1>
                  </div>
                  <nav class="navbar navbar-inverse">
                       
                        <ul class="nav navbar-nav" style="font-size: 20px">
                          <li class="active"><a href="<?php echo base_url()?>Restoran/transaksi/cart">Home</a></li>
                          <li><a href="<?php echo base_url()?>Restoran/transaksi/menu_makanan/tampil_kategori/Appetizer" style="background-color: #FF8636">Appetizer</a></li>
                          <li><a href="<?php echo base_url()?>Restoran/transaksi/menu_makanan/tampil_kategori/Main_Course" style="background-color: #E8E231">Main Course</a></li>
                          <li><a href="<?php echo base_url()?>Restoran/transaksi/menu_makanan/tampil_kategori/Dessert" style="background-color: #E559B2">Dessert</a></li>
                          <li><a href="<?php echo base_url()?>Restoran/transaksi/menu_makanan/tampil_kategori/Minuman" style="background-color: #59B9E5">Minuman</a></li>

                        </ul>
                        <ul class="nav navbar-nav navbar-right" >
                        <li><a href="<?php echo base_url()?>Restoran/transaksi/cart/pesanan_view" style="background-color: #8EF193; font-size: 18px;"><span class="badge bg-red" style="font-size: 15px;"></span> Pesanan</a></li>
                      </ul>
                    </nav>
                  <div class="x_title">
                    <br>
                    <h2>Daftar Menu Makanan & Minuman</h2>
                    <div class="clearfix"></div>
                  </div>
<div class="x_content col-md-9 col-sm-12 col-xs-12" >
                
<div class="thumbnails">
<?php
echo('<br>');

foreach ($menu as $row) :
?>
<div class="col-md-2 col-xs-6 col-sm-6" id="frameprd" style="margin-right: 60px">
<div class="thumbnail">               
            <img width="200" src="<?php echo base_url().'assets/gambar_menu/'.$row->gambar_menu;?>">
            <div class="caption">
              <h4><?php echo $row->nama_menu;?></h4>
              <div class="row">
                <div class="col-md-7">
                  <h4><?php echo 'Rp '.number_format($row->harga_menu);?></h4>
                </div>
                <div class="col-md-5">
                  <input type="number" name="qty" id="<?php echo $row->id_menu; ?>" value="1" class="qty form-control">
                </div>
              </div>
               <?php
                        
                        // Create form and send values in 'shopping/add' function.
                        echo form_open('Restoran/transaksi/cart/tambah');
                        echo form_hidden('id', $row->id_menu);
                        echo form_hidden('name', $row->nama_menu);
                        echo form_hidden('price', $row->harga_menu);
                        ?> 
                  <div class="caption">
                        <?php
                        $btn = array(
                            'class' => 'btn btn-primary btn-block',
                            'value' => 'Tambah',
                            'name' => 'action'
                        );
                        
                        // Submit Button.
                        echo form_submit($btn);
                        echo form_close();
                        ?>
                    </div>
            </div>
          </div>
 		</div>
       <?php endforeach;?>  
</div>
</div>
</div>
</div>
</div>
</div>