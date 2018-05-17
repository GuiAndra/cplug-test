@extends('layouts.default')

@section('content')

    <section id="clientes">
        <div class="container container-page">
            <div class="row">
                <div class="col text-center">
                    <h2>Editar Cliente</h2>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <a href="{{ route('clientes.index') }}" class="btn btn-secondary">Voltar</a>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col">
                    <form action="{{ route('clientes.update', $cliente->id) }}" method="post">
                        @csrf
                        {{ method_field('PUT') }}
                        <div class="form-group">
                            <label for="nome">Nome</label>
                            <input type="text" class="form-control" id="nome" name="nome" value="{{ $cliente->nome }}" placeholder="Nome">
                        </div>
                        <div class="form-group">
                            <label for="telefone">Telefone</label>
                            <input type="text" class="form-control" id="telefone" name="telefone" value="{{ $cliente->telefone }}" placeholder="Telefone">
                        </div>
                        <button type="submit" class="btn btn-primary">Editar</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

@endsection