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