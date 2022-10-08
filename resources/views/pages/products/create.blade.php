@extends('layouts.default')

@section('content')
    <div class="card">
        <div class="card-header">
            <strong><i class="fa fa-plus-square" style="font-size:28px;"> Tambah Barang</i></strong>
        </div>

        <div class="card-body card-block">
            <form action="{{ route('products.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="name" class="form-control-label">Nama Barang</label>
                    <input type="text" name="name" id="name"
                        class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}">

                    @error('name')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="type" class="form-control-label">Tipe Barang</label>
                    <input type="text" name="type" id="type"
                        class="form-control @error('type') is-invalid @enderror" value="{{ old('type') }}">

                    @error('type')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="description" class="form-control-label">Deskripsi Barang</label>
                    <textarea name="description" id="description" class="ckeditor form-control @error('type') is-invalid @enderror">{{ old('description') }}</textarea>

                    @error('description')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="price" class="form-control-label">Harga Barang</label>
                    <input type="number" name="price" id="price"
                        class="form-control @error('price') is-invalid @enderror" value="{{ old('price') }}">

                    @error('price')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="quantity" class="form-control-label">Stok Barang</label>
                    <input type="number" name="quantity" id="quantity"
                        class="form-control @error('quantity') is-invalid @enderror" value="{{ old('quantity') }}">

                    @error('quantity')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <button class="btn btn-primary btn-block" type="submit">
                        <i class="fa fa-plus-circle"> Tambah Barang</i>
                    </button>
                </div>

            </form>
        </div>
    </div>
@endsection
