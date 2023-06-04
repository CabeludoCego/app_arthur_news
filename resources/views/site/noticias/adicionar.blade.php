@extends('site.layouts.basico')


@section('titulo', 'Adicionar Notícia')
@section('conteudo')

	<div class="conteudo-pagina">


        <div class="titulo-pagina-2">
            <div class="titulo-background">
                <div class="titulo-texto">
                    <h2> Nova Notícia </h2>
                </div>
            </div>
        </div>

        <div class="informacao-pagina">
            {{ $msg ?? '' }}
            <div style="width:30%; margin-left: auto; margin-right: auto;">
                <form method="post" action="{{ route('site.noticias.adicionar') }}" enctype="multipart/form-data">
                    <input type="hidden" name="id" value="{{ $noticia->id ?? '' }}">
                    @csrf
                    <input type="text" name="titulo" value="{{ $noticia->titulo ?? old('titulo') }}" placeholder="Título" class="borda-preta">
                    {{ $errors->has('titulo') ? $errors->first('titulo') : '' }}

                    <input type="text" name="autor" value="{{ $noticia->autor ?? old('autor') }}" placeholder="Autor" class="borda-preta">
                    {{ $errors->has('autor') ? $errors->first('autor') : '' }}

                    <input type="text" name="categoria" value="{{ $noticia->categoria ?? old('categoria') }}" placeholder="Categoria" class="borda-preta">
                    {{ $errors->has('categoria') ? $errors->first('categoria') : '' }}

                    <input type="text" name="descricao" value="{{ $noticia->descricao ?? old('descricao') }}" placeholder="Descrição" class="borda-preta">
                    {{ $errors->has('descricao') ? $errors->first('descricao') : '' }}

                    <input type="file" name="imagem" placeholder="Imagem" value="{{ $noticia->imagem ?? old('imagem') }}"  class="form-control"
                        class="block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100" />
                    {{ $errors->has('imagem') ? $errors->first('imagem') : '' }}


                    <button type="submit" class="borda-preta sg">Cadastrar</button>

                </form>
            </div>
        </div>
	</div>


@endsection
