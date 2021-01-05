@extends('master')
    @section('konten')
    <main>
        <!--================Single Product Area =================-->
        <div class="product_image_area">
            <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <center><h3>{{ $datajam->nama}}</h3></center>
                <div class="product_img_slide owl-carousel">
                    <div class="single_product_img">
                        <img src="{{ asset('/image/'.$datajam->gambar) }}" alt="#" class="img-fluid">
                    </div>
                </div>
                </div>
                <div class="col-lg-8">
                <div class="single_product_text text-center">
                    
                    <p>{{$datajam->deskripsi}}</p>
                    <p>@currency ( $datajam->harga )/buah</p>
                    <div class="card_area">
                        <div class="product_count_area">
                            <p>Quantity</p>
                            <div class="product_count d-inline-block">
                                <span class="product_count_item inumber-decrement"> <i class="ti-minus"></i></span>
                                <input class="product_count_item input-number" type="text" value="1" min="0" max="10">
                                <span class="product_count_item number-increment"> <i class="ti-plus"></i></span>
                            </div>
                        </div>
                    <div class="add_to_cart">
                        <a href="{{ url('cart') }}" <?php if (session('login') != 'login') {
                            ?> onclick="{{ session()->put('lastSeenProduct', $datajam->id )}}
                            <?php } ?> " class="btn_3">add to cart</a>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>
        <!--================End Single Product Area =================-->
    </main>
    @endsection