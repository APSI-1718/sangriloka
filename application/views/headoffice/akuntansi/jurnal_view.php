<!-- page content -->
<div class="right_col" role="main">

<div class="clearfix"></div>
	<div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
	        <div class="x_title">
	            <h2>Jurnal</h2>
	            <div class="clearfix"></div>
	   		  </div>

		<div class="x_content">
		
		<div class="clearfix"></div>
			<div class="title_right" style="float: left;">
				<button type="button" class="btn btn-info" data-toggle="" data-target="#"> Tampilkan Jurnal</button>
			</div>	

			<div class="col-md-7 col-sm-10 col-xs-12 form-group pull-right top_search">
				<div class="dataTables_length" id="datatable_length">
					<select name="attribut" aria-controls="datatable" class="form-control attribut">
						<option value="id_jurnal">Id Jurnal</option>
            <option value="jenis">Jenis</option>
						<option value="jumlah">Jumlah</option>
            <option value="tanggal">Tanggal</option>
					</select>
				</div>

				<div class="input-group">
            <input type="text" class="form-control nilaiattribut" placeholder="Masukan nilai Atribut yang akan di sortir.." style="font-size: 9;">
            <span class="input-group-btn">
              <button class="btn btn-default sortir" data-link="jurnal/jurnal_view" data-table="jurnal" data-kolom="Id Jurnal-Jenis-Jumlah-Tanggal- " data-kolomtable="id_jurnal-jenis-jumlah-tanggal" type="button">Sortir</button>
            </span>
        </div>
      </div>
            
            <div class="clearfix"></div>     
			<div class="table-responsive">
              <table class="table table-striped table-bordered jambo_table bulk_action">
                <thead>
                  <tr class="headings">
                    <th class="column-title">Id Jurnal</th>
                    <th class="column-title">Jenis</th>
                    <th class="column-title">Jumlah</th>
                    <th class="column-title">Tanggal</th>
                    <th></th>
                  </tr>
                </thead>

                <tbody>
                  <?php foreach ($jurnal as $key => $value) { ?>
                    <tr class="even pointer">
                      <td class=" "><?php echo $value['id_jurnal'] ?></td>
                      <td class=" "><?php echo $value['jenis'] ?></td>
                      <td class="a-left a-left"><?php echo $value['jumlah'] ?></td>
                      <td class="last"><?php echo $value['tanggal'] ?></td>
                      <td class="a-center ">
                        <a href="#"></a><input type="checkbox" class="flat" name="" value="<?php echo $value['id_jurnal'] ?>">
                      </td>
                    </tr>
                  <?php } ?>
                </tbody>
              </table>
            </div>
<div class="clearfix"></div>
		</div>
		</div>
	  </div>
	</div>
</div>