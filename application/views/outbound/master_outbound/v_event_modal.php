<div class="modal fade" id="tambahModal" tabindex="-1" role="dialog" aria-labelledby="tambahModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="close">
					<span aria-hidden="true">&times;</span>
				</button>
				<h4 class="modal-title" id="tambahModalLabel"><i class="fa fa-plus"></i>&nbsp;&nbsp; Tambah Event</h4>
			</div>

			<div class="modal-body">
				<form method="post" action="<?=base_url('outbound/master_outbound/event/tambah_event');?>">
					<div class="form-group">
						<input type="hidden" name="id_event" class="form-control" id="id_event">
					</div>
					<div class="form-group">
						<input type="date" name="tanggal_pemesanan" class="form-control" id="tanggal_pemesanan" placeholder="" required oninvalid="this.setCustomValidity('Silahkan isi kolom ini !')" oninput="setCustomValidity('')">
					</div>
					<div class="form-group">
						<input type="date" name="tanggal_penyelenggaraan" class="form-control" id="tanggal_penyelenggaraan" placeholder="" required oninvalid="this.setCustomValidity('Silahkan isi kolom ini !')" oninput="setCustomValidity('')">
					</div>
					<div class="form-group">
						<input type="text" name="kebutuhan" class="form-control" id="kebutuhan" placeholder="Kebutuhan" required oninvalid="this.setCustomValidity('Silahkan isi kolom ini !')" oninput="setCustomValidity('')">
					</div>
					<div class="form-group">
						<input type="text" name="status" class="form-control" id="status" placeholder="Status" required oninvalid="this.setCustomValidity('Silahkan isi kolom ini !')" oninput="setCustomValidity('')">
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