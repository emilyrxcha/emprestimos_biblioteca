<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Biblioexpress</title>
        <!-- Favicon-->
        <link rel="shortcut icon" href="{{asset('assets/favicon.png')}}" type="image/x-icon" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        <link rel="stylesheet" href="{{asset('css/styles.css')}}">
        <link rel="stylesheet" href="{{asset('css/teste.css')}}">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
            <!-- Navigation-->
            <nav class="navbar navbar-expand-lg navbar-light cor_navbar">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand">Biblioexpress</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4"> 
                        <li class="nav-item"><a class="nav-link" href="{{route('index')}}">Início</a></li> 
                        <li class="nav-item"><a class="nav-link" href="{{route('index')}}">Perfil</a></li> 
                        <li class="nav-item"><a class="nav-link" href="{{route('sobre.index')}}">Sobre</a></li> 
                    </ul>
                </div>
                <div class="input-group input-group-sm mb-3">
                    <div class="pesquisa">
                        <input type="text" style="margin-left: 50px; margin-top:15px" class="form-control" placeholder="Pesquisar" aria-label="Recipient's username" aria-describedby="basic-addon2">
                    </div>
                    <div class="input-group-append">
                      <span class="input-group-text" id="basic-addon2" style="margin-top:15px" >
                        <img src="https://cdn-icons-png.flaticon.com/512/149/149852.png"alt="pesquisar" width="20px">
                      </span>
                    </div>
                  </div>
            </div>
        </nav>
    <div id="app">
        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
