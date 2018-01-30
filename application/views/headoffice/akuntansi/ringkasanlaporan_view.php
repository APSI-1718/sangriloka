<!-- page content -->
<div class="right_col" role="main">

<div class="clearfix"></div>
	<div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
	        <div class="x_title">
	            <h2>Ringkasan Laporan</h2>
	            <div class="clearfix"></div>
	   		  </div>

        <div class="x_content">
		
            <div class="clearfix"></div>
            <div class="col-md-5 col-sm-5 col-xs-12">
              <p style=""> Jenis Laporan </p>
                <div class="" id="" >
                  <select name="attribut" aria-controls="" class="form-control attribut">
                    <option value="id_worksheet">Id Worksheet</option>
                    <option value="jenis">Jenis</option>
                    <option value="jumlah">Jumlah</option>
                    <option value="tanggal">Tanggal</option>
                  </select>
                </div>
            </div>

            <div class="col-md-5 col-sm-5 col-xs-12" style="clear: left; margin-top: 20px; ">
                <div class="input-group" style="">
                  	<input type="text" class="form-control nilaiattribut" placeholder="Masukan Atribut Pencarian">
                  	<span class="input-group-btn">
                    	<button class="btn btn-default sortir" data-link="ringkasan_laporan/ringkasanlaporan_view" data-table="ringkasanlaporan" data-kolom="Id Worksheet-Jenis-Jumlah-Tanggal- " data-kolomtable="id_worksheet-jenis-jumlah-tanggal" type="button">Sortir</button>
                  	</span>
              	</div>
            </div>

            <div class="clearfix"></div>
            <div class="table-responsive">
              <table class="table table-striped table-bordered jambo_table bulk_action">
                <thead>
                  <tr class="headings">
                    <th class="column-title">Id Worksheet</th>
                    <th class="column-title">Jenis</th>
                    <th class="column-title">Jumlah</th>
                    <th class="column-title">Tanggal</th>
                    <th></th>
                  </tr>
                </thead>

                <tbody>
                  <?php foreach ($ringkasan as $key => $value) { ?>
                  <tr class="even pointer">
                    <td class=" "><?php echo $value['id_worksheet']; ?></td>
                    <td class=" "><?php echo $value['jenis']; ?></td>
                    <td class=" "><?php echo $value['jumlah']; ?></td>
                    <td class="last"><?php echo $value['tanggal']; ?></td>
                    <td class="a-center ">
                      <a href="#"></a><input type="checkbox" class="flat" name="" value="<?php echo $value['id_worksheet']; ?>">
                    </td>
                  </tr>
                  <?php } ?>
                </tbody>
              </table>
            </div>
            <div class="clearfix"></div>
            <div style="margin-left: 90%;">
              <a  class="btn btn-primary buttons-print btn-sm" tabindex="0" aria-controls="" href="<?php echo base_url()?>headoffice/akuntansi/print_data/print_ringkasanlaporan"><span>Print</span></a>
              <!-- <li><a href="<?php echo base_url() ?>headoffice/akuntansi/hal_awal_akuntansi/beranda"><i class="fa fa-home"></i> Beranda</a></li> -->
          	</div>
    </div>
		</div>
	  </div>
	</div>
</div>