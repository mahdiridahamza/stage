<?php 
$result = "";
$conn = mysqli_connect("localhost","root","","gestion_exam");
	if(!$conn){
		echo "error ";
	}
if(isset($_POST['submit'])){
	$query = "SELECT * FROM etudiant WHERE CODE_FIL LIKE 'PFG35%' order by CODE_FIL asc "; 
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
	/*============================================================================================================*/

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

/*============================================================================================================*/


	$query = "UPDATE etudiant SET FILIERE ='SMIA' WHERE `CODE_FIL` LIKE 'PFA%' ";
	$result = mysqli_query($conn,$query);
	$query = "UPDATE etudiant SET SEMESTRE ='S1' WHERE `CODE_FIL` LIKE 'PFA11%' ";
	$result = mysqli_query($conn,$query);
	$query = "UPDATE etudiant SET SEMESTRE ='S2' WHERE `CODE_FIL` LIKE 'PFA12%' ";
	$result = mysqli_query($conn,$query);
/*============================================================================================================*/

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

/*============================================================================================================*/


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

/*============================================================================================================*/
	$query = "UPDATE etudiant SET FILIERE ='SVI' WHERE `CODE_FIL` LIKE 'PFU%' ";
	$result = mysqli_query($conn,$query);
	$query = "UPDATE etudiant SET SEMESTRE ='S1' WHERE `CODE_FIL` LIKE 'PFU11%' ";
	$result = mysqli_query($conn,$query);
	$query = "UPDATE etudiant SET SEMESTRE ='S2' WHERE `CODE_FIL` LIKE 'PFU12%' ";
	$result = mysqli_query($conn,$query);

	$query = "UPDATE etudiant SET FILIERE ='SVI' WHERE `CODE_FIL` LIKE 'PFV%' ";
	$result = mysqli_query($conn,$query);
	
	$query = "UPDATE etudiant SET SEMESTRE ='S3' WHERE `CODE_FIL` LIKE 'PFV23%' ";
	$result = mysqli_query($conn,$query);
	$query = "UPDATE etudiant SET SEMESTRE ='S4' WHERE `CODE_FIL` LIKE 'PFV24%' ";
	$result = mysqli_query($conn,$query);
	$query = "UPDATE etudiant SET SEMESTRE ='S5' WHERE `CODE_FIL` LIKE 'PFV35%' ";
	$result = mysqli_query($conn,$query);
	$query = "UPDATE etudiant SET SEMESTRE ='S6' WHERE `CODE_FIL` LIKE 'PFV36%' ";
	$result = mysqli_query($conn,$query);

	/*============================================================================================================*/
	$query = "UPDATE etudiant SET FILIERE ='SEG' WHERE `CODE_FIL` LIKE 'PFE1%' ";
	$result = mysqli_query($conn,$query);

	$query = "UPDATE etudiant SET SEMESTRE ='S1' WHERE `CODE_FIL` LIKE 'PFE11%' ";
	$result = mysqli_query($conn,$query);
	$query = "UPDATE etudiant SET SEMESTRE ='S2' WHERE `CODE_FIL` LIKE 'PFE12%' ";
	$result = mysqli_query($conn,$query);
	
	
	$query = "UPDATE etudiant SET SEMESTRE ='S3' WHERE `CODE_FIL` LIKE 'PFE23%' ";
	$result = mysqli_query($conn,$query);
	$query = "UPDATE etudiant SET SEMESTRE ='S4' WHERE `CODE_FIL` LIKE 'PFE24%' ";
	$result = mysqli_query($conn,$query);





	$query = "UPDATE etudiant SET FILIERE ='SEG:GEST' WHERE `CODE_FIL` LIKE 'PFE3%' ";
	$result = mysqli_query($conn,$query);

	$query = "UPDATE etudiant SET SEMESTRE ='S5' WHERE `CODE_FIL` LIKE 'PFE35%' ";
	$result = mysqli_query($conn,$query);
	$query = "UPDATE etudiant SET SEMESTRE ='S6' WHERE `CODE_FIL` LIKE 'PFE36%' ";
	$result = mysqli_query($conn,$query);

	/*============================================================================================================*/

	$query = "UPDATE etudiant SET FILIERE ='SEG:ECO-GEST' WHERE `CODE_FIL` LIKE 'PFG3%' ";
	$result = mysqli_query($conn,$query);

	$query = "UPDATE etudiant SET SEMESTRE ='S5' WHERE `CODE_FIL` LIKE 'PFG35%' ";
	$result = mysqli_query($conn,$query);
	$query = "UPDATE etudiant SET SEMESTRE ='S6' WHERE `CODE_FIL` LIKE 'PFG36%' ";
	$result = mysqli_query($conn,$query);
	  


    /*============================================================================================================*/
    $query = "UPDATE etudiant SET FILIERE ='SMPC' WHERE `CODE_FIL` LIKE 'PFC1%' ";
	$result = mysqli_query($conn,$query);
	$query = "UPDATE etudiant SET SEMESTRE ='S1' WHERE `CODE_FIL` LIKE 'PFC11%' ";
	$result = mysqli_query($conn,$query);
	$query = "UPDATE etudiant SET SEMESTRE ='S2' WHERE `CODE_FIL` LIKE 'PFC12%' ";
	$result = mysqli_query($conn,$query);


	$query = "UPDATE etudiant SET FILIERE ='SMC' WHERE `CODE_FIL` LIKE 'PFC%' ";
	$result = mysqli_query($conn,$query);
	$query = "UPDATE etudiant SET SEMESTRE ='S3' WHERE `CODE_FIL` LIKE 'PFC23%' ";
	$result = mysqli_query($conn,$query);
	$query = "UPDATE etudiant SET SEMESTRE ='S4' WHERE `CODE_FIL` LIKE 'PFC24%' ";
	$result = mysqli_query($conn,$query);
	$query = "UPDATE etudiant SET SEMESTRE ='S5' WHERE `CODE_FIL` LIKE 'PFC35%' ";
	$result = mysqli_query($conn,$query);
	$query = "UPDATE etudiant SET SEMESTRE ='S6' WHERE `CODE_FIL` LIKE 'PFC36%' ";
	$result = mysqli_query($conn,$query);




	$query = "UPDATE etudiant SET FILIERE ='SMP' WHERE `CODE_FIL` LIKE 'PFP2%' ";
	$result = mysqli_query($conn,$query);
	$query = "UPDATE etudiant SET SEMESTRE ='S3' WHERE `CODE_FIL` LIKE 'PFP23%' ";
	$result = mysqli_query($conn,$query);
	$query = "UPDATE etudiant SET SEMESTRE ='S4' WHERE `CODE_FIL` LIKE 'PFP24%' ";
	$result = mysqli_query($conn,$query);
	$query = "UPDATE etudiant SET FILIERE ='SMP' WHERE `CODE_FIL` LIKE 'PFP35%' ";
	$result = mysqli_query($conn,$query);
	$query = "UPDATE etudiant SET SEMESTRE ='S5' WHERE `CODE_FIL` LIKE 'PFP35%' ";
	$result = mysqli_query($conn,$query);



	$query = "UPDATE etudiant SET FILIERE ='SMP:ELECTORONIQUE' WHERE `CODE_FIL` LIKE 'PFP36%' ";
	$result = mysqli_query($conn,$query);
	$query = "UPDATE etudiant SET SEMESTRE ='S6' WHERE `CODE_FIL` LIKE 'PFP36%' ";
	$result = mysqli_query($conn,$query);



	$query = "UPDATE etudiant SET FILIERE ='SMP:THEORIQUE' WHERE `CODE_FIL` LIKE 'PFT36%' ";
	$result = mysqli_query($conn,$query);
	$query = "UPDATE etudiant SET SEMESTRE ='S6' WHERE `CODE_FIL` LIKE 'PFT36%' ";
	$result = mysqli_query($conn,$query);


	$query = "UPDATE etudiant SET FILIERE ='SMP:ENERGETIQUE' WHERE `CODE_FIL` LIKE 'PFN36%' ";
	$result = mysqli_query($conn,$query);
	$query = "UPDATE etudiant SET SEMESTRE ='S6' WHERE `CODE_FIL` LIKE 'PFN36%' ";
	$result = mysqli_query($conn,$query);



	


}


?>
