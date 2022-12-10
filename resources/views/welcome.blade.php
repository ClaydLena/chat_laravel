@extends('layouts.main')

@section('title', 'Inicio')

@section('content')
<div class="welcome-container">
   <div class="welcome-filter-container">
    <h4>BibliotecA DigitAL</h4>
    <form action="" method="POST" enctype="multipart/form-data">
        @csrf 
        <p>Filtrar por</p>
        <div class="form-group filter-item">
            <label for="autor">Autor</label>
            <input type="text" class="form-control" id="autor"  name="autor" placeholder="Procurar"> 
        </div>
        <div class="form-group filter-item">
            <label for="ano">Ano de Publicação</label>
            <input type="text" class="form-control" id="ano"  name="ano" placeholder="Procurar"> 
        </div>
        
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
    </form>
   </div>
   <div class="welcome-books-container">
        <div class="welcome-books-container-header">
            <div class="all-books">Todos</div>
            <div>Pesquisados Recentemente</div>
            <div class="form-group">
                <input type="text" class="form-control" id="ano"  name="ano" placeholder="Procurar por titulos, autores"> 
            </div>
            <div class="avatar">
                <img src='/imgs/leitor.png'/>
            </div>
        </div>
        <div>
            Exemplo
        </div>
   </div>
</div>
@endsection