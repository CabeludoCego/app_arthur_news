@extends('site.layouts.basico')


@section('titulo', 'Sobre mim')
@section('conteudo')


<div class="conteudo-pagina">


    @include('site.layouts._partials.titulo')

    <div class="informacao-pagina">
        <h1>Acesse os menus superiores para conhecer nosso site!</h1>

        <h4>Categorias de nossas notícias:</h4>
        <ul>

            <li>Filmes</li>
            <li>Atores</li>
            <li>Diretores</li>
            <li>Compositores</li>
        </ul>

        <p>
            Prazer em conheçê-los! eu sou um Amante de filmes de muitos anos, filmes construiram quem eu sou e este amor por tantos filmes, de "Como Treinar seu dragão" até
            silent voice, me fizeram querer ajudar outros amantes de filmes com este este site! procure todas as notícias mais relevantes tanto dos filmes em sí quanto
            aqueles que criam ditas obras de arte, sendo diretores, atores ou compositores! espero que você tenha uma ótima estadia aqui!    
        </p>
    </div>



<div>

@endsection
