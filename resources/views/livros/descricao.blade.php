@extends('layouts.main')

@section('title', 'Descricao')

@section('content')
<div class="col-md-10 offset-md-1">
    <div class="row">
      <div id="image-container" class="col-md-4">
        <img src="/imgs/Livro 1.jpeg" class="img-fluid" alt="">
      </div>
      <div id="info-container" class="col-md-8">
        <h1><strong>Baladas de Amor ao Vento</strong></h1>
        <p class="book-description">
            Primeiro romance de Paulina Chiziane, este livro conta a história de 
            amor de Sarnau e Mwando e traz a semente do que viria a ser o 
            clássico Niketche. "Com a poligamia, com a monogamia ou mesmo 
            solitária, a vida da mulher é sempre dura." Balada de amor ao vento é 
            uma obra pioneira
        </p>
        <p class="book-info"> <strong>Data de Publicação:</strong> 1990 </p>
        <p class="book-info"> <strong> Autora:</strong> Paulina Chiziane </p>
        <p class="book-info"> <strong>Género (s):</strong> Ficção, Romance de amor</p>
        <ul id="items-list"></ul>

        <form action="" method="POST">
        @csrf
        <a href="" 
            class="btn btn-primary btn-lg" 
            id="book-submit"
            onclick="event.preventDefault();
            this.closest('form').submit();">
            Ler o Livro
        </a>
        </form>
      </div>
    </div>
  </div>
@endsection