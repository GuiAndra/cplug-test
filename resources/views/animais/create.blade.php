@extends('layouts.default')

@section('content')

    <section id="animais">
        <div class="container container-page">
            <div class="row">
                <div class="col text-center">
                    <h2>Adicionar Animal</h2>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <a href="{{ route('animais.index') }}" class="btn btn-secondary">Voltar</a>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col">
                    <form action="{{ route('animais.store') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="nome">Nome</label>
                            <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome">
                        </div>
                        <div class="form-group">
                            <label for="raca">Raça</label>
                            <input type="text" class="form-control" id="raca" name="raca" placeholder="Raça">
                        </div>
                        <div class="form-group">
                            <label for="peso">Peso</label>
                            <input type="text" class="form-control" id="peso" name="peso" placeholder="Peso">
                        </div>
                        <div class="form-group">
                            <label for="dono">Dono</label>
                            <select class="form-control" name="dono_id" id="dono">
                                <option value="" selected disabled>-- Selecione --</option>
                                @foreach($clientes as $cliente)
                                    <option value="{{ $cliente->id }}">{{ $cliente->nome }}</option>
                                @endforeach
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Adicionar</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

@endsection