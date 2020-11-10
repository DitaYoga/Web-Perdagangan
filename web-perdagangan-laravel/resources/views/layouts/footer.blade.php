<!-- Footer Start-->
<div class="footer-area footer-padding">
    <div class="container">
        <div class="row d-flex justify-content-between">
            <div class="col-xl-3 col-lg-3 col-md-5 col-sm-6">
                <div class="single-footer-caption mb-50">
                    <div class="single-footer-caption mb-30">
                        <!-- logo -->
                        <div class="footer-logo">
                            <a href="{{ url('/')}}"><img src="assets/img/logo/logo.jpg" height="25px" width="135px" alt=""></a>
                        </div>
                        <div class="footer-tittle">
                            <div class="footer-pera">
                                <p>Hmmm..... <br> Pokoknya kami adalah kelompok web perdagangan</p>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-2 col-lg-3 col-md-3 col-sm-5">
                <div class="single-footer-caption mb-50">
                    <div class="footer-tittle">
                        <h4>Quick Links</h4>
                        <ul>
                            <li><a href="{{ url('/') }}">Home</a></li>
                            <li><a href="{{ url('/shop') }}"> Shop</a></li>
                            <li><a href="{{ url('/about') }}"> About</a></li>
                            <li><a href="{{ url('/contact') }}">  Contact Us</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-7">
                <div class="single-footer-caption mb-50">
                    <div class="footer-tittle">
                        <h4>Jam Terbaru</h4>
                        <ul>
                            <?php 
                                for ($k=0; $k <= 3; $k++) { 
                            ?>
                            <li><a href="{{ url('product_details/'.$jam[$k]->id) }}">{{$jam[$k]->nama}}</a></li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-5 col-sm-7">
                <div class="single-footer-caption mb-50">
                    <div class="footer-tittle">
                        <h4>Tim</h4>
                        <ul>
                            <li><a href="https://instagram.com/erx.tuadi" target="_blank">I Putu Adi Perdana Utama</a></li>
                            <li><a href="https://instagram.com/dittayoga" target="_blank">I Made Dita Yoga Radia</a></li>
                            <li><a href="https://instagram.com/erx.surya" target="_blank">I Made Adi Wira Surya Kencana</a></li>
                            <li><a href="https://instagram.com/" target="_blank">I Putu Ditya Purnama Putra</a></li>
                            <li><a href="https://instagram.com/winka_bob" target="_blank">I Gede Arista Winkayana</a></li>
                            <li><a href="https://instagram.com/erx.aldi" target="_blank">Aldi Suryanto</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer bottom -->
        <div class="row align-items-center">
            <div class="col-xl-7 col-lg-8 col-md-7">
                <div class="footer-copy-right">
                    <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a> and edited by kelompok perdagangan
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>                  
                </div>
            </div>
            <div class="col-xl-5 col-lg-4 col-md-5">
                <div class="footer-copy-right f-right">
                    <!-- social -->
                    <div class="footer-social">
                        <a href="https://instagram.com/erx.tuadi" target="_blank"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://wa.me/+6289697448955" target="_blank"><i class="fab fa-whatsapp"></i></a>
                        <a href="#"><i class="fas fa-globe"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Footer End-->