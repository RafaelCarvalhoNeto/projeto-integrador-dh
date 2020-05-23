<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="index.php">Ecommerce</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Inicial<span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Produtos</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Sobre nos</a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">Contato</a>
                                <a class="dropdown-item" href="#">Institucional</a>
                                <a class="dropdown-item" href="#">Termos de uso</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Politicas de Privacidade</a>
                            </div>
                        </li>
                        <li class="nav-item" id="cadastro">
                            <a class="nav-link" href="cadastro.php">Cadastro</a>
                        </li>
                        <li class="nav-item" id="login">
                            <a class="nav-link" href="#" data-toggle="modal" data-target="#modalLogin">Login</a>
                        </li>

                    </ul>
                    <form class="form-inline my-2 my-lg-0">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>
        <div class="subnav">
            <ul>
                <li><a href="#">Ofertas</a></li>
                <li><a href="#">Livros</a></li>
                <li><a href="#">Eletronicos</a></li>
                <li><a href="#about">Bolsas</a></li>
            </ul>
        </div>
    </header>