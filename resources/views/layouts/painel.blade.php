@extends('layouts.main')

@section('title', 'Inicio')

@section('content')
<div class="painel-container">
   <div class="painel-menu-container">
      <h4>BibliotecA DigitAL</h4>
      <div class="" id="">
            <ul class="menu">
               <li class="menu-item">
                  <a href="/dashboard" class="menu-link"> <div>Inicio</div> </a>
               </li>
               <li class="menu-item">
                  <a href="/dashboard/favoritos" class="menu-link"> <div>Favoritos</div> </a>
               </li>
               <li class="menu-item">
                  <a href="/dashboard/criar" class="menu-link"> <div>Adicionar Livro</div> </a>
               </li>
               <li class="menu-item">
                  <a href="/dashboard/lista" class="menu-link"> <div> Livros</div> </a>
               </li>  
            </ul>
      </div>
   </div> 
    @yield('admin-content') 
</div>
@endsection