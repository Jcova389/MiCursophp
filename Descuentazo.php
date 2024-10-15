<?php
/* En un supermercado se hace una promocion, mediante la cual el cliente obtiene un descuento dependiendo de un
 numero que se escoge al azar del 1 al 100. Si elnumero escogido es menor que 50 el descuento es del 15% sobre
  el total de la compra, si el numero esta entre 50 y 80 el descuento es del 20% es mayor 80 el descuento es del
   30%. Obtener cuanto dinero
   */
   $tCompra=1200;
   $aleatorio=rand(1,100);
   echo "el numero aleatorio fue: ", $aleatorio, '<br>';

   if ($aleatorio<50)
   {
        $descuento=$tCompra*15/100;
   }
   elseif ($aleatorio>=50 && $aleatorio<=80)
    {
        $descuento=$tCompra*20/100;
    }
    else
    {
        $descuento=$tCompra*30/100;
    }

    echo "El precio es: ", $tCompra, " El descuento es :", $descuento, " usted pagara: ", $tCompra-$descuento;
    ?>