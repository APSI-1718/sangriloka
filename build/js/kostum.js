$(document).on("click", '.tombol2',function(e){
	var id_konten = $(this).data('id');
	var judul_konten = $(this).data('judul');
	var isi_konten = $(this).data('isi');

	$("#id").val(id_konten);
	$(".id").val(id_konten);
	$(".judul").val(judul_konten);
	$(".isi").val(isi_konten);

	$(".edit").text('edit from for "'+judul_konten+'"');
	$(".delete").html('Apakah konten dengan judul <strong>"'+judul_konten+'"</strong> akan dihapus?');
});


$(document).on("click", '.tombol3',function(e){
	var id_promosi = $(this).data('id');
	var judul_promosi = $(this).data('judul');
	var isi_promosi = $(this).data('isi');

	$("#id").val(id_promosi);
	$(".id").val(id_promosi);
	$(".judul").val(judul_promosi);
	$(".isi").val(isi_promosi);

	$(".edit").text('edit from for "'+judul_promosi+'"');
	$(".delete").html('Apakah promosi dengan judul <strong>"'+judul_promosi+'"</strong> akan dihapus?');
});


$(document).on("click", '.tomboln',function(e){
	var id_notifikasi = $(this).data('id');
	var judul_notifikasi = $(this).data('judul');
	var isi_notifikasi = $(this).data('isi');

	$("#id").val(id_notifikasi);
	$(".id").val(id_notifikasi);
	$(".judul").val(judul_notifikasi);
	$(".isi").val(isi_notifikasi);

	$(".delete").html('Apakah notifikasi dengan judul <strong>"'+judul_notifikasi+'"</strong> akan dihapus?');
});