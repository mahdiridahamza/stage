<?php 
require('vendor/autoload.php');
$conn =  mysqli_connect("localhost","root","","gestion_exam");
$query = "SELECT * FROM etudiant WHERE FILIERE ='SMIA' ";
$res = mysqli_query($conn,$query);
if(mysqli_num_rows($res) > 0){
	$html = '<!DOCTYPE html>
<html lang="en">
<body><table>';
	$html.='<tr style = "width : 150px ; border : solid black 5px">
			<th>COD_ETD</th>
			<th>name</th>
			<th>prenom</th>
			 
			 			
			 <th>session</th>
			 <th>filiere</th>
			 <th>semestre</th>
		</tr>';
		while($row = mysqli_fetch_assoc($res)){
			$html .= '<tr style = "width : 150px ; border : solid black 5px">
					<td>'.$row['COD_ETD'] .'</td>
					<td>'.$row['NOM'].'</td>
					<td>'.$row['PRENOM'].'</td>
					
					
					<td>'.$row['SECTION'].'</td>
					<td>'.$row['FILIERE'].'</td>
					<td>'.$row['SEMESTRE'].'</td>
				</tr>' ;
		}
		$html .='</table></body></html>';
}

$mpdf = new \Mpdf\Mpdf();
//$mpdf->WriteHTML($html);
/*$file =time().'.pdf';
$mpdf->Output($file,'D');*/
/*
$stylesheet = file_get_contents('stylepdf.css'); // external css
$mpdf->WriteHTML($stylesheet,1);
$mpdf->WriteHTML($html,2);
$file =time().'.pdf';
$mpdf->Output($file,'D');
*/


$stylesheet = file_get_contents('stylepdf.css');

$mpdf->WriteHTML($stylesheet,\Mpdf\HTMLParserMode::HEADER_CSS);
$mpdf->WriteHTML($html);
$file ='SMIA.pdf';
$mpdf->Output($file,'D');
?>

