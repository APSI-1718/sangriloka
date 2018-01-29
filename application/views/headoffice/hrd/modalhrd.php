<div class="modal fade" id="deleterekrutModal" tabindex="-1" role="dialog" aria-labelledby="deleterekrutModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="buttton" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;
				</span></button>
				<h4 class="modal-title" id="deleterekrutModalLabel">Hapus Data</h4>
			</div><form method="post" action="<?php echo base_url('headoffice/hrd/chrd_rekrutmen/delete_data');?>">
			<div class="modal-body">
				Apakah Anda yakin untuk menghapus data rekrutmen dengan nama?
				<input type="text" name="nama" id="nama" class="form-control nama_rekrut" readonly>			
			</div>
			<div class="modal-footer">
				
					<input type="hidden" name="no_pendaftaran" id="no_pendaftaran" class="form-control no_pendaftaran">
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
				<h4 class="modal-title">Data Mutasi</h4>
			</div>
			<div class="modal-body">
				<form method="post" action="<?php echo base_url('headoffice/hrd/cadm_mutasi/edit_data');?>">
					<div class="form-group">
						<input type="hidden" name="no_pendaftaran" class="form-control no_pendaftaran" id="no_pendaftaran" placeholder="Id. Mutasi">
					</div>
					<div class="form-group">
						<input type="text" name="id_mutasi" class="form-control id_mutasi" id="id_mutasi" placeholder="Id. Mutasi" readonly>
					</div>
					<div class="form-group">
						<input type="text" name="tanggal" class="form-control tanggal" id="tanggal" placeholder="Tanggal" readonly>
					</div>
					<div class="form-group">
						<input type="text" name="id_pegawai" class="form-control id_pegawai" id="id_pegawai" placeholder="NIP" readonly>
					</div>
					<div class="form-group">
						<input type="text" name="nama" class="form-control nama" id="nama" placeholder="Nama Lengkap" readonly>
					</div>
					<div class="form-group">
            			<label for="posisi" class="control-label">Posisi</label>
            				<select class="form-control posisi" name="posisi" id="posisi">
              					<option value="Head Office">Head Office</option>
              					<option value="Hotel">Hotel</option>
              					<option value="Kolam Renang">Kolam Renang</option>
              					<option value="Restoran">Restoran</option>
            				</select>
          			</div>
          			<div class="form-group">
            			<label for="jabatan" class="control-label">Jabatan</label>
            				<select class="form-control jabatan" name="jabatan" id="jabatan">
              					<option value="Admin">Admin</option>
              					<option value="HRD">HRD</option>
              					<option value="Koki">Koki</option>
              					<option value="Cleaning Service">Cleaning Service</option>
            				</select>
          			</div>
          			<div class="form-group">
            			<label for="status" class="control-label">Status</label>
            				<select class="form-control status" name="status" id="status">
              					<option value="-">-----</option>
              					<option value="Pelatihan">Pelatihan</option>
            				</select>
          			</div>
					<div class="form-group">
						<input type="text" name="no_tlp" class="form-control no_tlp" id="no_tlp" placeholder="No. Telepon" readonly>
					</div>
					<div class="form-group">
						<input type="text" name="email" class="form-control email" id="email" placeholder="Email" readonly>
					</div>
					<div class="form-group">
            			<label for="username" class="control-label">Username</label>
            				<select class="form-control username" name="username" id="username">
              					<option value="admho">admho (Admin Head Office)</option>
              					<option value="hrdho">hrdho (HRD Head Office)</option>
            				</select>
          			</div>
					<div class="form-group">
						<input type="text" name="password" class="form-control password" id="password" placeholder="Password">
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

