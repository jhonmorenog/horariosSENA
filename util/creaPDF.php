
<?php

require_once '../vendor/pdf/vendor/autoload.php';
$stylesheet = file_get_contents($css); 
$mpdf = new \Mpdf\Mpdf(['mode' => 'utf-8','format' => 'A4-L']);
$mpdf->WriteHTML($_POST['h']);

$mpdf->Output('Horadio.pdf', D);


