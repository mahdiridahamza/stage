
<?php 
$conn = mysqli_connect("localhost","root","","stage");

if(isset($_POST["submit"])){

	$filiere = $_POST['filiere'];
	$local = $_POST['local'];
	$query = "INSERT INTO test(filiere,local) VALUES ('$filiere','$local')";
	$result = mysqli_query($conn , $query);
	if(!$result){
		echo "<h1>error au niveau de requete </h1>";
	}
	else{
		echo "<h1>well done </h1>";
	}


}
$result2 = null;

if(isset($_POST["update"])){
		
		$query = "SELECT * FROM test GROUP BY  filiere";
		$result2 = mysqli_query($conn , $query); 
		if(!$result2){
		echo "<h1>error au niveau de requete2 </h1>";
	}
	else{
		echo "<h1>well done 2 </h1>";
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
		td,th{
			border: 1px solid black;
			border-style: collapse;
			width: 500px;
		}
	</style>
</head>
<body>
	<table>
		<tr>
			<th>filiere</th>
			<th>local</th>
		</tr>
		<tr>
			<?php 
			while($row = mysqli_fetch_assoc($result2)){

				?>
				<tr>
				<?php
				$filiere = $row['filiere'];
				?>
				<td><?php echo $row['filiere']?></td>
				<td>		
				<?php
				$query = "SELECT * FROM test where filiere = '$filiere'";
				$result3 = mysqli_query($conn,$query);

				while($row2 = mysqli_fetch_assoc($result3)){
					?>
					<span><?php echo $row2['local'] ?></span>
					<?php

				}
				?>
			</td></tr>
			<?php 
		}

			?>
			
	</table>
	<form action="" method="post">
	<button name="update">refreche</button>
	<label>filiere</label>	<input type="text" name="filiere">
<label>local</label><input type="text" name="local">
 <button name="submit">submit </button>
	</form>
</body>
</html>