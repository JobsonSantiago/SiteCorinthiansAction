<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <title>Site do Corinthians</title>
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
                                    <a class="nav-link" href="{{ route ('site.quemsomos')}}">Quem Somos</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" href="{{ route ('site.contato')}}">Contato</a>
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
                                <img src="https://i.pinimg.com/originals/5f/58/34/5f58341794969efa495440f386964069.jpg" class="d-block w-100" alt="...">
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
    <div class="container">
        <div class="row">

            <div class="col">
                <div class="card">

                    <div class="card-body">
                        <form method="post" action="{{ route('site.contato')}}">
                            @csrf
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Nome:</label>
                                <input type="text" class="form-control" id="txtNome" name="Nome" placeholder="Digite o seu nome completo">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Telefone:</label>
                                <input type="tel" class="form-control" id="txtTelefone" name="Telefone" placeholder="(XX)00000-0000">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Endereço:</label>
                                <input type="text" class="form-control" id="txtEndereco" name="Endereco" placeholder="Digite o seu endereço completo">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Sexo:</label>
                                <input type="text" class="form-control" id="txtEndereco" name="Sexo" placeholder="Digite o seu sexo">
                            </div>
                            <div class="mb-3">
                                <button type="submit" class="btn btn-danger">Enviar</button>
                            </div>
                        </form>
                        <br>
                        <h4>Dados do Formulário</h4> <br>
                        <ul>
                            @foreach($dadosDoFormulario as $campo => $valor)
                            <li><strong>{{ $campo }}:</strong> {{ $valor }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            <div class="container text-center">
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
                        </div>
                        <div class="card-footer bg-dark text-white">
                            Jobson Santiago - 3°DS - 2024
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>


    </div>
    </div>

</body>


</html>