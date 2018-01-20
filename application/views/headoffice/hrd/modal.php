<div class="modal fade" id="deletepegawaiModal" tabindex="-1" role="dialog" aria-labelledby="deletepegawaiModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="buttton" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;
				</span></button>
				<h4 class="modal-title" id="deletepegawaiModalLabel">Hapus Data</h4>
			</div>
			<div class="modal-body">
				Apakah Anda yakin untuk menghapus data pegawai dengan nama?
				<input type="text" name="nama" id="nama" class="form-control nama" disabled>			
			</div>
			<div class="modal-footer">
				<form method="post" action="<?php echo base_url('headoffice/hrd/hal_awal_hrd/delete_data');?>">
					<input type="hidden" name="id_pegawai" id="id_pegawai" class="form-control id_pegawai">
						<button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
						<button class="btn btn-danger">Hapus</button>
				</form>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="editpegawaiModal" tabindex="-1" role="dialog" aria-labelledby="editpegawaiModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;
				</span></button>
				<h4 class="modal-title edit" id="editpegawaiModalLabel">Edit Data Pegawai</h4>
			</div>
			<div class="modal-body">
				<form method="post" action="<?php echo base_url('headoffice/hrd/hal_awal_hrd/edit_data');?>">
					<div class="form-group">
						<input type="text" name="id_pegawai" class="form-control #" id="id_pegawai" placeholder="NIP">
					</div>
					<div class="form-group">
						<input type="text" name="nama" class="form-control #" id="nama" placeholder="Nama Lengkap">
					</div>
					<div class="form-group">
						<input type="text" name="posisi" class="form-control #" id="posisi" placeholder="Posisi" ></input>
					</div>
					<div class="form-group">
						<input type="text" name="jabatan" class="form-control #" id="jabatan" placeholder="Jabatan" ></input>
					</div>
					<div class="form-group">
						<textarea id="alamat" required="required" class="form-control" name="alamat" data-parsley-trigger="keyup" data-parsley-maxlength="100" data-parsley-validation-threshold="10" placeholder="Alamat"></textarea>
					</div>
					<div class="form-group">
            			<label for="j_kelamin" class="control-label">Jenis Kelamin</label>
            			<select class="form-control #" name="j_kelamin" id="j_kelamin">
              				<option value="L">Laki-Laki</option>
              				<option value="P">Perempuan</option>
            			</select>
          			</div>
					<div class="form-group">
						<input type="text" name="tgl_lahir" class="form-control #" id="tgl_lahir" placeholder="Tanggal Lahir"></input>
					</div>
					<div class="form-group">
						<input type="text" name="no_tlp" class="form-control #" id="no_tlp" placeholder="No. Telepon"></input>
					</div>
					<div class="form-group">
						<input type="text" name="email" class="form-control #" id="email" placeholder="Email"></input>
					</div>
					<div class="form-group">
						<input type="text" name="username" class="form-control #" id="username" placeholder="Username"></input>
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

<div class="modal fade" id="deletedatarekrutModal" tabindex="-1" role="dialog" aria-labelledby="deletedatarekrutModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="buttton" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;
				</span></button>
				<h4 class="modal-title" id="deletedatarekrutModalLabel">Hapus Data</h4>
			</div>
			<div class="modal-body">
				Apakah Anda yakin untuk menghapus data rekrutmen dengan nama?
				<input type="text" name="nama_rekrut" id="nama" class="form-control nama_rekrut" readonly>			
			</div>
			<div class="modal-footer">
				<form method="post" action="<?php echo base_url('headoffice/hrd/rekrut_hrd/delete_data');?>">
					<input type="hidden" name="no_pendaftaran" id="no_pendaftaran" class="form-control no_pendaftaran">
						<button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
						<button class="btn btn-danger">Hapus</button>
				</form>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="deletemutasiModal" tabindex="-1" role="dialog" aria-labelledby="deletemutasiModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="buttton" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;
				</span></button>
				<h4 class="modal-title" id="deletemutasiModalLabel">Hapus Data</h4>
			</div>
			<div class="modal-body">
				Apakah Anda yakin untuk menghapus data mutasi dengan nama?
				<input type="text" name="nama" id="nama" class="form-control nama" disabled>			
			</div>
			<div class="modal-footer">
				<form method="post" action="<?php echo base_url('headoffice/hrd/mutasi_hrd/delete_data');?>">
					<input type="hidden" name="id_mutasi" id="id_mutasi" class="form-control id_mutasi">
						<button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
						<button class="btn btn-danger">Hapus</button>
				</form>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="editmutasiModal" tabindex="-1" role="dialog" aria-labelledby="editmutasiModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;
				</span></button>
				<h4 class="modal-title">Edit Data Mutasi</h4>
			</div>
			<div class="modal-body">
				<form method="post" action="<?php echo base_url('headoffice/hrd/mutasi_hrd/edit_data');?>">
					<div class="form-group">
						<input type="text" name="id_mutasi" class="form-control #" id="id_mutasi" placeholder="Id. Mutasi" >
					</div>
					<div class="form-group">
						<input type="text" name="tanggal" class="form-control #" id="tanggal" placeholder="Tanggal" disabled>
					</div>
					<div class="form-group">
						<input type="text" name="id_pegawai" class="form-control #" id="id_pegawai" placeholder="NIP" disabled>
					</div>
					<div class="form-group">
						<input type="text" name="nama" class="form-control #" id="nama" placeholder="Nama Lengkap">
					</div>
					<div class="form-group">
            			<label for="#" class="control-label">Posisi</label>
            				<select class="form-control #" id="posisi" name="posisi">
              					<option value="Head Office">Head Office</option>
              					<option value="Kolam Renang">Kolam Renang</option>
              					<option value="Restoran">Restoran</option>
            				</select>
          			</div>
          			<div class="form-group">
            			<label for="#" class="control-label">Jabatan</label>
            				<select class="form-control #" name="jabatan" id="jabatan">
              					<option value="Admin">Admin</option>
              					<option value="Security">Security</option>
              					<option value="Koki">Koki</option>
            				</select>
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

