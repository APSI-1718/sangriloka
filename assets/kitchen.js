$(document).on("click", '.tombol', function(e){
	var kodeBrg			= $(this).data('kodebrg');
	var namaBrg 		= $(this).data('namabrg');
	var kategoriBrg 	= $(this).data('kategoribrg');
	var stokBrg 		= $(this).data('stokbrg');

	$(".kodeBrg").val(kodeBrg);
	$(".namaBrg").val(namaBrg);
	$(".kategoriBrg").val(kategoriBrg);
	$(".stokBrg").val(stokBrg);

	$(".edit").text('Edit Form "' + namaBrg +'"');
	$(".delete").html('Apakah anda ingin menghapus <strong>"'+namaBrg+'"</strong> ?');

});

$('.alert-success').show('fast').delay(5000).hide('fast');
