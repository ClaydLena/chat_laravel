@extends('layouts.painel')

@section('title', 'Inicio')

@section('admin-content')
   <div class="dashboard-container">
        <div class="dashboard-container-header">
            <div><h4>Painel de Controlo</h4></div>
            @csrf 
            <form action="/" method="GET">
                <div class="form-group">
                    <input type="text" class="form-control" id="busca"  name="busca" placeholder="Procurar por titulos, autores"> 
                </div>
            </form>
                <div class="avatar">
                <img src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}"/>
            </div>
        </div>
        <div class="dashboard-statistics">
            <div class="dashboard-statistics-item">
                <h1>20.124</h1>
                <p>Livros Disponíveis</p>
            </div>
            <div class="dashboard-statistics-item">
                <h1>20.124</h1>
                <p>Livros Lidos</p>
            </div>
            <div class="dashboard-statistics-item">
                <h1>20.124</h1>
                <p>Autores</p>
            </div>
        </div>
        <div class="dashboard-books-container">
            <h5>Mais Populares</h5>
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