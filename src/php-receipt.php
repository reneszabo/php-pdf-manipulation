<?php
require_once __DIR__ . '/../vendor/autoload.php';
$dompdf = new \Dompdf\Dompdf();
ob_start();
include __DIR__.'/template.php';
$html = ob_get_contents();
ob_end_clean();
$dompdf->loadHtml($html);
// (Optional) Setup the paper size and orientation
$dompdf->setPaper('A4', 'portrait');
// Render the HTML as PDF
$dompdf->render();
// Output the generated PDF to Browser
$dompdf->stream();