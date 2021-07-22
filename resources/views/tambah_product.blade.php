@extends ('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <h3>Tambah Hewan Qurban</h3>
        </div>
        <div class="card-body">
            <a href="{{route('product.index')}}">Kembali</a>
            <form action="{{route('product.store')}}" method="POST">
                @csrf
                <ul class="list-group">
                    ID Product <input type="text" name="id" required>
                    Nama Sapi atau Kambing <input type="text" name="name" required>
                    Jenis Sapi<select name="id_category">
                        <option value="1">Sapi Lokal</option>
                      </select>
                    Deskripsi <input type="text" name="description" required>
                    Foto <input type="file" class="form-control" name="image">
                    Harga <input type="text" name="price" required>
                    Berat Sapi atau Kambing <input type="text" name="weight" required>
                </ul>
                <input type="submit" value="Simpan" class= "btn btn-success">
            </form>
        </div>
    </div>
</div>
@endsection
