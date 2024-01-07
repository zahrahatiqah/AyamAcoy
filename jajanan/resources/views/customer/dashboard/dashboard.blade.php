@extends('customer.layout.master');

@section('content')
    <div class="container-fluid">
        {{-- <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <div class="row">
                        <div class="col align-self-center">
                            <h4 class="page-title pb-md-0">Dashboard</h4>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item active">Dashboard</li>
                            </ol>
                        </div>
                        <!--end col-->
                        <div class="col-auto align-self-center">
                            <a href="#" class="btn btn-sm btn-outline-primary" id="Dash_Date">
                                <span class="day-name" id="Day_Name">Today:</span>&nbsp;
                                <span class="" id="Select_date">
                                    @php
                                        echo date('d M');
                                    @endphp
                                </span>
                                <i data-feather="calendar" class="align-self-center icon-xs ms-1"></i>
                            </a>
                        </div>
                        <!--end col-->
                    </div>
                    <!--end row-->
                </div>
                <!--end page-title-box-->
            </div>
            <!--end col-->
        </div> --}}

        <div class="row mt-4">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-lg-5 offset-lg-1 align-self-center">
                        <div class="p-5">
                            <h1 class="my-4 font-weight-bold">Selamat Datang Di <span class="text-primary">Ayam Acoy</span>.
                            </h1>
                            <p class="font-14 text-muted">Pusat Jajanan Ringan Dengan Harga Terjangkau
                                dan Kualitas Produk baik Dari Bahan dan Proses Pembuatan Terjamin.
                            </p>
                            <button  type="button" class="btn btn-de-primary">Get Started</button>
                        </div>
                    </div>
                    <!--end col-->
                    <div class="col-lg-5 offset-lg-1 text-center">
                        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active">
                                </li>
                                <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"></li>
                                <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="/dapuranita/img-1.jpg" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="/dapuranita/img-2.jpg" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="/dapuranita/img-3.jpg" class="d-block w-100" alt="...">
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button"
                                data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button"
                                data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </a>
                        </div>
                    </div>
                    <!--end col-->
                </div>
            </div>
        </div>

        <div class="row mt-3">
            <div class="col-lg-12">
                <div class="section-title text-center">
                    <h2 class="title-border">Galery Produk</h2>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 col-lg-auto filters-group-wrap">
                <div class="filters-group mb-3">
                    <div class="btn-group filter-options">
                        <button class="btn btn-primary" data-group="food">Makanan</button>
                        <button class="btn btn-primary" data-group="drink">Minuman</button>
                    </div>
                </div>
            </div>
        </div>

        <div id="grid" class="row g-0">
            <div class="col-md-4 col-lg-3 picture-item" data-groups='["food"]'>
                <a href="/ayamacoy/IMG-20231225-WA0005.jpg" class="lightbox">
                    <img src="/ayamacoy/IMG-20231225-WA0005.jpg" alt="" class="img-fluid" />
                </a>
            </div>
            <div class="col-md-4 col-lg-3 picture-item picture-item--overlay" data-groups='["food"]'>
                <a href="/ayamacoy/IMG-20231225-WA0006.jpg" class="lightbox">
                    <img src="/ayamacoy/IMG-20231225-WA0006.jpg" alt="" class="img-fluid" />
                </a>
            </div>
            <div class="col-md-4 col-lg-3 picture-item" data-groups='["food"]'>
                <a href="/ayamacoy/IMG-20231225-WA0007.jpg" class="lightbox">
                    <img src="/ayamacoy/IMG-20231225-WA0007.jpg" alt="" class="img-fluid" />
                </a>
            </div>
            <div class="col-md-4 col-lg-3 picture-item picture-item--h2" data-groups='["food"]'>
                <a href="/ayamacoy/IMG-20231225-WA0008.jpg" class="lightbox">
                    <img src="/ayamacoy/IMG-20231225-WA0008.jpg" alt="" class="img-fluid" />
                </a>
            </div>
            <div class="col-md-4 col-lg-3 picture-item" data-groups='["food"]'>
                <a href="/ayamacoy/IMG-20231225-WA0009.jpg" class="lightbox">
                    <img src="/ayamacoy/IMG-20231225-WA0009.jpg" alt="" class="img-fluid" />
                </a>
            </div>
            <div class="col-md-4 col-lg-3 picture-item picture-item--overlay" data-groups='["food"]'>
                <a href="/ayamacoy/IMG-20231225-WA0010.jpg" class="lightbox">
                    <img src="/ayamacoy/IMG-20231225-WA0010.jpg" alt="" class="img-fluid" />
                </a>
            </div>
            <div class="col-md-4 col-lg-3 picture-item picture-item--h2" data-groups='["food"]'>
                <a href="/ayamacoy/IMG-20231225-WA0011.jpg" class="lightbox">
                    <img src="/ayamacoy/IMG-20231225-WA0011.jpg" alt="" class="img-fluid" />
                </a>
            </div>
            <div class="col-md-4 col-lg-3 picture-item picture-item--h2" data-groups='["food"]'>
                <a href="/ayamacoy/IMG-20231225-WA0012.jpg" class="lightbox">
                    <img src="/ayamacoy/IMG-20231225-WA0012.jpg" alt="" class="img-fluid" />
                </a>
            </div>
            <div class="col-md-4 col-lg-3 picture-item picture-item--h2" data-groups='["food"]'>
                <a href="/ayamacoy/IMG-20231225-WA0013.jpg" class="lightbox">
                    <img src="/ayamacoy/IMG-20231225-WA0013.jpg" alt="" class="img-fluid" />
                </a>
            </div>
            <div class="col-md-4 col-lg-3 picture-item picture-item--h2" data-groups='["food"]'>
                <a href="/ayamacoy/IMG-20231225-WA0014.jpg" class="lightbox">
                    <img src="/ayamacoy/IMG-20231225-WA0014.jpg" alt="" class="img-fluid" />
                </a>
            </div>
            <div class="col-md-4 col-lg-3 picture-item picture-item--h2" data-groups='["food"]'>
                <a href="/ayamacoy/IMG-20231225-WA0015.jpg" class="lightbox">
                    <img src="/ayamacoy/IMG-20231225-WA0015.jpg" alt="" class="img-fluid" />
                </a>
            </div>
            <div class="col-md-4 col-lg-3 picture-item picture-item--h2" data-groups='["food"]'>
                <a href="/ayamacoy/IMG-20231225-WA0016.jpg" class="lightbox">
                    <img src="/ayamacoy/IMG-20231225-WA0016.jpg" alt="" class="img-fluid" />
                </a>
            </div>
            <div class="col-md-4 col-lg-3 picture-item picture-item--h2" data-groups='["drink"]'>
                <a href="/ayamacoy/IMG-20231225-WA0017.jpg" class="lightbox">
                    <img src="/ayamacoy/IMG-20231225-WA0017.jpg" alt="" class="img-fluid" />
                </a>
            </div>
            <div class="col-md-4 col-lg-3 picture-item picture-item--h2" data-groups='["drink"]'>
                <a href="/ayamacoy/IMG-20231225-WA0018.jpg" class="lightbox">
                    <img src="/ayamacoy/IMG-20231225-WA0018.jpg" alt="" class="img-fluid" />
                </a>
            </div>
            <div class="col-md-4 col-lg-3 picture-item picture-item--h2" data-groups='["drink"]'>
                <a href="/ayamacoy/IMG-20231225-WA0019.jpg" class="lightbox">
                    <img src="/ayamacoy/IMG-20231225-WA0019.jpg" alt="" class="img-fluid" />
                </a>
            </div>
            <div class="col-md-4 col-lg-3 picture-item picture-item--h2" data-groups='["drink"]'>
                <a href="/ayamacoy/IMG-20231225-WA0020.jpg" class="lightbox">
                    <img src="/ayamacoy/IMG-20231225-WA0020.jpg" alt="" class="img-fluid" />
                </a>
            </div>
            <div class="col-md-4 col-lg-3 picture-item picture-item--h2" data-groups='["drink"]'>
                <a href="/ayamacoy/IMG-20231225-WA0021.jpg" class="lightbox">
                    <img src="/ayamacoy/IMG-20231225-WA0021.jpg" alt="" class="img-fluid" />
                </a>
            </div>
            <div class="col-md-4 col-lg-3 picture-item picture-item--h2" data-groups='["drink"]'>
                <a href="/ayamacoy/IMG-20231225-WA0022.jpg" class="lightbox">
                    <img src="/ayamacoy/IMG-20231225-WA0022.jpg" alt="" class="img-fluid" />
                </a>
            </div>
            <div class="col-md-4 col-lg-3 picture-item picture-item--h2" data-groups='["drink"]'>
                <a href="/ayamacoy/IMG-20231225-WA0023.jpg" class="lightbox">
                    <img src="/ayamacoy/IMG-20231225-WA0023.jpg" alt="" class="img-fluid" />
                </a>
            </div>
            <div class="col-md-4 col-lg-3 picture-item picture-item--h2" data-groups='["drink"]'>
                <a href="/ayamacoy/IMG-20231225-WA0024.jpg" class="lightbox">
                    <img src="/ayamacoy/IMG-20231225-WA0024.jpg" alt="" class="img-fluid" />
                </a>
            </div>
            <div class="col-md-4 col-lg-3 picture-item picture-item--h2" data-groups='["drink"]'>
                <a href="/ayamacoy/IMG-20231225-WA0025.jpg" class="lightbox">
                    <img src="/ayamacoy/IMG-20231225-WA0025.jpg" alt="" class="img-fluid" />
                </a>
            </div>
            <div class="col-md-4 col-lg-3 picture-item picture-item--h2" data-groups='["drink"]'>
                <a href="/ayamacoy/IMG-20231225-WA0026.jpg" class="lightbox">
                    <img src="/ayamacoy/IMG-20231225-WA0026.jpg" alt="" class="img-fluid" />
                </a>
            </div>
        </div>

        {{-- <div class="row">
            @php
                function rupiah($angka)
                {
                    $hasil_rupiah = 'Rp ' . number_format($angka, 2, ',', '.');
                    return $hasil_rupiah;
                }
            @endphp
            @foreach ($produk as $data)
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="ribbon1 rib1-danger">
                                <span class="text-white text-center rib1-danger">New</span>
                            </div>
                            <!--end ribbon-->
                            <img src="/produk/{{ $data->foto_produk }}" alt="" class="d-block mx-auto my-4"
                                height="150">
                            <div class="d-flex justify-content-between align-items-center my-4">
                                <div>
                                    <p class="text-muted mb-2">{{ Str::title($data->nama_kategori) }}</p>
                                    <a href="#" class="header-title">{{ Str::title($data->nama_produk) }}</a>
                                </div>
                                <div>
                                    <h4 class="text-dark mt-0 mb-2">{{ rupiah($data->harga_produk) }}</h4>
                                </div>
                            </div>
                            <div class="d-grid">
                                <button class="btn btn-de-warning">Masukan Keranjang</button>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div> --}}
    </div>
@endsection

@section('css')
    <link href="/metrica/dist/assets/libs/@midzer/tobii/tobii.min.css" rel="stylesheet" type="text/css" />
@endsection

@section('js')
    <script src="/metrica/dist/assets/libs/shufflejs/shuffle.min.js"></script>
    <script src="/metrica/dist/assets/libs/@midzer/tobii/tobii.min.js"></script>
    <script src="/metrica/dist/assets/JS/pages/gallery.init.js"></script>
@endsection
