$(document).on("click", '.tombol', function(e){
	var kodeBrg			= $(this).data('kodebrg');
	var namaBrg 		= $(this).data('namabrg');
	var kategoriBrg 	= $(this).data('kategoribrg');
	var stokBrg 		= $(this).data('stokbrg');
	var id_mkn			= $(this).data('id_mkn');
	var nama_mkn 		= $(this).data('nama_mkn');
	var stok 			= $(this).data('stok');

	$(".kodeBrg").val(kodeBrg);
	$(".namaBrg").val(namaBrg);
	$(".kategoriBrg").val(kategoriBrg);
	$(".stokBrg").val(stokBrg);
	$(".id_mkn").val(id_mkn);
	$(".nama_mkn").val(nama_mkn);
	$(".stok").val(stok);
	

	$(".edit").text('Edit Data "' + namaBrg +'"');
	$(".pengajuan").text('Pengajuan Stok "' + nama_mkn +'"');
	$(".delete").html('Apakah anda ingin menghapus data <strong>"'+namaBrg+'"</strong> ?');

});

$('.alert-success').show('fast').delay(5000).hide('fast');
