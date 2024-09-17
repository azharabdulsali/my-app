@extends('layouts.app')

@section('content')
    <div id="carouselExampleDark" class="carousel carousel-dark slide">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true"
                aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="10000">
                <img src="{{ asset('assets/img/foto.jpg') }}" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>First slide label</h5>
                    <p>Some representative placeholder content for the first slide.</p>
                </div>
            </div>
            <div class="carousel-item" data-bs-interval="2000">
                <img src="{{ asset('img/jokowi.jpg') }}" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Second slide label</h5>
                    <p>Some representative placeholder content for the second slide.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('img/jokowi.jpg') }}" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Third slide label</h5>
                    <p>Some representative placeholder content for the third slide.</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <h1 class="text-center mb-5 mt-5 bg-light">Produk Terbaru</h1>

    <div class="container text-center">
        <div class="row align-items-start">
            <div class="col">
                <img class="img-thumbnail" src="{{ asset('assets/img/produk.jpg') }}" alt="">
                <h5>Nama Produk 1</h5>
                <p class="price">
                    <span class="price-before">Rp 150.000</span>
                    <span class="price-after">Rp 100.000</span>
                </p>
                <button class="btn btn-primary">Tambah ke Keranjang</button>
            </div>
            <div class="col">
                <img class="img-thumbnail" src="{{ asset('assets/img/produk.jpg') }}" alt="">
                <h5>Nama Produk 2</h5>
                <p class="price">
                    <span class="price-before">Rp 250.000</span>
                    <span class="price-after">Rp 200.000</span>
                </p>
                <button class="btn btn-primary">Tambah ke Keranjang</button>
            </div>
            <div class="col">
                <img class="img-thumbnail" src="{{ asset('assets/img/produk.jpg') }}" alt="">
                <h5>Nama Produk 3</h5>
                <p class="price">
                    <span class="price-before">Rp 350.000</span>
                    <span class="price-after">Rp 300.000</span>
                </p>
                <button class="btn btn-primary">Tambah ke Keranjang</button>
            </div>
        </div>
    </div>

    <h1 class="text-center mb-5 mt-5">Artikel Terbaru</h1>

    <div class="container">
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="card" style="border-radius: 10px; overflow: hidden; box-shadow: 0 4px 8px">
                    <img src="{{ asset('img/jokowi.jpg') }}" class="card-img-top" alt="Artikel 1">
                    <div class="card-body">
                        <h5 class="card-title">Judul Artikel 1</h5>
                        <p class="card-text">Deskripsi singkat tentang artikel 1. Ini adalah teks placeholder yang
                            menjelaskan artikel ini dengan singkat.</p>
                        <a href="/article" class="btn btn-primary">Baca Selengkapnya</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card" style="border-radius: 10px; overflow: hidden; box-shadow: 0 4px 8px">
                    <img src="{{ asset('img/jokowi.jpg') }}" class="card-img-top" alt="Artikel 2">
                    <div class="card-body">
                        <h5 class="card-title">Judul Artikel 2</h5>
                        <p class="card-text">Deskripsi singkat tentang artikel 2. Ini adalah teks placeholder yang
                            menjelaskan artikel ini dengan singkat.</p>
                        <a href="#" class="btn btn-primary">Baca Selengkapnya</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card" style="border-radius: 10px; overflow: hidden; box-shadow: 0 4px 8px">
                    <img src="{{ asset('img/jokowi.jpg') }}" class="card-img-top" alt="Artikel 3">
                    <div class="card-body">
                        <h5 class="card-title">Judul Artikel 3</h5>
                        <p class="card-text">Deskripsi singkat tentang artikel 3. Ini adalah teks placeholder yang
                            menjelaskan artikel ini dengan singkat.</p>
                        <a href="#" class="btn btn-primary">Baca Selengkapnya</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
