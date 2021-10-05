<?php 
require 'insertfil.php';
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

			while(( @ $row = mysqli_fetch_assoc($result))/* && $i < 500*/){
				/*$i++;*/
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