<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/Tarea1.css">
    <title>Informe de Sueldo</title>
</head>
<body>
    <h1 class="sueldo">---Sueldo---</h1>
    <form method="post" action="">
        <h2>Ingresar el Importe del mes:</h2><input type="text" name="importe">
        <h2>Número de hijos Edad Escolar:</h2> <input type="text" name="#hijos">
        <br><br>
        <input type="submit" name="informe" id ="b1" value="Calcular">
        <input type="reset" name="Cancelar" id ="b2" value="Cancelar">

    </form> 
    <br> 
    <?php
 $importe=$_POST['importe'];
 $hijos=$_POST['#hijos'];
 $bonificacion = $hijos * 50;
 $comision = $importe * 0.075;
 $sueldobruto = 600 + $bonificacion + $comision;
 $descuento = $sueldobruto * 0.11;
 $sueldoNeto = $sueldobruto - $descuento;
 ?>
<div class="card mt-2" >  
   <div class="resultado">  
    <?php
       echo "Comision _____:".$comision."<br>";
       echo "Bonificacion___:".$bonificacion."<br>";
       echo "Sueldo Bruto ___:".$sueldobruto."<br>";
       echo "Descuento ______:".$descuento."<br>";
       echo "Sueldo Neto_____:".$sueldoNeto;
     ?>
   </div> 
</div>  
</body>
</html>
