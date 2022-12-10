@extends('layouts.painel')

@section('title', 'Inicio')

@section('admin-content')
<div class="col-md-10 offset-md-1 dashboard-title-container">
    <h1>Meus Eventos</h1>
</div>
<div class="col-md-10 offset-md-1 dashboard-books-container">
    @if(1 > 0)
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">Participantes</th>
                <th scope="col">Ações</th>
            </tr>
        </thead>
        <tbody>
            {{-- @foreach($books as $book) --}}
                <tr>
                    <td scropt="row"></td>
                    <td><a href="/books/"></a></td>
                    <td>0</td>
                    <td>
                        <a href="/books/edit/" class="btn btn-info edit-btn"><ion-icon name="create-outline"></ion-icon> Editar</a> 
                        <form action="/books/" method="POST">
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
    <p>Nenhum livro foi registado, <a href="/books/create">criar evento</a></p>
    @endif
</div>
@endsection