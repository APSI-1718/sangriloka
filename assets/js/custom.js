$(document) .on ("click", '.panggil', function(e){
	var no_pendaftaran = $(this) .data('no_pendaftaran');
	var nama = $(this) .data('nama_rekrut');

	$(".no_pendaftaran") .val(no_pendaftaran);
	$(".nama_rekrut") .val(nama);
});