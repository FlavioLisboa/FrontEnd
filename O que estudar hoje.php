<?php

 $Oquêestudarhoje = array(
    0  => "Interação Humano Computador." ,
           
    1  => "Sistemas de Computação e Informação.",
    
    2  => "Segurança da Informação.",
    
    3  => "Ética, Política e Sociedade.",
    
    4  => "Seminário I",
    
    5  => "Trabalho 1º semestre - em grupo.",
    
    6  => "Foruns.",
    
    ); 
    
        $escolhida = rand (0, 6);
        
    switch ($escolhida) {
        case 0:
            echo $Oquêestudarhoje[0];
            break; 
        case 1:
            echo $Oquêestudarhoje[1];
            break;
        case 2:
            echo $Oquêestudarhoje[2];
            break;
        case 3:
            echo $Oquêestudarhoje[3];
            break;
        case 4:
            echo $Oquêestudarhoje[4];
            break;
        case 5:
            echo $Oquêestudarhoje[5];
            break;    
        case 6:
            echo $Oquêestudarhoje[6];
            break;
        default:
            echo "Vamos estudar!!";
            break;
    }
    
    ?>
            
    