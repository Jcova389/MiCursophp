<?php
// Obtener el dia y mes de nacimiento del usuario
$dia=6;
$mes=10;

//Validar los datos ingresados (opcional, para evitar errores)
if ($dia < 1 || $dia > 31 || $mes < 1 || $mes > 12) {
    echo "Fecha de Nacimiento invalida.?\n";

}
else
{
switch ($mes) {
    case 1:
        $signo= ($dia <=20) ? "Capricornio" : "Acuario";
        break;
    case 2:
        $signo= ($dia <=19) ? "Acuario" : "Piscis";
        break;
    case 3:
        $signo= ($dia <=20) ? "Piscis" : "Aries";
    break;
    case 4:
        $signo= ($dia <=20) ? "Aries" : "Tauro";
        break;
    case 5:
        $signo= ($dia <=20) ? "Tauro" : "Geminis";
         break;
    case 6:
        $signo= ($dia <=21) ? "Geminis" : "Cancer";
        break;         
    case 7:
         $signo= ($dia <=22) ? "Cancer" : "Leo";
        break;
    case 8:
        $signo= ($dia <=21) ? "Leo" : "Virgo";
           break;
    case 9:
        $signo= ($dia <=22) ? "Virgo" : "Libra";
           break;
    case 10:
        $signo= ($dia <=22) ? "Libra" : "Escorpio";
            break;
    case 11:
        $signo= ($dia <=21) ? "Escorpio" : "Sagitario";
            break;
    case 12:
        $signo= ($dia <=21) ? "Escorpio" : "Sagitario";
        break;
}
}
// IMPRIMIR EL RESULTADO
echo "Tu signo zodiacal es: " . $signo . "\n";
?>
