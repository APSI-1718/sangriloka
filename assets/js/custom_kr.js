$(document) .on ("click", '.panggilmenu', function(e){
	var no_menu = $(this) .data('no_menu');
	var daftar_menu = $(this) .data('daftar_menu');
	var harga = $(this) .data('harga');
	var jenismakanan = $(this) .data('jenismakanan');

	$(".no_menu") .val(no_menu);
	$(".daftar_menu") .val(daftar_menu);
	$(".harga") .val(harga);
	$(".jenismakanan") .val(jenismakanan);
	
});

$(document) .on ("click", '.panggiltugas', function(e){
	var id_tugas = $(this) .data('id_tugas');
	var Nama_tugas =$(this) .data('Nama_tugas');
	
	

	$(".id_tugas") .val(id_tugas);
	$(".Nama_tugas") .val(Nama_tugas);

	
});

$(document) .on ("click", '.panggilmeja', function(e){
	var id_meja = $(this) .data('id_meja');
	var jumlah_meja = $(this) .data('jumlah_meja');
	var type_meja = $(this) .data('type_meja');
	

	$(".id_meja") .val(id_meja);
	$(".jumlah_meja") .val(jumlah_meja);
	$(".type_meja") .val(type_meja);
	
});