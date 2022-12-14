@extends('layouts.painel')

@section('title', 'Criar')

@section('admin-content')
<div id="book-create-container" class="col-md-8 offset-md-2">
    <h3>Registo - Livro</h3>
    <form action="/dashboard" method="POST" enctype="multipart/form-data">
        {{-- a directiva abxixo permite mandar os dados do form  --}}
        @csrf 
        <div class="form-group">
            <label for="image">Capa</label>
            <input type="file" class="form-control-file" id="image"  name="image"> 
        </div>
        <div class="form-group">
            <label for="title">Titulo</label>
            <input type="text" class="form-control" id="title"  name="title" placeholder="Titulo do livro"> 
        </div>
        <div class="form-group">
            <label for="autor">Autor</label>
            {{-- <input type="text" class="form-control" id="autor" name="autor" placeholder="Autor do Livro">  --}}
            <select type="text" class="form-control" id="autor"  name="autor" placeholder="Titulo do livro">teste
              <option value=''></option>
              @foreach ($autores as $autor )
                  <option value="{{$autor->name}}">{{$autor->name}}</option>
              @endforeach  
            </select> 
        </div>
        <div class="form-group">
            <label for="publication_date">Data de Publicacao</label>
            <input type="date" class="form-control" id="publication_date"  name="publication_date"> 
        </div>
        <div class="form-group">
          <label for="livro">Livro</label>
          <input type="file" class="form-control-file" id="livro"  name="livro"> 
        </div>
        <div class="form-group">
            <label for="title">Descricao</label>
            <textarea name="description" id="description" class="form-control"></textarea>
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