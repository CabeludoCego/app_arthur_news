<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class NewsCard extends Component
{
    /**
     * Create a new component instance.
     */

    public $titulo;
    public $autor;
    public $categoria;
    public $descricao;
    public $imagem;
    public $id;

    public function __construct($id, $titulo, $autor, $categoria, $descricao, $imagem)
    {
        $this->id = $id;
        $this->titulo =      $titulo;
        $this->autor =       $autor;
        $this->categoria =   $categoria;
        $this->descricao =   $descricao;
        $this->imagem =      $imagem;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.news-card');
    }
}
