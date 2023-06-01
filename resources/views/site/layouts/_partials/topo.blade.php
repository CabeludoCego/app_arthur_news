
{{-- <div class="topo">

	<div class="menu">
			<ul>
                    <li><a href="{{ route('site.noticias.listar') }}">Notícias</a></li>
					<li><a href="{{ route('site.noticias.buscar') }}">Pesquisar</a></li>
					<li><a href="{{ route('site.noticias.adicionar') }}">Nova Notícia</a></li>
					<li><a href="{{ route('site.sobre-mim') }}">Sobre Mim</a></li>
			</ul>
	</div>
</div> --}}

{{-- <div class="topo"> --}}

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
            </ul>
        </div>
    </nav>
</div>
