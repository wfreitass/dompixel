@extends('template.template')
@section('content')
    <div class="card">
        <div class="card-header">
            Edição do Produto: <b>{{ $produto->name }}</b>
        </div>
        <div class="card-body">
            <form action="{{ route('updateProducts', ['product' => $produto]) }}" method="post">
                @csrf
                @method('put')
                <div class="mb-3">
                    <label for="name" class="form-label">Nome</label>
                    <input type="text" class="form-control
                    @error('name') is-invalid @enderror "
                        name="name" id="name" aria-describedby="helpId" maxlength="255"
                        value="{{ $produto->name }}">
                    @error('name')
                        <small id="name" class="form-text text-danger"> {{ $message }}</small>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="price" class="form-label">Preço</label>
                    <input type="text" class="form-control  @error('price') is-invalid @enderror" name="price"
                        id="price" aria-describedby="helpId" maxlength="255"
                        oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"
                        value="{{ $produto->price }}">
                    <small id="price" class="form-text "> Utilize o (.) para casas decimais</small>
                    @error('price')
                        <small id="price" class="form-text text-danger"> {{ $message }}</small>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="quantity" class="form-label">Quantidade</label>
                    <input type="text" class="form-control  @error('quantity') is-invalid @enderror" name="quantity"
                        id="quantity" aria-describedby="helpId" maxlength="255" value="{{ $produto->quantity }}">
                    @error('quantity')
                        <small id="quantity" class="form-text text-danger"> {{ $message }}</small>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">Descrição</label>
                    <textarea class="form-control @error('description') is-invalid @enderror" name="description" id="description"
                        rows="3">{{ $produto->description }}</textarea>
                    @error('description')
                        <small id="description" class="form-text text-danger"> {{ $message }}</small>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary">Editar</button>
            </form>
        </div>
    </div>
@endsection
