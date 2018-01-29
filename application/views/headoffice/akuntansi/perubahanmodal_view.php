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
				<button type="button" class="btn btn-info" data-toggle="modal" data-target="#TambahPerubahanModal"> Tambah Modal </button>
			</div>	

			<div class="col-md-7 col-sm-10 col-xs-12 form-group pull-right top_search">
				<div class="attribut" id="datatable_length">
					<select name="datatable_length" aria-controls="datatable" class="form-control attribut">
            <option value="id_perubahanModal">Id Perubahan Modal</option>
            <option value="nama_perubahanModal">Nama Perubahan</option>
            <option value="jumlaht">Jumlah</option>
						<option value="tanggal">Tanggal</option>
					</select>
				</div>

				<div class="input-group">
                    <input type="text" class="form-control nilaiattribut" placeholder="Masukan nilai Atribut yang akan di sortir.." style="font-size: 9;">
                    <span class="input-group-btn">
                      <button class="btn btn-default sortir" data-link="perubahanmodal/perubahanmodal_view" data-table="perubahanmodal" data-kolom="Id Perubahan Modal-Nama Perubahan-Jumlah-Tanggal- " data-kolomtable="id_perubahanModal-nama_perubahanModal-jumlah-tanggal" type="button">Sortir </button>
                    </span>
                </div>
            </div>
            
            <div class="clearfix"></div>     
			<div class="table-responsive">
              <table class="table table-striped table-bordered jambo_table bulk_action">
                <thead>
                  <tr class="headings">
                    <th class="column-title">Id Perubahan Modal</th>
                    <th class="column-title">Nama Perubahan </th>
                    <th class="column-title">Jumlah </th>
                    <th class="column-title">Tanggal </th>
                    <th></th>
                  </tr>
                </thead>

                <tbody>
                  <?php foreach ($perubahan_modal as $key => $value) { ?>
                  <tr class="even pointer">
                    <td class=" "><?php echo $value['id_perubahanModal'] ?></td>
                    <td class=" "><?php echo $value['nama_perubahanModal'] ?></td>
                    <td class="a-left a-left"><?php echo $value['jumlah'] ?></td>
                    <td class="last"><?php echo $value['tanggal'] ?></td>
                    <td class="a-center">
                      <a href="#" data-toggle="modal" data-target="#editPerubahanModal">
                        <button type="button" data-id="<?php echo $value['id_perubahanModal'] ?>" class="btn btn-primary"><i style="color: white; " class="fa fa-pencil-square-o" aria-hidden="true">Edit</i></button>
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