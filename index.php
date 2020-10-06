<?php
echo'
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />

<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="style/style.css">
<link href="style.css" rel="stylesheet" type="text/css" />


	<title>Colegio Lakeside </title>
</head>
<body class="color"  >
<nav class="navbar navbar-expand-lg sticky-top navbar-dark color" >
        <a class="navbar-brand" href="#"></a>
        <img src="img\logoalta2.png" width="70" height="" class="d-inline-block align-top" alt="">
        <div class="container">
            <a class="navbar-brand fuente" href="#">Colegio Bilingue Lakeside</a>
        </div>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
            <form class="form-inline">
       
              
              <input type="email" class="form-control  mr-2" id="exampleDropdownFormEmail2" placeholder="email@example.com"   >
              <label>             </label>
              <input type="password" id="inputPassword6" class="form-control" placeholder="Contraseña">
            
  
            <div class="form-check cry "
            <label>             </label>
             <a class="btn btn-outline-warning mr-2"  href="signup.php" role="button"> Aceptar</a>
              <input class="form-check-input" type="checkbox" id="inlineFormCheck">
              <label>             </label>
              <label class="form-check-label mb -2 mr-2 sm-1 text-warning" for="inlineFormCheck">
                   Remember me
              </label>
            </div>
     
            
            

          </form>
            </div>
        </div>
    </nav>

    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100" src="img/x1.jpeg" alt="First slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="img/x2.jpeg" alt="Second slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="img/x3.jpg" alt="Third slide">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

  <div class="card bg-light" style="width: 100%;">
  
  <div class="card-body">
    <h1 class="card-title text-warning ; ">BIENVENIDO AL CAMPUS VIRTUAL DE LAKESIDE </h1>
    <br>
    <h3 class="text-warning ">POR FAVOR CREA UNA CUENTA O INGRESA CON LA QUE HAYAS CREADO  </h3>
   <br>
   <br>
   <br>
   <h3 class="text-warning ">Rellena este formulario si eres maestro. </h3>
<br>
    <form acction="loginmaestro.php" method="post">

    <div class="row">
      
      <div class="col-3">
        <input type="text" name="nombremaestro" class="form-control" placeholder="Nombre(s)">
      </div>
  
      <div class="col-3">
        <input type="text" name="apellidomaestro" class="form-control" placeholder="Apellidos">
      </div>
  
  
  
      </div>
      <div class="row">
      
      <div class="col-3">
      <br>
        <input type="email" name="emailmaestro" class="form-control" id="inputEmail4" placeholder="Email">
      </div>
      <div class="col-3">
      <br>
        <input type="password" name="contraseñamaestro" class="form-control" id="inputPassword4" placeholder="Contraseña">
        </div>
        </div>
        <br>
        <div class="row">
      
      
      <div class="col-4">
  
      <button type="submit" class="btn btn-warning  btn-lg col-4 "for="inlineFormCheck"> Aceptar</button>
  
      </div>
      <div class="col-2">
  
      
  
      </div>
      <img class="imagen" src="img/logoalta.jpg" width="30%" height="30%">
  
     
      </div>
        
  </form>
  
  


  <h3 class="text-warning ">Rellena este formulario si eres un alumno. </h3>
  <br>
  <form>
  
    <div class="row">
     
  
      <div class="col-3">
        <input type="text" class="form-control" placeholder="Nombre(s)">
      </div>
  
      <div class="col-3">
        <input type="text" class="form-control" placeholder="Apellidos">
      </div>
  
  
  
      </div>
      <div class="row">
      
      <div class="col-3">
      <br>
        <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
      </div>
      <div class="col-3">
      <br>
        <input type="password" class="form-control" id="inputPassword4" placeholder="Contraseña">
        </div>
        </div>
        <br>
        <div class="row">
      
 
      <div class="col-4">
  
      <button type="submit" class="btn btn-warning  btn-lg col-4 "for="inlineFormCheck"> Aceptar </button>
  
      </div>
      </div>
        
     
  </form>
  
  </div>

</div>
<div class="container-fluid">
<br>
<br>
<br>

	


</div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>
';
?>
