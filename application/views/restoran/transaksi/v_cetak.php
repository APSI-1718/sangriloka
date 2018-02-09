<?php 

$pdf = new FPDF('l','mm',array('170','150'));
//membuat halaman baru
$pdf->AddPage();
//setting jenis font yang akan digunakan
$pdf->SetFont('Arial','B',16);
//mencetak string
$pdf->Cell(190,7,'                            Restoran Sangriloka',0,1,'');
$pdf->SetFont('Arial','B',12);

//memberikan space kebawah agar tidak terlalu rapat
$pdf->Cell(10,7,'',0,1);
$pdf->SetFont('Arial','',10);
$pdf->Cell(22,6,'---------------------------------------------------------------------------------------------------------------------------',0,0);
$pdf->Cell(20,6,'',0,0);
$pdf->Cell(27,6,'',0,0);
$pdf->Cell(25,6,'',0,0);
$pdf->SetFont('Arial','',10);
$pdf->Cell(10,7,'',0,1);

foreach ($pesanan as $key => $value) {
	$pdf->Cell(22,6,$value['id_pemesanan'],0,0);
	$pdf->Cell(35,6,$value['nama_menu'],0,0);
	$pdf->Cell(35,6,$value['Qty'],0,0);
	$pdf->Cell(35,6,"Rp. ".$value['total'],0,0);
	$pdf->Cell(22,6,$value['tgl_pemesanan'],0,1);
}

$pdf->Cell(12,6,'---------------------------------------------------------------------------------------------------------------------------',0,1);
$pdf->Cell(26,6,'Total Item',0,0);
$pdf->Cell(53,6,'',0,0);
$pdf->Cell(27,6,$this->input->post('total'),0,1);

$pdf->Cell(22,6,'Tunai',0,0);
$pdf->Cell(57,6,'',0,0);
$pdf->Cell(27,6,"Rp. ".number_format($this->input->post('total_bayar'),0,",","."),0,0);

$pdf->Cell(27,6,'',0,1);
$pdf->Cell(22,6,'Kembali',0,0);
$pdf->Cell(57,6,'',0,0);
$pdf->Cell(27,6,"Rp. ".number_format($this->input->post('kembaliNum'),0,",","."),0,0);
$pdf->Cell(25,6,'',0,1);

$pdf->Cell(25,6,'---------------------------------------------------------------------------------------------------------------------------',0,1);
//$pdf->Cell(25,6,date('Y-m-d'),0,1);
$pdf->output();
?>