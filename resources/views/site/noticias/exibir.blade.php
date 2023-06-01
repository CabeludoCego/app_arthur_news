
@extends('site.layouts.basico')


@section('titulo', 'Sobre mim')
@section('conteudo')


    {{-- <div class="conteudo-pagina">

        <hr><hr>
        {{ $noticia->titulo }} - {{ $noticia->autor }} - {{ $noticia->categoria }}
        <hr>
        {{ $noticia->descricao }}
        <hr>
        {{ $noticia->imagem }}
        <br>

    </div> --}}

    <div class="image-section">
        <img src="{{ Storage::url("{$noticia->imagem}")  }}" alt="{{ $noticia->imagem }}"
        style="wdith=200px; height:200px;">
    </div>

    <div class="article" >
        <h4>{!! $noticia->titulo !!}</h4>
        <p class="author-subtext">{{ $noticia->autor }}</p>
        <p>Categoria: {{ $noticia->categoria }}</p>
        <p>{!! $noticia->descricao !!}</p>
    </div>

@endsection
