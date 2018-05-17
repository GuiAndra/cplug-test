@extends('layouts.default')

@section('content')

    <section id="animais">
        <div class="container container-page">
            <div class="row">
                <div class="col text-center">
                    <h2>Editar Animal</h2>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <a href="{{ route('animais.index') }}" class="btn btn-secondary">Voltar</a>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col">
                    <form action="{{ route('animais.update', $animal->id) }}" method="post">
                        @csrf
                        {{ method_field('PUT') }}
                        <div class="form-group">
                            <label for="nome">Nome</label>
                            <input type="text" class="form-control" id="nome" name="nome" value="{{ $animal->nome }}" placeholder="Nome">
                        </div>
                        <div class="form-group">
                            <label for="raca">Raça</label>
                            <input type="text" class="form-control" id="raca" name="raca" value="{{ $animal->raca }}" placeholder="Raça">
                        </div>
                        <div class="form-group">
                            <label for="peso">Peso</label>
                            <input type="text" class="form-control" id="peso" name="peso" value="{{ $animal->peso }}" placeholder="Peso">
                        </div>
                        <div class="form-group">
                            <label for="dono">Dono</label>
                            <select class="form-control" name="dono_id" id="dono">
                                @foreach($clientes as $cliente)
                                    @if($cliente->id == $animal->dono_id)
                                        <option value="{{ $cliente->id }}" selected>{{ $cliente->nome }}</option>
                                    @else
                                        <option value="{{ $cliente->id }}">{{ $cliente->nome }}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Editar</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

@endsection