@extends('layouts.painel')

@section('title', 'Inicio')

@section('admin-content')
<div class="lista-container">
    <div class="col-md-10 offset-md-1 lista-title-container">
        <h3>Todos Livros</h3>
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
                            <a href="/dashboard/editar/{{ $book->id }}" class="btn btn-info edit-btn"><ion-icon name="create-outline"></ion-icon> Editar</a> 
                            <form action="/dashboard/{{ $book->id }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger delete-btn"><ion-icon name="trash-outline"></ion-icon> Deletar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach    
            </tbody>
        </table>
        @else
        <p>Nenhum livro foi registado, <a href="/dashboard/criar">criar evento</a></p>
        @endif
    </div>
</div>
@endsection