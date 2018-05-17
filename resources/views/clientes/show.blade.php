@extends('layouts.default')

@section('content')

    <section id="clientes">
        <div class="container container-page">
            <div class="row">
                <div class="col text-center">
                    <h2>Cliente</h2>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <h4 class="text-center">Informações</h4>
                    <hr>
                    <p>Nome: {{ $cliente->nome }}</p>
                    <p>Telefone: {{ $cliente->telefone }}</p>
                </div>
                <div class="col">
                    <h4 class="text-center">Animais</h4>
                    <hr>
                    @foreach($cliente->animais as $animal)
                        <p>Nome: {{ $animal->nome }}</p>
                        <p>Raça: {{ $animal->raca }}</p>
                        <p>Peso: {{ $animal->peso }}</p>
                        <hr>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

@endsection