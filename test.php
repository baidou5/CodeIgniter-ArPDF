<?php
require 'ArPDF.php';

$pdf = new ArPDF();
$pdf->setFont('Amiri', 16);
$pdf->addText('مرحبا بك في مكتبة ArPDF!', 20, 30);
$pdf->addText('هذا نص تجريبي.', 20, 60);
$pdf->output('my_document.pdf');
