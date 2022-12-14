@extends('layouts.main')

@section('title',$book->title)

@section('content')
<div class="lista-container">
    <div class="col-md-10 offset-md-1 lista-title-container">
        <h3>{{$book->title}}</h3>
    </div>
    <a href="{{$book->livro}}">Ler</a>
</div>
@endsection