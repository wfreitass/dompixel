@extends('template.template')
@section('content')
    <h1>Catálogo de Produtos</h1>
    <a href="{{ route('createProducts') }}" class="btn btn-primary">Adicionar Produto</a>

    @foreach ($produtos as $produto)
        @if ($loop->iteration % 3 === 1)
            <div class="row">
        @endif

        <div class="col-md-4 col-sm-12 mt-1">
            <div class="card " style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">{{ $produto->name }}</h5>
                    <h6 class="card-subtitle mb-2 text-body-secondary">Quantidade em estoque : {{ $produto->quantity }}</h6>
                    <p class="card-text">{{ $produto->description }}</p>
                    <p class="card-text">{{ $produto->price }}</p>
                    <div class="d-flex">
                        <a href="{{ route('editProducts', ['product' => $produto]) }}"
                            class="btn btn-warning me-1">Editar</a>

                        <form method="POST" action="{{ route('destroyProducts', $produto->id) }}"
                            onsubmit="return confirm('Tem certeza que deseja deletar este item?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Excluir</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        @if ($loop->iteration % 3 === 0 || $loop->last)
            </div>
        @endif
    @endforeach

    {{-- <table class="table table-primary table-hover table-bordered table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">Last</th>
                <th scope="col">Handle</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
            </tr>
            <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
            </tr>

        </tbody>
    </table> --}}
@endsection
