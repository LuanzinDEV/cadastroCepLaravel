@extends('baseBST')


@section('titulo', 'Cadastro')

@section('content')
    <form class="mt-5 cadastroForm" action="{{ route('salvar') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="cep" class="form-label">CEP</label>
            <input type="text" class="form-control" id="cep" name="cep" value="{{ $cep }}">

            @if($errors->has('cep'))
                @foreach ($errors->get('cep') as $erro)
                    <div class="text-danger">{{ $erro }}</div>
                @endforeach
            @endif

        </div>

        <div class="mb-3">
            <label for="logradouro" class="form-label">Logradouro</label>
            <input type="text" class="form-control" id="logradouro" name="logradouro" value="{{ $logradouro }}">

            @if($errors->has('logradouro'))
                @foreach ($errors->get('logradouro') as $erro)
                    <div class="text-danger">{{ $erro }}</div>
                @endforeach
            @endif

        </div>

        <div class="mb-3">
            <label for="numero" class="form-label">Numero</label>
            <input type="text" class="form-control" id="numero" name="numero">
            
            @if($errors->has('numero'))
                @foreach ($errors->get('numero') as $erro)
                    <div class="text-danger">{{ $erro }}</div>
                @endforeach
            @endif

        </div>

        <div class="mb-3">
            <label for="bairro" class="form-label">Bairro</label>
            <input type="text" class="form-control" id="bairro" name="bairro" value="{{ $bairro }}">

            @if($errors->has('bairo'))
                @foreach ($errors->get('bairo') as $erro)
                    <div class="text-danger">{{ $erro }}</div>
                @endforeach
            @endif

        </div>

        <div class="mb-3">
            <label for="cidade" class="form-label">Cidade</label>
            <input type="text" class="form-control" id="cidade" name="cidade" value="{{ $cidade }}">

            @if($errors->has('cidade'))
                @foreach ($errors->get('cidade') as $erro)
                    <div class="text-danger">{{ $erro }}</div>
                @endforeach
            @endif

        </div>

        <div class="mb-3">
            <label for="estado" class="form-label">Estado</label>
            <input type="text" class="form-control" id="estado" name="estado" value="{{ $estado }}">

            @if($errors->has('estado'))
                @foreach ($errors->get('estado') as $erro)
                    <div class="text-danger">{{ $erro }}</div>
                @endforeach
            @endif

        </div>

        <button type="submit" class="btn btn-primary">SALVAR</button>
    </form>
@endsection
