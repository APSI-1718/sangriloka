$(document).on("click", '.tombol', function (e) {
	var id_pegawai = $(this).data('id_pegawai');
	var nama_pegawai = $(this).data('nama_pegawai');
	var alamat = $(this).data('alamat');
	var jk = $(this).data('jk');
	var tgl_lahir = $(this).data('tgl_lahir');
	var no_tlp = $(this).data('no_tlp');
	var email = $(this).data('email');
	var username = $(this).data('username');
	var password = $(this).data('password');
	var jabatan = $(this).data('jabatan');
	var posisi = $(this).data('posisi');

	$(".id_pegawai").val(id_pegawai);
	$(".nama_pegawai").val(nama_pegawai);
	$(".alamat").val(alamat);
	$(".jk").val(jk);
	$(".tgl_lahir").val(tgl_lahir);
	$(".no_tlp").val(no_tlp);
	$(".email").val(email);
	$(".username").val(username);
	$(".password").val(password);
	$(".jabatan").val(jabatan);
	$(".posisi").val(posisi);

	$(".edit").text('Ubah Data "' + nama_pegawai + '"');
	$(".delete").html('Apa anda yakin ingin menghapus data <strong>"' + nama_pegawai + '"</strong> ?');

});