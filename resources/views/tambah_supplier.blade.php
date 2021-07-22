@extends ('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <h3>Tambah Supplier</h3>
        </div>
        <div class="card-body">
            <a href="{{route('supplier.index')}}">Kembali</a>
            <form action="{{route('supplier.store')}}" method="POST">
                @csrf
                <ul class="list-group">
                    Nama Supplier <input type="text" name="name" required>
                    Email <input type="text" name="email" required>
                    No Telepon <input type="text" name="phone_number" required>
                    Alamat <input type="text" name="address" required>
                </ul>
                <input type="submit" value="Simpan" class= "btn btn-success">
            </form>
        </div>
    </div>
</div>
@endsection
