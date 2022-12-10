@extends('layouts.painel')

@section('title', 'Inicio')

@section('admin-content')
   <div class="dashboard-container">
        <div class="dashboard-container-header">
            <div><h4>Painel de Controlo</h4></div>
            <div class="form-group">
                <input type="text" class="form-control" id="ano"  name="ano" placeholder="Procurar por titulos, autores"> 
            </div>
            <div class="avatar">
                <img src='/imgs/admin.png'/>
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
        <div class="dashboard-pops">
            <h5>Mais Populares</h5>
        </div>
   </div>
@endsection