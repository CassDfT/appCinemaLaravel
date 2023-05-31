<?php 

$usuario = 'root';
$senha = '';
$database = 'appcinemabd';
$host = 'localhost:3307';

$mysqli = new mysqli($host, $usuario, $senha, $database);

$conexao = mysqli_connect($host, $usuario, $senha, $database) or die ('Não foi possível conectar');

if($mysqli->error){
    die("Falha ao conectar ao banco de dados" . $mysqli->error);
}

  if (mysqli_connect_errno()) {
    die("Falha na conexão com o banco de dados: " . mysqli_connect_error());
  }
  
  $query = "SELECT * FROM filmes";
  $resultado = mysqli_query($conexao, $query);
?>

@extends('modeloCliente')

@section('content')
        <main>
            <div id="carouselExampleIndicators" class="carousel slide">
                <div class="carousel-indicators">
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 5"></button>
                </div>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="imagens/carrossel-creed.jpg" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="imagens/carrossel-desaparecida.jpg" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="imagens/carrossel-gato-de-botas.jpeg" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="imagens/carrossel-homem-formiga.jpg" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="imagens/carrossel-mumias.jpg" class="d-block w-100" alt="...">
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon border" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                  <span class="carousel-control-next-icon border" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
              <hr>
              <h1>Filmes em cartaz</h1>
              
                <?php
  // Verifica se encontrou resultados
  if (mysqli_num_rows($resultado) > 0) {
    while ($filme = mysqli_fetch_assoc($resultado)) {
?>
        <div class="container text-center">
                <div class="row row-cols-2 row-cols-lg-3 g-2 g-lg-3">
                  <div class="col">
                    <div class="p-3"><img src="<?php echo $filme['capafilme'];?>" class="img-fluid rounded-start" alt="..."></div>
                  </div>
                </div>
              </div>
              <?php
    }
  } else {
    echo "Nenhum filme encontrado.";
  }

  mysqli_close($conexao);
  ?>
        </main>

@endsection