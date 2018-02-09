$(document).on("click", '.tombolalat', function(e){
	var kode_am			= $(this).data('kode_am');
	var nama_am 		= $(this).data('nama_am');
	var kategori_am 	= $(this).data('kategori_am');
	var stok_am 		= $(this).data('stok_am');


	$(".kode_am").val(kode_am);
	$(".nama_am").val(nama_am);
	$(".kategori_am").val(kategori_am);
	$(".stok_am").val(stok_am);
	
	

	$(".edit").text('Edit Data "' + nama_am +'"');
	$(".delete").html('Apakah anda ingin menghapus data <strong>"'+nama_am+'"</strong> ?');

});

$(document).on("click", '.tomboleditpengajuan', function(e){
	var kode_mkn		= $(this).data('kode_mkn');
	var nama_mkn 		= $(this).data('nama_mkn');
	var kode_am		= $(this).data('kode_am');
	var nama_am 		= $(this).data('nama_am');
	var id_pengajuan 		= $(this).data('id_pengajuan');
	var jumlah_permintaan 		= $(this).data('jumlah_permintaan');


	$(".kode_mkn").val(kode_mkn);
	$(".nama_mkn").val(nama_mkn);
	$(".kode_am").val(kode_am);
	$(".nama_am").val(nama_am);
	$(".jumlah_permintaan").val(jumlah_permintaan);
	$(".id_pengajuan").val(id_pengajuan);
	

});

$(document).on("click", '.tombolmkn', function(e){
	var kode_mkn		= $(this).data('kode_mkn');
	var nama_mkn 		= $(this).data('nama_mkn');
	var jenis_mkn 		= $(this).data('jenis_mkn');
	var stok_mkn 		= $(this).data('stok_mkn');


	$(".kode_mkn").val(kode_mkn);
	$(".nama_mkn").val(nama_mkn);
	$(".jenis_mkn").val(jenis_mkn);
	$(".stok_mkn").val(stok_mkn);
	
	

	$(".editmkn").text('Edit Data "' + nama_mkn +'"');
	$(".delete").html('Apakah anda ingin menghapus data <strong>"'+nama_mkn+'"</strong> ?');
	$(".hapusstok").html('Apakah anda ingin menghapus stok <strong>"'+nama_mkn+'"</strong> ?');

});

$(document).on("click", '.tombolmenu', function(e){
	var id_menu			= $(this).data('id_menu');
	var nama_menu 		= $(this).data('nama_menu');
	var jenis_menu 		= $(this).data('jenis_menu');
	var harga_menu 		= $(this).data('harga_menu');
	var gambar_menu 		= $(this).data('gambar_menu');


	$(".id_menu").val(id_menu);
	$(".nama_menu").val(nama_menu);
	$(".jenis_menu").val(jenis_menu);
	$(".harga_menu").val(harga_menu);
	$(".gambar_menu").val(gambar_menu);
	
	

	$(".edit").text('Edit Data "' + nama_menu +'"');
	$(".delete").html('Apakah anda ingin menghapus data <strong>"'+nama_menu+'"</strong> ?');

});


$(document).on("click", '.tombolterima', function(e){
	var kode_mkn		= $(this).data('kode_mkn');
	var nama_mkn 		= $(this).data('nama_mkn');
	var kode_am			= $(this).data('kode_am');
	var nama_am			= $(this).data('nama_am');
	var jumlah_masuk 	= $(this).data('jumlah_masuk');
	var id_penerimaan 	= $(this).data('id_penerimaan');
	var tanggal_masuk	= $(this).data('tanggal_masuk');


	$(".kode_mkn").val(kode_mkn);
	$(".nama_mkn").val(nama_mkn);
	$(".kode_am").val(kode_am);
	$(".nama_am").val(nama_am);
	$(".id_penerimaan").val(id_penerimaan);
	$(".tanggal_masuk").val(tanggal_masuk);
	$(".jumlah_masuk").val(jumlah_masuk);
	

});

