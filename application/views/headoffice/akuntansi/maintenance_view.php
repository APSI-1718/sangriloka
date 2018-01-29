<!-- page content -->
<div class="right_col" role="main">

<div class="clearfix"></div>
	<div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
	        <div class="x_title">
	            <h2>Kelola Maintenance</h2>
	            <div class="clearfix"></div>
	   		  </div>

		<div class="x_content">

			<div class="col-md-7 col-sm-10 col-xs-12 form-group pull-right top_search">
				<div class="dataTables_length" id="datatable_length">
					<select name="attribut" aria-controls="datatable" class="form-control attribut">
            <option value="id_maintenance">Kode</option>
            <option value="jenis">Jenis</option>
            <option value="jumlah">Jumlah</option>
						<option value="tanggal">Tanggal</option>
					</select>
				</div>

				<div class="input-group">
            <input type="text" class="form-control nilaiattribut" placeholder="Masukan nilai Atribut yang akan di sortir.." style="font-size: 9;">
            <span class="input-group-btn">
              <button class="btn btn-default sortir" data-link="kelola_maintenance/maintenance_view" data-table="maintenance" data-kolom="Kode-Jenis-Jumlah-Tanggal- " data-kolomtable="id_maintenance-jenis-jumlah-tanggal" type="button">Sortir </button>
            </span>
        </div>
      </div>
            
      <div class="clearfix"></div>     
			<div class="table-responsive">
              <table class="table table-striped table-bordered jambo_table bulk_action">
                <thead>
                  <tr class="headings">
                    <th class="column-title">Kode</th>
                    <th class="column-title">Jenis</th>
                    <th class="column-title">Jumlah</th>
                    <th class="column-title">Tanggal</th>
                    <th></th>
                  </tr>
                </thead>

                <tbody>
                  <?php foreach ($maintenance as $key => $value) { ?>
                  <tr class="even pointer">
                    <td class=" "><?php echo $value['id_maintenance'] ?></td>
                    <td class=" "><?php echo $value['jenis'] ?></td>
                    <td class="a-left a-left"><?php echo $value['jumlah'] ?></td>
                    <td class="last"><?php echo $value['tanggal'] ?></td>
                    <td class="a-center">
                      <a href="#">
                        <button type="button" data-kode="<?php echo $value['id_maintenance'] ?>" data-keterangan="<?php echo $value['keterangan'] ?>" class="btn btn-primary"><i style="color: white; " class="fa fa-pencil-square-o" aria-hidden="true"> Proses</i></button>
                      </a>
                    </td>
                  </tr>
                  <?php } ?>
                </tbody>
              </table>
              <div class="clearfix"></div>
              <div class="" style="">
              	<p style="display: inline; height: 50%; width: 49%; float: left; padding: 5px; margin: 0px 5px 5px 0px; box-sizing: border-box; text-align: justify;">
              		What is Lorem Ipsum? Lorem Ipsum is simply dummy text of the printing and typesetting industry.  orem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
              	</p>
              	<p style="display: inline; height: 50%; width: 49%; float: left; padding: 5px; margin: 0px 5px 5px 0px; box-sizing: border-box; text-align: justify;">
              		What is Lorem Ipsum? Lorem Ipsum is simply dummy text of the printing and typesetting industry.  orem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
              	</p>
              </div>
              <div class="clearfix"></div>
              <div class="" style="margin-left: 70%;">
              	<button type="button" class="btn btn-primary"><i style="color: white; " class="" aria-hidden="true"> Tidak Setuju </i></button>
              	<button type="button" class="btn btn-primary"><i style="color: white; " class="" aria-hidden="true"> Setuju </i></button>
              </div>
            </div>
            <div class="clearfix"></div>
		</div>
		</div>
	  </div>
	</div>
</div>