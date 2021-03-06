<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <link rel="shortcut icon" href="images/star.png" type="favicon/ico" /> -->

    <title>Ender's Restaurant</title>

    <link rel="stylesheet" href="{{ asset('public/frontend/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/frontend/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/frontend/css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('public/frontend/css/owl.theme.css') }}">
    <link rel="stylesheet" href="{{ asset('public/frontend/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('public/frontend/css/flexslider.css') }}">
    <link rel="stylesheet" href="{{ asset('public/frontend/css/pricing.css') }}">
    <link rel="stylesheet" href="{{ asset('public/frontend/css/main.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src="{{ asset('public/frontend/js/bootstrap.min.js') }}"></script>
    <script src="{{asset('public/frontend/js/jquery-1.11.2.min.js')}}"></script>
    {{-- <script type="text/javascript">
            $(window).load(function() {
                $('.flexslider').flexslider({
                 animation: "slide",
                 controlsContainer: ".flexslider-container"
                });
            });
        </script> --}}

    <script src="https://maps.googleapis.com/maps/api/js"></script>
    <script>
        function initialize() {
                var mapCanvas = document.getElementById('map-canvas');
                var mapOptions = {
                    center: new google.maps.LatLng(24.909439, 91.833800),
                    zoom: 16,
                    scrollwheel: false,
                    mapTypeId: google.maps.MapTypeId.ROADMAP
                }
                var map = new google.maps.Map(mapCanvas, mapOptions)

                var marker = new google.maps.Marker({
                    position: new google.maps.LatLng(24.909439, 91.833800),
                    title:"Mamma's Kitchen Restaurant"
                });

                // To add the marker to the map, call setMap();
                marker.setMap(map);
            }
            google.maps.event.addDomListener(window, 'load', initialize);
    </script>


</head>

<body data-spy="scroll" data-target="#template-navbar">

    <!--== 4. Navigation ==-->
    <nav id="template-navbar" class="navbar navbar-default custom-navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#Food-fair-toggle">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{URL::to('/home') }}">
                    <img id="logo" src="{{asset('public/frontend/images/Logo_main.png') }}" class="logo img-responsive">
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="Food-fair-toggle">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#about">V??? ch??ng t??i</a></li>
                    <li><a href="#pricing">Gi?? c???</a></li>
                    <li><a href="#great-place-to-enjoy">????? u???ng</a></li>
                    <li><a href="#breakfast">??i???m t??m</a></li>
                    <li><a href="#featured-dish">Th???c ????n</a></li>
                    <li><a href="#reserve">?????t b??n</a></li>
                    <li><a href="#contact">Li??n h???</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!--== 1. Login ==-->
    <div class="container-fluid">
        <div class="navbar-2">
            {{-- <a href="cart"><i class="fa fa-shopping-cart"></i> CART</a> --}}
            {{-- <a href="{{URL::to('/dangnhap') }}">LOGIN</a> --}}
            <ul class="nav navbar-nav">
                <li>
                    <a href="#"><i class="fa fa-user-tie"></i>
                        <?php
                        $name = Session::get('TenHienThi');
                        if($name){
                            echo($name);
                        }
                        ?>
                    </a>
                </li>
                <li>
                    <a href="{{URL::to('/show-cart')}}"><i class="fa fa-shopping-cart"></i> Gi??? h??ng</a>
                </li>
                <?php
                    $TenTaiKhoan = Session::get('TenTaiKhoan');
                    if($TenTaiKhoan != NULL){
                ?>
                <li>
                    <a href="{{URL::to('/dangxuat')}}"><i class="fa fa-lock"></i> ????ng xu???t</a>
                </li>
                <?php
                    }else{
                ?>
                <li>
                    <a href="{{URL::to('/dangnhap')}}"><i class="fa fa-lock"></i> ????ng nh???p</a>
                </li>
                <?php
                    }
                ?>

                    {{-- <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <img alt="" src="{{asset('public/backend/images/2.png')}}">
                        <span class="username">

                        </span>
                        <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu extended logout">
                        <li><a href="#"><i class=" fa fa-suitcase"></i>Th??ng tin</a></li>
                        <li><a href="#"><i class="fa fa-cog"></i> C??i ?????t</a></li>
                        <li><a href="{{URL::to('/logout')}}"><i class="fa fa-key"></i> ????ng xu???t</a></li>
                    </ul> --}}
                </li>
            </ul>
        </div>
    </div>
    <!-- K??? th???a trang home -->
    @yield('content')

    @yield('monan')


    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <div class="copyright text-center">
                        <p>
                            Welcome to <a href="#">Ender's Restaurant </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>



    <script src="{{ asset('public/frontend/js/owl.carousel.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/frontend/js/jquery.mixitup.min.js') }}"></script>
    <script src="{{ asset('public/frontend/js/wow.min.js') }}"></script>
    <script src="{{ asset('public/frontend/js/jquery.validate.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/frontend/js/jquery.hoverdir.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/frontend/js/jQuery.scrollSpeed.js') }}"></script>
    <script type="text/javascript" src="{{asset('public/frontend/js/jquery.flexslider.min.js')}}"></script>
    <script src="{{ asset('public/frontend/js/script.js') }}"></script>


</body>

</html>
