<?php 
if(isset($_POST['submit'])){
	$filiere = $_POST['filiere'];
	$semester = $_POST['semester'];
	$conn = mysqli_connect("localhost","root","","stage");
	if(!$conn){
		echo "there is a problem";
	}
	function insert($filiere,$semester){
		$query= ""

	}
	$query = "SELECT * FROM etudiant WHERE CODE_FIL LIKE  "
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	
</body>
</html>