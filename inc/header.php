<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="index.php">
                    <img src="./assets/img/logo.png" alt="Logo" width=65px height=50px>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Sobre nós</a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="contato.php">Contato</a>
                                <a class="dropdown-item" href="institucional.php">Institucional</a>
                                <a class="dropdown-item" href="politicas.php">Termos de uso</a>
                                <a class="dropdown-item" href="politicas.php">Politicas de Privacidade</a>
                            </div>
                        </li>
                    </ul>
                    <form class="form-inline ml-auto p-2 my-0">
                        <div class="input-group" id="busca">
                            <input class="form-control border-0" type="search" placeholder="Busca" aria-label="Search">
                            <div class="input-group-append">
                                <button class="search btn" type="submit"></button>
                            </div>
                        </div>
                    </form>
                    <a class="d-flex flex-column text-white m-2" href="#" data-toggle="modal" data-target="#modalLogin">
                        <small class="login m-0">Olá, faça seu login</small>
                        <small class="login m-0">ou cadastre-se</small>
                    </a>
                    

                    <a class="btn btn-outline-warning px-4 ml-2 arrendonar" href="carrinho.php"><i class="fas fa-shopping-cart"></i></a>
                </div>
            </div>
        </nav>
        <div class="subnav">
            <div class="container">
                <div class="row">
                    <ul>
                        <li><a href="./ofertas.php">Ofertas</a></li>
                        <li><a href="./livros.php">Livros</a></li>
                        <li><a href="./eletronicos.php">Eletrônicos</a></li>
                        <li><a href="./bolsas.php">Bolsas</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </header>