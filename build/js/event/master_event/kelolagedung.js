$(document).on("click", '.tombolgedung', function(e){
	var idgedung = $(this).data('idgedung');
	var jenisgedung = $(this).data('jenisgedung');
	var jumlahkuota = $(this).data('jumlahkuota');
	var statusgedung = $(this).data('statusgedung');

	$(".id_gedung").val(idgedung);
	$(".jenis-gedung").val(jenis_edung);
	$(".jumlah-kuota").val(jumlahkuota);
	$(".status-gedung").val(status_gedung);


	$(".editalat").text('Ubah "'+id_gedung+'"');
	$(".deletealat").html('Apakah anda yakin akan mengahapus data dengan nama paket <strong>"' + id_alat +'"</strong> ?');
});