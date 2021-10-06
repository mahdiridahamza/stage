<?php 
$result = null;

$conn = mysqli_connect("localhost","root","","gestion_exam");


	if(!$conn){
		echo "there is a problem";
	}
if(isset($_POST['submit'])){
	$query = "DELETE FROM etd_section";
	mysqli_query($conn,$query);
	$filiere = $_POST['filiere'];
	$semester = $_POST['semester'];
	$nombreEtudiant =(int) $_POST['nombreEtudiant'];
	$nombreSection =(int) $_POST['nombreSection'];
	$NombreEtudeParSection = $nombreEtudiant / $nombreSection;
	


	$query = "SELECT DISTINCT COD_ETD,CIN,NOM,PRENOM,SECTION,FILIERE,SEMESTRE FROM etudiant WHERE CODE_FIL LIKE '$filiere' order by NOM ";
	/*$query ="SELECT * FROM etudiant WHERE FILIERE ='SMA'";*/
	$result = mysqli_query($conn,$query);


$i=0;
	while( $row = mysqli_fetch_assoc($result)){
				

				$fil = $row['FILIERE'];
				$sec =$row['SECTION'];
				$nom =$row['NOM'];
				$prenom = $row['PRENOM'] ;
				$COD_ETD = $row['COD_ETD'];
				$semester = $row['SEMESTRE'];
				$query   ="INSERT INTO etd_section(NOM,PRENOM,COD_ETD,filiere,semster) VALUES ('$nom','$prenom','$COD_ETD','$fil','$semester')";
					$result2 = mysqli_query($conn,$query);
					if(!$result2){
						//echo "you fucked up again";
					}
					$nb1= $NombreEtudeParSection;
					$nb2 = $nb1 * 2 ;
					$nb3 = $nb1 * 3;

					if($nombreSection == 1 ){
						$query = "UPDATE etd_section set section = null WHERE COD_ETD = '$COD_ETD'";
						mysqli_query($conn,$query);
					}
					else if($i <= $nb1 AND $nombreSection != 1){
					$query = "UPDATE etd_section set section = 'section A' WHERE COD_ETD = '$COD_ETD'";
					mysqli_query($conn,$query);
				}else if($nb1 < $i AND $i <= $nb2 AND $nombreSection != 1){
					$query = "UPDATE etd_section set section = 'section B'  WHERE COD_ETD = '$COD_ETD'";
					mysqli_query($conn,$query );
				}else if($nb2 < $i AND $i <= $nb3 AND $nombreSection != 1){
					$query = "UPDATE etd_section set section = 'section C'  WHERE COD_ETD = '$COD_ETD'";
					mysqli_query($conn,$query);
				}
				$i++;

				}

				/*$query = "UPDATE etudiant SET etudiant.SECTION =(SELECT etd_section.section FROM etd_section  WHERE etd_section.semster = etudiant.SEMESTRE AND etd_section.filiere = etudiant.FILIERE )";
				$result3 = mysqli_query($conn,$query);*/


				$query = "SELECT * FROM etd_section";
				$res= mysqli_query($conn,$query);
				if(!$res){
					echo "error";
				}
				while($row = mysqli_fetch_assoc($res)){
					$f = $row['filiere'];
					$s= $row['semster'];
					$section = $row['section'];
					$COD_ETD = $row['COD_ETD'];
					$query="UPDATE etudiant SET SECTION = '$section' WHERE FILIERE = '$f' AND SEMESTRE ='$s' AND COD_ETD = '$COD_ETD'";
					mysqli_query($conn,$query); 
				}
				




}



?>



<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<style >
		td,th{
			border: solid black 1px;
			width: 200px;
			text-align: center;
		}
	</style>
</head>
<body>
	<form method="post" >
		<button name="affiche">affiche</button>
	</form>
	

	<table>
		<tr>
			<th>COD_ETD</th>
			<th>name</th>
			<th>prenom</th>
			 
			 			
			 <th>session</th>
			 <th>filiere</th>
			 <th>semestre</th>
		</tr>
		<?php 
		if(isset($_POST['affiche'])){
			$conn = mysqli_connect("localhost","root","","gestion_exam");
		$query = "SELECT * FROM etd_section ";
	
			$result = mysqli_query($conn,$query);


			$i = 1;

			while( @ $row = mysqli_fetch_assoc($result)){
				
				?>
				<tr>
					<td><?php echo @ $row['COD_ETD'] ;?></td>
					<td><?php echo @ $row['NOM'] ;?></td>
					<td><?php echo @ $row['PRENOM'] ;?></td>
					
					
					<td><?php echo @ $row['section'] ;?></td>
					<td><?php echo @ $row['filiere'] ;?></td>
					<td><?php echo @ $row['semster'] ;?></td>
				</tr>



				<?php 
					

			}
}

		 ?>
	</table>


</body>
</html>