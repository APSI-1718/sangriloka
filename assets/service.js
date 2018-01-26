$(document).on("click", '.tombol', function(e){
	var id_event			= $(this).data('id_event');
	var nama_event 		= $(this).data('nama_event');
	var jadwal_event 	= $(this).data('jadwal_event');
	var jenis_event 		= $(this).data('jenis_event');

	$(".id_event").val(id_event);
	$(".nama_event").val(nama_event);
	$(".jadwal_event").val(jadwal_event);
	$(".jenis_event").val(jenis_event);

	$(".edit").text('Edit Form "' + nama_event +'"');
	$(".delete").html('Apakah anda ingin menghapus <strong>"'+nama_event+'"</strong>');
	
});

$('.alert-success').show('fast').delay(5000).hide('fast');
