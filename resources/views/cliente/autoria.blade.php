@extends('layouts.main')

@section('title', 'Minha Autoria')

@section('content')
<div class="welcome-books-container">
    <div id="books-container" class="col-md-12 ">
      <div id="cards-container" class="row">
        @foreach ($books as $book)
        <div class="card col-md-3">
           <img src="/imgs/books/{{ $book->image }}" alt={{$book->title}}/>
           <div class="card-body">                
              <h5 class="card-title">{{$book->title}}</h5> 
              <h5 class="card-titl">{{$book->autor}}</h5>
           </div>
        </div>
        @endforeach
      </div>
    </div>
</div>
@endsection