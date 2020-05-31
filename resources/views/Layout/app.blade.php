<!DOCTYPE html>
<html lang="pt-BR">
    <head>

        <title>Tupã - @yield('title')</title>
        <link rel="stylesheet" type="text/css" href="{{URL::to('dist/css/bootstrap.min.css')}}">
    </head>
    <body>

    <!--  -->
    <!-- <nav class="navbar navbar-expand-lg navbar-light bg-light" style="background-color: #e3f2fd;">
        <li class="nav-item">
            <a class="nav-link" href="{{url('areas/')}}" >Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{url('areas/create')}}">Create</a>
        </li> -->

        
        
        


        <!--  -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="http://www.ufopa.edu.br/ufopa/">UFOPA</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="{{url('areas/')}}">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{url('areas/create')}}">Create</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Team Members
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Abima</a>
          <a class="dropdown-item" href="#">Darlison</a>
          <a class="dropdown-item" href="#">Ludy</a>
          <a class="dropdown-item" href="#">Luis G</a>
          <a class="dropdown-item" href="#">Sany</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Time Tupã</a>
        </div>
      </li>
    </ul>
    @yield('searchNav')
  </div>
</nav>

        <!--  -->


    </nav>
    

    <!-- ---------------------------------------------------------------------- -->

    



    <!--  -->
    

    

        <div class="container">
            @yield('content')
        </div>
        <script src="js/bootstrap.bundle.min.js"></script> <!-- Menu Toggle Script -->
        <script type="text/javascript" src="{{URL::to('/dist/js/jquery.min.js')}}"></script>
    </body>
</html>