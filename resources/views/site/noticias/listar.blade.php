@extends('site.layouts.basico')


@section('titulo', 'Portal de Notícias')
@section('conteudo')


<div class="conteudo-pagina">

    @include('site.layouts._partials.titulo')

    <div class="informacao-pagina">
        <div class="container-fluid m-0 p-0">
            <div class="site-section">
                <div class="section-content site">

                    <div class="cards">

                        @foreach($noticias as $noticia)

                        <x-news-card id="{{ $noticia->id }}" titulo="{{ $noticia->titulo }}" autor="{{ $noticia->autor }}"
                            categoria="{{ $noticia->categoria }}" descricao="{{ $noticia->descricao }}"
                            imagem="{{ $noticia->imagem }}"/>

                        @endforeach

                    </div>
                </div>
            </div>

        </div>
{{--
        <div style="width:90%; margin-left: auto; margin-right: auto;">

            <table border="1" width="100%">
                <thead>
                    <tr>
                        <th>Título</th>
                        <th>Autor</th>
                        <th>Categoria</th>
                        <th>Descrição</th>
                        <th>Imagem</th>
                        <th>Editar</th>
                        <th>Excluir</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($noticias as $noticia)
                        <tr>
                            <td>{{ $noticia->titulo }}</td>
                            <td>{{ $noticia->autor }}</td>
                            <td>{{ $noticia->categoria }}</td>
                            <td>{{ $noticia->descricao }}</td>
                            <td>
                                <img
                                src="{{ Storage::url("{$noticia->imagem}")  }}"
                                style="height: 50px; width: 50px;" alt="{{ $noticia->imagem }}">

                            </td>
                            <td>
                                <a href="{{ route('site.noticias.editar', $noticia->id) }}">
                                    <img
                                    src="{{asset('assets/images/edit.svg')}}"
                                    class="icons-theme">
                                </a>
                            </td>
                            <td>
                                <a href="{{ route('site.noticias.excluir', $noticia->id) }}">
                                    <img
                                    src="{{asset('assets/images/delete.svg')}}"
                                    class="icons-theme">
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>

            </table>


        </div> --}}
    </div>
</div>


@endsection
