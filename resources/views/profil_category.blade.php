@extends('layouts.app')

@section('content')
<div class="container" d-flex justify-content-center>
    <div class="card my-50">
        <div class="card-header">
            <h3>Data Kambing atau Sapi</h3>
        </div>
        <div class="card-body">
            <a href="{{route('category.index')}}">Kembali</a>
            <div class="row ml-2">
                <h4 class="col-4">ID Category</h4>
                <h4>: {{$category->id}} </h4>
            </div>
            <div class="row ml-2">
                <h4 class="col-4">Jenis Sapi atau Kambing</h4>
                <h4>: {{$category->name}} </h4>
            </div>
        </div>
    </div>
</div>
@endsection
