@extends('site.layouts.basico')


@section('titulo', 'Portal de Notícias')
@section('conteudo')


<div class="conteudo-pagina">

    <div class="titulo-pagina-2">

        <h2>Bem-vindo!</h2>
        <hr>
        <p>Portal de Notícias</p>

    </div>

    <div class="informacao-pagina">
        <div style="width:30%; margin-left: auto; margin-right: auto;">
            <form method="post" action="{{ route('site.noticias.listar') }}">
                @csrf
                <input name="titulo" type="text" placeholder="Título" class="borda-preta">
                <input name="autor" type="text" placeholder="Autor" class="borda-preta">
                <input name="categoria" type="text" placeholder="Categoria" class="borda-preta">
                <input name="descricao" type="text" placeholder="Descrição" class="borda-preta">
                <button type="submit" class="borda-preta">Pesquisar</button>
            </form>
        </div>
    </div>

<div>

@endsection
