@extends('layouts.main')

@section('title', 'Livro')

@section('content')
<div class="col-md-10 offset-md-1">
    <div class="row">
      <div id="info-container" class="col-md-8">
        <h1><strong>{{$user->name}}</strong></h1>
        <p class="">{{$user->email}}</p>

            <a href="/me/edit/{{ $user->id }}" 
                class="btn btn-primary btn-lg" 
            >
                Editar
            </a>
      </div>
    </div>
  </div>
    
@endsection