@extends('layouts.app')

@section('content')
<div class="container" style="min-height: 500px">
    <div class="card my-3">
        <div class="card-body">
            <h3>Jenis Sapi atau Kambing Qurban</h3>
            <a href="{{route('category.create')}}">Tambah Data Jenis Sapi atau Kambing</a>
            <table class="table table-bordered table-stripped">
                <tr>
                    <th>ID Category</th>
                    <th>Jenis Sapi/Kambing</th>
                    <th>Tindakan</th>
                </tr>
                @foreach ($category as $c)
                <tr>
                    <td>{{$c->id}}</td>
                    <td>{{$c->name}}</td>
                    <td>
                        <ul class ="nav">
                        <a class="btn btn-success mr-2" href="{{route('category.show', $c->id)}}">Show</a>
                        <a class="btn btn-primary mr-2" href="{{route('category.edit', $c->id)}}">Edit</a>
                        <form action="{{route('category.destroy', $c->id)}}" method="POST">
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
