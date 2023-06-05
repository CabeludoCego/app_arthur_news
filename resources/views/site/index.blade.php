@extends('site.layouts.basico')


@section('titulo', 'Portal de Notícias')
@section('conteudo')


<div class="conteudo-pagina">


    @include('site.layouts._partials.titulo')

    <div class="informacao-pagina">
        <h1>Acesse os menus superiores para conhecer nosso site!</h1>
        {{ date('YmdHi') }}
    </div>

<div>

@endsection
