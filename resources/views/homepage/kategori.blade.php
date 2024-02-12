@extends('layouts.template')
@section('content')
<div class="container">
    <div class="row mt-4">
    <div class="col col-md-12 col-sm-12 mb-4">
        <h2 class="text-center">Kategori Produk</h2>
    </div>

    {{-- kategori pertama --}}
    <div class="col-md-4">
      <div class="card-mb-4 shadow-sm">
        <a href="#">
          <img src="{{ asset ('assets/image/image4.jpg') }}" alt="" class="card-img-top">
        </a>
        <div class="card-body">
          <a href="#" class="text-decoration-none">
            <p class="card-text">Kategori Pertama</p>
          </a>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card mb-4 shadow-sm">
        <a href="#">
          <img src="{{ asset ('assets/image/image5.jpg') }}" alt="" class="card-img-top">
        </a>
        <div class="card-body">
          <a href="#" class="text-decoration-none">
            <p class="card-text">Kategori Kedua</p>
          </a>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card-mb-4 shadow-sm">
        <a href="#">
          <img src="{{ asset ('assets/image/image6.jpg') }}" alt="" class="card-img-top">
        </a>
        <div class="card-body">
          <a href="#" class="text-decoration-none">
            <p class="card-text">Kategori Ketiga</p>
          </a>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection