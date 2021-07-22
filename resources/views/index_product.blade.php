@extends('layouts.app')

@section('content')
<div class="container" style="min-height: 500px">
    <div class="card my-3">
        <div class="card-body">
            <h3>Data Product Hewan Qurban</h3>
            <a href="{{route('product.create')}}">Tambah Data Hewan Qurban</a>
            <table class="table table-bordered table-stripped">
                <tr>
                    <th>ID Product</th>
                    <th>Nama Hewan</th>
                    <th>Category</th>
                    <th>Deskripsi</th>
                    <th>Gambar</th>
                    <th>Harga</th>
                    <th>Berat</th>
                    <th>Tindakan</th>
                </tr >
                @foreach ($product as $p)
                <tr>
                    <td>{{$p->id}}</td>
                    <td>{{$p->name}}</td>
                    <td>{{$p->id_category }}</td>
                    <td>{{$p->description}}</td>
                    <td>
                        <img src="{{ Storage::url('public/').$p->image }}" class="rounded" style="width: 150px">
                    </td>
                    <td>{{$p->price}}</td>
                    <td>{{$p->weight}}</td>
                    <td>
                        <ul class ="nav">
                        <a class="btn btn-success mr-2" href="{{route('product.show', $p->id)}}">Show</a>
                        <a class="btn btn-primary mr-2" href="{{route('product.edit', $p->id)}}">Edit</a>
                        <form action="{{route('product.destroy', $p->id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-warning">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>
@endsection
