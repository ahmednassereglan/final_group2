<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet"> 

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animate.min.css') }}">
</head>

<body>

    <div class="navbg-bar" style="background-image: url(../img/bg.jpg);">
        
        <nav class="navbar navbar-expand-lg navbar-dark">
            <a class="navbar-brand m-4" href="#"><img src="img/logo.png"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav pl-2 text-right justify-content-start">
                    <li class="nav-item active pl-5  ">
                        <a class="nav-link" href="index.html">Home</a>
                    </li>
                    @foreach (App\Models\Category::whereNull("category_id")->get() as $cat)

                        @if ( $cat->sub_categories->count() >0 )
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown{{$cat->id}}" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                {{$cat->name}}
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown{{$cat->id}}">
                                @foreach ($cat->sub_categories as $scat)
                                    <a class="dropdown-item" href="/user/category/{{$scat->id}}">   {{$scat->name}}</a>
                                @endforeach
                             
                              
                            </div>
                          </li>
                        @else                            
                            <li class="nav-item">
                            <a class="nav-link" href="/user/category/{{$cat->id}}">{{$cat->name}}</a>
                            </li>
                        @endif

                        @endforeach
                        <li class="nav-item">
                            <a class="nav-link" href="{{route("menu")}}">Our Products</a>
                        </li>
                    
                </ul>
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                    @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>
                
            </div>
            

            <ul class="navbar-nav pl-5 text-center justify-content-end">
                <li class="nav-item active">
                    <span class="nav-link fas fa-shopping-bag" style="float: left; font-size: 20px" href="#"><span class="badge badge-dark" style="float: right; border-radius: 15px" >9</span></span> 
                </li>
                
            </ul>
        </nav>



        <div class="row row-cols-2 mt-5">
            <div class="col animate__animated animate__backInLeft animate__slower">
                <img src="img/slider-img.png" alt="" width="570px" height="465px">
            </div>
            <div class="col animate__animated animate__backInRight animate__slower">
                <h1 class="display-6" style="font-size: 20px; font-weight: bold; color: white;">FROM $19.90</h1>
                <h1 class="display-3" style="font-size: 90px; font-weight: 500; font-family: Raleway; color: white;"><span style="font-size: 90px; font-weight:lighter; font-family: Raleway; color:#414141;">2020</span> SUMMER COLLECTION</h1>
                <a class="btn btn-secondary " href="#" role="button">Shop NOW!</a>
            </div>
        </div>
    </div>

    <nav class="navbar navbar-expand-lg navbar-dark nnavbarscroll fixed-top" style="background-image: url(img/bg.jpg);height: 70px;">
        <a class="navbar-brand m-4" href="#"><img src="img/logo.png"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav pl-2 text-right justify-content-start">
                    <li class="nav-item active pl-5  ">
                        <a class="nav-link" href="index.html">Home</a>
                    </li>
                    @foreach (App\Models\Category::whereNull("category_id")->get() as $cat)

                        @if ( $cat->sub_categories->count() >0 )
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown{{$cat->id}}" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                {{$cat->name}}
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown{{$cat->id}}">
                                @foreach ($cat->sub_categories as $scat)
                                    <a class="dropdown-item" href="/user/category/{{$scat->id}}">   {{$scat->name}}</a>
                                @endforeach
                             
                              
                            </div>
                          </li>
                        @else                            
                            <li class="nav-item">
                            <a class="nav-link" href="/user/category/{{$cat->id}}">{{$cat->name}}</a>
                            </li>
                        @endif

                        @endforeach
                        <li class="nav-item">
                            <a class="nav-link" href="{{route("menu")}}">Our Products</a>
                        </li>
                    
                </ul>
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                    @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>
                
            </div>
            

            <ul class="navbar-nav pl-5 text-center justify-content-end">
                <li class="nav-item active">
                    <span class="nav-link fas fa-shopping-bag" style="float: left; font-size: 20px" href="#"><span class="badge badge-dark" style="float: right; border-radius: 15px" >9</span></span> 
                </li>
                
            </ul>
        </nav>

    <div class="container mt-5">
        <h1 class="text-center section-title">LATEST PRODUCTS</h1>
        <p class="text-center">We recommend</p>
    </div>

    <div class="container">
        <div class="owl-carousel owl-theme">
            <div class="item product-item">
                <figure><img src="img/product-img/product-1.jpg"></figure>
                <h3>LATEST PRODUCTS</h3>
            </div>
            <div class="item product-item">
                <figure><img src="img/product-img/product-2.jpg"></figure>
                <h3>LATEST PRODUCTS</h3>
            </div>
            <div class="item product-item">
                <figure><img src="img/product-img/product-3.jpg"></figure>
                <h3>LATEST PRODUCTS</h3>
            </div>
            <div class="item product-item">
                <figure><img src="img/product-img/product-4.jpg"></figure>
                <h3>LATEST PRODUCTS</h3>
            </div>
            <div class="item product-item">
                <figure><img src="img/product-img/product-7.jpg"></figure>
                <h3>LATEST PRODUCTS</h3>
            </div>
            <div class="item product-item">
                <figure><img src="img/product-img/product-8.jpg"></figure>
                <h3>LATEST PRODUCTS</h3>
            </div>
        </div>

    </div>

    <div class="container">
        <div class="row">
            <div class="col">
                <figure class="snip1104 blue">
                    <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/331810/sample35.jpg" alt="sample35" />
                    <figcaption>
                        <h2>Man</h2>
                    </figcaption>
                    <a href="#"></a>
                </figure>
            </div>
            <div class="col">
                <figure class="snip1104 blue">
                    <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/331810/sample35.jpg" alt="sample35" />
                    <figcaption>
                        <h2>Woman</h2>
                    </figcaption>
                    <a href="#"></a>
                </figure>
            </div>
            <div class="col">
                <figure class="snip1104 blue">
                    <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/331810/sample35.jpg" alt="sample35" />
                    <figcaption>
                        <h2>Accessories</h2>
                    </figcaption>
                    <a href="#"></a>
                </figure>
            </div>
        </div>
    </div>

    <div class="site-section mt-5" id="products-section">
        <div class="container">
            <div class="row mb-5 justify-content-center">
                <div class="col-md-6 text-center">
                    <h1 class="section-title mb-3"><a href="{{route("menu")}}"> Our Products</a></h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae nostrum natus excepturi fuga ullam accusantium vel ut eveniet aut consequatur laboriosam ipsam.</p>
                </div>
            </div>
            <div class="row m-auto row-cols-3">
                @foreach (App\Models\Products::orderBy("created_at" ,"desc")->get() as $product)
                    <div class="col col-lg-4 col-md-6 mb-5">
                        <div class="product-item">
                            <figure>
                                @foreach ($product->images as $image)
                                <img src="{{asset('storage/'.$image->img)}}" alt="{{$product->name}}" class="img-fluid">
                                @endforeach
                            </figure>
                            <div class="px-4">
                                <h3><a href="#">{{$product->name}}</a></h3>
                                <div class="mb-3">
                                    <span class="meta-icons mr-3"><a href="#" class="mr-2"><i class="fa fa-star" aria-hidden="true"></i></a> 5.0</span>
                                    <span class="meta-icons wishlist"><a href="#" class="mr-2"> <i class="fa fa-heart" aria-hidden="true"></i></a> 29</span>
                                </div>
                                <p>{{$product->price}}</p>
                                <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
                                <div>
                                    <a href="#" class="btn btn-black mr-1 rounded-0">Cart</a>
                                    <a href="#" class="btn btn-black btn-outline-black ml-1 rounded-0">View</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <div class="row mb-5 justify-content-center">
        <div class="col-md-4 text-center">
            <h1 class="section-title mb-3">Featured Products</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae nostrum natus excepturi fuga ullam accusantium vel ut eveniet aut consequatur laboriosam ipsam.</p>
        </div>
    </div>

    <div class="row">
        <div class="col-4 ml-5 text-center">
            <img src="img/featured/featured-1.jpg" alt="">
            <a href="#" class="btn btnmardin">ADD TO CART</a>
        </div>

        <div class="col-4 offset-2 text-center">
            <img src="img/featured/featured-2.jpg" alt="">
            <a href="#" class="btn btnmardin">ADD TO CART</a>
        </div>
    </div>


    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand m-4" href="#"><img src="img/logo.png"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav pl-2 text-right justify-content-start">
                <li class="nav-item active pl-5  ">
                    <a class="nav-link" href="index.html">Home</a>
                </li>
                <li class="nav-item pl-1">
                    <a class="nav-link" href="home.html">Features</a>
                </li>
                <li class="nav-item pl-1">
                    <a class="nav-link" href="features.html">Pricing</a>
                </li>
                <li class="nav-item pl-1">
                    <a class="nav-link" href="login.html">Login</a>
                </li>
                <li class="nav-item pl-1">
                    <a class="nav-link" href="signin.html">Register</a>
                </li>
            </ul>
        </div>

        <p class="float-right text-light">&copy; 2017-2020 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
    </nav>
    
    <script src="{{ asset('js/app.js') }}" ></script>
    <script src="{{ asset('js/owl.carousel.min.js') }}" ></script>
    <script src="{{ asset('js/28d30b702d.js') }}" ></script>

    
    
    <script>
        var owl = $('.owl-carousel');
        owl.owlCarousel({
            items: 4,
            loop: true,
            margin: 15,
            autoplay: true,
            autoplayTimeout: 4000,
            autoplayHoverPause: true
        });
        $('.play').on('click', function() {
            owl.trigger('play.owl.autoplay', [1000])
        })
        $('.stop').on('click', function() {
            owl.trigger('stop.owl.autoplay')
        });

        $(function() {
            $(window).scroll(function() {
                if ($(this).scrollTop() > 100) {
                    $('.nnavbarscroll').removeClass("hid_nav");
                } else {
                    $('.nnavbarscroll').addClass("hid_nav");
                }

            });
        });

        $("figure").mouseleave(
            function() {
                $(this).removeClass("hover");
            }
        );
    </script>
</body>

</html>