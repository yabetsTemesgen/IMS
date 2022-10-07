
 
<?php
//include connection file 
error_reporting(0);
include "../db/db.php";
include_once('../Libraries/pdf/fpdf.php');
 
class PDF extends FPDF
{
// Page header
function Header()
{
    // Logo
    //$this->Image('logo.jfif',10,10,50);
    $this->SetFont('Arial','B',13);
    // Move to the right
    $this->Cell(50);
    // Title
    $this->Cell(50,10,'Available Internships',1,0,'C');
    // Line break
    $this->Ln(20);
}
 
// Page footer
function Footer()
{
    // Position at 1.5 cm from bottom
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Page number
    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}
}
 
$display_heading = array('id'=>'ID', 'category'=> 'Category','nameOfCompany'=> 'Company','postedOn'=> 'postedOn',
'place'=> 'Place');
 
$result = mysqli_query($con, "SELECT id,category,nameOfCompany,postedOn,place FROM internship") or die("database error:". mysqli_error($con));
$header = mysqli_query($con, "SHOW columns FROM int_view");
 
$pdf = new PDF();
//header
$pdf->AddPage();
//foter page
$pdf->AliasNbPages();
$pdf->SetFont('Arial','B',16);
foreach($header as $heading) {
$pdf->Cell(35,10,$display_heading[$heading['Field']],1);
}
foreach($result as $row) {
$pdf->SetFont('Arial','',10);
$pdf->Ln();
foreach($row as $column)
$pdf->Cell(35,10,$column,1);
}
$pdf->Output();
?>
 