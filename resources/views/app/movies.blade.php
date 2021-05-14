<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="{{url(mix('app/css/style.css'))}}">
    <link rel="stylesheet" href="{{url(mix('app/css/owl.css'))}}">
    
    <script src="{{url(mix('app/js/script.js'))}}"></script>

    <title>DC Play</title>
</head>
<body>
    <header>
        <div class="container">
            <h2 class="logo">
                <img class="box-filme" src="{{asset('img/logo.png')}}" alt="DC">
                <span>
                    Play
                </span>
            </h2>

            <nav>
                <a href="#"><i class="fas fa-home"></i></a>
                <a href="#">Séries</a>
                <a href="#">Filmes</a>
                <a href="#">Animações</a>
                <a href="#">Live-action</a>
                <button class="login">
                    Entrar
                </button>
            </nav>
        </div>
    </header>

    <main>
        @foreach ($highlights as $highlight)
        <div class="filme-principal">
            <div class="container">
                <div class="main-info">
                    <h3 class="titulo">{{$highlight->name}}</h3>
                    <p class="descricao">
                        {{$highlight->synopsis}}
                    </p>
                </div>
                <div class="botoes">
                    <button role="button" class="botao">
                        <i class="fas fa-play"></i>
                        ASSISTIR AGORA
                    </button>
                    <button role="button" class="botao">
                        <i class="fas fa-info-circle"></i>
                        MAIS INFORMAÇÕES
                    </button>
                </div>
            </div>
        </div>
        @endforeach
    </main>

    <div class="carrosel-filmes">
        <div class="owl-carousel owl-theme">
            @foreach ($dceu as $movie)
                <div class="item">
                    <img class="box-filme" src="{{asset('img/'.$movie->url.'.jpg')}}" alt="{{$movie->name}}" srcset="">
                </div>
            @endforeach
        </div>
    </div>

    <h2 class="category">
        Live-action
    </h2>

    <div class="carrosel-filmes">
        <div class="owl-carousel owl-theme">
            @foreach ($dceu as $movie)
                <div class="item">
                    <img class="box-filme" src="{{asset('img/'.$movie->url.'.jpg')}}" alt="{{$movie->name}}" srcset="">
                </div>
            @endforeach
        </div>
    </div>

    <script src="https://kit.fontawesome.com/2c36e9b7b1.js"></script>
    <script src="{{url(mix('app/js/jquery.js'))}}"></script>
    <script src="{{url(mix('app/js/owl.js'))}}"></script>
 

 
</body>
</html>