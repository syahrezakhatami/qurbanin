@extends('layouts.app')

@section('content')
<div class="container" style="min-height: 500px">
    <div class="card my-3">
        <div class="card-body">
            <h3>Data Supplier</h3>
            <a href="{{route('supplier.create')}}">Tambah Data Supplier</a>
            <table class="table table-bordered table-stripped">
                <tr>
                    <th>Nama Supplier</th>
                    <th>Email</th>
                    <th>No. Telepon</th>
                    <th>Alamat</th>
                    <th>Tindakan</th>
                </tr>
                @foreach ($supplier as $s)
                <tr>
                    <td>{{$s->name}}</td>
                    <td>{{$s->email}}</td>
                    <td>{{$s->phone_number}}</td>
                    <td>{{$s->address}}</td>
                    <td>
                        <ul class ="nav">
                        <a class="btn btn-success mr-2" href="{{route('supplier.show', $s->id)}}">Show</a>
                        <a class="btn btn-primary mr-2" href="{{route('supplier.edit', $s->id)}}">Edit</a>
                        <form action="{{route('supplier.destroy', $s->id)}}" method="POST">
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
