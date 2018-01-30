$(document).on("click", '.tombolBayar', function(e){
	
	
	var id_pemesanan = $(this).data('id_pemesanan');
 	var total = $(this).data('total');

	$(".id_pemesanan").val(id_pemesanan);
	$(".totalNum").val(total);
	var totalHarga = $(".totalNum").val();
	var number_string = totalHarga.toString(),
		sisa = number_string.length % 3,
		rupiah = number_string.substr(0,sisa),
		ribuan = number_string.substr(sisa).match(/\d{3}/g);

		if(ribuan){
			separator = sisa ? '.' : '';
			rupiah += separator + ribuan.join('.');
		}
	$(".total").val("Rp. "+rupiah);
	var hasilKembali = $(".total_bayar").val() - $(".totalNum").val();
	$(".kembaliNum").val(hasilKembali);
});




$(document).on("input", '.total_bayar', function(e){
	var hasilKembali = $(".total_bayar").val() - $(".totalNum").val();
	
	var number_string = hasilKembali.toString(),
		sisa = number_string.length % 3,
		rupiah = number_string.substr(0,sisa),
		ribuan = number_string.substr(sisa).match(/\d{3}/g);

		if(ribuan){
			separator = sisa ? '.' : '';
			rupiah += separator + ribuan.join('.');
		}

	$(".kembali").val("Rp. "+rupiah);
	$(".kembaliNum").val(hasilKembali);
});

$(document).on("input",'.qty',function(e){
	var total = $(".harga_menu").val() * $(".qty").val();
	$(".total_harga").val(total); 
})