@extends('layouts.app')

@section('title', 'Tu tienda táctica')

@section('content')
<div class="relative bg-black h-96 flex justify-center items-center">
    <img src="{{ asset('img/fondo.jpg') }}" alt="Fondo Airsoft" class="absolute inset-0 w-full h-full object-cover opacity-40">
    
    <div class="relative z-10 text-center px-4">
        <h1 class="text-5xl font-extrabold text-white mb-4 uppercase tracking-widest text-shadow-md">Domina el Terreno</h1>
        <p class="text-xl text-gray-300 mb-8 max-w-2xl mx-auto">Réplicas, equipamiento táctico y consumibles para jugadores que no aceptan la derrota.</p>
    </div>
</div>

<div class="container mx-auto px-6 py-16">
    <h2 class="text-3xl font-bold text-center mb-12 uppercase text-white">Catálogo Completo</h2>
    
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">
        
        @foreach($products as $product)
            @include('partials.product', ['product' => $product])
        @endforeach
        
    </div>
</div>
@endsection