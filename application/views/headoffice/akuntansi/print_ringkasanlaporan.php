<!-- page content -->
<script>window.print();</script>
<div class="right_col" role="main">
<div class="clearfix"></div>
	<div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
	        <div class="x_title">
	        	<h1 class="text-center">Ringkasan Laporan</h1>
	        </div>
	    

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
                  <!-- <?php foreach ($ringkasan as $key => $value) { ?> -->
                  <tr class="even pointer">
                    <td class=" "><?php echo $value['id_worksheet']; ?></td>
                    <td class=" "><?php echo $value['jenis']; ?></td>
                    <td class=" "><?php echo $value['jumlah']; ?></td>
                    <td class="last"><?php echo $value['tanggal']; ?></td>
                    <td class="a-center ">
                      <a href="#"></a><input type="checkbox" class="flat" name="" value="<?php echo $value['id_worksheet']; ?>">
                    </td>
                  </tr>
                  <!-- <?php } ?> -->
                </tbody>
              </table>
            </div>
		</div>
	  </div>
	</div>
</div>