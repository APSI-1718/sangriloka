<div class="modal fade" id="deletemenuModal" tabindex="-1" role="dialog" aria-labelledby="deletemenuModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="buttton" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;
				</span></button>
				<h4 class="modal-title" id="deletemenuModalLabel">Hapus Sesuai No Menu</h4>
			</div>	
			<div class="modal-body">
			
				<div class="form-group">
						<input type="text" name="daftar_menu" class="form-control daftar_menu" id="daftar_menu" placeholder="Daftar Menu" readonly>
					</div></div>
			<div class="modal-footer">
					<div class="form-group">
					<form method="post" action="<?php echo base_url('Restoran/kelola_tugas/kelola_menu/delete_data');?>">
						<input type="hidden" name="no_menu" class="form-control no_menu" id="no_menu" placeholder="No Menu">
					</div>
					<button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
					<button class="btn btn-danger">HAPUS</button>
				</form>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="editmenuModal" tabindex="-1" role="dialog" aria-labelledby="editmenuModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;
				</span></button>
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
				<h4 class="modal-title" id="deletemejaModalLabel">Hapus Sesuai ID Meja</h4>
			</div>
			<div class="modal-body">
				<form method="#" action="#">
				<div class="form-group">
				<input type="hidden" name="#" class="#" id="#">
				<input type="text" class="#" id="#" disabled>
		</div></div>
			<div class="modal-footer">
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
				<h4 class="modal-title edit" id="editmejaModalLabel">Edit Menu</h4>
			</div>
			<div class="modal-body">
				<form method="#" action="#">
					<div class="form-group">
						<input type="text" name="#" class="form-control #" id="#" placeholder="ID Meja" disabled>
					</div>
					<div class="form-group">
						<input type="text" name="#" class="form-control #" id="#" placeholder="Jumlah Meja">
					</div>
					<div class="form-group">
						<input type="text" name="#" class="form-control #" id="#" placeholder="Type Meja" ></input>
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
				<h4 class="modal-title" id="deletetugasModalLabel">Hapus Sesuai ID Tugas</h4>
			</div>
			<div class="modal-body">
				<form method="#" action="#">
				<div class="form-group">
				<input type="hidden" name="#" class="#" id="#">
				<input type="text" class="#" id="#" disabled>
		</div></div>
			<div class="modal-footer">
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
				<h4 class="modal-title edit" id="edittugasModalLabel">Edit Menu</h4>
			</div>
			<div class="modal-body">
				<form method="#" action="#">
					<div class="form-group">
						<input type="text" name="#" class="form-control #" id="#" placeholder="ID Tugas" disabled>
					</div>
					<div class="form-group">
						<input type="text" name="#" class="form-control #" id="#" placeholder="Nama Tugas">
					</div>
					<div class="form-group">
						<input type="text" name="#" class="form-control #" id="#" placeholder="Penempatan Tugas" ></input>
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