@extends('layouts.dashboard')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-col-lg-3 col-md-3"></div>
        <div class="col col-lg-6 col-md-6">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Form Kategori</h3>
                    <div class="card-tools">
                        <a href="{{route('kategori.index')}}" class="btn btn-danger btn-sm">Tutup</a>
                    </div>
                </div>
                <div class="card-body">
                    <form action="{{route('kategori.create')}}">
                        <div class="form-group">
                            <label for="nama_kategori">Nama Kategori</label>
                            <input type="text" name="nama_kategori" id="nama_kategori" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="nama_kategori">Slug Kategori</label>
                            <input type="text" name="slug_kategori" id="slug_kategori" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="nama_kategori">Deskripsi</label>
                            <textarea name="deskripsi" id="deskripsi" cols="30" rows="10" class="form-control"></textarea>
                    </form action>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
                    <button type="reset" class="btn btn-danger btn-sm">Reset</button>
                </div>
            </div>
        </div>
    </div>
    
@endsection