@extends('layouts.template')

@push('css')
  <style>
    #carousel img{
      width: 100%;
      height: 84vh;
      object-fit: cover;
      object-position: center;
    }
    </style>    


@section('content')
<div class="container">
      {{-- carousel --}}
      <div class="row">
        <div class="col">
          <div id="carousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="{{ asset('assets/image/image4.jpg')}}" alt="...">
              </div>
              <div class="carousel-item">
                <img src="{{ asset('assets/image/image5.jpg') }}" alt="...">
              </div>
              <div class="carousel-item">
                <img src="{{ asset('assets/image/image6.jpg') }}" alt="...">
              </div>
    
            </div>
    
            <a href="#carousel" class="carousel-control-prev" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a href="#carousel" class="carousel-control-next" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
      </div>
      {{-- end carousel --}}

      {{-- kategori produk --}}
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

      {{-- end kategori produk --}}
      
      {{-- produk promo --}}
      <div class="row mt-4">
        <div class="col col-md-12 col-sm-12 mb-4">
          <h2 class="text-center">Promo</h2>
      </div>

         {{-- Produk Pertama --}}
      <div class="col-md-4">
        <div class="card mb-4 shadow-sm">
          <a href="#">
            <img src="{{asset ('assets/image/image4.jpg')}}" alt="" class="card-img-top">
          </a>
          <div class="card-body">
            <a href="#" class="text-decoration-none">
              <p class="card-text">
                Produk Pertama
            </a>
            <div class="row mt-4">
              <div class="col">
                <button class="btn btn-dark">
                  <i class="far fa-heart"></i>
                </button>
              </div>
              <div class="col-auto">
                <p>
                  <del>Rp.15.000</del>
                  <br>
                  Rp.10.000
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card mb-4 shadow-sm">
          <a href="#">
            <img src="{{asset ('assets/image/image5.jpg')}}" alt="" class="card-img-top">
          </a>
          <div class="card-body">
            <a href="#" class="text-decoration-none">
              <p class="card-text">
                Produk Pertama
            </a>
            <div class="row mt-4">
              <div class="col">
                <button class="btn btn-dark">
                  <i class="far fa-heart"></i>
                </button>
              </div>
              <div class="col-auto">
                <p>
                  <del>Rp.15.000</del>
                  <br>
                  Rp.10.000
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card mb-4 shadow-sm">
          <a href="#">
            <img src="{{asset ('assets/image/image6.jpg')}}" alt="" class="card-img-top">
          </a>
          <div class="card-body">
            <a href="#" class="text-decoration-none">
              <p class="card-text">
                Produk Pertama
            </a>
            <div class="row mt-4">
              <div class="col">
                <button class="btn btn-dark">
                  <i class="far fa-heart"></i>
                </button>
              </div>
              <div class="col-auto">
                <p>
                  <del>Rp.15.000</del>
                  <br>
                  Rp.10.000
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>

      {{-- End Produk Pertama --}}

     
      </div>

      {{-- end produk promo --}}
      {{-- Produk Terbaru --}}
      <div class="row mt-4">
        <div class="col col-md-12 col-sm-12 mb-4">
          <h2 class="text-center">Terbaru</h2>
      </div>

         {{-- Produk Pertama --}}
      <div class="col-md-4">
        <div class="card mb-4 shadow-sm">
          <a href="#">
            <img src="{{asset ('assets/image/image4.jpg')}}" alt="" class="card-img-top">
          </a>
          <div class="card-body">
            <a href="#" class="text-decoration-none">
              <p class="card-text">
                Produk Pertama
            </a>
            <div class="row mt-4">
              <div class="col">
                <button class="btn btn-light">
                  <i class="far fa-heart"></i>
                </button>
              </div>
              <div class="col-auto">
                <p>
                  Rp.10.000
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card mb-4 shadow-sm">
          <a href="#">
            <img src="{{asset ('assets/image/image5.jpg')}}" alt="" class="card-img-top">
          </a>
          <div class="card-body">
            <a href="#" class="text-decoration-none">
              <p class="card-text">
                Produk Pertama
            </a>
            <div class="row mt-4">
              <div class="col">
                <button class="btn btn-light">
                  <i class="far fa-heart"></i>
                </button>
              </div>
              <div class="col-auto">
                <p>
                 
                  Rp.10.000
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card mb-4 shadow-sm">
          <a href="#">
            <img src="{{asset ('assets/image/image6.jpg')}}" alt="" class="card-img-top">
          </a>
          <div class="card-body">
            <a href="#" class="text-decoration-none">
              <p class="card-text">
                Produk Pertama
            </a>
            <div class="row mt-4">
              <div class="col">
                <button class="btn btn-light">
                  <i class="far fa-heart"></i>
                </button>
              </div>
              <div class="col-auto">
                <p>
               
                  Rp.10.000
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>

      {{-- End Produk Pertama --}}

      {{-- End Produk Terbaru --}}
</div>
    
@endsection