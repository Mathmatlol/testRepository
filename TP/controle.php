<?php
    $note = 12;
    function testNote($note){
        if($note >= 16){
            echo("Exellent");
        }
        else if($note >= 12 and $note <= 15){
            echo("Bon");
        }
        else if($note >= 8 and $note <= 11){
            echo("Peut mieux faire");
        }
        else{
            echo("Insuffisant");
        }
    }

    function afficherNombres($max){
        for($i = 0 ; $i <= $max ; $i++){
            echo($i. " ");
        }
    }
    afficherNombres(15);
    echo("\n");
    testNote(7);
?>