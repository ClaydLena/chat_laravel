@extends('layouts.main')

@section('title', 'Inicio')

@section('content')
<div class="welcome-container">
   <div class="welcome-filter-container">
    <h4>BibliotecA DigitAL</h4>
        @csrf 
        <p>Filtrar por</p>
        <form action="/" method="GET">
          <div class="form-group filter-item">
              <label for="autor">Autor</label>
              <input type="text" class="form-control" id="bscautor"  name="bscautor" placeholder="Procurar"> 
          </div>
        </form>
        <form action="/" method="GET">
          <div class="form-group filter-item">
              <label for="ano">Ano de Publicação</label>
              <input type="text" class="form-control" id="bscano"  name="bscano" placeholder="Procurar"> 
          </div>
        </form>
        
        <div class="form-group filter-item">
            <label for="genero">Género</label>
            <div class="form-group check-input">	
              <input type="checkbox" name="items[]" value="Romance"> Romance
            </div>
            <div class="form-group check-input">	
              <input type="checkbox" name="items[]" value="Drama"> Drama
            </div>
            <div class="form-group check-input">	
              <input type="checkbox" name="items[]" value="Novela"> Novela
            </div>
            <div class="form-group check-input">	
              <input type="checkbox" name="items[]" value="Conto"> Conto
            </div>
            <div class="form-group check-input">	
              <input type="checkbox" name="items[]" value="Cronica"> Cronica
            </div>
            <div class="form-group check-input">	
                <input type="checkbox" name="items[]" value="Poesia"> Poesia
              </div>
          </div>
    
   </div>
   <div class="welcome-books-container">
        <div class="welcome-books-container-header">
            <div class="all-books">Todos</div>
            <div>Pesquisados Recentemente</div>
            <form action="/" method="GET">
              <div class="form-group">
                  <input type="text" class="form-control" id="bscautorano"  name="bscautorano" placeholder="Procurar por titulos, autores"> 
              </div>
            </form>
            @if(Auth::user()!=null)
              <div class="avatar">
                  <img src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}"/>
              </div>
            @endif
        </div>
        <div id="books-container" class="col-md-12 ">
          <div id="cards-container" class="row">
            @foreach ($books as $book)
            <div class="card col-md-3">
               <img src="/imgs/books/{{ $book->image }}" alt={{$book->title}}/>
               <div class="card-body">                
                  <h5 class="card-title">{{$book->title}}</h5> 
                  <h5 class="card-titl">{{$book->autor}}</h5>
                  <a href="/descricao/{{ $book->id }}" class="btn btn-primary">Saber mais</a>
               </div>
            </div>
            @endforeach
          </div>
        </div>
   </div>
</div>
@endsection