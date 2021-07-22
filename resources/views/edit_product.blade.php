@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <h1>Edit Product</h1>
        </div>
        <div class="card-body">
            <form action="{{route('product.update', $product->id) }}" method="POST">
                @csrf
                @method('PUT')
                <ul class="list-group">
                    Product ID <input type="text" name="id" required value="{{$product->id}}">
                    Nama Hewan <input type="text" name="name" required value="{{$product->name}}">
                    Category <select name="id_category" required value="{{$product->id_category}}">
                        <option value="1">Sapi Lokal</option>
                      </select>
                    Deskripsi <input type="text" name="description" required value="{{$product->description}}">
                    Foto <input type="file" class="form-control" name="name" required value="{{$product->image}}">
                    Harga <input type="text" name="price" required value="{{$product->price}}">
                    Berat <input type="text" name="weight" required value="{{$product->weight}}">
                </ul>
                <hr>
                <a href="{{route('product.index')}}" class="btn btn-primary">Kembali</a>
                <input type="submit" value="Simpan" class="btn btn-success">
            </form>
        </div>
    </div>
</div>
@endsection
