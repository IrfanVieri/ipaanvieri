@extends('layouts.dashboard')
@section('content')  
    <div class="container-fluid">
        {{-- tabel kategori --}}
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Kategori Produk</h4>
                        <div class="card-tools">
                            <a href="{{route('kategori.create')}}" class="btn btn-sm btn-primary">Baru</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="#">
                            <div class="row">
                                <div class="col">
                                    <input type="text" name="keyword" id="keyword" class="form-control"
                                       placeholder="ketik keyword di sini">
                                </div>
                                <div class="col-auto">
                                    <button class="btn btn-primary btn-sm">
                                        cari    
                                    </button>
                                </div>
                            </div>

                        </form>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th width=50px>No</th>
                                        <th>Gambar</th>
                                        <th>Kode</th>
                                        <th>Nama</th>
                                        <th>Jumlah Produk</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>
                                            <img src="{{asset('assets/image/image1.jpeg')}}" alt="width=50px">
                                            <div class="row mt-2">
                                                <div class="col">
                                                    <input type="file" name="gambar"  id="gambar">
                                                </div>
                                                <div class="col-auto">
                                                    <button class="btn btn-sm btn-primary">
                                                        Upload
                                                    </button>
                                                </div>

                                            </div>
                                        </td>
                                        <td>Kate_1</td>
                                        <td>Baju Anak</td>
                                        <td>12 Produk</td>
                                        <td>
                                            <a href="{{route('kategori.edit', 2)}}"
                                            class="btn btn btn-sm btn-primary mb-2 mr-2">
                                            Edit
                                        
                                        </a>
                                        <button class="btn btn-sm btn-danger mb-2">
                                            Hapus   
                                        </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>
                                            <img src="{{asset('assets/image/image1.jpeg')}}" alt="width=50px">
                                            <div class="row mt-2">
                                                <div class="col">
                                                    <input type="file" name="gambar"  id="gambar">
                                                </div>
                                                <div class="col-auto">
                                                    <button class="btn btn-sm btn-primary">
                                                        Upload
                                                    </button>
                                                </div>

                                            </div>
                                        </td>
                                        <td>Kate_1</td>
                                        <td>Baju Anak</td>
                                        <td>12 Produk</td>
                                        <td>
                                            <a href="{{route('kategori.edit', 2)}}"
                                            class="btn btn btn-sm btn-primary mb-2 mr-2">
                                            Edit
                                        
                                        </a>
                                        <button class="btn btn-sm btn-danger mb-2">
                                            Hapus   
                                        </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>
                                            <img src="{{asset('assets/image/image1.jpeg')}}" alt="width=50px">
                                            <div class="row mt-2">
                                                <div class="col">
                                                    <input type="file" name="gambar"  id="gambar">
                                                </div>
                                                <div class="col-auto">
                                                    <button class="btn btn-sm btn-primary">
                                                        Upload
                                                    </button>
                                                </div>

                                            </div>
                                        </td>
                                        <td>Kate_1</td>
                                        <td>Baju Anak</td>
                                        <td>12 Produk</td>
                                        <td>
                                            <a href="{{route('kategori.edit', 2)}}"
                                            class="btn btn btn-sm btn-primary mb-2 mr-2">
                                            Edit
                                        
                                        </a>
                                        <button class="btn btn-sm btn-danger mb-2">
                                            Hapus   
                                        </button>
                                        </td>
                                    </tr>
                                </tbody>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection