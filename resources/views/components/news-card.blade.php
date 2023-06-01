
    <div class="card">

        <div class="image-section">
            <img src="{{ Storage::url("{$imagem}")  }}" alt="{{ $imagem }}"
            style="wdith=200px; height:200px;">
        </div>

        <div class="article" >
            <h4>{!! $titulo !!}</h4>
            <p class="author-subtext">{{ $autor }}</p>
            <p>{!! $descricao !!}</p>
        </div>
        <div class="site-view">
            <a href="{{ route('site.noticias.exibir', $id) }}"
            class="button">Leia mais...</a>
        </div>
        {{-- <div class="posted-date">
            <p>Posted 19 mai. 2023</p>
        </div> --}}
    </div>
