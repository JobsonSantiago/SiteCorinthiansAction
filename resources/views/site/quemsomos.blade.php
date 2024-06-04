<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Site Corinthians</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body class="bg-secondary text-white">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    <div class="container text-center">
        <div class="row">

            <div class="col">
                <nav class="navbar navbar-expand-lg bg-dark " data-bs-theme="dark">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="#">SITE DO CORINTHIANS</a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                <li class="nav-item">
                                    <a class="nav-link" aria-current="page" href="{{ route ('site.index')}}">Principal</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" href="{{ route ('site.quemsomos')}}">Quem Somos</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route ('site.contato')}}">Contato</a>
                                </li>
                            </ul>
                            <form class="d-flex" role="search">
                                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                                <button class="btn btn-outline-danger" type="submit">Search</button>
                            </form>
                        </div>
                    </div>
                </nav>
            </div>
            <div class="container text-center">
                <div class="row">
                    <div id="carouselExample" class="carousel slide">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="https://i.pinimg.com/originals/23/0b/07/230b0790a9430237b4420e2be1bf1ef3.jpg" class="d-block w-100" alt="...">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container text-center">
        <div class="row">

            <div class="col ">
                <div class="card text-center">
                    <div class="card-header">
                        <h3>Sport Club Corinthians Paulista (SCCP)</h3>
                    </div>
                    <div class="card-body">
                        <p class="card-text">
                            O Sport Club Corinthians Paulista, comumente conhecido como Corinthians ou pelo acrônimo SCCP, é um renomado clube poliesportivo brasileiro localizado na cidade de São Paulo. Fundado em 1º de setembro de 1910 por um grupo de operários do bairro Bom Retiro, o clube foi inspirado pelo Corinthian Football Club de Londres, que estava em excursão pelo Brasil na época.
                        </p>
                        <p class="card-text">
                            Embora o Corinthians tenha se aventurado em diversas modalidades esportivas ao longo dos anos, suas principais conquistas e reconhecimento vêm do futebol. O clube é um dos mais bem-sucedidos do Brasil e das Américas.
                        </p>
                        <p class="card-text">
                            As cores tradicionais do clube são o branco e o preto. Desde 2014, o Corinthians manda suas partidas de futebol na moderna Neo Química Arena. O clube possui históricos rivais, incluindo o Palmeiras (com quem disputa o Derby Paulista), o São Paulo (Majestoso) e o Santos (Clássico Alvinegro).
                        </p>
                        <p class="card-text">
                            A torcida corintiana, carinhosamente chamada de "Fiel", é uma das mais apaixonadas e dedicadas do mundo, estimada em cerca de 30 milhões de torcedores espalhados pelo Brasil e pelo mundo, ficando atrás apenas do Flamengo em número de torcedores no Brasil.
                        </p>
                        <p class="card-text">
                            Além do futebol, o Corinthians tem uma rica história em outras modalidades esportivas, como:
                        </p>
                        <ul class="card-text">
                            <li><strong>Basquete:</strong> Conquistou títulos paulistas, brasileiros e sul-americanos nas décadas de 1950 e 1960.</li>
                            <li><strong>Natação:</strong> Venceu o Troféu Brasil de Natação, atual Troféu Maria Lenk, em quatro ocasiões.</li>
                            <li><strong>Futsal:</strong> Desde a década de 1970, coleciona títulos estaduais e nacionais.</li>
                        </ul>
                        <p class="card-text">
                            A influência do remo na história do clube é refletida no escudo atual, que inclui um par de remos e uma âncora, simbolizando a tradição e versatilidade esportiva do Corinthians.
                        </p>
                        <a href="https://www.corinthians.com.br" class="btn btn-danger">Leia Mais</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="container text-center ">
        <div class="row">

            <div class="col ">
                <div class="card text-center bg-dark text-white">
                    <div class="card-header">
                        Entre em Contato
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Entre em contato</h5>
                        <a href="{{ route ('site.contato')}}" class="btn btn-danger">Clique!!</a>
                    </div>
                    <div class="card-footer bg-dark text-white">
                        Jobson Santiago - 3°DS - 2024
                    </div>
                </div>
            </div>

        </div>
    </div>

</body>

</html>