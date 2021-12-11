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
                                <li><a href="#"><i class="fa fa-user"></i> Tài khoản</a></li>
                                <li><a href="#"><i class="fa fa-star"></i> Sản phẩm Thêm yêu thích</a></li>
                                <li><a href="checkout.html"><i class="fa fa-crosshairs"></i> Đăng xuất</a></li>
                                <li><a href="cart.html"><i class="fa fa-shopping-cart"></i> Giỏ hàng</a></li>
                                <li><a href="{{URL::to('admin/login')}}"><i class="fa fa-lock"></i> Đăng nhập</a></li>
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
                                <li><a href="{{URL::to('/trangchu')}}" class="active">Trang chủ</a></li>
                                <li class="dropdown"><a href="#">Sản phẩm nước hoa tươi<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="shop.html">Các loại nước hoa</a></li>
                                        <li><a href="product-details.html">Chi tiết nước hoa</a></li> 
                                        <li><a href="checkout.html">Đăng xuất</a></li> 
                                        <li><a href="cart.html">Giỏ hàng</a></li> 
                                        <li><a href="{{URL::to('admin/login')}}">Đăng nhập</a></li> 
                                    </ul>
                                </li> 
                                <li class="dropdown"><a href="#">Giới thiệu<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="blog.html">Happy Flower Shop</a></li>
                                        <li><a href="blog-single.html">Thế giới hoa</a></li>
                                    </ul>
                                </li> 
                                <li><a href="404.html">Giỏ hàng</a></li>
                                <li><a href="contact-us.html">Liên hệ</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-3 input-group input-group-lg">
                        <input type="text" class="form-control" placeholder="Tìm kiếm" />
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
                                    <h2>Miễn phí giao hàng trên địa bàn Thành phố Hồ Chí Minh.</h2>
                                    <p>Mỗi loài nước hoa đều mang trong mình một ý nghĩa, một vẻ đẹp riêng. Nó có thể tượng trưng cho sự kiêu hãnh nhưng cũng có thể tượng trưng cho tình yêu và sức sống mãnh liệt.</p>
                                    <button type="button" class="btn btn-default get">Mua ngay!</button>
                                </div>
                                <div class="col-sm-6">
                                    <img src="{{('public/frontend/images/banner/slide11.jpg')}}" class="girl img-responsive" alt="" />
                                </div>
                            </div>
                            <div class="item">
                                <div class="col-sm-6">
                                    <h1><span>HAPPY PERFUME</span>-SHOPPER</h1>
                                    <h2>100% Nước hoa tươi do chúng tôi nhập khẩu từ các nước!</h2>
                                    <p>Vẻ đẹp của hương thơm biểu hiện trái tim của bạn và hy vọng của người khác.</p>
                                    <button type="button" class="btn btn-default get">Mua ngay!</button>
                                </div>
                                <div class="col-sm-6">
                                    <img src="{{('public/frontend/images/banner/slide21.jpg')}}" class="girl img-responsive" alt="" />
                                </div>
                            </div>
                            <div class="item">
                                <div class="col-sm-6">
                                    <h1><span>HAPPY PERFUME</span>-SHOPPER</h1>
                                    <h2>Nước hoa yêu thương -Nước hoa của tình yêu!</h2>
                                    <p>Nước hoa là hình ảnh rõ ràng nhất của kỷ niệm</p>
                                    <button type="button" class="btn btn-default get">Mua ngay!</button>
                                </div>
                                <div class="col-sm-6">
                                    <img src="{{('public/frontend/images/banner/slide31.jpg')}}" class="girl img-responsive" alt="" />
                                </div>
                            </div>
                            <div class="item">
                                <div class="col-sm-6">
                                    <h1><span>HAPPY PERFUME</span>-SHOPPER</h1>
                                    <h2>Yêu nước hoa như yêu em!</h2>
                                    <p>Tôi yêu nước hoa đâu cần hoa đẹp, mà chỉ cần nước hoa tỏa ngát hương thơm. Tôi yêu người đâu cần người đẹp, mà chỉ cần người thật sự yêu tôi. </p>
                                    <button type="button" class="btn btn-default get">Mua ngay!</button>
                                </div>
                                <div class="col-sm-6">
                                    <img src="{{('public/frontend/images/banner/slide41.jpg')}}" class="girl img-responsive" alt="" />
                                </div>
                            </div>
                            
                            <div class="item">
                                <div class="col-sm-6">
                                    <h1><span>HAPPY PERFUME</span>-SHOPPER</h1>
                                    <h2>Nước hoa kỳ diệu mang nhiều sắc màu!</h2>
                                    <p> Anh tặng em nước hoa trong một sáng ban mai<br>
                                      
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
                            <h2>DANH SÁCH NƯỚC HOA</h2>
                            <div class="brands-name">
                                <ul class="nav nav-pills nav-stacked">
                                    <li><a href="#"> <span class="pull-right">(50)</span>Nước hoa dành cho Nam</a></li>
                                    <li><a href="#"> <span class="pull-right">(20)</span>Nước hoa dành cho Nữ</a></li>
                                    <li><a href="#"> <span class="pull-right">(20)</span>Nước hoa Dior</a></li>
                                    <li><a href="#"> <span class="pull-right">(30)</span>Nước hoa Calvin Klein</a></li>
                                    <li><a href="#"> <span class="pull-right">(15)</span>Nước hoa Hermes</a></li>
                                    <li><a href="#"> <span class="pull-right">(20)</span>Nước hoa  Burberry </a></li>
                                    <li><a href="#"> <span class="pull-right">(30)</span>Nước hoa Bvlgari</a></li>
                                    <li><a href="#"> <span class="pull-right">(15)</span>Nước hoa Nước Hoa D&G (Dolce & Gabbana)</a></li>
                                </ul>
                            </div>
                        </div><!--/brands_products-->
                        
                        <div class="price-range"><!--price-range-->
                            <h2>Tìm giá trong phạm vi</h2>
                            <div class="well text-center">
                                 <input type="text" class="span2" value="" data-slider-min="0" data-slider-max="600" data-slider-step="5" data-slider-value="[250,450]" id="sl2" ><br />
                                 <b class="pull-left">200.000 đ</b> <b class="pull-right">2.000.000 đ</b>
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
                            <p>Chúng tôi sẳn sàng phục vụ quý khách 24/7.<br> Với các loại nước hoa tươi sang trọng và quý phái!</p>
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
                            <p>152 Thanh Đa, P27, Q. Bình Thạnh, thành phố Hồ Chí Minh.</p>
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
                            <h2>Dịch vụ hỗ trợ</h2>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="#">Trợ giúp online</a></li>
                                <li><a href="#">Liên hệ</a></li>
                                <li><a href="#">Tình trạng đơn hàng</a></li>
                                <li><a href="#">Thay đổi nơi nhận</a></li>
                                <li><a href="#">Các câu hỏi thường gặp</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="single-widget">
                            <h2>Tìm kiếm nhanh</h2>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="#"> Nước hoa Narciso </a></li>
                                <li><a href="#">Nước hoa Versace</a></li>
                                <li><a href="#">Nước hoa Gucci </a></li>
                                <li><a href="#">Nước hoa Dior</a></li>
                                <li><a href="#">Nước hoa CK </a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="single-widget">
                            <h2>Chính sách</h2>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="#">Điều khoản sử dụng</a></li>
                                <li><a href="#">Chính sách bảo mật</a></li>
                                <li><a href="#">Chính sách hoàn lại tiền</a></li>
                                <li><a href="#">Hệ thống thanh toán</a></li>
                                <li><a href="#">Chính sách khuyến mãi</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="single-widget">
                            <h2>Giới thiệu</h2>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="#">Thông tin công ty</a></li>
                                <li><a href="#">Tuyển dụng</a></li>
                                <li><a href="#">Vị trí cửa hàng</a></li>
                                <li><a href="#">Chương trình khuyến mãi</a></li>
                                <li><a href="#">Quyền lợi khách hàng</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-3 col-sm-offset-1">
                        <div class="single-widget">
                            <h2>Liên hệ chúng tôi</h2>
                            <form action="#" class="searchform">
                                <input type="text" placeholder="Địa chỉ email" />
                                <button type="submit" class="btn btn-default"><i class="fa fa-arrow-circle-o-right"></i></button>
                                <p>Hãy nhận các bản cập nhật gần đây nhất từ trang web của chúng tôi 
                                và hãy cập nhật thông tin cá nhân mới nhất của bạn...</p>
                            </form>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <p class="pull-left">Copyright © 2020. </p>Designed by <span>NTTU</span>
                    <p class="pull-right">Địa chỉ cửa hàng: <span><a target="_blank" href="#">152 Thanh Đa, P27, Q. Bình Thạnh, HCM City</a></span></p>
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