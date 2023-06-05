<?php

namespace App\Http\Controllers;

use App\Models\Noticia;
use Illuminate\Http\Request;

class NoticiaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $noticias = Noticia::where('titulo', 'like', '%'.$request->input('titulo').'%')
        ->where('autor', 'like', '%'.$request->input('autor').'%')
        ->where('categoria', 'like', '%'.$request->input('categoria').'%')
        ->where('descricao', 'like', '%'.$request->input('descricao').'%')
        ->get();

        // dd($request);

        return view('site.noticias.listar', ['noticias' => $noticias, 'request' => $request]);
    }

    public function buscarCategoria(Request $request){

        $categoria_menu = '';
        if(isset($request->categoria_filmes)){
            $categoria_menu = $request->categoria_filmes;
        }
        else if(isset($request->categoria_compositores)){
            $categoria_menu = $request->categoria_compositores;
        }
        else if(isset($request->categoria_atores)){
            $categoria_menu = $request->categoria_atores;
        }
        else if(isset($request->categoria_diretores)){
            $categoria_menu = $request->categoria_diretores;
        }

        $noticias =  Noticia::where('categoria', 'like', '%'.$categoria_menu.'%')
        ->get();
        return view('site.noticias.listar', ['noticias' => $noticias, 'request' => $request]);
    }

    public function sobreMim()
    {
        return view('site.sobre-mim');
    }


    public function buscar(){
        return view('site.noticias.buscar');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function adicionar(Request $request)
    {

        $msg = '';

        // Inclusão de elemento, verifica csrf token
        if($request->input('_token') != '' && $request->input('id') == ''){

            $regras = [
                'titulo' => 'required|min:3|max:120',
                'autor' => 'required',
                'categoria' => 'required',
                'descricao' => 'required|min:4',
                'imagem' => 'required|image|max:2048',
                // 'imagem' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',

            ];

            $feedback = [
                'required' => 'O campo :attribute deve ser preenchida',
                'titulo.min' => 'O campo título deve ter no mínimo 3 caracteres',
                'titulo.max' => 'O campo título deve ter no máximo 120 caracteres',
                'descricao.min' => 'O campo descrição deve ter no mínimo 4 caracteres',
                'imagem.image' => 'Envie uma imagem válida!',
                // 'imagem.mimes' => 'Envie uma extensão de imagem válida!',
                'imagem.max' => 'Nome do arquivo ultrapassou o limite de caracteres, renomeie.'
            ];

            $request->validate($regras, $feedback);

            $file = $request->file('imagem');
            $filename=date('YmdHi').$file->getClientOriginalName();
            $image_path = $file->store('',  'public');

            Noticia::create([
                'titulo' => $request->titulo,
                'autor' => $request->autor,
                'categoria' => $request->categoria,
                'descricao' => $request->descricao,
                'imagem' => $image_path,
            ]);

            $msg = 'Cadastro de notícia realizado com sucesso';

        }


        // Edição de elemento
        if($request->input('_token') != '' && $request->input('id') != ''){
            $noticia = Noticia::find($request->input('id'));

            // deletar imagem atual


            $file = $request->file('imagem');
            $image_path = $file->store('',  'public');
            $update = $noticia->update($request->all());
            $noticia->imagem = $image_path;

            $noticia->save();

            if($update) {
                $msg = 'Atualizado com sucesso!';
            } else {
                $msg = 'Erro ao atualizar o registro!';
            }

            return redirect()->route('site.noticias.editar', ['id' => $request->input('id'), 'msg' => $msg]);
        }
        return view('site.noticias.adicionar', ['msg' => $msg]);
    }

    /**
     * Display the specified resource.
     */
    public function exibir($id)
    {
        $noticia = Noticia::find($id);

        return view ('site.noticias.exibir', ['noticia' => $noticia]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function editar($id, $msg= '')
    {
        $noticia = Noticia::find($id);

        return view ('site.noticias.adicionar', ['noticia' => $noticia, 'msg' => $msg]);
    }

    public function excluir($id, $msg= '')
    {
        $noticia = Noticia::find($id)->delete(); // registro permanece

        return redirect()->route('site.noticias.listar');
    }

}


            // $noticia = new Noticia();

            // dd($request);

            // $noticia->fill($request->all());

            // $image_path = $request->file('imagem')->store('imagem', 'public/uploads');

            // $image_path = $file->storeAs('', $filename ,  'images_public');

            // if($request->hasFile('imagem')){
            //     $file = $request->file('imagem');
            // $filename=date('YmdHi').$file->getClientOriginalName();
            //     // $file->move(public_path('public/uploads', $filename));
            //     // $path = $request->imagem->storeAs('public/uploads', $filename);

            //     $image = $request->imagem->store('public/uploads', $filename, 'images_public');

            //     // $noticia['imagem'] = $image;
            // }
            // dd($request);
            // $noticia->save();
