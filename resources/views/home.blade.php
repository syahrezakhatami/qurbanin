@extends('layouts.app2')

@section('content')
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100" src="{{asset('storage/lokal.jpg')}}" alt="First slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="{{asset('storage/limusin.jpg')}}" alt="Second slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="{{asset('storage/australia.jpg')}}" alt="Third slide">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>
<br>
<div class="row judul">
    <div class="col-md-12 text-center">
        <h1>Hewan Qurban Yang Tersedia</h1>
        <hr>
</div>
<div class="container">
    <div class="row">
        @foreach ($product as $p)
        <div class="col-lg-4 d-flex align-items-stretch col-md-offset-2">
            <div class="card" style="width: 18rem;">
              <img src="{{Storage::url('public/').$p->image}}" class="card-img-top" alt="" style="height: 250px; object-fit-contain; width:100%">
              <div class="card-body">
                <h5 class="card-title">{{$p->name}}</h5>
                <p class="card-text">{{$p->description}}</p>
                <p class="card-text">Berat : {{$p->weight}} Kg </p>
                <p class="card-text"> Harga : Rp {{$p->price}} ,- </p>
                <a href="#" class="btn btn-primary">Order</a>
                <a href="#" class="btn btn-warning">Detail</a>
            </div>
        </div>
    </div>
    @endforeach
</div>

@endsection
