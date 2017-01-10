<?php 
	$i = $_POST["genre"];
	$g = $_POST["age"];
	if($g >= 18){
		echo "Vous êtes un $i et vous êtes majeur";
	}else{
		echo "Vous êtes un $i et vous êtes mineur
";
	}
	?>