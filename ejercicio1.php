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

         <h4 class="mt-4 text-center"> Digite numeros y seleccion operacion </h4>
                
<form class= "mt-3" action="ejercicio1.php" method="POST">
  <div class="form-group">
    <label for="exampleFormControlInput1">Primer numero</label>
    <input type="number" class="form-control" placeholder ="Numero (1)"  name="numeroUno">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Segundo numero</label>
    <input type="number" class="form-control" placeholder ="Numero (2)" name="numeroDos">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Seleccione Operacion</label>
    <select class="form-control" id="exampleFormControlSelect1" name="operacion">
      <option name="suma">Suma (+)</option> 
      <option name="resta">Resta (-)</option>
      <option name="multiplicacion">Multiplicacion (x)</option>
      <option name="division">Division (÷)</option>
    </select>
  </div>
  <button type="submit" class="btn btn-primary mt-3 btn-block" name="btncalcular">Calcular</button>


</form>

<hr>

</div>
    </div>
        </div>
     
          
<?php 
if(isset($_POST["btncalcular"])):  
?>
  
  <h4 class="text-center">

  <?php
 
	    $numeroUno = $_POST["numeroUno"]; 
	    $numeroDos = $_POST["numeroDos"]; 
	    $operacion = $_POST["operacion"];   
	
	
  if($operacion == "Suma (+)")
  {
      $suma = $numeroDos + $numeroDos;
      echo ("Resultado : ".$suma);
  }
  
  else if($operacion == "Resta (-)")
  {
      $resta = $numeroUno - $numeroDos;
      echo ("Resultado : ".$resta);
	}
	
	//si es multiplicación
  else if($operacion == "Multiplicacion (x)")
  {
      $multiplicacion = $numeroUno * $numeroDos;
      echo ("Resultado : ".$multiplicacion);
	}
	
	//si es división
  else if($operacion == "Division (÷)")
  {
      $division = $numeroUno /$numeroDos;
      echo ("Resultado : ".$division);
  }
	
	?> 

</h4> 
<?php endif ?>

</body>
</html>