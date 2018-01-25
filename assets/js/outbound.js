$(document).on("click", '.tombol', function (e) {
	var id_outbound = $(this).data('id_outbound');
	var nama_outbound = $(this).data('nama_outbound');
	var keterangan = $(this).data('keterangan');

	$(".id_outbound").val(id_outbound);
	$(".nama_outbound").val(nama_outbound);
	$(".keterangan").val(keterangan);

	$(".edit").text('Ubah Data "' + nama_outbound + '"');
	$(".delete").html('Apa anda yakin ingin menghapus data <strong>"' + nama_outbound + '"</strong> ?');

});