@extends('layouts.default')

@section('content')

    <section id="clientes">
        <div class="container container-page">
            <div class="row">
                <div class="col text-center">
                    <h2>Clientes</h2>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <a href="{{ route('clientes.create') }}" class="btn btn-primary">Add Cliente</a>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Nome</th>
                                <th>Telefone</th>
                                <th>Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($clientes as $cliente)
                            <tr>
                                <td>{{ $cliente->nome }}</td>
                                <td>{{ $cliente->telefone }}</td>
                                <td>
                                    <a href="{{ route('clientes.show', $cliente->id) }}" class="btn btn-outline-success">Exibir</a>
                                    <a href="{{ route('clientes.edit', $cliente->id) }}" class="btn btn-outline-warning">Editar</a>
                                    <a href="{{ route('clientes.show', $cliente->id) }}" class="btn btn-outline-danger delete" key="{{ $cliente->id }}">Excluir</a>
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
        if(confirm('Deseja deletar o cliente?')){
          axios.delete('clientes/' + el.attr('key')).then(function (response) {
            if(response.data.delete === 'success'){
              el.parent().parent().remove()
            }
          });
        }
      });
    </script>
@endsection