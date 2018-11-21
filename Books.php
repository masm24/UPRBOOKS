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
  <a class="navbar-brand" href="http://sici4997.uprp.edu/~miguel.santiago27/UprBooks/index.php"><img src = "https://gdurl.com/LqJc"  width="170" height="50" alt="Card image cap"></a>
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
  <a class="btn dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
    <br><br><br><br>

    <section id="books">

<h2 align="center">Popular Books</h2>
 <hr class="my-4">
<br>
<div class="container" >
<div class="row">
<div class="col-lg-8 mx-auto text-center">
<p>
<img src="img/portfolio/books/SystemsAnalysisandDesign.jpg" alt="Systems Analysis and Design" style="float:left;width:170px;height:200px;">
  Systems Analys is and Design (8th Edition) <br> ISBN: 978-0136089162 <br> Departamento: SICI <br> Clase: SICI3015
</p>

  <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Comprar</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Llenar informacion personal</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <form>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Nombre</label>
      <input type="text" class="form-control" id="inputName" placeholder="Nombre">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Apellido</label>
      <input type="text" class="form-control" id="inputLastName" placeholder="Apellido">
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress">Email</label>
    <input type="email" class="form-control" id="inputEmail" placeholder="Email">
  </div>

  </div>
</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Confirmar</button>
      </div>
    </div>
  </div>
</div>
<!-- Fin Modal -->
</div>

<div  style="margin-top: 50px;"  class="container">
<div class="row">
<div class="col-lg-8 mx-auto text-center">
<p>
<img src="img/portfolio/books/WebDevelopmentandDesignFoundationswithHTML5.jpg" alt="Systems Analysis and Design" style="float:left;width:170px;height:200px;">
  Web Development and Design Foundations with HTML5 <br>(7th Edition)<br> ISBN: 978-0133571783 <br> Departamento: SICI <br> Clase: COTI4210
</p>

  <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Comprar</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Llenar informacion personal</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <form>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Nombre</label>
      <input type="text" class="form-control" id="inputName" placeholder="Nombre">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Apellido</label>
      <input type="text" class="form-control" id="inputLastName" placeholder="Apellido">
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress">Email</label>
    <input type="email" class="form-control" id="inputEmail" placeholder="Email">
  </div>

  </div>

</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Confirmar</button>
      </div>
    </div>
  </div>
<!-- Fin Modal -->
</div>

<div  style="margin-top: 50px;"  class="container">
<div class="row">
<div class="col-lg-8 mx-auto text-center">
<p>
<img src="img/portfolio/books/ManagementEleventhEdition(Eleventh Edition).jpg" alt="Systems Analysis and Design" style="float:left;width:170px;height:200px;">
 Management Eleventh Edition (11th Edition) <br> ISBN: 978-0131181649 <br> Departamento: ADMI <br> Clase:  ADMI3005
</p>
  <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Comprar</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Llenar informacion personal</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <form>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Nombre</label>
      <input type="text" class="form-control" id="inputName" placeholder="Nombre">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Apellido</label>
      <input type="text" class="form-control" id="inputLastName" placeholder="Apellido">
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress">Email</label>
    <input type="email" class="form-control" id="inputEmail" placeholder="Email">
  </div>

  </div>

</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Confirmar</button>
      </div>
    </div>
  </div>
<!-- Fin Modal -->
</div>

<div  style="margin-top: 50px;"  class="container">
<div class="row">
<div class="col-lg-8 mx-auto text-center">
<p>
<img src="img/portfolio/books/AppliedMathematicsfortheManagerial,Life,andSocial Sciences(7th Edition).jpg" alt="Systems Analysis and Design" style="float:left;width:170px;height:200px;">
 Applied Mathematics for the Managerial, Life, and Social Sciences <br>(7th Edition) <br> ISBN: 978-1305107908 <br> Departamento: ADMI <br> Clase:  MECU3001
</p>
  <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Comprar</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Llenar informacion personal</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <form>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Nombre</label>
      <input type="text" class="form-control" id="inputName" placeholder="Nombre">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Apellido</label>
      <input type="text" class="form-control" id="inputLastName" placeholder="Apellido">
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress">Email</label>
    <input type="email" class="form-control" id="inputEmail" placeholder="Email">
  </div>

  </div>

</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Confirmar</button>
      </div>
    </div>
  </div>
<!-- Fin Modal -->
</div>


<div  style="margin-top: 50px;"  class="container">
<div class="row">
<div class="col-lg-8 mx-auto text-center">
<p>
<img src="img/portfolio/books/AdministrationR&C.jpg" alt="Systems Analysis and Design" style="float:left;width:170px;height:200px;">
Management, Robbins and Coulter <br>(12th Edition) <br> ISBN: 978-0133910292 <br> Departamento: ADMI <br> Clase:  ADMI3005
</p>
  <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Comprar</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Llenar informacion personal</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <form>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Nombre</label>
      <input type="text" class="form-control" id="inputName" placeholder="Nombre">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Apellido</label>
      <input type="text" class="form-control" id="inputLastName" placeholder="Apellido">
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress">Email</label>
    <input type="email" class="form-control" id="inputEmail" placeholder="Email">
  </div>

  </div> 

</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Confirmar</button>
      </div>
    </div>
  </div>
<!-- Fin Modal -->
</div>

<div  style="margin-top: 50px;"  class="container">
<div class="row">
<div class="col-lg-8 mx-auto text-center">
<p>
<img src="img/portfolio/books/learningphp.jpg" alt="Systems Analysis and Design" style="float:left;width:170px;height:200px;">
 Learning PHP, MySQL & JavaScript <br>(5th Edition) <br> ISBN:  978-1491979075 <br> Departamento: ADMI <br> Clase:  SICI4997
</p>
  <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Comprar</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Llenar informacion personal</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <form>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Nombre</label>
      <input type="text" class="form-control" id="inputName" placeholder="Nombre">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Apellido</label>
      <input type="text" class="form-control" id="inputLastName" placeholder="Apellido">
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress">Email</label>
    <input type="email" class="form-control" id="inputEmail" placeholder="Email">
  </div>

  </div> 

</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Confirmar</button>
      </div>
    </div>
  </div>
<!-- Fin Modal -->
</div>
</section>
    
    
    
    
    
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
