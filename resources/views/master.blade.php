@include('header')
    @yield('homepage')
        <section>
            <!-- SLICK SLIDER -->
            <div class="hotnews">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-2"></div>
                        <div class="col-xl-8">
                            <marquee direction="left" scrollamount="5" behavior="alternate">
                                CHÀO MỪNG CÁC BÉ TỚI TRANG WEB ĐỒ CHƠI - HÃY HỎI Ý KIẾN BỐ MẸ TRƯỚC KHI MUA NHA
                            </marquee>
                        </div>
                        <div class="col-xl-2"></div>
                    </div>
                </div>
            </div>


            <!-- PHẦN BANNER -->
            <div class="banner">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-12">
                            <img src="{{'BevisSneaker'}}/images/banner.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- recommend -->
        <div class="recommend">
            <h2 style="text-align: center; font-family: 'URW Geometric'; padding: 50px;">DISCOVER</h2>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-2 col-md-2"></div>
                    <div class="col-xl-8 col-md-8">
                        <!-- slideshow -->
                        <div class="container-fluid" style="padding: 0;">
                            <div class="row">
                                <div class="col-sm-3 col-xl-3 col-md-3">
                                    <a href="#">
                                        <div class="card" style="width: 100%; ">
                                            <img src="{{'BevisSneaker'}}/images/product/ad-01.jpg" class="card-img-top" >
                                        </div>
                                    </a>
                                    <a href="#">
                                        <div class="card" style="width: 100%; ">
                                            <img src="{{'BevisSneaker'}}/images/product/ad-09.jpg" class="card-img-top" >
                                        </div>
                                    </a>
                                    <a href="#">
                                        <div class="card" style="width: 100%; ">
                                            <img src="{{'BevisSneaker'}}/images/product/ad-05.jpg" class="card-img-top" >
                                        </div>
                                    </a>
                                </div>
                                <div class="col-sm-3 col-xl-3 col-md-3">
                                    <a href="#">
                                        <div class="card" style="width: 100%;">
                                            <img src="{{'BevisSneaker'}}/images/product/ad-02.jpg" class="card-img-top" >
                                        </div>
                                    </a>
                                    <a href="#">
                                        <div class="card" style="width: 100%; ">
                                            <img src="{{'BevisSneaker'}}/images/product/ad-10.jpg" class="card-img-top" >
                                        </div>
                                    </a>
                                    <a href="#">
                                        <div class="card" style="width: 100%; ">
                                            <img src="{{'BevisSneaker'}}/images/product/ad-06.jpg" class="card-img-top" >
                                        </div>
                                    </a>
                                </div>
                                <div class="col-sm-3 col-xl-3 col-md-3">
                                    <a href="#">
                                        <div class="card" style="width: 100%; ">
                                            <img src="{{'BevisSneaker'}}/images/product/ad-03.jpg" class="card-img-top" >
                                        </div>
                                    </a>
                                    <a href="#">
                                        <div class="card" style="width: 100%; ">
                                            <img src="{{'BevisSneaker'}}/images/product/ad-07.jpg" class="card-img-top" >
                                        </div>
                                    </a>
                                    <a href="#">
                                        <div class="card" style="width: 100%; ">
                                            <img src="{{'BevisSneaker'}}/images/product/ad-11.jpg" class="card-img-top" >
                                        </div>
                                    </a>
                                </div>
                                <div class="col-sm-3 col-xl-3 col-md-3">
                                    <a href="#">
                                        <div class="card" style="width: 100%;">
                                            <img src="{{'BevisSneaker'}}/images/product/ad-08.jpg" class="card-img-top" >
                                        </div>
                                    </a>
                                    <a href="#">
                                        <div class="card" style="width: 100%; ">
                                            <img src="{{'BevisSneaker'}}/images/product/ad-12.jpg" class="card-img-top" >
                                        </div>
                                    </a>
                                    <a href="#">
                                        <div class="card" style="width: 100%; ">
                                            <img src="{{'BevisSneaker'}}/images/product/ad-04.jpg" class="card-img-top" >
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2"></div>
                </div>
            </div>
        </div>
@include('footer')
