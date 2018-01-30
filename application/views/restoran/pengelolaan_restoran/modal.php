<<<<<<< HEAD
<div class="modal fade" id="deletepegawaiModal" tabindex="-1" role="dialog" aria-labelledby="deletepegawaiModalLabel">
=======
<div class="modal fade" id="deletemenuModal" tabindex="-1" role="dialog" aria-labelledby="deletemenuModalLabel">
>>>>>>> fd58cdfb379aadf2ff2c70a0f8bf8325c698e7e0
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="buttton" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;
				</span></button>
<<<<<<< HEAD
				<h4 class="modal-title" id="deletepegawaiModalLabel">Hapus Data Pegawai Dengan NIP</h4>
			</div>
			<div class="modal-body">
				<form method="#" action="#">
				<div class="form-group">
				<input type="hidden" name="#" class="#" id="#">
				<input type="text" class="#" id="#" disabled>
		</div></div>
			<div class="modal-footer">
=======
				<h4 class="modal-title" id="deletemenuModalLabel">Anda Yakin Ingin Menghapus ?</h4>
			</div>	
			<div class="modal-footer">
					<div class="form-group">
					<form method="post" action="<?php echo base_url('Restoran/kelola_tugas/kelola_menu/delete_data');?>">
						<input type="hidden" name="no_menu" class="form-control no_menu" id="no_menu" placeholder="No Menu">
					</div>
>>>>>>> fd58cdfb379aadf2ff2c70a0f8bf8325c698e7e0
					<button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
					<button class="btn btn-danger">HAPUS</button>
				</form>
			</div>
		</div>
	</div>
</div>

<<<<<<< HEAD
<div class="modal fade" id="editpegawaiModal" tabindex="-1" role="dialog" aria-labelledby="editpegawaiModalLabel">
=======
<div class="modal fade" id="editmenuModal" tabindex="-1" role="dialog" aria-labelledby="editmenuModalLabel">
>>>>>>> fd58cdfb379aadf2ff2c70a0f8bf8325c698e7e0
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;
				</span></button>
<<<<<<< HEAD
				<h4 class="modal-title edit" id="editpegawaiModalLabel">Edit Data Pegawai</h4>
			</div>
			<div class="modal-body">
				<form method="#" action="#">
					<div class="form-group">
						<input type="text" name="#" class="form-control #" id="#" placeholder="NIP" disabled>
					</div>
					<div class="form-group">
						<input type="text" name="#" class="form-control #" id="#" placeholder="Nama Lengkap">
					</div>
					<div class="form-group">
						<input type="text" name="#" class="form-control #" id="#" placeholder="Posisi" disabled></input>
					</div>
					<div class="form-group">
						<input type="text" name="#" class="form-control #" id="#" placeholder="Jabatan" disabled></input>
					</div>
					<div class="form-group">
						<textarea id="#" required="required" class="form-control" name="#" data-parsley-trigger="keyup" data-parsley-maxlength="100" data-parsley-validation-threshold="10" placeholder="Alamat"></textarea>
					</div>
					<div class="form-group">
            <label for="#" class="control-label">Jenis Kelamin</label>
            <select class="form-control #" name="#">
              <option value="L">Laki-Laki</option>
              <option value="P">Perempuan</option>
            </select>
          </div>
					<div class="form-group">
						<input type="text" name="#" class="form-control #" id="#" placeholder="Tanggal Lahir"></input>
					</div>
					<div class="form-group">
						<input type="text" name="#" class="form-control #" id="#" placeholder="No. Telepon"></input>
					</div>
					<div class="form-group">
						<input type="text" name="#" class="form-control #" id="#" placeholder="Email"></input>
					</div>
					<div class="form-group">
						<input type="text" name="#" class="form-control #" id="#" placeholder="Username"></input>
					</div>
					<div class="form-group">
						<input type="hidden" name="#" class="form-control #" id="#" placeholder="NIP"></input>
					</div>
			</div>
