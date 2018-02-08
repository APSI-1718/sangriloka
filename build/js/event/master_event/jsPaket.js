$(document).on("click", '.tombolpaket', function(e){
	var id_paket = $(this).data('idpaket');
	var nama_paket = $(this).data('namapaket');
	var harga_paket = $(this).data('hargapaket');
	var detail_paket = $(this).data('detailpaket');

	$(".id_paket").val(id_paket);
	$(".nama_paket").val(nama_paket);
	$(".harga_paket").val(harga_paket);
	$(".detail_paket").val(detail_paket);


	$(".editalat").text('Ubah "'+id_paket+'"');
	$(".deletepaket").html('Apakah anda  akan mengahapus data  <strong>"' + nama_paket +'"</strong> ?');
});

$('.alertpaket').show('fast').delay(5000).hide('fast');
