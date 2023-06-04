
@extends('site.layouts.basico')


@section('titulo', "$noticia->titulo")
@section('conteudo')

<div class="conteudo-pagina">


    @include('site.layouts._partials.titulo')

    <section class="article-section">
        <article class="article-page">
            <h1 class="article-title">
                {!! $noticia->titulo !!}
            </h1>

            <h6 class="article-author">Postado por: {!! $noticia->autor !!} em {{ $noticia->created_at->toDateString() }}
                <br>
                Tag: {{ $noticia->categoria }}
            </h6>

            <div class="article-options">
                <div>
                    <a href="{{ route('site.noticias.editar', $noticia->id) }}">
                        <img
                        src="{{asset('assets/images/edit.svg')}}"
                        class="icons-theme">
                    </a>
                </div>
                <div>
                    <a href="{{ route('site.noticias.excluir', $noticia->id) }}">
                        <img
                        src="{{asset('assets/images/delete.svg')}}"
                        class="icons-theme">
                    </a>
                </div>
            </div>


            <div class="image-section">
                <img class="article-image" src="{{ Storage::url("{$noticia->imagem}")  }}" alt="{{ $noticia->imagem }}">
            </div>


            <div class="article-text">
                <p class="article-paragraph">
                    {!! $noticia->descricao !!}
                </p>
            </div>

        </article>
    </section>
</div>

@endsection
