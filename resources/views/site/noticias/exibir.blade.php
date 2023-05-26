
@extends('site.layouts.basico')


@section('titulo', 'Sobre mim')
@section('conteudo')


    <div class="conteudo-pagina">

        <hr><hr>
        {{ $noticia->titulo }} - {{ $noticia->autor }} - {{ $noticia->categoria }}
        <hr>
        {{ $noticia->descricao }}
        <hr>
        {{ $noticia->imagem }}
        <br>

    </div>

@endsection
