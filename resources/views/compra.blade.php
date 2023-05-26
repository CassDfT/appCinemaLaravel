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
                <a class="navbar-brand text-light" href="cinema.html">
                    <img src="Imagens/filme.png" alt="Bootstrap" width="50" height="44">CineStrap
                </a>
                <ul class="nav nav-tabs ">
                    <li class="nav-item">
                        <a class="nav-link text-white" aria-current="page" href="cinema.html">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="login.html">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="compra.html">Compra</a>
                    </li>
                </ul>
            </div>
          </nav>
        <main>
            <div class="main">
                <div class="compra">
                    <img src="imagens/poster-creed.jpg" width="100%">
                </div>
                <div class="texto-compra">
                    <h2>Creed III</h2><hr>
                    <p>Em Creed III, continuação do longa de 2018, Michael B. Jordan volta a interpretar Adonis Creed. Depois de dominar o mundo do boxe, Adonis Creed vem prosperando tanto na carreira quanto na vida familiar. Quando um amigo de infância e ex-prodígio do boxe, Damian (Jonathan Majors), ressurge depois de cumprir uma longa sentença na prisão, ele está ansioso para provar que merece sua chance no ringue. Damian pede a ajuda de Creed para que ele o ajude a voltar para os campeonatos de luta. Apesar de tudo, dezoito anos na prisão mudam a pessoa e Damian não está nada satisfeito que Creed "tomou seu lugar" no ringue de boxe. Dois velhos amigos então vão lutar para enfrentar seus passados juntos e enfrentar o futuro que os aguarda. Para acertar as contas, Adonis deve colocar seu futuro em risco para lutar contra Damian - um lutador que não tem nada a perder.</p>
                    <div class="infos1">
                        <p>Duração: 1:57 / Drama</p>
                        <p>Direção: Michael B. Jordan</p>
                        <p>Roteiro: Zach Baylin, Ryan Coogler</p>
                        <p>Elenco: Michael B. Jordan, Tessa Thompson, Jonathan Majors</p>
                    </div>
                    <div class="infos2">
                        <select class="form-select w-25" aria-label="Default select example">
                            <option selected disabled>Datas</option>
                            <option value="1">11/03/23</option>
                            <option value="2">12/03/23</option>
                            <option value="3">16/03/23</option>
                            <option value="4">17/03/23</option>
                            <option value="5">18/03/23</option>
                        </select>
                        <select class="form-select w-25" aria-label="Default select example">
                            <option selected disabled>Seções</option>
                            <option value="1">13:00 - Sala 1</option>
                            <option value="2">14:30 - Sala 4</option>
                            <option value="3">17:00 - Sala 1</option>
                            <option value="4">19:00 - Sala 2</option>
                            <option value="5">20:40 - Sala 3</option>
                        </select>
                        <button type="button" class="btn btn-success"> <A href="lugares.html">Comprar</A></button>
                    </div>
                </div>
            </div>
        </main>
    </body>
</html>