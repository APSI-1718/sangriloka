<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="close">
					<span aria-hidden="true">&times;</span>
				</button>
				<h4 class="modal-title edit" id="editModalLabel"></h4>
			</div>

			<div class="modal-body">
				<form method="post" action="<?=base_url('outbound/master_outbound/pegawai/ubah_pegawai');?>">
					<div class="form-group">
						<input type="hidden" name="id_pegawai" class="form-control id_pegawai" id="id_pegawai">
					</div>
					<div class="form-group">
						<input type="text" name="nama_pegawai" class="form-control nama_pegawai" id="nama_pegawai" placeholder="Nama Pegawai" required oninvalid="this.setCustomValidity('Silahkan isi kolom ini !')" oninput="setCustomValidity('')">
					</div>
					<div class="form-group">
						<textarea name="alamat" class="form-control alamat" id="alamat" placeholder="Alamat" required oninvalid="this.setCustomValidity('Silahkan isi kolom ini !')" oninput="setCustomValidity('')"></textarea>
					</div>
					<div class="form-group">
						<input type="date" name="tgl_lahir" class="form-control tgl_lahir" id="tgl_lahir" required oninvalid="this.setCustomValidity('Silahkan isi kolom ini !')" oninput="setCustomValidity('')">
					</div>
					<div class="form-group">
						<input type="text" name="no_tlp" class="form-control no_tlp" id="no_tlp" placeholder="No Telepon" required oninvalid="this.setCustomValidity('Silahkan isi kolom ini !')" oninput="setCustomValidity('')">
					</div>
					<div class="form-group">
						<input type="text" name="email" class="form-control email" id="" placeholder="Email" required oninvalid="this.setCustomValidity('Silahkan isi kolom ini !')" oninput="setCustomValidity('')">
					</div>
					<div class="form-group">
						<input type="text" name="username" class="form-control username" id="username" placeholder="Username" required oninvalid="this.setCustomValidity('Silahkan isi kolom ini !')" oninput="setCustomValidity('')">
					</div>
					<div class="form-group">
						<input type="text" name="password" class="form-control password" id="password" placeholder="Password" required oninvalid="this.setCustomValidity('Silahkan isi kolom ini !')" oninput="setCustomValidity('')">
					</div>
					<div class="form-group">
						<input type="text" name="jabatan" class="form-control jabatan" id="jabatan" placeholder="Jabatan" required oninvalid="this.setCustomValidity('Silahkan isi kolom ini !')" oninput="setCustomValidity('')">
					</div>
					<div class="form-group">
						<input type="text" name="posisi" class="form-control posisi" id="posisi" placeholder="Posisi" required oninvalid="this.setCustomValidity('Silahkan isi kolom ini !')" oninput="setCustomValidity('')">
					</div>
			</div>
			<div class="modal-footer">
				<button class="btn btn-primary"><i class="fa fa-save"></i>&nbsp; Simpan</button>
				<button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i>&nbsp; Batal</button>
				</form>
			</div>
		</div>
	</div>
</div>