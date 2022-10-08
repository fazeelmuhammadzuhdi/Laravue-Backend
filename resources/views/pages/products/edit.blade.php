@extends('layouts.default')

@section('content')
    <div class="card">
        <div class="card-header">
            <strong><i class="fa fa-edit" style="font-size:20px;"> Edit Barang</i></strong> <br>
            <small class="text-danger">{{ $item->name }}</small>

        </div>

        <div class="card-body card-block">
            <form action="{{ route('products.update', $item->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="name" class="form-control-label">Nama Barang</label>
                    <input type="text" name="name" id="name"
                        class="form-control @error('name') is-invalid @enderror"
                        value="{{ old('name') ? old('name') : $item->name }}">

                    @error('name')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="type" class="form-control-label">Tipe Barang</label>
                    <input type="text" name="type" id="type"
                        class="form-control @error('type') is-invalid @enderror"
                        value="{{ old('type') ? old('type') : $item->type }}">

                    @error('type')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="description" class="form-control-label">Deskripsi Barang</label>
                    <textarea name="description" id="description" class="ckeditor form-control @error('type') is-invalid @enderror">{{ old('description') ? old('description') : $item->description }}</textarea>

                    @error('description')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="price" class="form-control-label">Harga Barang</label>
                    <input type="number" name="price" id="price"
                        class="form-control @error('price') is-invalid @enderror"
                        value="{{ old('price') ? old('price') : $item->price }}">

                    @error('price')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="quantity" class="form-control-label">Stok Barang</label>
                    <input type="number" name="quantity" id="quantity"
                        class="form-control @error('quantity') is-invalid @enderror"
                        value="{{ old('quantity') ? old('quantity') : $item->quantity }}">

                    @error('quantity')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <button class="btn btn-warning btn-block" type="submit">
                        <i class="fa fa-edit"> Edit Barang</i>
                    </button>
                </div>

            </form>
        </div>
    </div>
@endsection
