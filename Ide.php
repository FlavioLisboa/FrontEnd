<?php
$Oquêestudarhoje = array(
    0 => "Interação Humano Computador.",
    1 => "Sistemas de Computação e Informação.",
    2 => "Segurança da Informação.",
    3 => "Ética, Política e Sociedade.",
    4 => "Trabalho 1º semestre - em grupo.",
    5 => "Fóruns.",
    );

$escolhida = rand (0,5);

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
    default:    
        echo "Vamos estudar!";
        break;
}

?>


