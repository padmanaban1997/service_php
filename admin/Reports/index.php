<?php
include('config.php');
$database = new Database();
$result = $database->runQuery("SELECT first_name , last_name , gender, email , contact_no FROM customer");
$header = $database->runQuery("SELECT UCASE(`COLUMN_NAME`) 
FROM `INFORMATION_SCHEMA`.`COLUMNS` 
WHERE `TABLE_SCHEMA`='osms' 
AND `TABLE_NAME`='customer'
and `COLUMN_NAME` in ('first_name','last_name','gender','email','contact_no')");
require('fpdf/fpdf.php');
$pdf = new FPDF();
$pdf->AddPage("L","A4");
$pdf->SetFont('Arial','B',10);

// Set header
 $pdf->Image('user.jpg',7,1,20);
    // Move to the right
    $pdf->Cell(80);			
    // Title
    $pdf->Cell(80,10,'Customer List',1,0,'C');
    // Line break
    $pdf->Ln(20);

/*
foreach($header as $heading) {
	foreach($heading as $column_heading)
		$pdf->Cell(70,12,$column_heading,1);
}
*/
		$pdf->Cell(50,20,"First Name",1);
		$pdf->Cell(50,20,"Last Name",1);
		$pdf->Cell(50,20,"Gender",1);
		$pdf->Cell(50,20,"Email",1);
		$pdf->Cell(50,20,"Contact",1);
foreach($result as $row) {
	$pdf->Ln();
	foreach($row as $column)
		$pdf->Cell(50,12,$column,1);
}
$pdf->Output();

// Set footer
   $pdf->SetY(-15);
    // Arial italic 8
    $pdf->SetFont('Arial','I',8);
    // Page number
    $pdf->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
?>