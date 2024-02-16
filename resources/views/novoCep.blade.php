@extends('baseBST')

@section('titulo', 'Cadastro')

@section('content')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <h3>Cadastre o novo CEP</h3>
    <form class="mt-5 cadastroForm" action="{{ route('buscar') }}" method="GET">
        @csrf

        <div class="mb-3">
            <label for="cep" class="form-label">CEP</label>
            <input type="text" class="form-control" id="cep" name="cep">
            <div id="cep" class="form-text">Digite seu CEP sem pontos.</div>
        </div>

        <button type="submit" class="btn btn-primary">Buscar</button>
    </form>
@endsection
