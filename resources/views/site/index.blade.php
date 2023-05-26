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
        <h1>Acesse os menus superiores para conhecer nosso site!</h1>
        {{ date('YmdHi') }}
    </div>

<div>

@endsection
