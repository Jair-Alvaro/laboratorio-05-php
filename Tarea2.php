<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/Tarea2.css">
    <title>Oferta Gaseosa</title>
</head>
<body>
    <h1 class="oferta">---Oferta---</h1>
    <form method="post" action="">
        <h2>Ingrese precio actual(Gaseosa):</h2><input type="text" name="precio">
        <h2>Ingrese la Cantidad(Gaseosas):</h2> <input type="text" name="#gaseosa">
        <br><br>
        <input type="submit" name="informe" id ="b1" value="Calcular Compra">
        <input type="reset" name="Cancelar" id ="b2" value="Cancelar Compra">

    </form> 
    <br> 
    <?php
 $precio=$_POST['precio'];
 $gaseosas=$_POST['#gaseosa'];
 $Prebaja = $precio-($precio * 0.05);
 $Icompra = $Prebaja*$gaseosas;
 $descuento = $Icompra*0.07;
 $pagoTotal = $Icompra - $descuento;
 $obsequio = $gaseosas * 2;
 ?>
<div class="rpta" >   
    <div class="container"> 
    <?php
      echo "Nuevo Precio ______: ".$Prebaja."<br>";
      echo "Importe Compra___: ".$Icompra."<br>";
      echo "Descuento ________: ".$descuento."<br>";
      echo "Importe Pago_____: ".$pagoTotal."<br>";
      echo "Obsequio_________: ".$obsequio."_Caramelos";
   ?>
    </div>
</div>  
</body>
</html>