<div class="modal fade" id="deletemutasiModal" tabindex="-1" role="dialog" aria-labelledby="deletemutasiModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="buttton" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;
				</span></button>
				<h4 class="modal-title" id="deletemutasiModalLabel">Hapus Data</h4>
			</div><form method="post" action="<?php echo base_url('headoffice/hrd/cadm_mutasi/delete_data');?>">
			<div class="modal-body">
				Apakah Anda yakin untuk menghapus data rekrutmen dengan nama?
				<input type="text" name="nama" id="nama" class="form-control nama" readonly>			
			</div>
			<div class="modal-footer">
				
					<input type="hidden" name="id_mutasi" id="id_mutasi" class="form-control id_mutasi">
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
			</div><form method="post" action="<?php echo base_url('headoffice/hrd/cadm_cuti/delete_data');?>">
			<div class="modal-body">
				Apakah Anda yakin untuk menghapus data rekrutmen dengan nama?
				<input type="text" name="nama" id="nama" class="form-control nama" readonly>			
			</div>
			<div class="modal-footer">
				
					<input type="hidden" name="id_cuti" id="id_cuti" class="form-control id_cuti">
						<button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
						<button class="btn btn-danger">Hapus</button>
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
				<h4 class="modal-title">Data Kinerja</h4>
			</div>
			<div class="modal-body">
				<form method="post" action="<?php echo base_url('headoffice/hrd/cadm_mutasi/edit_data');?>">
					<div class="form-group">
						<input type="hidden" name="no_pendaftaran" class="form-control no_pendaftaran" id="no_pendaftaran" placeholder="Id. Mutasi">
					</div>
					<div class="form-group">
						<input type="text" name="id_mutasi" class="form-control id_mutasi" id="id_mutasi" placeholder="Id. Mutasi" readonly>
					</div>
					<div class="form-group">
						<input type="text" name="tanggal" class="form-control tanggal" id="tanggal" placeholder="Tanggal" readonly>
					</div>
					<div class="form-group">
						<input type="text" name="id_pegawai" class="form-control id_pegawai" id="id_pegawai" placeholder="NIP" readonly>
					</div>
					<div class="form-group">
						<input type="text" name="nama" class="form-control nama" id="nama" placeholder="Nama Lengkap" readonly>
					</div>
					<div class="form-group">
            			<label for="posisi" class="control-label">Posisi</label>
            				<select class="form-control posisi" name="posisi" id="posisi">
              					<option value="Head Office">Head Office</option>
              					<option value="Hotel">Hotel</option>
              					<option value="Kolam Renang">Kolam Renang</option>
              					<option value="Restoran">Restoran</option>
            				</select>
          			</div>
          			<div class="form-group">
            			<label for="jabatan" class="control-label">Jabatan</label>
            				<select class="form-control jabatan" name="jabatan" id="jabatan">
              					<option value="Admin">Admin</option>
              					<option value="HRD">HRD</option>
              					<option value="Koki">Koki</option>
              					<option value="Cleaning Service">Cleaning Service</option>
            				</select>
          			</div>
          			<div class="form-group">
            			<label for="status" class="control-label">Status</label>
            				<select class="form-control status" name="status" id="status">
              					<option value="-">-----</option>
              					<option value="Pelatihan">Pelatihan</option>
            				</select>
          			</div>
          			<div class="form-group">
            			<label for="pil_kinerja" class="control-label">Pilihan Kinerja</label>
            				<select class="form-control pil_kinerja" name="pil_kinerja" id="pil_kinerja">
              					<option value="Promosi">Promosi</option>
              					<option value="Demosi">Demosi</option>
            				</select>
          			</div>
					<div class="form-group">
						<input type="text" name="no_tlp" class="form-control no_tlp" id="no_tlp" placeholder="No. Telepon" readonly>
					</div>
					<div class="form-group">
						<input type="text" name="email" class="form-control email" id="email" placeholder="Email" readonly>
					</div>
					<div class="form-group">
            			<label for="username" class="control-label">Username</label>
            				<select class="form-control username" name="username" id="username">
            					<option value="-">-----</option>
              					<option value="admho">admho (Admin Head Office)</option>
              					<option value="hrdho">hrdho (HRD Head Office)</option>
            				</select>
          			</div>
					<div class="form-group">
						<input type="text" name="password" class="form-control password" id="password" placeholder="Password">
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