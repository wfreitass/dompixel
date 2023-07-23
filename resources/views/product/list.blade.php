@extends('template.template')
@section('content')
    <h1>Catálogo de Produtos</h1>
    <a href="{{ route('createProducts') }}" class="btn btn-primary">Adicionar Produto</a>
    @foreach ($produtos as $produto)
        @if ($loop->iteration % 3 === 1)
            <div class="row">
        @endif
        <div class="col-md-4 col-sm-6 col-xs-3 mt-2 ">
            <div class="card " style="width: 16rem;">
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
                            <button type="button" class="btn btn-danger btn-delete">Excluir</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        @if ($loop->iteration % 3 === 0 || $loop->last)
            </div>
        @endif
    @endforeach
@endsection
@section('script')
    <script>
        let btnDelete = document.getElementsByClassName("btn-delete");
        Object.keys(btnDelete).forEach((i) => {
            btnDelete[i].addEventListener('click', (event) => {
                Swal.fire({
                    title: 'Cuidado !!!',
                    text: "Deseja excluir esses dados",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Excluir',
                    cancelButtonText: 'Cancelar'
                }).then((result) => {
                    if (result.isConfirmed) {
                        Swal.fire(
                            'Excluido',
                            'Dados excluidos com sucesso',
                            'success'
                        )
                        setTimeout(() => {
                            event.target.parentNode.submit()
                        }, 2000);
                    }
                })
            })
        })
    </script>
@endsection
