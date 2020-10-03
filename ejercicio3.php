<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Evaluacion WEB 1</title>

    <link href="estilos.css" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>

<nav class="navbar navbar-expand-lg navbar-light">
  <a class="navbar-brand" href="index.php">TALLER #1 WEB1</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="menu">
    <ul class="navbar-nav">
      <li class="nav-item ">
        <a class="nav-link" href="ejercicio1.php">Operaciones</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="ejercicio2.php">Indice Masa Corporal IMC</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="ejercicio3.php">Calzado Spring Step</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href=ejercicio4.php>Nomina Postobon</a>
      </li>
    </ul>
  </div>
</nav>

<div class="container">
    <div class="row justify-content-center">
         <div class="col-4">

         <h5 class="mt-4 text-center">Spring Step</h5>
         <h6 class="mt-4 text-center">Digite la cantidad de zapatos a comprar</h6>
                
<form class= "mt-3" action="ejercicio3.php" method="POST">
  <div class="form-group">
    <label for="exampleFormControlInput1">Cantidad Zapatos</label>
    <input type="number" class="form-control"placeholder ="Cantidad" name="cantidad">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Valor</label>
    <input type="number" class="form-control" placeholder ="$"name="valor">
  </div>
 

  <button type="submit" class="btn btn-primary mt-3 btn-block" name="btncalcular">Calcular</button>
</form>

<hr>

</div>
    </div>
        </div>


        <?php if(isset($_POST["btncalcular"])):?>
 
  
 <h4 class="text-center">

 <?php

     $cantidad = $_POST["cantidad"]; 
     $valor = $_POST["valor"]; 
    

     if($cantidad <=2)
     {
   
     echo ("La catidad de zapatado no tienen descuento");
     echo("<br>");
     echo ("Total a pagar $" .$valor);
    
      
     } 
  
    else if($cantidad ==3)
     {
    $descuento1=$valor*0.10;
     $total=$valor-$descuento1;
     echo ("Total a pagar $" .$total);
     echo(" su ahorro fue $" .$descuento1);
     } 
     else if(($cantidad>3) &&($cantidad < 8))
     {
      $descuento2=$valor*0.20;
      $total=$valor-$descuento2;
      echo ("Total a pagar $" .$total);
      echo(" su ahorro fue $" .$descuento2);
     }

     else
     {
      $descuento3=$valor*0.50;
      $total=$valor-$descuento3;
      echo ("Total a pagar $" .$total );
      echo ( " su ahorro fue $" .$descuento3);
     }
    
 
 
 
 ?> 

</h4> 
<?php endif ?>

   

</body>
</html>