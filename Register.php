<!doctype html>
<html lang="en">


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
  <a class="navbar-brand" href="http://sici4997.uprp.edu/~miguel.santiago27/UprBooks/index.php"><img src = "https://gdurl.com/LqJc"  width="170" height="50" alt="Card image cap"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
        
            <?php
      $menu = ['Home', 'Books', 'Classes', 'About'];
foreach ($menu as $label){
  echo ' <li class="nav-item">
        <a class="nav-link" href="">'. $label.'</a>
      </li>';
  }  
      ?>
  
    <div class="dropdown">
  <a class="btn dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Departments
  </a>

  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    <a class="dropdown-item" href="http://sici4997.uprp.edu/~miguel.santiago27/UprBooks/Departments/ADMI.php">Administration</a>
    <a class="dropdown-item" href="http://sici4997.uprp.edu/~miguel.santiago27/UprBooks/Departments/SICI.php">Computer Science</a>
    <a class="dropdown-item" href="http://sici4997.uprp.edu/~miguel.santiago27/UprBooks/Departments/">Biology</a>
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
    
<br><br><br><br>
<h1 align="center">Desde esta página podrás crear tu propia cuenta para vender tus libros.
      De una manera eficiemte y totalmente seguro.</p>
      </h1>
        <hr class="my-4"></hr>
        
<!--Refistration form-->

<form>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Nombre</label>
      <input type="text" class="form-control" id="Nombre" placeholder="Miguel...">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Appelido</label>
      <input type="text" class="form-control" id="Apellido" placeholder="Santiago...">
    </div>
  </div>
 
   <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Ingrese su email universitario</label>
      <input type="email" class="form-control" id="Email" placeholder="xxxx@upr.edu">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Password</label>
      <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
    </div>
  </div>
   
     <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Ingrese su numero de estudiante</label>
      <input type="text" class="form-control" id="inputEmail4" placeholder="843-xx-xxxx">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Confirme su Password</label>
      <input type="password" class="form-control" id="inputPassword2" placeholder="Password">
    </div>
  </div>
 
  </div>
  <button type="submit" class="btn btn-primary">Register</button>
</form>

      <!--footer-->
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
      
      </body>
    </html>

      
      
