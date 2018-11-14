<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
      $menu = ['Home', 'Books', 'Classes', 'Departments', 'About'];
foreach ($menu as $label){
  echo ' <li class="nav-item">
        <a class="nav-link" href="#">'. $label.'</a>
      </li>';
  }  
      ?>
</div>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="ISBN, Nombre, Autor..." aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit"></button>
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
    <h1 class="card-title"><strong>ECUENTRA LOS LIBROS QUE BUSCAS </strong></h1>
   </div>
   <div class="col-lg-8 mx-auto">
    <p class="card-text">Busca por clase, ISBN o por Departamento y encuentra el libro que necesitas tan pronto lo necesites</p>
    <p class="card-text"><a class="btn btn-primary btn-xl js-scroll-trigger" href="#about">Presiona para buscar libros</a></p>
  </div>
   </div>
</div>
  </header>
    <h1 align="center">Most Popular Classes</h1>


<!-- -->

<!--Clases-->
<div class="card-deck">
  <div class="card">
   <a href="http://sici4997.uprp.edu/~miguel.santiago27/UprBooks/Departments/SICI"> <img class="card-img-top" src="https://gdurl.com/mbK5" width="100" height="400" alt="Card image cap"></a>
    <div class="card-body">
      <h5 class="card-title">Computer Science Books</h5>
      <p class="card-text">Encuentra libros de todos los lenguajes de programación.</p>
      <p class="card-text"><small class="text-muted">Ejemplo Narnia, Harry Potter, Rverdale, Tu madre la mia?</small></p>
    </div>
  </div>
  <div class="card">
   <a href="http://sici4997.uprp.edu/~miguel.santiago27/UprBooks/Departments/ADMI"> <img class="card-img-top" src="https://gdurl.com/GNwA" width="100" height="400" alt="Card image cap"></a>
    <div class="card-body">
      <h5 class="card-title">Administration Books</h5>
      <p class="card-text">Encuentra libros de contabilidad, Mercadeo, Gerencia, Finanazas etc. </p>
      <p class="card-text"><small class="text-muted">Ejemplo Narnia, Harry Potter, Rverdale, Tu madre la mia?</small></p>
    </div>
  </div>
  <div class="card">
   <a href="http://sici4997.uprp.edu/~miguel.santiago27/UprBooks/Departments/BIOL"> <img class="card-img-top" src="https://gdurl.com/hGqw" width="100" height="400" alt="Card image cap" > </a>
    <div class="card-body">
      <h5 class="card-title">Biology Books</h5>
      <p class="card-text">Encuentra libros de biologia, Bicrobiologia, Anatomia etc</p>
      <p class="card-text"><small class="text-muted">Ejemplo Narnia, Harry Potter, Rverdale, Tu madre la mia?</small></p>
    </div>
  </div>
</div>

<div class="card-deck">
  <div class="card">
    <a href="http://sici4997.uprp.edu/~miguel.santiago27/UprBooks/Departments/INGL"> <img class="card-img-top" src="https://gdurl.com/60FD" width="100" height="400" alt="Card image cap"> </a>
    <div class="card-body">
      <h5 class="card-title">English Books</h5>
      <p class="card-text">Encuentra todos los libros de ingles desde basico hasta avanzando.</p>
      <p class="card-text"><small class="text-muted">Ejemplo Narnia, Harry Potter, Rverdale, Tu madre la mia?</small></p>
    </div>
  </div>
  <div class="card">
    <a href="http://sici4997.uprp.edu/~miguel.santiago27/UprBooks/Departments/INGE"> <img class="card-img-top" src="https://gdurl.com/HxDS" width="100" height="400" alt="Card image cap" ></a>
    <div class="card-body">
      <h5 class="card-title">Engineering Books</h5>
      <p class="card-text">Encuentra libros de Ingeneria civil, mecanica, etc. </p>
      <p class="card-text"><small class="text-muted">Ejemplo Narnia, Harry Potter, Rverdale, Tu madre la mia?</small></p>
    </div>
  </div>
  <div class="card">
   <a href="http://sici4997.uprp.edu/~miguel.santiago27/UprBooks/Departments/ESPA">  <img class="card-img-top"  src="https://gdurl.com/f1h2" width="100" height="400" alt="Card image cap" ></a>
    <div class="card-body">
      <h5 class="card-title">Spanish Books</h5>
      <p class="card-text">Encuentra todos los libros de español desde basico hasta avanzado</p>
      <p class="card-text"><small class="text-muted">Ejemplo Narnia, Harry Potter, Rverdale, Tu madre la mia?</small></p>
    </div>
  </div>
</div>

<br><br><br><br><br>

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

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>
