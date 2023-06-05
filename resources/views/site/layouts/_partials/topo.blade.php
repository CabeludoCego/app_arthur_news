<div>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand text warning" href="{{ route('site.noticias.listar') }}">Cinemantástico</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="{{ route('site.noticias.listar') }}">Notícias</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="{{ route('site.noticias.buscar') }}">Pesquisar</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="{{ route('site.noticias.adicionar') }}">Adicionar</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="{{ route('site.sobre-mim') }}">Sobre Nós</a>
                </li>

                <li class="nav-item active dropdown">
                    <button class="dropbtn">
                        Categorias
                    </button>

                    <div class="dropdown-content">
                        <form method="post" action="{{ route('site.noticias.categoria') }}">
                            @csrf
                            <button class="dropbtn dropdown-link" type="submit">Comédia</button>
                            <input type="hidden" value="Comédia" name="categoria_comedia">
                        </form>
                        <form method="post" action="{{ route('site.noticias.categoria') }}">
                            @csrf
                            <button class="dropbtn dropdown-link" type="submit">Estreias</button>
                            <input type="hidden" value="Estreias" name="categoria_estreias">
                        </form>
                        <form method="post" action="{{ route('site.noticias.categoria') }}">
                            @csrf
                            <button class="dropbtn dropdown-link" type="submit">Atores</button>
                            <input type="hidden" value="Atores" name="categoria_atores">
                        </form>
                        <form method="post" action="{{ route('site.noticias.categoria') }}">
                            @csrf
                            <button class="dropbtn dropdown-link" type="submit">Diretores</button>
                            <input type="hidden" value="Diretores" name="categoria_diretores">
                        </form>
                    </div>
                </li>

                {{-- <li class="nav-item active dropdown">
                    <button class="dropbtn">
                        Categorias 2
                    </button>

                    <div class="dropdown-content">
                        <form method="post" action="{{ route('site.noticias.categoria') }}">
                            @csrf
                            <button class="dropbtn dropdown-link" type="submit">Comédia</button>
                            <input type="hidden" value="Comédia" name="categoria_comedia">

                            <button class="dropbtn dropdown-link" type="submit">Estreias</button>
                            <input type="hidden" value="Estreias" name="categoria_estreias">

                            <button class="dropbtn dropdown-link" type="submit">Atores</button>
                            <input type="hidden" value="Atores" name="categoria_atores">

                            <button class="dropbtn dropdown-link" type="submit">Diretores</button>
                            <input type="hidden" value="Diretores" name="categoria_diretores">
                        </form>
                    </div>
                </li> --}}

            </ul>
        </div>
    </nav>
</div>
