<?php
	if((isset($_GET["email"]) && isset($_GET["name"]))){
		if((!empty($_GET["email"])) && (!empty($_GET["email"]))){
			$verifsmail = htmlspecialchars($_GET["email"], ENT_QUOTES);
			$verifsname = htmlspecialchars($_GET["name"], ENT_QUOTES);
			echo $verifsmail;
			echo "</br>";
			echo $verifsname;
			echo "</br>";
			echo("Tout est ok");
		}
	}
?>