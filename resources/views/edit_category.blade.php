@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <h1>Edit Jenis Hewan Qurban</h1>
        </div>
        <div class="card-body">
            <form action="{{route('category.update', $category->id) }}" method="POST">
                @csrf
                @method('PUT')
                <ul class="list-group">
                    ID Category <input type="text" name="id" required value="{{$category->id}}">
                    Jenis Sapi atau Kambing <input type="text" name="name" required value="{{$category->name}}" >
                </ul>
                <hr>
                <a href="{{route('category.index')}}" class="btn btn-primary">Kembali</a>
                <input type="submit" value="Simpan" class="btn btn-success">
            </form>
        </div>
    </div>
</div>
@endsection
