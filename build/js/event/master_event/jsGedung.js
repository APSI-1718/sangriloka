$(document).on("click", '.tombolgedung', function(e){
	var id_gedung = $(this).data('idgedung');
	var jenis_gedung = $(this).data('jenisgedung');
	var jumlah_kuota = $(this).data('jumlahkuota');
	var status_gedung = $(this).data('statusgedung');

	$(".id_gedung").val(id_gedung);
	$(".jenis_gedung").val(jenis_gedung);
	$(".jumlah_kuota").val(jumlah_kuota);
	$(".status_gedung").val(status_gedung);
	$(".editalat").text('Ubah "'+id_gedung+'"');
	$(".deletegedung").html('Apakah anda  akan mengahapus data  <strong>"' + jenis_gedung +'"</strong> ?');
});


$('.alertgedung').show('fast').delay(5000).hide('fast');