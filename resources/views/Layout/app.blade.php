<!DOCTYPE html>
<html lang="pt-BR">

<head>

  <title>Tupã - @yield('title')</title>
  <link rel="stylesheet" type="text/css" href="{{URL::to('dist/css/bootstrap.min.css')}}">
</head>

<body>

<div style="center-text" class="alert alert-warning alert-dismissible fade show" role="alert">
      <strong>Não se preocupe!</strong> Atualizações futuras irão mudar o estilo e o funcionamento da plataforma.
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>



  <nav class="navbar navbar-expand-lg navbar-light bg-light">
   
    <a class="navbar-brand">Tupã</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
      <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
        <li class="nav-item active">
          <a class="nav-link" href="{{url('areas')}}">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Time
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" target="_blank" href="https://twitter.com/vilailus">Luis Antônio da Curz Gomes</a>
            <a class="dropdown-item" target="_blank" href="#">Abima</a>
            <a class="dropdown-item" target="_blank" href="#">Ludy</a>
            <a class="dropdown-item" target="_blank" href="#">Darlison</a>
            <a class="dropdown-item" target="_blank" href="#">Vanessa</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" target="_blank" href="http://www.ufopa.edu.br/ufopa/">UFOPA</a>
          </div>
        </li>
      </ul>
      <form class="form-inline my-2 my-lg-0">
        @yield('searchNav')
      </form>
    </div>
  </nav>

  <div class="container">
    @yield('content')
  </div>
  <script src="js/bootstrap.bundle.min.js"></script> <!-- Menu Toggle Script -->
  <script type="text/javascript" src="{{URL::to('/dist/js/jquery.min.js')}}"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>

</html>