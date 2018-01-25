<div class="modal fade" id="tambahModal" tabindex="-1" role="dialog" aria-labelledby="tambahModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="close">
					<span aria-hidden="true">&times;</span>
				</button>
				<h4 class="modal-title" id="tambahModalLabel"><i class="fa fa-plus"></i>&nbsp;&nbsp; Tambah Outbound</h4>
			</div>

			<div class="modal-body">
				<form method="post" action="<?=base_url('outbound/master_outbound/outbound/tambah_outbound');?>">
					<div class="form-group">
						<input type="hidden" name="id_outbound" class="form-control" id="id_outbound">
					</div>
					<div class="form-group">
						<input type="text" name="nama_outbound" class="form-control" id="nama_outbound" placeholder="Nama Outbound" required oninvalid="this.setCustomValidity('Silahkan isi kolom ini !')" oninput="setCustomValidity('')">
					</div>
					<div class="form-group">
						<textarea name="keterangan" class="form-control" id="keterangan" placeholder="Keterangan" required oninvalid="this.setCustomValidity('Silahkan isi kolom ini !')" oninput="setCustomValidity('')"></textarea>
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
				<form method="post" action="<?=base_url('outbound/master_outbound/outbound/ubah_outbound');?>">
					<div class="form-group">
						<input type="hidden" name="id_outbound" class="form-control id_outbound" id="id_outbound">
					</div>
					<div class="form-group">
						<input type="text" name="nama_outbound" class="form-control nama_outbound" id="nama_outbound" placeholder="Nama Outbound" required oninvalid="this.setCustomValidity('Silahkan isi kolom ini !')" oninput="setCustomValidity('')">
					</div>
					<div class="form-group">
						<input type="text" name="keterangan" class="form-control keterangan" id="keterangan" placeholder="Keterangan" required oninvalid="this.setCustomValidity('Silahkan isi kolom ini !')" oninput="setCustomValidity('')">
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


<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="close">
					<span aria-hidden="true">&times;</span>
				</button>
				<h4 class="modal-title" id="deleteModalLabel"><i class="fa fa-trash"></i>&nbsp; Delete Data</h4>
			</div>

			<div class="modal-body">
				<div class="delete alert alert-danger" role="alert"></div>
			</div>
				
			<div class="modal-footer">
				<form method="post" action="<?=base_url('outbound/master_outbound/outbound/hapus_outbound');?>">
					<input type="hidden" name="id_outbound" class="form-control id_outbound" id="id_outbound">
					<button class="btn btn-danger"><i class="fa fa-trash"></i>&nbsp; Hapus</button>
					<button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i>&nbsp; Batal</button>
				</form>
			</div>
		</div>
	</div>
</div>