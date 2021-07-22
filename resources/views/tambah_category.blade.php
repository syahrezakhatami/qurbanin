@extends ('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <h3>Tambah Jenis Category</h3>
        </div>
        <div class="card-body">
            <a href="{{route('category.index')}}">Kembali</a>
            <form action="{{route('category.store')}}" method="POST">
                @csrf
                <ul class="list-group">
                    ID Category <input type="text" name="id" required>
                    Jenis Sapi dan Kambing <input type="name" name="name" required>
                </ul>
                <input type="submit" value="Simpan" class= "btn btn-success">
            </form>
        </div>
    </div>
</div>
@endsection
