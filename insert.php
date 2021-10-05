<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	
	<script >
		function populate(s1,s2){
			var s1 = document.getElementById('s1');
			var s2 = document.getElementById('s2');
			s2.innerHTML =" ";
			if(s1.value == "DRF" ){
				arrayOption= ["|","s1|S1","s2|S2","s3|S3","s4|S4","s5|S5","s6|S6"];
			}else if(s1.value == "SMA" || s1.value == "SMI" || s1.value == "SMC" || s1.value == "SMP" || s1.value =="SVU"){
				arrayOption =  ["|","s3|S3","s4|S4","s5|S5","s6|S6"];
			}else if(s1.value="SMAI" || s1.value =="SMPC"){
				arrayOption =["|","s1|S1","s2|S2"]

			}
			else{
				arrayOption = [];
			}
			for( var option in arrayOption){
				var pair = arrayOption[option].split('|');
				var newOption = document.createElement('option');
				newOption.value = pair[0];
				newOption.innerHTML = pair[1];
				s2.options.add(newOption);
			}


		}
	</script>
	<link rel="stylesheet" href="styles.css">
</head>
<body>
	<div class="container">
		
			
		
		<form action="output.php" method="post">
			<label for="">choisir la filiere :</label>
			<select name="filiere" id="s1" onchange ="populate(this.id,'s2')">
				<option disabled selected>click pour choisir une  filiere</option>
				<option value="SMI">smi</option>
				<option value="SMA">sma</option>
				<option value="SMAI">smai</option>
				<option value="SMPC">smpc</option>
				<option value="SMC">smc</option>
				<option value="SMP">smp</option>
				<option value="SVI">svi</option>
				<option value="DRF">DRF</option>
			</select>
			<br>
			<label >choisir le semestre</label><select id="s2" name="semester"></select>
			<button name="submit">affiche</button>
		</form>
			</div>
</body>



</html>