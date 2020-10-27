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
    </head>

<body>

    <div class="bg-dark">
        <nav class="navbar navbar-expand-lg navbar-dark ">
            <a class="navbar-brand m-4" href="#"><img src="img/logo.png"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav pl-2 text-right justify-content-start">
                    <li class="nav-item pl-5  ">
                        <a class="nav-link" href="index.html">Home</a>
                    </li>
                    <li class="nav-item pl-1">
                        <a class="nav-link" href="home.html">Features</a>
                    </li>
                    <li class="nav-item pl-1 active">
                        <a class="nav-link" href="features.html">Pricing</a>
                    </li>
                    <li class="nav-item pl-1">
                        <a class="nav-link" href="login.html">Login</a>
                    </li>
                    <li class="nav-item pl-1">
                        <a class="nav-link" href="signin.html">Register</a>
                    </li>
                    <li class="nav-item dropdown pl-1">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Dropdown link
                    </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="index.html">Home</a>
                            <a class="dropdown-item" href="home.html">Features</a>
                            <a class="dropdown-item" href="features.html">Pricing</a>
                            <a class="dropdown-item" href="login.html">Login</a>
                            <a class="dropdown-item" href="signin.html">Register</a>
                        </div>
                    </li>
                </ul>
            </div>

            <ul class="navbar-nav pl-5 text-center justify-content-end">
                <li class="nav-item active">
                    <span class="badge badge-light" style="padding: 4px; border-radius: 20px; margin-right: -12px;">9</span>
                    <a class="nav-link fas fa-shopping-bag" href="#" style="font-size: larger;"></a>
                </li>
                <li class="nav-item  active">
                    <a class="nav-link fas fa-search" href="#" style="font-size: larger;"></a>
                </li>
                <li class="nav-item pl-2 active">
                    <a class="nav-link fas fa-tshirt" href="#" style="font-size: larger;"></a>
                </li>
            </ul>
        </nav>
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
    <!-- ............ -->

    

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
                <li class="nav-item pl-1 active">
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

    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/28d30b702d.js') }}" defer></script>
    <script>
    </script>
</body>

</html>