<!doctype html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>CineStrap</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <link rel="stylesheet" href="css.css">
    </head>
    <body>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
        <nav class="navbar text-bg-dark p-2" style= "width:100%;" >
          <div class="container justify-content-center">
              <a class="navbar-brand text-light" href="{{url('/')}}">
                  <img src="Imagens/filme.png" alt="Bootstrap" width="50" height="44">CineStrap
              </a>
              <ul class="nav nav-tabs ">
                  <li class="nav-item">
                      <a class="nav-link active" aria-current="page" href="{{url('/')}}">Home</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link text-white" href="{{'/login-user'}}">Login</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link text-white" href="compra.html">Compra</a>
                  </li>
              </ul>
          </div>
        </nav>

        <div class="container">

            @yield('content')    

        </div>

        
        <footer>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>   
   
</footer>

</body>
</html>
