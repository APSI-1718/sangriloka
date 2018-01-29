$(document).on("click", '.tombol', function(e){
	var id_stok			= $(this).data('id_stok');
	var nama_stok 		= $(this).data('nama_stok');
	var jenis 			= $(this).data('jenis');
	var jumlah 			= $(this).data('jumlah');
	var satuan 			= $(this).data('satuan');
	var id_menu			= $(this).data('id_menu');
	var nama_menu 		= $(this).data('nama_menu');
	var harga 			= $(this).data('harga');


	$(".id_stok").val(id_stok);
	$(".nama_stok").val(nama_stok);
	$(".jenis").val(jenis);
	$(".jumlah").val(jumlah);
	$(".satuan").val(satuan);
	$(".id_menu").val(id_menu);
	$(".nama_menu").val(nama_menu);
	$(".harga").val(harga);

	$(".editstok").text('Form Ubah Data Stok "' + nama_stok +'"');
	$(".deletestok").html('Apakah anda ingin menghapus data <strong>"'+nama_stok+'"</strong> ?');
	$(".editmenu").text('Form Ubah Data Menu "' + nama_menu +'"');
	$(".deletemenu").html('Apakah anda ingin menghapus data <strong>"'+nama_menu+'"</strong> ?');
	
});

$(document).on("click", '.tomboldm', function(e){
	var id_stok			= $(this).data('id_stok');
	var nama_stok 		= $(this).data('nama_stok');
	var jenis 			= $(this).data('jenis');
	var jumlah 			= $(this).data('jumlah');
	var satuan 			= $(this).data('satuan');
	var jumlahstok		= $(this).data('jumlahstok');
	var id_detail_menu	= $(this).data('id_detail_menu');
	var harga 			= $(this).data('harga');
	var id_detail_pengajuan	= $(this).data('id_detail_pengajuan');
	var jumlahps		= $(this).data('jumlahps');


	$(".id_stok").val(id_stok);
	$(".nama_stok").val(nama_stok);
	$(".jenis").val(jenis);
	$(".jumlah").val(jumlah);
	$(".satuan").val(satuan);
	$(".jumlahstok").val(jumlahstok);
	$(".id_detail_menu").val(id_detail_menu);
	$(".harga").val(harga);
	$(".id_detail_pengajuan").val(id_detail_pengajuan);
	$(".jumlahps").val(jumlahps);

	$(".edit").text('Form Ubah Data Stok "' + nama_stok +'"');
	$(".deletedm").html('Apakah anda ingin menghapus data <strong>"'+nama_stok+'"</strong> ?');
	$(".editdm").text('Form Ubah Detail Menu "' + nama_stok +'"');
	$(".editps").text('Form Ubah Detail Pengajuan "' + nama_stok +'"');
	$(".deleteps").html('Apakah anda ingin menghapus data <strong>"'+nama_stok+'"</strong> ?');
});

$(document).on("click", '.tomboldpenjualan', function(e){
	var id_detail_penjualan			= $(this).data('id_detail_penjualan');
	var id_menu 		= $(this).data('id_menu');
	var id_penjualan 		= $(this).data('id_penjualan');
	var jumlah 			= $(this).data('jumlah');
	var total 			= $(this).data('total');
	
	$(".id_menu").val(id_menu);
	$(".id_detail_penjualan").val(id_detail_penjualan);
	$(".jumlah").val(jumlah);
	$(".total").val(total);
	$(".id_penjualan").val(id_penjualan);
	$(".detail").html('Detail Penjualan "' + id_penjualan +'"');
	
});
