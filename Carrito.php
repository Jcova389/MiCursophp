<!DOCTYPE html>
<html>
<head>
    <title>carrito</title>
</head>
<body>
    <form method="POST" action="">
       
        <input type="checkbox" name="opcion1">Enrrollado 10$<br>
        <input type="checkbox" name="opcion2">Perro Caliente 1$<br>
        <input type="checkbox" name="opcion3">TequeNo 3$<br>
        <input type="checkbox" name="opcion4">Pizza 15$<br> 
        <input type="checkbox" name="opcion5">Hamburguesa 5$<br>
        <input type="submit" name= "Enviar"  value="comprar" >
    </form>
    <?php
    

     if (isset($_POST['Enviar'])) 
     {
        
    Var_dump($_POST);
        $precios=[10,1,3,15,5];
        $chequeos=$_POST;
        $suma=0;
        
       foreach ($_POST as $parametro =>$numerocheck)
       {
     
            if ($parametro== "opcion1" ) {  $suma+=$precios[0];}
            if ($parametro== "opcion2" ){  $suma+=$precios[1];}
            if ($parametro== "opcion3") {  $suma+=$precios[2];}
            if ($parametro== "opcion4") {  $suma+=$precios[3];}
            if ($parametro== "opcion5" ){  $suma+=$precios[4];}
                       
        }
       

     
        echo "Total a Pagar, $suma" . '<br>';
    $_POST=[];
    }
    ?>
</body>
</html>

<!-- elaborar arreglo asociativo(registro) de product,cntidad precio, suma





