<!-- page content -->
<div class="right_col" role="main">

<div class="clearfix"></div>
	<div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">

	        <div class="x_title">
	            <h2>Perubahan Modal</h2>
	            <div class="clearfix"></div>
	   		</div>

		<div class="x_content">
		
		<div class="clearfix"></div>
			<div class="title_right" style="float: left;">
				<button type="button" class="btn btn-info" data-toggle="" data-target="#"> Tampilkan Data Pegawai </button>
			</div>	

			<div class="col-md-7 col-sm-10 col-xs-12 form-group pull-right top_search">
				<div class="dataTables_length" id="datatable_length">
					<select name="attribut" aria-controls="datatable" class="form-control attribut">
            <option value="id_penggajian">Id Penggajihan</option>
            <option value="jumlah">Jumlah</option>
            <option value="tgl_awal">Tanggal Awal</option>
            <option value="tgl_akhir">Tanggal Akhir</option>
					</select>
				</div>

				<div class="input-group">
                    <input type="text" class="form-control nilaiattribut" placeholder="Masukan nilai Atribut yang akan di sortir.." style="font-size: 9;">
                    <span class="input-group-btn">
                      <button class="btn btn-default sortir" data-link="penggajian/penggajian_view" data-table="penggajian" data-kolim="Id Penggajian-Jumlah-Tanggal-Tanggal Awal-Tanggal Akhir- " data-kolomtable="id_penggajian-jumlah-tgl_awal-tgl_akhir" type="button">Sortir </button>
                    </span>
                </div>
            </div>
            
            <div class="clearfix"></div>     
			<div class="table-responsive">
              <table class="table table-striped table-bordered jambo_table bulk_action">
                <thead>
                  <tr class="headings">
                    <th class="column-title">Id Penggajihan</th>
                    <th class="column-title">Jumlah </th>
                    <th class="column-title">Tanggal Awal </th>
                    <th class="column-title">Tanggal Akhir </th>
                    <th></th>
                  </tr>
                </thead>

                <tbody>
                  <?php foreach ($penggajihan as $key => $value) { ?>
                  <tr class="even pointer">
                    <td class=" "><?php echo $value['id_penggajihan'] ?></td>
                    <td class=" "><?php echo $value['jumlah'] ?></td>
                    <td class=" "><?php echo $value['tgl_awal'] ?></td>
                    <td class=" "><?php echo $value['tgl_akhir'] ?></td>
                    <td class=" ">
                      <a href="#">
                        <button type="button" data-id="<?php echo $value['id_penggajian'] ?>" class="btn btn-primary"><i style="color: white; " class="fa fa-pencil-square-o" aria-hidden="true"> Proses </i></button>
                      </a>
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