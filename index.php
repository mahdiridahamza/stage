<?php 
$result = null;
if(isset($_POST["submit"])){
	$username = $_POST['username'];
	$lastname = $_POST['lastname'];
	$sem = $_POST["semester"];
	$fi = $_POST["filiere"];
	$checked_modules = $_POST['modules'];
	$conn = mysqli_connect("localhost","root","","stage");
	if(!$conn){
		echo "there is a problem";
	}
	//print_r($_POST);
	
	echo $fi ;
	echo $sem;
	$query = "SELECT * FROM filiere WHERE filiere_name = '$fi' AND semester = '$sem'";

	$result = mysqli_query($conn, $query);

	print_r($result);
	if(!$result){
		echo "bad ";
	}
	$checked_modules = $_POST['modules'];
	$i= count($checked_modules);
	if( $i > -1){
		while($i!= -1){
			if($checked_modules[$i]){
				$query = "INSERT INTO etudiant(username,lastname,semester,filiere,modules) VALUES ('$username','$lastname','$sem','$fi','$checked_modules[$i]') ";
			     mysqli_query($conn, $query);
			}
			
			 $i--;
		}
	}
}


?>







<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	
	<script type="text/javascript">
		function populate(s1,s2){
		s1= document.getElementById(s1);
			s2= document.getElementById(s2);
		s2.innerHTML = " ";
		if(s1.value == "smai" || s1.value=="smpc"){
			var arrayOption = ["|","s1|S1","s2|S2"];
		}else if(s1.value == "sma" || s1.value == "smi" || s1.value == "smp" || s1.value == "svi"){
			var arrayOption = ["|","s3|S3","s4|S4","s5|S5","s6|S6"];
		}

		for(var option in arrayOption){
			var pair = arrayOption[option].split("|");
			var newOption = document.createElement("option");
			newOption.value = pair[0];
			newOption.innerHTML = pair[1];
			s2.options.add(newOption);
		}
		}
	</script>
	<style>
		input, select{
	margin: 20px;
}

.container{
	background: blueviolet;
	width: 80%;
	margin: 150px auto;
}
	</style>
</head>
<body>
<form action="" method="POST">
	<fieldset>
		<legend>info</legend>
		<label for="">Nom</label><input type="text" name="username">
		<label for="">prenom</label><input type="text" name="lastname">
		<br>
		<LABEL>CHOISIR VOTRE FILIERE</LABEL>
		<select name="filiere" id="filiere" onchange="populate('filiere','semesters')">
			<option value="" >-------choisir votre filiere</option>
		<option value="smai">smai</option>
		<option value="sma">sma</option>
		<option value="smi">smi</option>
		<option value="smpc">smpc</option>
		<option value="smc">smc</option>
		<option value="smp">smp</option>
		<option value="svi">svi</option>
		<option value="droit">droit</option>
		<option value="seg">seg</option>
	</select>
		<br>
		<label>choisir votre semister</label>
		<select name="semester" id="semesters">

		</select>
		<?php 
	if($result){
		?>
<p>choose your modules that you have </p>
		<?php 
		while($row = mysqli_fetch_assoc($result)){

			?>
			<input type="checkbox" name="modules[]" value="<?php echo $row['modules'] ?>"><label><?php echo $row['modules'] ?></label>
			<?php
		}
	}
	?>
	<button name="submit">submit</button>

	</fieldset>

</form>

	
</body>
	
</html>