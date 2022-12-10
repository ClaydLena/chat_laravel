@extends('layouts.painel')

@section('title', 'Inicio')

@section('admin-content')
   <div class="dashboard-fav-container">
    <div class="dashboard-container-header">
        <div><h4>Favoritos</h4></div>
        <div class="form-group">
            <input type="text" class="form-control" id="ano"  name="ano" placeholder="Procurar por titulos, autores"> 
        </div>
        <div class="avatar">
            <img src='/imgs/admin.png'/>
        </div>
    </div>
   </div>
@endsection