$(document).on("click", '.status1', function(e){
	var id_pemesanan= $(this).data('id_pemesanan');
	var status 		= $(this).data('status');

	$(".id_pemesanan").val(id_pemesanan);
	$(".status").val(status);

});

// Kumpulan Alert

$('.alertalat').show('fast').delay(5000).hide('fast');
$('.alertpenerimaan').show('fast').delay(5000).hide('fast');
$('.alertmakanan').show('fast').delay(5000).hide('fast');
$('.alertpengajuan').show('fast').delay(5000).hide('fast');
$('.alertpengajuan').show('fast').delay(5000).hide('fast');


$(document).on("change", '#cboItem2', function(e){
	var kode_am			= $(this).find(' :selected').data('kode_am');
	var kategori_am 			= $(this).find(' :selected').data('kategori_am');
	

	$(".kode_am").val(kode_am);
	$(".kategori_am").val(kategori_am);
	

});

$(document).on("change", '#cboItem', function(e){
	var kode_mkn			= $(this).find(' :selected').data('kode_mkn');
	var jenis_mkn 			= $(this).find(' :selected').data('jenis_mkn');
	

	$(".kode_mkn").val(kode_mkn);
	$(".jenis_mkn").val(jenis_mkn);
	

});

function readURL(input) { // Mulai membaca inputan gambar
if (input.files && input.files[0]) {
var reader = new FileReader(); // Membuat variabel reader untuk API FileReader
 
reader.onload = function (e) { // Mulai pembacaan file
$('#preview_gambar') // Tampilkan gambar yang dibaca ke area id #preview_gambar
.attr('src', e.target.result)
.width(150); // Menentukan lebar gambar preview (dalam pixel)
//.height(200); // Jika ingin menentukan lebar gambar silahkan aktifkan perintah pada baris ini
};
 
reader.readAsDataURL(input.files[0]);
}
}

  $(document).on("click", '.gambarTombol', function(e){
  	var id_menu= $(this).data('id_menu');
   	var nama_menu= $(this).data('nama_menu');
   	var harga_menu= $(this).data('harga_menu');
   	var harga_menuNum= $(this).data('harga_menuNum');
   	var gambar_menu= $(this).data('gambar_menu');
   	var qty= $(this).data('qty');
   	var total_harga= $(this).data('total_harga');
   	

   	$('.id_menu').val(id_menu);
  	$('.gambar_menu').val(gambar_menu);
  	$('.nama_menu').val(nama_menu);
  	$('.harga_menu').val(harga_menu);
  	$('.harga_menuNum').val(harga_menuNum);
  	$('.qty').val(qty);

  	var total_harga = parseint(qty)*parseint(harga_menuNum);
  	$('.total_harga').parseint(val(total_harga));

	
	});

  $(document).on("click", '.Tomboleditpesanan', function(e){
  	var id_pemesanan= $(this).data('id_pemesanan');
   	var nama_menu= $(this).data('nama_menu');
   	var harga_menu= $(this).data('harga_menu');
   	var Qty= $(this).data('Qty');
   	var total_harga= $(this).data('total_harga');
   	

   	$('.id_pemesanan').val(id_pemesanan);
  	$('.Qty').val(Qty);
  	$('.nama_menu').val(nama_menu);
  	$('.harga_menu').val(harga_menu);
  	$('.total_harga').val(total_harga);
  	$('.qty').val(qty);

	
	});

 $(document).on("click", '#qty', function(e){
 	var qty = $(this).val();
 	var harga_menu = $('#harga_menu').val();
 	var hasil = qty * harga_menu;

 	$('#total').val(hasil);
 });

 //  $(".qty").on("click", function(e){
 // 	var harga_menu 	= $(".harga_menu").val();
 // 	var qty 		= $(".qty").val();

 // 	var total_harga = harga_menu * qty;
	// $(".total_harga").val(total_harga);


// function getValue(){
// 	var cbo = document.getElementById("cboItem");
// 		alert("The selected value is " + $("#cboItem").val());
// 	}