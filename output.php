<?php 
$result = "";
$f="";
$conn = mysqli_connect("localhost","root","","gestion_exam");

	if(!$conn){
		echo "there is a problem";
	}
if(isset($_POST['submit'])){
	$filiere = $_POST['filiere'];
	$semester = $_POST['semester'];
	
	if($filiere == "DRF" && $semester == "s1"){
	$query = "SELECT COUNT(DISTINCT COD_ETD) AS Netd FROM etudiant WHERE CODE_FIL LIKE 'PFF11%'";
	$result = mysqli_query($conn,$query);
	}

		if($semester == "s3" || $semester =="s4"){
			$filiere .= "2"; 
		}else if($semester == "s1" || $semester == "s2"){
			$filiere .= "1"; 
		}else if($semester == "s5" || $semester == "s6"){
			$filiere .= "3"; 
		}
		
	
		$ar = str_split($filiere, 1);
		$sem = str_split($semester, 1);
		$o="%";
		$k=str_split($o, 1);
		$f="$ar[4]$ar[5]$ar[6]$ar[7]$sem[1]$k[0]";
		

	function calculeNombreEtudiant($filiere,$semester){

		$conn = mysqli_connect("localhost","root","","gestion_exam");

		if(!$conn){
			echo "there is a problem";
		}

		if($semester == "s3" || $semester =="s4"){
			$filiere .= "2"; 
		}else if($semester == "s1" || $semester =="s1"){
			$filiere .= "1"; 
		}else if($semester == "s5" || $semester =="s6"){
			$filiere .= "3"; 
		}
		
		
		$ar = str_split($filiere, 1);
		$sem = str_split($semester, 1);
		$o="%";
		$k=str_split($o, 1);
		$f="$ar[4]$ar[5]$ar[6]$ar[7]$sem[1]$k[0]";
		

		$query = "SELECT COUNT(DISTINCT COD_ETD) AS Netd FROM etudiant WHERE CODE_FIL LIKE '$f'";
		$result = mysqli_query($conn,$query);
		return $result;
	}

	$result = calculeNombreEtudiant($filiere,$semester);





	/*if($filiere == "DRF" && $semester == "s2"){
	$query = "SELECT COUNT(DISTINCT COD_ETD) AS Netd FROM etudiant WHERE CODE_FIL LIKE 'PFF12%'";
	$result = mysqli_query($conn,$query);
	
	}
	if($filiere == "DRF" && $semester == "s3"){
	$query = "SELECT COUNT(DISTINCT COD_ETD) AS Netd FROM etudiant WHERE CODE_FIL LIKE 'PFF23%'";
	$result = mysqli_query($conn,$query);
	
	}
	if($filiere == "DRF" && $semester == "s4"){
	$query = "SELECT COUNT(DISTINCT COD_ETD) AS Netd FROM etudiant WHERE CODE_FIL LIKE 'PFF24%'";
	$result = mysqli_query($conn,$query);
	
	}
	if($filiere == "DRF" && $semester == "s5"){
	$query = "SELECT COUNT(DISTINCT COD_ETD) AS Netd FROM etudiant WHERE CODE_FIL LIKE 'PFF35%'";
	$result = mysqli_query($conn,$query);
	
	}
	if($filiere == "DRF" && $semester == "s6"){
	$query = "SELECT COUNT(DISTINCT COD_ETD) AS Netd FROM etudiant WHERE CODE_FIL LIKE 'PFF36%'";
	$result = mysqli_query($conn,$query);
	
	}

	if($filiere == "SMAI" && $semester == "s1"){
	$query = "SELECT COUNT(DISTINCT COD_ETD) AS Netd FROM etudiant WHERE CODE_FIL LIKE 'PFA11%'";
	$result = mysqli_query($conn,$query);
	
	}
	if($filiere == "SMAI" && $semester == "s2"){
	$query = "SELECT COUNT(DISTINCT COD_ETD) AS Netd FROM etudiant WHERE CODE_FIL LIKE 'PFA12%'";
	$result = mysqli_query($conn,$query);
	
	}
	if($filiere == "SMI" && $semester == "s3"){
	$query = "SELECT COUNT(DISTINCT COD_ETD) AS Netd FROM etudiant WHERE CODE_FIL LIKE 'PFI23%'";
	$result = mysqli_query($conn,$query);
	
	}
	if($filiere == "SMI" && $semester == "s4"){
	$query = "SELECT COUNT(DISTINCT COD_ETD) AS Netd FROM etudiant WHERE CODE_FIL LIKE 'PFI24%'";
	$result = mysqli_query($conn,$query);
	
	}
	if($filiere == "SMI" && $semester == "s5"){
	$query = "SELECT COUNT(DISTINCT COD_ETD) AS Netd FROM etudiant WHERE CODE_FIL LIKE 'PFI35%'";
	$result = mysqli_query($conn,$query);
	
	}
	if($filiere == "SMI" && $semester == "s6"){
	$query = "SELECT COUNT(DISTINCT COD_ETD) AS Netd FROM etudiant WHERE CODE_FIL LIKE 'PFI36%'";
	$result = mysqli_query($conn,$query);
	
	}

	/*SMA */

	/*if($filiere == "SMA" && $semester == "s3"){
	$query = "SELECT COUNT(DISTINCT COD_ETD) AS Netd FROM etudiant WHERE CODE_FIL LIKE 'PFA23%'";
	$result = mysqli_query($conn,$query);
	
	}
	if($filiere == "SMA" && $semester == "s4"){
	$query = "SELECT COUNT(DISTINCT COD_ETD) AS Netd FROM etudiant WHERE CODE_FIL LIKE 'PFA24%'";
	$result = mysqli_query($conn,$query);
	
	}
	if($filiere == "SMA" && $semester == "s5"){
	$query = "SELECT COUNT(DISTINCT COD_ETD) AS Netd FROM etudiant WHERE CODE_FIL LIKE 'PFA35%'";
	$result = mysqli_query($conn,$query);
	
	}
	if($filiere == "SMA" && $semester == "s6"){
	$query = "SELECT COUNT(DISTINCT COD_ETD) AS Netd FROM etudiant WHERE CODE_FIL LIKE 'PFA36%'";
	$result = mysqli_query($conn,$query);
	
	}

	/*SVU */
	/*if($filiere == "SVI" && $semester == "s1"){
	$query = "SELECT COUNT(DISTINCT COD_ETD) AS Netd FROM etudiant WHERE CODE_FIL LIKE 'PFU11%'";
	$result = mysqli_query($conn,$query);
	
	}
	if($filiere == "SVI" && $semester == "s2"){
	$query = "SELECT COUNT(DISTINCT COD_ETD) AS Netd FROM etudiant WHERE CODE_FIL LIKE 'PFU12%'";
	$result = mysqli_query($conn,$query);
	
	}
	//SVI

	if($filiere == "SVI" && $semester == "s3"){
	$query = "SELECT COUNT(DISTINCT COD_ETD) AS Netd FROM etudiant WHERE CODE_FIL LIKE 'PFV23%'";
	$result = mysqli_query($conn,$query);
	
	}
	if($filiere == "SVI" && $semester == "s4"){
	$query = "SELECT COUNT(DISTINCT COD_ETD) AS Netd FROM etudiant WHERE CODE_FIL LIKE 'PFV24%'";
	$result = mysqli_query($conn,$query);
	
	}
	if($filiere == "SVI" && $semester == "s5"){
	$query = "SELECT COUNT(DISTINCT COD_ETD) AS Netd FROM etudiant WHERE CODE_FIL LIKE 'PFV35%'";
	$result = mysqli_query($conn,$query);
	
	}
	if($filiere == "SVI" && $semester == "s6"){
	$query = "SELECT COUNT(DISTINCT COD_ETD) AS Netd FROM etudiant WHERE CODE_FIL LIKE 'PFV36%'";
	$result = mysqli_query($conn,$query);
	
	}

	//SMPC--------------------------------------------------------------------

	if($filiere == "SMPC" && $semester == "s1"){
	$query = "SELECT COUNT(DISTINCT COD_ETD) AS Netd FROM etudiant WHERE CODE_FIL LIKE 'PFC11%'";
	$result = mysqli_query($conn,$query);
	
	}
	if($filiere == "SMPC" && $semester == "s2"){
	$query = "SELECT COUNT(DISTINCT COD_ETD) AS Netd FROM etudiant WHERE CODE_FIL LIKE 'PFC12%'";
	$result = mysqli_query($conn,$query);

	
	
	}

//smp s3 ------------------------------------------------------------------------------
	if($filiere == "SMP" && $semester == "s3"){
	$query = "SELECT COUNT(DISTINCT COD_ETD) AS Netd FROM etudiant WHERE CODE_FIL LIKE 'PFP23%'";
	$result = mysqli_query($conn,$query);
	
	}
	if($filiere == "SMP" && $semester == "s4"){
	$query = "SELECT COUNT(DISTINCT COD_ETD) AS Netd FROM etudiant WHERE CODE_FIL LIKE 'PFP24%'";
	$result = mysqli_query($conn,$query);
	
	}
	if($filiere == "SMP" && $semester == "s5"){
	$query = "SELECT COUNT(DISTINCT COD_ETD) AS Netd FROM etudiant WHERE CODE_FIL LIKE 'PFP35%'";
	$result = mysqli_query($conn,$query);
	
	}
	/* important smp s6 -----------------------------------------------------------------------------*/
	/*if($filiere == "SMP" && $semester == "s3"){
	$query = "SELECT COUNT(DISTINCT COD_ETD) AS Netd FROM etudiant WHERE CODE_FIL LIKE 'PFP23%'";
	$result = mysqli_query($conn,$query);
	
	}
	if($filiere == "SMP" && $semester == "s4"){
	$query = "SELECT COUNT(DISTINCT COD_ETD) AS Netd FROM etudiant WHERE CODE_FIL LIKE 'PFP24%'";
	$result = mysqli_query($conn,$query);
	
	}
	if($filiere == "SMP" && $semester == "s5"){
	$query = "SELECT COUNT(DISTINCT COD_ETD) AS Netd FROM etudiant WHERE CODE_FIL LIKE 'PFP35%'";
	$result = mysqli_query($conn,$query);
	
	}



	/* important smp s6 -----------------------------------------------------------------------------*/

	/*if($filiere == "SMC" && $semester == "s3"){
	$query = "SELECT COUNT(DISTINCT COD_ETD) AS Netd FROM etudiant WHERE CODE_FIL LIKE 'PFC23%'";
	$result = mysqli_query($conn,$query);
	
	}
	if($filiere == "SMC" && $semester == "s4"){
	$query = "SELECT COUNT(DISTINCT COD_ETD) AS Netd FROM etudiant WHERE CODE_FIL LIKE 'PFC24%'";
	$result = mysqli_query($conn,$query);
	
	}
	if($filiere == "SMC" && $semester == "s5"){
	$query = "SELECT COUNT(DISTINCT COD_ETD) AS Netd FROM etudiant WHERE CODE_FIL LIKE 'PFC35%'";
	$result = mysqli_query($conn,$query);

	
	}
	if($filiere == "SMC" && $semester == "s6"){
	$query = "SELECT COUNT(DISTINCT COD_ETD) AS Netd FROM etudiant WHERE CODE_FIL LIKE 'PFC36%'";
	$result = mysqli_query($conn,$query);
}


*/
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
	<?php
			$filiere2 = str_split($filiere, 1);


			$fil="$filiere[0]$filiere[1]$filiere[2]$filiere[3]"; 
	if($result){
			$row = mysqli_fetch_assoc($result);
			$numberEtudiant = $row['Netd'];

		

			?>
			<p>le nombere des etudiant dans la filiere <?php echo $fil ?> est <?php echo $numberEtudiant ?></p>
			<?php
		}
	?>
	<label for="">choisir le nombre des section</label>
	<form method="post" action="outfiliere.php">
		
		<input type="text" value="<?php echo "$f";?>" name ="filiere" hidden>
		<input type="text" value="<?php echo $semester; ?>" name="semester" hidden>
		<input type="text" value="<?php echo $numberEtudiant; ?>" name="nombreEtudiant" hidden>
	<select name="nombreSection" id="">
		<option value="1">1</option>
		<option value="2">2</option>
		<option value="3">3</option>
	</select>
	<button name="submit">submit</button>
</form>
	
</body>
</html>