<!-- Header Start -->
<div class="header-area">
    <div class="main-header header-sticky">
        <div class="container-fluid">
            <div class="menu-wrapper">
                <!-- Logo -->
                <div class="logo">
                    <a href="{{ url('/')}}"><img src="assets/img/logo/logo.jpg" height="25px" width="135px" alt=""></a>
                </div>
                <!-- Main-menu -->
                <div class="main-menu d-none d-lg-block">
                    <nav>                                                
                        <ul id="navigation">  
                            <li><a href="{{url('/')}}">Home</a></li>
                            <li><a href="{{url('/shop')}}">shop</a></li>
                            <li><a href="{{url('/about')}}">about</a></li>
                            <li><a href="{{url('/contact')}}">Contact</a></li>
                            <?php 
                                if (session()->get('login') != null) {
                                    
                            ?>
                                <li><a href="{{url('/logout')}}">Logout</a></li>
                            <?php } ?>
                        </ul>
                    </nav>
                </div>
                <!-- Header Right -->
                <div class="header-right">
                    <ul>
                        <li>
                            <div class="nav-search search-switch">
                                <span class="flaticon-search"></span>
                            </div>
                        </li>
                        <li> <a href="{{ url('login') }}"><span class="flaticon-user"></span></a></li>
                        <li><a href="{{ url('cart') }}"><span class="flaticon-shopping-cart"></span></a> </li>
                    </ul>
                </div>
            </div>
            <!-- Mobile Menu -->
            <div class="col-12">
                <div class="mobile_menu d-block d-lg-none"></div>
            </div>
        </div>
    </div>
</div>
<!-- Header End -->