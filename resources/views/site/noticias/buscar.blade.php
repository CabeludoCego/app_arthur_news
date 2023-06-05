@extends('site.layouts.basico')


@section('titulo', 'Portal de Notícias - Buscar')
@section('conteudo')


<div class="conteudo-pagina">

    <div class="titulo-pagina-2">
        <div class="titulo-background">
            <div class="titulo-texto">
                <h2> Pesquisar Notícia </h2>
            </div>
        </div>
    </div>

    <div class="informacao-pagina">
        <div style="width:30%; margin-left: auto; margin-right: auto;">
            <form method="post" action="{{ route('site.noticias.listar') }}">
                @csrf
                <input name="titulo" type="text" placeholder="Título" class="borda-preta">
                <input name="autor" type="text" placeholder="Autor" class="borda-preta">
                <input name="categoria" type="text" placeholder="Categoria" class="borda-preta">
                <input name="descricao" type="text" placeholder="Descrição" class="borda-preta">
                <button type="submit" class="borda-preta sg">Pesquisar</button>
            </form>
        </div>
    </div>

<div>

@endsection
