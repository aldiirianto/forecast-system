<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="{{asset('Landing')}}/bs5/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('Landing')}}/icon/css/all.min.css">
    <link rel="stylesheet" href="{{asset('Landing')}}/css/navbar.css">
    <link rel="stylesheet" href="{{asset('Landing')}}/css/body.css">
    <link rel="stylesheet" href="{{asset('Landing')}}/css/theme.css">
    <link rel="stylesheet" href="{{asset('Landing')}}/css/responsive.css">

    <title>KopiShop</title>
</head>

<body>

    <!--============================================================================ NAVBAR ==========================================================-->
    <nav class="navbar navbar-expand-lg navbar-light mt-3 fixed-top" id="navbar">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="{{asset('Landing')}}/assets/vector-logo.svg" height="35px">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="nav nav-pills">
                    <li class="nav-item me-2">
                        <a class="nav-link active bg-active link-navbar" href="#">Home</a>
                    </li>
                    <li class="nav-item me-2">
                        <a class="nav-link link-navbar" href="#">Product</a>
                    </li>
                    <li class="nav-item me-2">
                        <a class="nav-link link-navbar" href="#">Customer</a>
                    </li>
                    <li class="nav-item me-2">
                        <a class="nav-link link-navbar" href="#">About</a>
                    </li>
                    @if (Route::has('login'))
                    <li class="nav-item me-2">
                        @auth
                        <a href="{{ url('/home') }}" class="nav-link link-navbar">Home</a>
                        @else
                    </li>
                    <li class="nav-item me-2">
                        <a href="{{ route('login') }}" class="nav-link btn-custom-outline rounded">Log in</a>
                    </li>
                    @if (Route::has('register'))
                    <li class="nav-item me-2">
                        <a href="{{ route('register') }}" class="nav-link btn-custom rounded">Register</a>
                        @endif
                        @endauth
                    </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>

    <!--============================================================================1. header==========================================================-->
    <div class="container">

        <br><br><br>

        <div class="row my-5">

            <div class="col-lg-12 d-block d-lg-none">
                <img src="{{asset('Landing')}}/assets/vector-header.svg" width="100%">
            </div>

            <div class="col-lg-6">
                <div class="row align">
                    <h1 class="text-truncate bold-3 my-3">THE BEST COFFEE</h1>
                    <div class="desc mt-5">
                        <p>Konsep dan misi kami adalah memajukan kopi Indonesia,
                            baik di pasar nasional maupun internasional. Mari coba dan nikmati kopi Indonesia</p>
                    </div>
                    <div class="row my-4">
                        <div class="col-lg-5">
                            <a href="#" class="btn btn-custom p-3 rounded shadow width-1n8x">Pesan Sekarang</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 d-none d-lg-block">
                <img src="{{asset('Landing')}}/assets/vector-header.svg" width="100%">
            </div>

        </div>

    </div>

    <!--============================================================================2. Feature ==========================================================-->
    <div class="position-relative">
        <img src="{{asset('Landing')}}/assets/bg-feature.svg" width="100%" class="bg-feature">
        <div class="container position-relative">

            <div class="row justify-content-center">
                <h1 class="h2 bold-3 my-5 max-width-5x text-center">Mengapa Beli di KopiShop?</h1>
            </div>

            <div class="row mt-4">
                <div class="col-lg-3">
                    <div class="card border-0">
                        <div class="card-body align">
                            <div class="box bg-purple mb-4">
                                <i class="fas fa-coffee text-white "></i>
                            </div>
                            <h5 class="card-title bold-2 mb-3">Kualitas Kopi Terbaik</h5>
                            <p class="card-text">Kopi yang ada di KopiShop memiliki kualitas terbaik di Indonesia</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card border-0">
                        <div class="card-body align">
                            <div class="box bg-yellow mb-4">
                                <i class="fas fa-home text-white"></i>
                            </div>
                            <h5 class="card-title bold-2 mb-3">Design surveys</h5>
                            <p class="card-text">Sports betting, lottery and bingo playing for the fun</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card border-0">
                        <div class="card-body align">
                            <div class="box bg-red mb-4">
                                <i class="fas fa-heart text-white"></i>
                            </div>
                            <h5 class="card-title bold-2 mb-3">Preference tests</h5>
                            <p class="card-text">The Myspace page defines the individual.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card border-0">
                        <div class="card-body align">
                            <div class="box bg-blue mb-4">
                                <i class="fas fa-hourglass-half text-white"></i>
                            </div>
                            <h5 class="card-title bold-2 mb-3">Five second tests</h5>
                            <p class="card-text">Personal choices and the overall personality of the person.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row my-5 justify-content-center">
                <a href="#" class="btn btn-custom p-3 rounded shadow width-2x bold-2">SIGN UP NOW</a>
            </div>

        </div>
    </div>

    <br><br><br><br><br>

    <!--============================================================================3. Effortless ==========================================================-->
    <div class="container">
        <div class="row mb-5">

            <div class="col-lg-12 d-block d-lg-none">
                <center>
                    <img src="{{asset('Landing')}}/assets/vector-effortless.svg" width="100%">
                </center>
            </div>

            <div class="col-lg-6">
                <div class="row">
                    <h1 class="h5 bold-2 mt-3">Effortless Validation for</h1>
                    <h1 class="bold-3">Design Professionals</h1>
                    <div class="desc mt-5 mb-2">
                        <p>The Myspace page defines the individual, his or her characteristics, traits, personal choices
                            and the overall
                            personality of the person.</p>
                    </div>
                    <h1 class="h5 bold-2 my-3">Accessory makers</h1>
                    <div class="desc">
                        <p>While most people enjoy casino gambling, sports betting, lottery and bingo playing for the
                            fun</p>
                    </div>
                    <h1 class="h5 bold-2 my-3">Alterationists</h1>
                    <div class="desc">
                        <p>If you are looking for a new way to promote your business that won’t cost you more money,</p>
                    </div>
                    <h1 class="h5 bold-2 my-3">Custom Design designers</h1>
                    <div class="desc">
                        <p>If you are looking for a new way to promote your business that won’t cost you more money,</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 d-none d-lg-block">
                <img src="{{asset('Landing')}}/assets/vector-effortless.svg" width="100%">
            </div>

        </div>
    </div>

    <br><br><br>

    <!--============================================================================4. Product Manager ==========================================================-->
    <div class="container">
        <div class="row mb-5">

            <div class="col-lg-12 d-block d-lg-none">
                <center>
                    <img src="{{asset('Landing')}}/assets/vector-productmanager.svg" width="100%">
                </center>
            </div>

            <div class="col-lg-6 d-none d-lg-block">
                <img src="{{asset('Landing')}}/assets/vector-productmanager.svg" width="100%">
            </div>

            <div class="col-lg-6">
                <div class="row">
                    <h1 class="h5 bold-2 mt-3">Easier decision making for</h1>
                    <h1 class="bold-3">Product Managers</h1>
                    <div class="desc mt-5 mb-2">
                        <p>The Myspace page defines the individual, his or her characteristics, traits, personal choices
                            and the overall
                            personality of the person.</p>
                    </div>
                    <div class="d-flex desc">
                        <img src="{{asset('Landing')}}/assets/vector-check.svg" width="35px" class="me-3">
                        <p class="mt-3">Never worry about overpaying for your energy again.</p>
                    </div>
                    <div class="d-flex desc">
                        <img src="{{asset('Landing')}}/assets/vector-check.svg" width="35px" class="me-3">
                        <p class="mt-3">We will only switch you to energy companies that we trust and will treat you
                            right</p>
                    </div>
                    <div class="d-flex desc">
                        <img src="{{asset('Landing')}}/assets/vector-check.svg" width="35px" class="me-3">
                        <p class="mt-3">We track the markets daily and know where the savings are.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <br><br><br>
    <!--============================================================================5. Marketer==========================================================-->
    <div class="container">
        <div class="row mb-5">

            <div class="col-lg-12 d-block d-lg-none">
                <center>
                    <img src="{{asset('Landing')}}/assets/vector-marketer.svg" width="100%">
                </center>
            </div>

            <div class="col-lg-6">
                <div class="row">
                    <h1 class="h5 bold-2 mt-3">Optimisation for</h1>
                    <h1 class="bold-3">Marketers</h1>
                    <div class="desc mt-5 mb-2">
                        <p>Few would argue that, despite the advancements of feminism over the past three decades, women
                            still face a double
                            standard when it comes to their behavior.</p>
                    </div>
                    <h1 class="h5 bold-2 my-3">Accessory makers</h1>
                    <div class="desc">
                        <p>While most people enjoy casino gambling, sports betting, lottery and bingo playing for the
                            fun
                        </p>
                    </div>
                    <h1 class="h5 bold-2 my-3">Alterationists</h1>
                    <div class="desc">
                        <p>If you are looking for a new way to promote your business that won’t cost you more money,</p>
                    </div>
                    <h1 class="h5 bold-2 my-3">Custom Design designers</h1>
                    <div class="desc">
                        <p>If you are looking for a new way to promote your business that won’t cost you more money,</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 d-none d-lg-block">
                <img src="{{asset('Landing')}}/assets/vector-marketer.svg" width="100%">
            </div>

        </div>
    </div>

    <br><br>

    <!--============================================================================6. Contact==========================================================-->
    <div class="position-relative">
        <img src="{{asset('Landing')}}/assets/bg-contact.png" width="100%" class="bg-contact">
        <br><br><br><br><br><br>
        <div class="container position-relative">
            <div class="d-none d-lg-block">
                <img src="{{asset('Landing')}}/assets/avatar/1.svg" width="250px" class="avatar1">
                <img src="{{asset('Landing')}}/assets/avatar/2.svg" width="250px" class="avatar2">
                <img src="{{asset('Landing')}}/assets/avatar/3.svg" width="250px" class="avatar3">
                <img src="{{asset('Landing')}}/assets/avatar/4.svg" width="250px" class="avatar4">
                <img src="{{asset('Landing')}}/assets/avatar/5.svg" width="250px" class="avatar5">
            </div>
            <div class="row justify-content-center">
                <h1 class="h2 bold-3 my-3 max-width-5x text-center">Need a super hero?</h1>
            </div>

            <div class="row justify-content-center">
                <div class="desc my-3 text-center">
                    <p>Do you require some help for your project: Conception workshop,
                        prototyping, marketing strategy, landing page, Ux/UI?</p>
                </div>
            </div>

            <div class="row mt-3 mb-5 justify-content-center">
                <a href="#" class="btn btn-custom p-3 rounded shadow width-2x bold-2">Contact our expert</a>
            </div>

            <br><br><br>

        </div>
    </div>

    <br><br><br>

    <!--============================================================================7. Marketin Strategis ==========================================================-->
    <div class="container position-relative">
        <div class="row">
            <h1 class="h2 bold-3 mt-5 mb-4">Marketing Strategies</h1>
        </div>

        <div class="row">
            <p>Join 40,000+ other marketers and get proven strategies on email marketing</p>
        </div>

        <div class="row">
            <div class="col-lg-4">
                <div class="card border-0 my-3">
                    <img src="{{asset('Landing')}}/assets/marketing/01.svg" width="100%" class="card-img-top">
                    <div class="card-body">
                        <h6 class="card-title">By <b>Abdullah</b> | 03 March 2019</h6>
                        <p class="card-text h4 bold-2">Increasing Prosperity With Positive Thinking</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="card border-0 my-3">
                    <img src="{{asset('Landing')}}/assets/marketing/02.svg" width="100%" class="card-img-top">
                    <div class="card-body">
                        <h6 class="card-title">By <b>Abdullah</b> | 03 March 2019</h6>
                        <p class="card-text h4 bold-2">Motivation Is The First Step To Success</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="card border-0 my-3">
                    <img src="{{asset('Landing')}}/assets/marketing/03.svg" width="100%" class="card-img-top">
                    <div class="card-body">
                        <h6 class="card-title">By <b>Abdullah</b> | 03 March 2019</h6>
                        <p class="card-text h4 bold-2">Success Steps For Your Personal Or Business Life</p>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <br><br><br>
    <!--============================================================================8. Footer==========================================================-->
    <div class="container">
        <hr class="my-5">
        <div class="row mb-5">

            <div class="col-lg-3">
                <a href="#">
                    <img src="{{asset('Landing')}}/assets/vector-logo.svg" height="35px">
                </a>
                <h6><br></h6>
            </div>
            <div class="col-lg-3">
                <h5>Quick Links</h5>
                <br><br>
                <a href="#" class="link-navbar">About Us</a><br>
                <a href="#" class="link-navbar">Blog</a><br>
                <a href="#" class="link-navbar">Contact</a><br>
                <a href="#" class="link-navbar">FAQ</a><br>
                <br>
            </div>
            <div class="col-lg-3">
                <h5>Legal Stuff</h5>
                <br><br>
                <a href="#" class="link-navbar">Disclaimer</a><br>
                <a href="#" class="link-navbar">Financing</a><br>
                <a href="#" class="link-navbar">Privacy Policy</a><br>
                <a href="#" class="link-navbar">Terms of Service</a><br>
                <br>
            </div>
            <div class="col-lg-3">
                <h5>knowing you're always on the best energy deal.</h5>
                <br>
                <form action="#" method="post">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Enter your Phone number" required>
                    </div>
                    <br>
                    <button type="submit" class="btn btn-custom rounded shadow">Sign Up Now</button>
                </form>
            </div>

        </div>
    </div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="{{asset('Landing')}}/bs5/dist/js/bootstrap.bundle.js"></script>
    <script src="{{asset('Landing')}}/js/onscroll.js"></script>

</body>

</html>