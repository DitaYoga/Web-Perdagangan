@extends('layouts.master')

@section('content')
    <header>
        @include('layouts.header')
    </header>

    <main>
        <!--? slider Area Start -->
        <div class="slider-area ">
            <div class="slider-active">
                <!-- Single Slider -->
                <div class="single-slider slider-height d-flex align-items-center slide-bg">
                    <div class="container">
                        <div class="row justify-content-between align-items-center">
                            <div class="col-xl-8 col-lg-8 col-md-8 col-sm-8">
                                <div class="hero__caption">
                                    <h1 data-animation="fadeInLeft" data-delay=".4s" data-duration="2000ms">Pilih Jam Tangannya Bos</h1>
                                    <p data-animation="fadeInLeft" data-delay=".7s" data-duration="2000ms">Jaman Sekarang nggak punya jam tangan? Ayo beli jam tangan di website kami, harganya murah, kualitasnya mendunia. Dijamin puas</p>
                                    <!-- Hero-btn -->
                                    <div class="hero__btn" data-animation="fadeInLeft" data-delay=".8s" data-duration="2000ms">
                                        <a href="shop" class="btn hero-btn">Belanja Sekarang</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-4 d-none d-sm-block">
                                <div class="hero__img" data-animation="bounceIn" data-delay=".4s">
                                    <img src="assets/img/hero/watch.png" alt="" class=" heartbeat">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Single Slider -->
                <div class="single-slider slider-height d-flex align-items-center slide-bg">
                    <div class="container">
                        <div class="row justify-content-between align-items-center">
                            <div class="col-xl-8 col-lg-8 col-md-8 col-sm-8">
                                <div class="hero__caption">
                                    <h1 data-animation="fadeInLeft" data-delay=".4s" data-duration="2000ms">Pilih Jam Tangannya Bos</h1>
                                    <p data-animation="fadeInLeft" data-delay=".7s" data-duration="2000ms">Jaman Sekarang nggak punya jam tangan? Ayo beli jam tangan di website kami, harganya murah, kualitasnya mendunia. Dijamin puas</p>
                                    <!-- Hero-btn -->
                                    <div class="hero__btn" data-animation="fadeInLeft" data-delay=".8s" data-duration="2000ms">
                                        <a href="shop" class="btn hero-btn">Belanja Sekarang</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-4 d-none d-sm-block">
                                <div class="hero__img" data-animation="bounceIn" data-delay=".4s">
                                    <img src="assets/img/hero/watch.png" alt="" class=" heartbeat">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- slider Area End-->
        <!-- ? New Product Start -->
        <section class="new-product-area section-padding30">
            <div class="container">
                <!-- Section tittle -->
                <div class="row">
                    <div class="col-xl-12">
                        <div class="section-tittle mb-70">
                            <h2>Jam Tangan Terbaru</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <?php 
                        for ($i=0; $i < 3; $i++) { 
                    ?>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                        <div class="single-new-pro mb-30 text-center">
                            <div class="product-img">
                                <img src="{{ asset('/image/'.$jam[$i]->gambar) }}" height="360px" alt="">
                            </div>
                            <div class="product-caption">
                                <h3><a href="{{ url('product_details/'.$jam[$i]->id) }}">{{$jam[$i]->nama}}</a></h3>
                                <span>@currency( $jam[$i]->harga )</span>
                            </div>
                        </div>
                    </div>
                <?php } ?>
                </div>
            </div>
            </section>
            <!--  New Product End -->
            <!--? Gallery Area Start -->
            <div class="gallery-area">
                <div class="container-fluid p-0 fix">
                    <div class="row">
                        <div class="col-xl-6 col-lg-4 col-md-6 col-sm-6">
                            <div class="single-gallery mb-30">
                                <div class="gallery-img big-img" style="background-image: url(assets/img/gallery/gallery1.png);"></div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                            <div class="single-gallery mb-30">
                                <div class="gallery-img big-img" style="background-image: url(assets/img/gallery/gallery2.png);"></div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-12">
                            <div class="row">
                                <div class="col-xl-12 col-lg-12 col-md-6 col-sm-6">
                                    <div class="single-gallery mb-30">
                                        <div class="gallery-img small-img" style="background-image: url(assets/img/gallery/gallery3.png);"></div>
                                    </div>
                                </div>
                                <div class="col-xl-12 col-lg-12  col-md-6 col-sm-6">
                                    <div class="single-gallery mb-30">
                                        <div class="gallery-img small-img" style="background-image: url(assets/img/gallery/gallery4.png);"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!-- Gallery Area End -->
            <!--? Popular Items Start -->
            <div class="popular-items section-padding30">
                <div class="container">
                    <!-- Section tittle -->
                    <div class="row justify-content-center">
                        <div class="col-xl-7 col-lg-8 col-md-10">
                            <div class="section-tittle mb-70 text-center">
                                <h2>Item Populer</h2>
                                <p>Beriku adalah daftar jam yang paling diminati di website kami</p>
                            </div>
                        </div>
                    </div>
                </div>
                    <div class="row">
                        @foreach($jampopular as $jampop)
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                            <div class="single-popular-items mb-50 text-center">
                                <div class="popular-img">
                                    <img src="{{ asset('image/'.$jampop->gambar) }}" height="380px" alt="">
                                    <div class="img-cap">
                                        <span><a href="{{ url('/product_details/'.$jampop->id) }}">Add to cart</a></span>
                                    </div>
                                    <div class="favorit-items">
                                        <span class="flaticon-heart"></span>
                                    </div>
                                </div>
                                <div class="popular-caption">
                                    <h3><a href="product_details.html">{{$jampop->nama}}</a></h3>
                                    <span>@currency($jampop->harga)</span>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <!-- Button -->
                    <div class="row justify-content-center">
                        <div class="room-btn pt-70">
                            <a href="shop" class="btn view-btn1">Lihat Lebih Banyak</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Popular Items End -->
            <!--? Watch Choice  Start-->
            <div class="watch-area section-padding30">
                <div class="container">
                    <div class="row align-items-center justify-content-between padding-130">
                        <div class="col-lg-5 col-md-6">
                            <div class="watch-details mb-40">
                                <h2>Rekomendasi Jam</h2>
                                <p>{{ $jamhighlight[0]->deskripsi }}</p>
                                <a href="{{ url('/product_details/'.$jamhighlight[0]->id) }}" class="btn">Lihat Jam</a>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-10">
                            <div class="choice-watch-img mb-40">
                                <img src="{{asset('image/'.$jamhighlight[0]->gambar)}}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="row align-items-center justify-content-between">
                        <div class="col-lg-6 col-md-6 col-sm-10">
                            <div class="choice-watch-img mb-40">
                                <img src="{{asset('image/'.$jamhighlight[1]->gambar)}}" alt="">
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-6">
                            <div class="watch-details mb-40">
                                <h2>Rekomendasi Jam</h2>
                                <p>{{ $jamhighlight[1]->deskripsi }}</p>
                                <a href="{{ url('/product_details/'.$jamhighlight[1]->id) }}" class="btn">Lihat Jam</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Watch Choice  End-->
            <!--? Shop Method Start-->
            <div class="shop-method-area">
                <div class="container">
                    <div class="method-wrapper">
                        <div class="row d-flex justify-content-between">
                            <div class="col-xl-4 col-lg-4 col-md-6">
                                <div class="single-method mb-40">
                                    <i class="ti-package"></i>
                                    <h6>GRATIS ongkir</h6>
                                    <p>Pengiriman Produk kami tidak memerlukan biaya tambahan</p>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6">
                                <div class="single-method mb-40">
                                    <i class="ti-unlock"></i>
                                    <h6>Sistem Pembayaran yang aman</h6>
                                    <p>Kami menjamin Pembayaran yang anda lakukan di website kami</p>
                                </div>
                            </div> 
                            <div class="col-xl-4 col-lg-4 col-md-6">
                                <div class="single-method mb-40">
                                    <i class="ti-reload"></i>
                                    <h6>Melayani Penukaran Barang</h6>
                                    <p>jika Anda merasa barang yang anda dapatkan tidak sama dengan yang dipesan kami siap melayani penukaran barang</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Shop Method End-->
        </main>
        <footer>
            @include('layouts.footer')
        </footer>

@endsection