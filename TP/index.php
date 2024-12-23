<?php
    $nom = "";
    $age = 0;
    $ville = "";
    function presentation($nom, $age, $ville){
        echo("Bonjour, je m'appelle ". $nom. " j'ai ". $age. " ans et j'habite à ". $ville);
    }
    function addition($a, $b){
        echo($a + $b);
    }

    presentation("mathias", 12, "Amiens");
    echo("\n");
    addition(5, 6);

?>