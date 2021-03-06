<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Perfume Shop Online</title>
    <link href="{{asset('public/frontend/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend/css/prettyPhoto.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend/css/price-range.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend/css/animate.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend/css/main.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend/css/responsive.css')}}" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"
    ></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>
    <header id="header"><!--header-->
        <div class="header_top"><!--header_top-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="contactinfo">
                            <ul class="nav nav-pills">
                                 <li><a href="#"><i class="fa fa-phone"></i> + 028 38 097986</a></li>
                                <li><a href="#"><i class="fa fa-envelope"></i> info@happyPerfumeshop.com</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="social-icons pull-right">
                            <ul class="nav navbar-nav">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/header_top-->
        
        <div class="header-middle"><!--header-middle-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-2">
                        <div class="logo pull-left">
                            <a href="{{URL::to('/trangchu')}}"><img src="{{('public/frontend/images/logo/3.jpg')}}" alt="" /></a>
                        </div>
                        
                    </div>
                    <div class="col-sm-10">
                        <div class="shop-menu pull-right">
                            <ul class="nav navbar-nav">
                                <li><a href="#"><i class="fa fa-user"></i> T??i kho???n</a></li>
                                <li><a href="#"><i class="fa fa-star"></i> S???n ph???m Th??m y??u th??ch</a></li>
                                <li><a href="checkout.html"><i class="fa fa-crosshairs"></i> ????ng xu???t</a></li>
                                <li><a href="cart.html"><i class="fa fa-shopping-cart"></i> Gi??? h??ng</a></li>
                                <li><a href="{{URL::to('admin/login')}}"><i class="fa fa-lock"></i> ????ng nh???p</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/header-middle-->
    
        <div class="header-bottom"><!--header-bottom-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-9">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <div class="mainmenu pull-left">
                            <ul class="nav navbar-nav collapse navbar-collapse">
                                <li><a href="{{URL::to('/trangchu')}}" class="active">Trang ch???</a></li>
                                <li class="dropdown"><a href="#">S???n ph???m n?????c hoa t????i<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="shop.html">C??c lo???i n?????c hoa</a></li>
                                        <li><a href="product-details.html">Chi ti???t n?????c hoa</a></li> 
                                        <li><a href="checkout.html">????ng xu???t</a></li> 
                                        <li><a href="cart.html">Gi??? h??ng</a></li> 
                                        <li><a href="{{URL::to('admin/login')}}">????ng nh???p</a></li> 
                                    </ul>
                                </li> 
                                <li class="dropdown"><a href="#">Gi???i thi???u<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="blog.html">Happy Flower Shop</a></li>
                                        <li><a href="blog-single.html">Th??? gi???i hoa</a></li>
                                    </ul>
                                </li> 
                                <li><a href="404.html">Gi??? h??ng</a></li>
                                <li><a href="contact-us.html">Li??n h???</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-3 input-group input-group-lg">
                        <input type="text" class="form-control" placeholder="T??m ki???m" />
                        <span class="input-group-btn">
                            <button class="btn btn-warning" type="submit"><span class="glyphicon glyphicon-search"></span></button>
                        </span>
                    </div>  
                </div>
            </div>
        </div><!--/header-bottom-->
    </header><!--/header-->
    
    <section id="slider"><!--slider-->
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div id="slider-carousel" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
                            <li data-target="#slider-carousel" data-slide-to="1"></li>
                            <li data-target="#slider-carousel" data-slide-to="2"></li>
                        </ol>
                        
                        <div class="carousel-inner">
                            <div class="item active">                               
                                <div class="col-sm-6">
                                    <h1><span>HAPPY PERFUME</span>-SHOPPER</h1>
                                    <h2>Mi???n ph?? giao h??ng tr??n ?????a b??n Th??nh ph??? H??? Ch?? Minh.</h2>
                                    <p>M???i lo??i n?????c hoa ?????u mang trong m??nh m???t ?? ngh??a, m???t v??? ?????p ri??ng. N?? c?? th??? t?????ng tr??ng cho s??? ki??u h??nh nh??ng c??ng c?? th??? t?????ng tr??ng cho t??nh y??u v?? s???c s???ng m??nh li???t.</p>
                                    <button type="button" class="btn btn-default get">Mua ngay!</button>
                                </div>
                                <div class="col-sm-6">
                                    <img src="{{('public/frontend/images/banner/slide11.jpg')}}" class="girl img-responsive" alt="" />
                                </div>
                            </div>
                            <div class="item">
                                <div class="col-sm-6">
                                    <h1><span>HAPPY PERFUME</span>-SHOPPER</h1>
                                    <h2>100% N?????c hoa t????i do ch??ng t??i nh???p kh???u t??? c??c n?????c!</h2>
                                    <p>V??? ?????p c???a h????ng th??m bi???u hi???n tr??i tim c???a b???n v?? hy v???ng c???a ng?????i kh??c.</p>
                                    <button type="button" class="btn btn-default get">Mua ngay!</button>
                                </div>
                                <div class="col-sm-6">
                                    <img src="{{('public/frontend/images/banner/slide21.jpg')}}" class="girl img-responsive" alt="" />
                                </div>
                            </div>
                            <div class="item">
                                <div class="col-sm-6">
                                    <h1><span>HAPPY PERFUME</span>-SHOPPER</h1>
                                    <h2>N?????c hoa y??u th????ng -N?????c hoa c???a t??nh y??u!</h2>
                                    <p>N?????c hoa l?? h??nh ???nh r?? r??ng nh???t c???a k??? ni???m</p>
                                    <button type="button" class="btn btn-default get">Mua ngay!</button>
                                </div>
                                <div class="col-sm-6">
                                    <img src="{{('public/frontend/images/banner/slide31.jpg')}}" class="girl img-responsive" alt="" />
                                </div>
                            </div>
                            <div class="item">
                                <div class="col-sm-6">
                                    <h1><span>HAPPY PERFUME</span>-SHOPPER</h1>
                                    <h2>Y??u n?????c hoa nh?? y??u em!</h2>
                                    <p>T??i y??u n?????c hoa ????u c???n hoa ?????p, m?? ch??? c???n n?????c hoa t???a ng??t h????ng th??m. T??i y??u ng?????i ????u c???n ng?????i ?????p, m?? ch??? c???n ng?????i th???t s??? y??u t??i. </p>
                                    <button type="button" class="btn btn-default get">Mua ngay!</button>
                                </div>
                                <div class="col-sm-6">
                                    <img src="{{('public/frontend/images/banner/slide41.jpg')}}" class="girl img-responsive" alt="" />
                                </div>
                            </div>
                            
                            <div class="item">
                                <div class="col-sm-6">
                                    <h1><span>HAPPY PERFUME</span>-SHOPPER</h1>
                                    <h2>N?????c hoa k??? di???u mang nhi???u s???c m??u!</h2>
                                    <p> Anh t???ng em n?????c hoa trong m???t s??ng ban mai<br>
                                      
                                    </p>
                                    <button type="button" class="btn btn-default get">Mua ngay!</button>
                                </div>
                                <div class="col-sm-6">
                                    <img src="{{('public/frontend/images/banner/slide51.jpg')}}" class="girl img-responsive" alt="" />
                                </div>
                            </div>
                            
                        </div>
                        
                        <a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
                            <i class="fa fa-angle-left"></i>
                        </a>
                        <a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </div>
                    
                </div>
            </div>
        </div>
    </section><!--/slider-->
    
    <section>
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <div class="left-sidebar">
                      
                    
                        <div class="brands_products"><!--brands_products-->
                            <h2>DANH S??CH N?????C HOA</h2>
                            <div class="brands-name">
                                <ul class="nav nav-pills nav-stacked">
                                    <li><a href="#"> <span class="pull-right">(50)</span>N?????c hoa d??nh cho Nam</a></li>
                                    <li><a href="#"> <span class="pull-right">(20)</span>N?????c hoa d??nh cho N???</a></li>
                                    <li><a href="#"> <span class="pull-right">(20)</span>N?????c hoa Dior</a></li>
                                    <li><a href="#"> <span class="pull-right">(30)</span>N?????c hoa Calvin Klein</a></li>
                                    <li><a href="#"> <span class="pull-right">(15)</span>N?????c hoa Hermes</a></li>
                                    <li><a href="#"> <span class="pull-right">(20)</span>N?????c hoa  Burberry </a></li>
                                    <li><a href="#"> <span class="pull-right">(30)</span>N?????c hoa Bvlgari</a></li>
                                    <li><a href="#"> <span class="pull-right">(15)</span>N?????c hoa N?????c Hoa D&G (Dolce & Gabbana)</a></li>
                                </ul>
                            </div>
                        </div><!--/brands_products-->
                        
                        <div class="price-range"><!--price-range-->
                            <h2>T??m gi?? trong ph???m vi</h2>
                            <div class="well text-center">
                                 <input type="text" class="span2" value="" data-slider-min="0" data-slider-max="600" data-slider-step="5" data-slider-value="[250,450]" id="sl2" ><br />
                                 <b class="pull-left">200.000 ??</b> <b class="pull-right">2.000.000 ??</b>
                            </div>
                        </div><!--/price-range-->
                        
                        <div class="shipping text-center"><!--shipping-->
                            <img src="{{('public/frontend/images/slide2.jpg')}}" alt="" />
                        </div><!--/shipping-->
                    
                    </div>
                </div>
                
                <div class="col-sm-9 padding-right">
                    
                    
                  @Yield('content')
                    
                    
                </div>
            </div>
        </div>
    </section>
    
    <footer id="footer"><!--Footer-->
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-sm-3">
                        <div class="companyinfo">
                            <h2><span>Happy PERFUME</span>-shopper</h2>
                            <p>Ch??ng t??i s???n s??ng ph???c v??? qu?? kh??ch 24/7.<br> V???i c??c lo???i n?????c hoa t????i sang tr???ng v?? qu?? ph??i!</p>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="col-sm-3">
                            <div class="video-gallery text-center">
                                <a href="#">
                                    <div class="iframe-img">
                                        <img src="{{('public/frontend/images/Feeling/1.jpg')}}" alt="" />
                                    </div>
                                    <div class="overlay-icon">
                                        <i class="fa fa-play-circle-o"></i>
                                    </div>
                                </a>
                              <h2>VERSACE</h2>
                            </div>
                        </div>
                        
                        <div class="col-sm-3">
                            <div class="video-gallery text-center">
                                <a href="#">
                                    <div class="iframe-img">
                                        <img src="{{('public/frontend/images/Feeling/2.jpg')}}" alt="" />
                                    </div>
                                    <div class="overlay-icon">
                                        <i class="fa fa-play-circle-o"></i>
                                    </div>
                                </a>
                                <h2>ALLORA</h2>
                            </div>
                        </div>
                        
                        <div class="col-sm-3">
                            <div class="video-gallery text-center">
                                <a href="#">
                                    <div class="iframe-img">
                                        <img src="{{('public/frontend/images/Feeling/3.jpg')}}" alt="" />
                                    </div>
                                    <div class="overlay-icon">
                                        <i class="fa fa-play-circle-o"></i>
                                    </div>
                                </a>
                                <h2>GUCCI</h2>
                            </div>
                        </div>
                        
                        <div class="col-sm-3">
                            <div class="video-gallery text-center">
                                <a href="#">
                                    <div class="iframe-img">
                                        <img src="{{('public/frontend/images/Feeling/4.jpg')}}" alt="" />
                                    </div>
                                    <div class="overlay-icon">
                                        <i class="fa fa-play-circle-o"></i>
                                    </div>
                                </a>
                               <h2> CHANEL</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="address">
                            <img src="{{('public/frontend/images/map.png')}}" alt="" />
                            <p>152 Thanh ??a, P27, Q. B??nh Th???nh, th??nh ph??? H??? Ch?? Minh.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="footer-widget">
            <div class="container">
                <div class="row">
                    <div class="col-sm-2">
                        <div class="single-widget">
                            <h2>D???ch v??? h??? tr???</h2>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="#">Tr??? gi??p online</a></li>
                                <li><a href="#">Li??n h???</a></li>
                                <li><a href="#">T??nh tr???ng ????n h??ng</a></li>
                                <li><a href="#">Thay ?????i n??i nh???n</a></li>
                                <li><a href="#">C??c c??u h???i th?????ng g???p</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="single-widget">
                            <h2>T??m ki???m nhanh</h2>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="#"> N?????c hoa Narciso </a></li>
                                <li><a href="#">N?????c hoa Versace</a></li>
                                <li><a href="#">N?????c hoa Gucci </a></li>
                                <li><a href="#">N?????c hoa Dior</a></li>
                                <li><a href="#">N?????c hoa CK </a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="single-widget">
                            <h2>Ch??nh s??ch</h2>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="#">??i???u kho???n s??? d???ng</a></li>
                                <li><a href="#">Ch??nh s??ch b???o m???t</a></li>
                                <li><a href="#">Ch??nh s??ch ho??n l???i ti???n</a></li>
                                <li><a href="#">H??? th???ng thanh to??n</a></li>
                                <li><a href="#">Ch??nh s??ch khuy???n m??i</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="single-widget">
                            <h2>Gi???i thi???u</h2>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="#">Th??ng tin c??ng ty</a></li>
                                <li><a href="#">Tuy???n d???ng</a></li>
                                <li><a href="#">V??? tr?? c???a h??ng</a></li>
                                <li><a href="#">Ch????ng tr??nh khuy???n m??i</a></li>
                                <li><a href="#">Quy???n l???i kh??ch h??ng</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-3 col-sm-offset-1">
                        <div class="single-widget">
                            <h2>Li??n h??? ch??ng t??i</h2>
                            <form action="#" class="searchform">
                                <input type="text" placeholder="?????a ch??? email" />
                                <button type="submit" class="btn btn-default"><i class="fa fa-arrow-circle-o-right"></i></button>
                                <p>H??y nh???n c??c b???n c???p nh???t g???n ????y nh???t t??? trang web c???a ch??ng t??i 
                                v?? h??y c???p nh???t th??ng tin c?? nh??n m???i nh???t c???a b???n...</p>
                            </form>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <p class="pull-left">Copyright ?? 2020. </p>Designed by <span>NTTU</span>
                    <p class="pull-right">?????a ch??? c???a h??ng: <span><a target="_blank" href="#">152 Thanh ??a, P27, Q. B??nh Th???nh, HCM City</a></span></p>
                </div>
            </div>
        </div>
        
    </footer><!--/Footer-->
    

  
    <script src="{{asset('public/frontend/js/jquery.js')}}"></script>
    <script src="{{asset('public/frontend/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('public/frontend/js/jquery.scrollUp.min.js')}}"></script>
    <script src="{{asset('public/frontend/js/price-range.js')}}"></script>
    <script src="{{asset('public/frontend/js/jquery.prettyPhoto.js')}}"></script>
    <script src="{{asset('public/frontend/js/main.js')}}"></script>
</body>
</html>