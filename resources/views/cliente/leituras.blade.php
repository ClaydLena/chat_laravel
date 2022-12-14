@extends('layouts.main')

@section('title', 'Lista de Leituras')

@section('content')
<div class="lista-container">
    <div class="col-md-10 offset-md-1 lista-title-container">
        <h3>Meus Livros</h3>
    </div>
    <div class="col-md-10 offset-md-1 lista-books-container">
        @if(count($books)>0)
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Titulo</th>
                    <th scope="col">Autor</th>
                    <th scope="col">Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach($books as $book)
                    <tr>
                        <td scropt="row">{{ $loop->index + 1 }}</td>
                        <td><a href="/descricao/{{ $book->id }}">{{ $book->title }}</a></td>
                        <td>{{$book->autor}}</td>
                        <td>
                            <a href="/ler/{{ $book->id }}" class="btn btn-info edit-btn"><ion-icon name="create-outline"></ion-icon>Continuar</a> 
                        </td>
                    </tr>
                @endforeach    
            </tbody>
        </table>
        @else
        <p>Nenhum livro na sua lista</p>
        @endif
    </div>
</div>
@endsection