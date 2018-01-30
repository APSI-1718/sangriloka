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

$(document).on("click", '.status1', function(e){
	var id_order			= $(this).data('id_order');
	var status_order 		= $(this).data('status_order');

	$(".id_order").val(id_order);
	$(".status_order").val(status_order);

});

$('.alert-success').show('fast').delay(5000).hide('fast');


$(document).on("change", '#cboItem', function(e){
	var kode_mkn			= $(this).find(' :selected').data('kode_mkn');
	var jenis_mkn 			= $(this).find(' :selected').data('jenis_mkn');
	

	$(".kode_mkn").val(kode_mkn);
	$(".jenis_mkn").val(jenis_mkn);
	

});

// function getValue(){
// 	var cbo = document.getElementById("cboItem");
// 		alert("The selected value is " + $("#cboItem").val());
// 	}