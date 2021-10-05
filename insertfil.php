<?php 
$result = "";
$conn = mysqli_connect("localhost","root","","gestion_exam");
	if(!$conn){
		echo "error ";
	}
if(isset($_POST['submit'])){
	$query = "SELECT * FROM etudiant WHERE CODE_FIL LIKE 'PFU%' order by CODE_FIL asc "; 
	$result = mysqli_query($conn,$query);
	if(!$result){
		echo "error au niveau de requete sql ";
	}
}
if(isset($_POST['delete'])){
	echo "the delete button has been pressed";
	$query = "UPDATE etudiant SET SEMESTRE = null , FILIERE = null , SECTION  = null 	"  ;
	$result1 = mysqli_query($conn,$query);

}

if(isset($_POST['insert_filiere']))
{
	$query = "UPDATE etudiant SET FILIERE ='DRF' WHERE `CODE_FIL` LIKE 'PFF%' ";
	$result = mysqli_query($conn,$query);
	$query = "UPDATE etudiant SET SEMESTRE ='S1' WHERE `CODE_FIL` LIKE 'PFF11%' ";
	$result = mysqli_query($conn,$query);
	$query = "UPDATE etudiant SET SEMESTRE ='S2' WHERE `CODE_FIL` LIKE 'PFF12%' ";
	$result = mysqli_query($conn,$query);
	$query = "UPDATE etudiant SET SEMESTRE ='S3' WHERE `CODE_FIL` LIKE 'PFF23%' ";
	$result = mysqli_query($conn,$query);
	$query = "UPDATE etudiant SET SEMESTRE ='S4' WHERE `CODE_FIL` LIKE 'PFF24%' ";
	$result = mysqli_query($conn,$query);
	$query = "UPDATE etudiant SET SEMESTRE ='S5' WHERE `CODE_FIL` LIKE 'PFF35%' ";
	$result = mysqli_query($conn,$query);
	$query = "UPDATE etudiant SET SEMESTRE ='S6' WHERE `CODE_FIL` LIKE 'PFF36%' ";
	$result = mysqli_query($conn,$query);



	$query = "UPDATE etudiant SET FILIERE ='SMIA' WHERE `CODE_FIL` LIKE 'PFA%' ";
	$result = mysqli_query($conn,$query);
	$query = "UPDATE etudiant SET SEMESTRE ='S1' WHERE `CODE_FIL` LIKE 'PFA11%' ";
	$result = mysqli_query($conn,$query);
	$query = "UPDATE etudiant SET SEMESTRE ='S2' WHERE `CODE_FIL` LIKE 'PFA12%' ";
	$result = mysqli_query($conn,$query);

	$query = "UPDATE etudiant SET FILIERE ='SMA' WHERE `CODE_FIL` LIKE 'PFA2%' ";
	$result = mysqli_query($conn,$query);
	$query = "UPDATE etudiant SET SEMESTRE ='S3' WHERE `CODE_FIL` LIKE 'PFA23%' ";
	$result = mysqli_query($conn,$query);
	$query = "UPDATE etudiant SET SEMESTRE ='S4' WHERE `CODE_FIL` LIKE 'PFA24%' ";
	$result = mysqli_query($conn,$query);
	
	$query = "UPDATE etudiant SET SEMESTRE ='S5' WHERE `CODE_FIL` LIKE 'PFA35%' ";
	$result = mysqli_query($conn,$query);
	$query = "UPDATE etudiant SET SEMESTRE ='S6' WHERE `CODE_FIL` LIKE 'PFA36%' ";
	$result = mysqli_query($conn,$query);



	$query = "UPDATE etudiant SET FILIERE ='SMI' WHERE `CODE_FIL` LIKE 'PFI2%' ";
	$result = mysqli_query($conn,$query);
	
	$query = "UPDATE etudiant SET SEMESTRE ='S3' WHERE `CODE_FIL` LIKE 'PFI23%' ";
	$result = mysqli_query($conn,$query);
	$query = "UPDATE etudiant SET SEMESTRE ='S4' WHERE `CODE_FIL` LIKE 'PFI24%' ";
	$result = mysqli_query($conn,$query);
	$query = "UPDATE etudiant SET SEMESTRE ='S5' WHERE `CODE_FIL` LIKE 'PFI35%' ";
	$result = mysqli_query($conn,$query);
	$query = "UPDATE etudiant SET SEMESTRE ='S6' WHERE `CODE_FIL` LIKE 'PFI36%' ";
	$result = mysqli_query($conn,$query);


	$query = "UPDATE etudiant SET FILIERE ='SVI' WHERE `CODE_FIL` LIKE 'PFU%' ";
	$result = mysqli_query($conn,$query);
	$query = "UPDATE etudiant SET SEMESTRE ='S1' WHERE `CODE_FIL` LIKE 'PFU11%' ";
	$result = mysqli_query($conn,$query);
	$query = "UPDATE etudiant SET SEMESTRE ='S2' WHERE `CODE_FIL` LIKE 'PFU12%' ";
	$result = mysqli_query($conn,$query);


	  



	


}


?>
