<?php
require('fpdf.php');

class PDF extends FPDF
{
// Cabecera de página
function Header()
{
    // Arial bold 15
    $this->SetFont('Arial','B',14);
    // Movernos a la derecha
    $this->Cell(80);
    // Título
    $this->Cell(30,10,utf8_decode('Cursos de programación CECYTEM '),0,0,'C');
    // Salto de línea
    $this->Ln(20);
}

// Pie de página
function Footer()
{
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Número de página
    $this->Cell(0,10,utf8_decode('Página ').$this->PageNo().'/{nb}',0,0,'C');
}
}

$cursos = [
    "Programacion Estructurada",
    "Bases de datos simples",
    "Aplicaciones Web",
    "Aplicaciones Moviles",
    "Administra S.O",
    "Instala y Configura ",
    "Cursos de Python",
    "Cursos de Ruby",
    "Cursos de Java",
    "Cursos de Spring Framework",
    "Curso de Front end",
    "Diseño UI/UX"
];

$pdf = new PDF();
$pdf -> AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','',12);

foreach ($cursos as $v) {
    $pdf->Cell(40,10,utf8_decode($v));
    $pdf->Ln(15);
}

$pdf->Output();
?>