<div class="modal fade" id="editkinerjaModal" tabindex="-1" role="dialog" aria-labelledby="editkinerjaModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;
				</span></button>
				<h4 class="modal-title edit" id="editkinerjaModalLabel">Edit Data Kinerja</h4>
			</div>
			<div class="modal-body">
				<form method="post" action="<?php echo base_url('headoffice/hrd/kinerja_peg/edit_data');?>">
					<div class="form-group">
						<input type="text" name="id_kinerja" class="form-control #" id="id_kinerja" placeholder="Id. Kinerja">
					</div>
					<div class="form-group">
						<input type="text" name="id_pegawai" class="form-control #" id="id_pegawai" placeholder="NIP" disabled>
					</div>
					<div class="form-group">
						<input type="text" name="nama" class="form-control #" id="nama" placeholder="Nama" disabled>
					</div>
					<div class="form-group">
						<input type="text" name="tanggal" class="form-control #" id="tanggal" placeholder="Tanggal Promosi/Demosi" disabled>
					</div>
					<div class="form-group">
						<input type="text" name="posisi" class="form-control #" id="posisi" placeholder="Posisi" disabled>
					</div>
          			<div class="form-group">
            			<label for="jabatan" class="control-label">Jabatan</label>
            				<select class="form-control #" name="jabatan" id="jabatan">
              					<option value="Admin">Admin</option>
              					<option value="Security">Security</option>
              					<option value="Koki">Koki</option>
            				</select>
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

<div class="modal fade" id="deletekinerjaModal" tabindex="-1" role="dialog" aria-labelledby="deletekinerjaModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="buttton" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;
				</span></button>
				<h4 class="modal-title" id="deletekinerjaModalLabel">Hapus Data</h4>
			</div>
			<div class="modal-body">
				Apakah Anda yakin untuk menghapus data kinerja dengan nama?
				<input type="text" name="nama" id="nama" class="form-control nama" disabled>			
			</div>
			<div class="modal-footer">
				<form method="post" action="<?php echo base_url('headoffice/hrd/kinerja_peg/delete_data');?>">
					<input type="hidden" name="id_kinerja" id="id_kinerja" class="form-control">
						<button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
						<button class="btn btn-danger">Hapus</button>
				</form>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="deletepelatihanModal" tabindex="-1" role="dialog" aria-labelledby="deletepelatihanModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="buttton" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;
				</span></button>
				<h4 class="modal-title" id="deletepelatihanModalLabel">Hapus Data</h4>
			</div>
			<div class="modal-body">
				Apakah Anda yakin untuk menghapus data pelatihan dengan nama?
				<input type="text" name="nama" id="nama" class="form-control nama" disabled>			
			</div>
			<div class="modal-footer">
				<form method="post" action="<?php echo base_url('headoffice/hrd/pelatihan/delete_data');?>">
					<input type="text" name="id_pelatihan" id="id_pelatihan" class="form-control">
						<button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
						<button class="btn btn-danger">Hapus</button>
				</form>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="deletecutiModal" tabindex="-1" role="dialog" aria-labelledby="deletecutiModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="buttton" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;
				</span></button>
				<h4 class="modal-title" id="deletecutiModalLabel">Hapus Data</h4>
			</div>
			<div class="modal-body">
				Apakah Anda yakin untuk menghapus data cuti dengan nama?
				<input type="text" name="nama" id="nama" class="form-control nama" disabled>			
			</div>
			<div class="modal-footer">
				<form method="post" action="<?php echo base_url('headoffice/hrd/cuti_peg/delete_data');?>">
					<input type="text" name="id_cuti" id="id_cuti" class="form-control">
						<button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
						<button class="btn btn-danger">Hapus</button>
				</form>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="deletelaporanModal" tabindex="-1" role="dialog" aria-labelledby="deletelaporanModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="buttton" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;
				</span></button>
				<h4 class="modal-title" id="deletelaporanModalLabel">Hapus Data</h4>
			</div>
			<div class="modal-body">
				Apakah Anda yakin untuk menghapus laporan dengan judul?
				<input type="text" name="nama" id="nama" class="form-control nama" disabled>			
			</div>
			<div class="modal-footer">
				<form>
					<input type="hidden" name="">
						<button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
						<button class="btn btn-danger">Hapus</button>
				</form>
			</div>
		</div>
	</div>
</div>