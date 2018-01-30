$(document).on("click", '.tblcatering', function(e){
	var id_catering = $(this).data('idcatering');
	var nama_catering = $(this).data('namacatering');
	var harga = $(this).data('harga');
	var keterangan = $(this).data('keterangan');

	$(".id_catering").val(id_catering);
	$(".nama_catering").val(nama_catering);
	$(".harga").val(harga);
	$(".keterangan").val(keterangan);


	$(".editcatering").text('Ubah "'+nama_catering+'"');
	$(".deletecatering").html('Apakah anda yakin akan mengahapus data dengan nama paket <strong>"' + nama_catering +'"</strong> ?');
});