=======
				<h4 class="modal-title edit" id="editmenuModalLabel">Edit Menu</h4>
			</div>
			<form method="post" action="<?php echo base_url('Restoran/kelola_tugas/kelola_menu/edit_data');?>">
			<div class="modal-body">
				
					<div class="form-group">
						<input type="text" name="no_menu" class="form-control no_menu" id="no_menu" placeholder="No Menu" readonly>
					</div>
					<div class="form-group">
						<input type="text" name="daftar_menu" class="form-control daftar_menu" id="daftar_menu" placeholder="Daftar Menu">
					</div>
					<div class="form-group">
						<input type="text" name="harga" class="form-control harga" id="harga" placeholder="Harga" ></input>
					</div>
					<div class="form-group">
						<input type="text" name="jenismakanan" class="form-control jenismakanan" id="jenismakanan" placeholder="Jenis Menu" ></input>
					</div>
			</div>		
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
				<button class="btn btn-primary">Simpan</button>
				</form>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="deletemejaModal" tabindex="-1" role="dialog" aria-labelledby="deletemejaModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="buttton" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;
				</span></button>
				<h4 class="modal-title" id="deletemejaModalLabel">Anda Yakin Ingin Menghapus ?</h4>
			</div>	
			<div class="modal-footer">
					<div class="form-group">
					<form method="post" action="<?php echo base_url('Restoran/kelola_tugas/kelola_meja/delete_data');?>">
						<input type="hidden" name="id_meja" class="form-control id_meja" id="id_meja" placeholder="Id Meja">
					</div>
					<button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
					<button class="btn btn-danger">HAPUS</button>
				</form>
			</div>
		</div>
	</div>
</div>
<div class="modal fade" id="editmejaModal" tabindex="-1" role="dialog" aria-labelledby="editmejaModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;
				</span></button>
				<h4 class="modal-title edit" id="editmejaModalLabel">Edit Meja</h4>
			</div>
			<form method="post" action="<?php echo base_url('Restoran/kelola_tugas/kelola_meja/edit_data');?>">

			<div class="modal-body">
					<div class="form-group">
						<input type="text" name="id_meja" class="form-control id_meja" id="id_meja" placeholder="ID Meja" readonly>
					</div>
					<div class="form-group">
						<input type="text" name="jumlah_meja" class="form-control jumlah_meja" id="jumlah_meja" placeholder="Jumlah Meja">
					</div>
					<div class="form-group">
						<input type="text" name="type_meja" class="form-control type_meja" id="type_meja" placeholder="Type Meja" ></input>
					</div>
					
			</div>		
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
				<button class="btn btn-primary">Simpan</button>
				</form>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="deletetugasModal" tabindex="-1" role="dialog" aria-labelledby="deletetugasModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="buttton" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;
				</span></button>
				<h4 class="modal-title" id="deletetugasModalLabel">Anda Yakin Ingin Menghapus ?</h4>
			</div><div class="modal-footer">
					<div class="form-group">
					<form method="post" action="<?php echo base_url('Restoran/kelola_tugas/kelola_tugas/delete_data');?>">
						<input type="hidden" name="id_tugas" class="form-control id_tugas" id="id_tugas" placeholder="Id Tugas">
					</div>
					<button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
					<button class="btn btn-danger">HAPUS</button>
				</form>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="edittugasModal" tabindex="-1" role="dialog" aria-labelledby="edittugasModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;
				</span></button>
				<h4 class="modal-title edit" id="edittugasModalLabel">Edit Tugas</h4>
			</div>
			<form method="post" action="<?php echo base_url('Restoran/kelola_tugas/kelola_tugas/edit_data');?>">

			<div class="modal-body">
					<div class="form-group">
						<input type="text" name="id_tugas" class="form-control id_tugas" id="id_tugas" placeholder="ID Tugas" readonly>
					</div>
					<div class="form-group">
						<input type="text" name="Nama_tugas" class="form-control Nama_tugas" id="Nama_tugas" placeholder="Nama Tugas">
					</div>
					<div class="form-group">
						<input type="text" name="penempatan_tugas" class="form-control penempatan_tugas" id="penempatan_tugas" placeholder="Penempatan Tugas" ></input>
					</div>
					
			</div>		
>>>>>>> fd58cdfb379aadf2ff2c70a0f8bf8325c698e7e0
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
				<button class="btn btn-primary">Simpan</button>
				</form>
			</div>
		</div>
	</div>
</div>