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