@extends('layouts.default')

@section('content')

    <section id="animais">
        <div class="container container-page">
            <div class="row">
                <div class="col text-center">
                    <h2>Animais</h2>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <a href="{{ route('animais.create') }}" class="btn btn-primary">Add Animal</a>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Nome</th>
                                <th>Raça</th>
                                <th>Peso</th>
                                <th>Dono</th>
                                <th>Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($animais as $animal)
                            <tr>
                                <td>{{ $animal->nome }}</td>
                                <td>{{ $animal->raca }}</td>
                                <td>{{ $animal->peso }}</td>
                                <td>{{ $animal->cliente->nome }}</td>
                                <td>
                                    <a href="{{ route('animais.edit', $animal->id) }}" class="btn btn-outline-warning">Editar</a>
                                    <a href="{{ route('animais.show', $animal->id) }}" class="btn btn-outline-danger delete" key="{{ $animal->id }}">Excluir</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>

@endsection

@section('scripts')
    <script>
      $('.delete').click(function (event){
        event.preventDefault()
        let el = $(this)
        if(confirm('Deseja deletar o animal?')){
          axios.delete('animais/' + el.attr('key')).then(function (response) {
            if(response.data.delete === 'success'){
              el.parent().parent().remove()
            }
          });
        }
      });
    </script>
@endsection