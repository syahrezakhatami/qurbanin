@extends('layouts.app')

@section('content')
<div class="container" style="min-height: 500px">
    <div class="card my-3">
        <div class="card-body">
            <h3>Data Users</h3>
            <a href="{{route('users.create')}}">Tambah Data</a>
            <table class="table table-bordered table-stripped">
                <tr>
                    <th>Nama User</th>
                    <th>Role</th>
                    <th>Email</th>
                </tr>
                @foreach ($users as $u)
                <tr>
                    <td>{{$u->name}}</td>
                    <td>{{$u->role}}</td>
                    <td>{{$u->email}}</td>
                    <td>
                        <ul class ="nav">
                        <a class="btn btn-success mr-2" href="{{route('users.show', $u->id)}}">Show</a>
                        <a class="btn btn-primary mr-2" href="{{route('users.edit', $u->id)}}">Edit</a>
                        <form action="{{route('users.destroy', $u->id)}}" method="POST">
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
