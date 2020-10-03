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
         <h4 class="mt-4 text-center"> IMC </h4>
         <h6 class="mt-4 text-center">Digite su peso y estatura para obterner su IMC </h6>
                
<form class= "mt-3" action="ejercicio2.php" method="POST">
  <div class="form-group">
    <label for="exampleFormControlInput1">Peso</label>
    <input type="number" class="form-control" placeholder ="Kg"name="peso">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Estatura</label>
    <input type="number" class="form-control"placeholder ="cm"name="estatura">
  </div>
  <button type="submit" class="btn btn-primary mt-3 btn-block" name="btncalcular">Obtener IMC</button>
</form>

<hr>

</div>
    </div>
        </div>


        <?php if(isset($_POST["btncalcular"])):?>
 
  
 <h4 class="text-center">

 <?php

     $peso = $_POST["peso"]; 
     $estatura = $_POST["estatura"]; 
     
     $imc=$peso/($estatura* $estatura)*10000;
     echo("Su IMC es ".$imc);
     echo("<br>");
     

    

    if($imc <18.5)
     {
     echo ("Peso insuficiente");
     } 
     else if(($imc >= 18.5)&& ($imc<25))
      {
      echo (" Tienes Normopeso");
      }
      else if(($imc >= 25)&&($imc <27) )
      {
      echo (" Tienes Sobrepeso grado 1");
      }
      else if(($imc >= 27) && ( $imc <30))
      {
      echo (" Tienes Sobrepeso grado 2 (Preobesidad)");
      }
      else if(($imc >= 30) && ($imc <35))
      {
      echo (" Tienes Obesidad de tipo 1");
      }
      else if(($imc >= 35)&& ($imc<36))
      {
      echo (" Tienes Obesidad de tipo 2");
      }
      else if(($imc >= 40)&&( $imc<50))
      {
      echo (" Tienes Obesidad de tipo 3 (Morbida)");
      }
      else if($imc >=50)
      {
      echo (" Tienes Obesidad de tipo 4");
      }
     
    
 
 
 
 
 ?> 

</h4> 
<?php endif ?>

   

</body>
</html>