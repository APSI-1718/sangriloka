$(document) .on ("click", '.panggilrekrut', function(e){
	var no_pendaftaran = $(this) .data('no_pendaftaran');
	var nama = $(this) .data('nama_rekrut');

	$(".no_pendaftaran") .val(no_pendaftaran);
	$(".nama_rekrut") .val(nama);
	
});

(document) .on("click", '.panggilmutasi', function(e){
	var id_mutasi = $(this) .data('id_mutasi');
	var nama = $(this) .data('nama');
	var tanggal = $(this) .data('tanggal');
	var id_pegawai = $(this) .data('id_pegawai');
	var posisi = $(this) .data('posisi');
	var jabatan = $(this) .data('jabatan');
	var j_kelamin = $(this) .data('j_kelamin');
	var tgl_lahir = $(this) .data('tgl_lahir');
	var alamat = $(this) .data('alamat');

	$(".id_mutasi") .val(id_mutasi);
	$(".nama") .val(nama);
	$(".tanggal") .val(tanggal);
	$(".id_pegawai") .val(id_pegawai);
	$(".posisi") .val(posisi);
	$(".jabatan") .val(jabatan);
	$(".j_kelamin") .val(j_kelamin);
	$(".tgl_lahir") .val(tgl_lahir);
	$(".alamat") .val(alamat);
});

/*$(document) .on("click", '.panggilpegawai', function(e){
	var id_pegawai = $(this) .data('id_pegawai');
	var nama = $(this) .data('nama');
	var posisi = $(this) .data('posisi');
	var jabatan = $(this) .data('jabatan');
	var alamat = $(this) .data('alamat');
	var j_kelamin = $(this) .data('j_kelamin');
	var tgl_lahir = $(this) .data('tgl_lahir');
	var no_tlp = $(this) .data('no_tlp');
	var email = $(this) .data('email');
	var username = $(this) .data('username');

	$(".id_pegawai") .val(id_pegawai);
	$(".nama") .val(nama);
	$(".posisi") .val(posisi);
	$(".jabatan") .val(jabatan);
	$(".alamat") .val(alamat);
	$(".j_kelamin") .val(j_kelamin);
	$(".tgl_lahir") .val(tgl_lahir);
	$(".no_tlp") .val(no_tlp);
	$(".email") .val(email);
	$(".username") .val(username);
});

$(document) .on("click", '.panggilkinerja', function(e){
	var id_kinerja = $(this) .data('id_kinerja');
	var id_pegawai = $(this) .data('id_pegawai');
	var nama = $(this) .data('nama');
	var tanggal = $(this) .data('tanggal');
	var posisi = $(this) .data('posisi');
	var jabatan = $(this) .data('jabatan');

	$(".id_kinerja") .val(id_kinerja);
	$(".id_pegawai") .val(id_pegawai);
	$(".nama") .val(nama);
	$(".tanggal") .val(tanggal);
	$(".posisi") .val(posisi);
	$(".jabatan") .val(jabatan);
});

$(document) .on("click", '.panggilpelatihan', function(e){
	var id_pelatihan = $(this) .data('id_pelatihan');
	var nama = $(this) .data('nama');

	$(".id_pelatihan") .val(id_pelatihan);
	$(".nama") .val(nama);
});

$(document) .on("click", '.panggilcuti', function(e){
	var id_cuti = $(this) .data('id_cuti');
	var nama = $(this) .data('nama');

	$(".id_cuti") .val(id_cuti);
	$(".nama") .val(nama);
});*/