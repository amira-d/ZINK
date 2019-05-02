<?php  
 
require('fpdf/fpdf.php');

include "C:/wamp64/www/ZINK/zink/config.php";
class PDF extends FPDF
{
// Page header
function Header()
{
    // Logo
    $this->Image('images/About.png',10,-1,30);
    $this->SetFont('Arial','B',13);
    // Move to the right
    $this->Cell(80);
    // Title
    $this->Cell(80,10,'Candidature',1,0,'C');
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
$db = config::getConnexion();



$sql1="SELECT * FROM candidature";


$result=$db->query($sql1);

$pdf = new PDF();
$pdf->AddPage();
$pdf->AliasNbPages();


foreach($result as $row)
{
    $id=$row['id'];
    $nom=$row['nom'];
    $prenom=$row['prenom'];
    $date_n=$row['date_naissance'];
    $email=$row['email'];
    $num=$row['num'];
    $service=$row['service'];
    $date_e=$row['date_envoi'];
    $pdf->SetFont('Arial','I',12); 
$pdf->Cell(130,10,$id,1,1,'C');
$pdf->Cell(130,10,$nom,1,1,'C');
$pdf->Cell(130,10,$prenom,1,1,'C');
$pdf->Cell(130,10,$date_n,1,1,'C');
$pdf->Cell(130,10,$email,1,1,'C');
$pdf->Cell(130,10,$num,1,1,'C');
$pdf->Cell(130,10,$service,1,1,'C');
$pdf->Cell(130,10,$date_e,1,1,'C');
$pdf->Cell(130,30,'  ',0,1,'C');


}










$pdf->Output();
?>