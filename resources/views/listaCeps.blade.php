@extends('baseBST')

@section('titulo', 'Home')

@section('content')
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <h3 class="mt-3 mb-5">Lista de endereços</h3>
    <a href="{{ route('cadastro') }}" class="btn btn-outline-success mt-3 mb-5">Novo endereço</a>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">CEP</th>
                <th scope="col">LOGRADOURO</th>
                <th scope="col">NUMERO</th>
                <th scope="col">BAIRRO</th>
                <th scope="col">CIDADE</th>
                <th scope="col">ESTADO</th>
                <th scope="col">Created at</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($enderecos as $endereco)
                <tr>
                    <td>{{ $endereco->cep }}</td>
                    <td>{{ $endereco->logradouro }}</td>
                    <td>{{ $endereco->numero }}</td>
                    <td>{{ $endereco->bairro }}</td>
                    <td>{{ $endereco->cidade }}</td>
                    <td>{{ $endereco->estado }}</td>
                    <td>{{ (new DateTime($endereco->created_at))->format('d/m/Y H:i') }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
