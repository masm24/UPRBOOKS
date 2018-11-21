<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">


    <title>UPRBooks</title>
  </head>
  <body>
  
      
    <nav class="navbar fixed-top navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#"><img src = "https://gdurl.com/LqJc"  width="170" height="50" alt="Card image cap"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <?php
      $menu = ['Home', 'Books', 'Register', 'About'];
foreach ($menu as $label){
  echo ' <li class="nav-item">
        <a class="nav-link" href="#">'. $label.'</a>
      </li>';
  }  
      ?>
  <div class="dropdown">
  <a class="btn dropdown-toggle" href="http://sici4997.uprp.edu/~miguel.santiago27/UprBooks/index.php" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Departments
  </a>

  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    <a class="dropdown-item" href="http://sici4997.uprp.edu/~miguel.santiago27/UprBooks/Departments/ADMI.php">Administration</a>
    <a class="dropdown-item" href="http://sici4997.uprp.edu/~miguel.santiago27/UprBooks/Departments/SICI.php">Computer Science</a>
    <a class="dropdown-item" href="http://sici4997.uprp.edu/~miguel.santiago27/UprBooks/Departments/BIOL.php">Biology</a>
     <a class="dropdown-item" href="http://sici4997.uprp.edu/~miguel.santiago27/UprBooks/Departments/">English</a>
    <a class="dropdown-item" href="http://sici4997.uprp.edu/~miguel.santiago27/UprBooks/Departments/">Spanish</a>
     <a class="dropdown-item" href="http://sici4997.uprp.edu/~miguel.santiago27/UprBooks/Departments/">Engineering</a>
  </div>
</div>
</div>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="ISBN, Nombre, Autor..." aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit"><i class="fa fa-search"></i></button>
    </form>
  </div>
</nav>
    
    <!-- foto principal-->    
<div class="card bg-dark text-white">
  <img class="card-img" src="http://gdurl.com/3eUL" width="220" height="1000" alt="Card image">
  <header class="masthead text-center text-white d-flex justify-content-center">
  <div class="container my-auto card-img-overlay">
   <div class="col-lg-10 mx-auto">
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <h1 class="card-title"><input class="form-control mr-sm-2" type="search" placeholder="Nombre de la clase, Profesor o Codigo de clase..." aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button></h1>
   </div>
   <div class="col-lg-8 mx-auto">
    <p class="card-text">Busca por clase, Profesor o codificacion de clase</p>

  </div>
   </div>
</div>
  </header>
  
   <section id="contact">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto text-center">
            <h2 class="section-heading">Tienes alguna pregunta? Contactanos!</h2>
            <hr class="my-4">
            <p class="mb-5">Responderemos lo mas rapido posible</p>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4 ml-auto text-center">
            <i class="fas fa-phone fa-3x mb-3 sr-contact-1"></i>
            <p>123-456-6789</p>
          </div>
          <div class="col-lg-4 mr-auto text-center">
            <i class="fas fa-envelope fa-3x mb-3 sr-contact-2"></i>
            <p>
              <a href="mailto:your-email@your-domain.com">feedback@uprpbooks.edu</a>
            </p>
          </div>
        </div>
      </div>
    </section>
  
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    
    </body>
</html>
