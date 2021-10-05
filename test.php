<?php 
$result = "";
$conn = mysqli_connect("localhost","root","","gestion_exam");
	if(!$conn){
		echo "error ";
	}
if(isset($_POST['submit'])){
	$query = "SELECT * FROM etudiant"; 
	$result = mysqli_query($conn,$query);
	if(!$result){
		echo "error au niveau de requete sql ";
	}
}
if(isset($_POST['delete'])){
	echo "the delete button has been pressed";
	$query = "SELECT * FROM etudiant"; 
	$result1 = mysqli_query($conn,$query);
	while($row = mysqli_fetch_assoc($result1)){
		$CIN  = $row['CIN'];

		$query = "UPDATE etudiant SET SEMESTRE = null , FILIERE = null , SECTION  = null WHERE CIN ='$CIN'	"  ;
		
		$result3= mysqli_query($conn,$query);
		if(!$result3){
			echo "error au niveau de query de result 3";
		}
	}

	
	
}

if(isset($_POST['insert_filiere'])){
	$query = "SELECT * FROM etudiant WHERE `CODE_FIL` LIKE 'PFF%' ";
	$result = mysqli_query($conn,$query);
	while ($row = mysqli_fetch_assoc($result)) {
			$CIN = $row['CIN'];
			$query = "UPDATE etudiant SET FILIERE = 'DROIT' WHERE CIN ='$CIN'	"  ;
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
	<style>
		td{
			border: solid black 1px;
		}
	</style>
</head>
<body>
	<form action="" method="post">
		<button name="submit">submit</button>
		<button name="delete">delete</button>
		<button name="insert_filiere">insert filiere</button>
	</form>
	<table>
		<tr>
			<th>code apoje</th>
			<th>name</th>
			<th>prenom</th>
			 <th>date naissance</th>
			 <th>CIN</th>
			 <th>code filliere</th>
			 <th>nodule</th>
			 <th>session</th>
			 <th>filiere</th>
			 <th>semestre</th>
		</tr>
		<?php 
		if($result){
			$i = 1;

			while(($row = mysqli_fetch_assoc($result)) & $i < 500){
				$i++;
				?>
				<tr>
					<td><?php echo @ $row['COD_ETD'] ;?></td>
					<td><?php echo @ $row['NOM'] ;?></td>
					<td><?php echo @ $row['PRENOM'] ;?></td>
					<td><?php echo @ $row['DATE_NAISSANCE'] ;?></td>
					<td><?php echo @ $row['CIN'] ;?></td>
					<td><?php echo @ $row['CODE_FIL'] ;?></td>
					<td><?php echo @ $row['MODULE'] ;?></td>
					<td><?php echo @ $row['SECTION'] ;?></td>
					<td><?php echo @ $row['FILIERE'] ;?></td>
					<td><?php echo @ $row['SEMESTRE'] ;?></td>
				</tr>



				<?php 
					

			}
}

		 ?>
	</table>
	
</body>
</html>