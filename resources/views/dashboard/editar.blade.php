@extends('layouts.painel')

@section('title', 'Criar')

@section('admin-content')
<div id="book-create-container" class="col-md-8 offset-md-2">
    <h3>Editar - {{$book->title}}</h3>
    <form action="/dashboard/actualizar/{{ $book->id }}" method="POST" enctype="multipart/form-data">
        @csrf 
        @method('PUT')
        <div class="form-group">
            <label for="image">Capa</label>
            <input type="file" class="form-control-file" id="image"  name="image"> 
            <img src="/imgs/books/{{ $book->image }}" alt="{{ $book->title }}" class="img-preview">
        </div>
        <div class="form-group">
            <label for="title">Titulo</label>
            <input type="text" class="form-control" id="title"  name="title" placeholder="Titulo do livro" value="{{ $book->title }}"> 
        </div>
        <div class="form-group">
            <label for="autor">Autor</label>
            <input type="text" class="form-control" id="autor" name="autor" placeholder="Autor do Livro" value="{{ $book->autor }}"> 
        </div>
        <div class="form-group">
            <label for="publication_date">Data de Publicacao</label>
            <input type="date" class="form-control" id="publication_date"  name="publication_date" value="{{ $book->publication_date->format('Y-m-d') }}"> 
        </div>
        <div class="form-group">
          <label for="livro">Livro</label>
          <input type="file" class="form-control-file" id="livro"  name="livro" value="{{ $book->livro }}"> 
        </div>
        <div class="form-group">
            <label for="title">Descricao</label>
            <textarea name="description" id="description" class="form-control" value="{{ $book->description }}"></textarea>
        </div>
        <div class="form-group">
            <label for="genero">Generos</label>
            <div class="form-group">	
              <input type="checkbox" name="generos[]" value="Romance"> Romance
            </div>
            <div class="form-group">	
              <input type="checkbox" name="generos[]" value="Drama"> Drama
            </div>
            <div class="form-group">	
              <input type="checkbox" name="generos[]" value="Novela"> Novela
            </div>
            <div class="form-group">	
              <input type="checkbox" name="generos[]" value="Conto"> Conto
            </div>
            <div class="form-group">	
              <input type="checkbox" name="generos[]" value="Cronica"> Cronica
            </div>
            <div class="form-group">	
              <input type="checkbox" name="generos[]" value="Poesia"> Poesia
            </div>
          </div>
          <br/>
        <input type="submit" class="btn btn-primary" value="Salvar">
    </form>
</div> 
@endsection