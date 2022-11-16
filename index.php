<?php

function compararcaracter($caracter)
{
    echo $caracter."      ";
	switch ($caracter) {
        case ' ':
            $letra = "espacioblanco.png";
        break;
        case 'A':
	        $letra = "Amayuscula.png";
        break;
        case 'B':
        	$letra = "Bmayuscula.png";
        break;
        case 'C':
        	$letra = "Cmayuscula.png";
        break;
        case 'D':
        	$letra = "Dmayuscula.png";
        break;
        case 'E':
        	$letra = "Emayuscula.png";
        break;
        case 'F':
        	$letra = "Fmayuscula.png";
        break;
        case 'G':
        	$letra = "Gmayuscula.png";
        break;
        case 'H':
        	$letra = "Hmayuscula.png";
        break;
        case 'I':
        	$letra = "Imayuscula.png";
        break;
        case 'J':
        	$letra = "Jmayuscula.png";
        break;
        case 'K':
        	$letra = "Kmayuscula.png";
        break;
        case 'L':
        	$letra = "Lmayuscula.png";
        break;
        case 'M':
        	$letra = "Mmayuscula.png";
        break;
        case 'N':
        	$letra = "Nmayuscula.png";
        break;
        case 'Ñ':
            $letra = "ENEmayuscula.png";
        break;
        case 'O':
        	$letra = "Omayuscula.png";
        break;
        case 'P':
        	$letra = "Pmayuscula.png";
        break;
        case 'Q':
        	$letra = "Qmayuscula.png";
        break;
        case 'R':
        	$letra = "Rmayuscula.png";
        break;
        case 'S':
        	$letra = "Smayuscula.png";
        break;
        case 'T':
        	$letra = "Tmayuscula.png";
        break;
        case 'U':
        	$letra = "Umayuscula.png";
        break;
        case 'V':
        	$letra = "Vmayuscula.png";
        break;
        case 'W':
        	$letra = "Wmayuscula.png";
        break;
        case 'X':
        	$letra = "Xmayuscula.png";
        break;
        case 'Y':
        	$letra = "Ymayuscula.png";
        break;
        case 'Z':
            $letra = "Zmayuscula.png";
        break;
        /*
        case 'Á':
        	$letra = "Amayusculaacento.png";
        break;
        case 'É':
            $letra = "Emayusculaacento.png";
        break;
        case 'Í':
            $letra = "Imayusculaacento.png";
        break;
        case 'Ó':
            $letra = "Omayusculaacento.png";
        break;
        case 'Ú':
            $letra = "Umayusculaacento.png";
        break;
        */
        case 1:
        	$letra = "1uno.png";
        break;
        case 2:
        	$letra = "2dos.png";
        break;
        case 3:
        	$letra = "3tres.png";
        break;
        case 4:
        	$letra = "4cuatro.png";
        break;
        case 5:
        	$letra = "5cinco.png";
        break;
        case 6:
        	$letra = "6seis.png";
        break;
        case 7:
        	$letra = "7siete.png";
        break;
        case 8:
        	$letra = "8ocho.png";
        break;
        case 9:
        	$letra = "9nueve.png";
        break;
        case 0:
        	$letra = "0cero.png";
        break;
        case '.':
            $letra = "punto.png";
        default;
            $letra = "ENEmayuscula.png";
    	break;
    }
    echo $letra.".\n";

    return $letra;
}

$str = "PIÑA";
$s = preg_split('//u', $str, -1, PREG_SPLIT_NO_EMPTY);

print_r($s);
