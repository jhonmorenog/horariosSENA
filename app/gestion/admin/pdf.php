
<?php
 include 'plantillapdf.php';
require_once '../../../util/Conexion.php';

 $query="SELECT documento,nombre,apellido FROM persona";
 $resultado = $mysqli->query($query);
	
	$pdf = new PDF();
	$pdf->AliasNbPages();
	$pdf->AddPage();
	
	$pdf->SetFillColor(232,232,232);
	$pdf->SetFillColor(232,232,232);
	$pdf->SetFont('Arial','B',12);
	$pdf->Cell(20,6,'Documento',1,0,'C',1);
	$pdf->Cell(70,6,'Nombre',1,0,'C',1);
	$pdf->Cell(70,6,'Apellido',1,1,'C',1);
	
	$pdf->SetFont('Arial','',10);
	
	while($row = $resultado->fetch_assoc())
	{
		$pdf->Cell(20,6,utf8_decode($row['documento']),1,0,'C');
		$pdf->Cell(70,6,$row['nombre'],1,0,'C');
		$pdf->Cell(70,6,$row['apellido'],1,1,'C');
	}
	$pdf->Output();

?>