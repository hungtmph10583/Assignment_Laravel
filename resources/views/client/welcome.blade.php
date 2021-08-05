@extends('layouts.client.main')
@section('content')
<div class="hero">
    <div class="slide-container" id="hero-slide">
        <!-- slide item -->
        <div class="slide">
            <div class="slide-txt">
                <div class="slide-title">
                    <h3>polygon siskiu</h3>
                </div>
                <div class="slide-description">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laboru</p>
                </div>
                <div class="slide-btn">
                    <a href="#" class="hero-btn">
                        buy now
                    </a>
                </div>
            </div>
            <div class="slide-img">
                <img src="{{ asset('client-theme/images/MTBROMO_N7_2022.png')}}" alt="">
            </div>
        </div>
        <!-- end slide item -->
        <!-- slide item -->
        <div class="slide">
            <div class="slide-txt">
                <div class="slide-title">
                    <h3>mt bromo n7</h3>
                </div>
                <div class="slide-description">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laboru</p>
                </div>
                <div class="slide-btn">
                    <a href="#" class="hero-btn">
                        buy now
                    </a>
                </div>
            </div>
            <div class="slide-img">
                <img src="{{ asset('client-theme/images/6489548.png')}}" alt="">
            </div>
        </div>
        <!-- end slide item -->
        <!-- slide item -->
        <div class="slide">
            <div class="slide-txt">
                <div class="slide-title">
                    <h3>cascade mount</h3>
                </div>
                <div class="slide-description">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laboru</p>
                </div>
                <div class="slide-btn">
                    <a href="#" class="hero-btn">
                        buy now
                    </a>
                </div>
            </div>
            <div class="slide-img">
                <img src="{{ asset('client-theme/images/b1.png')}}" alt="">
            </div>
        </div>
        <!-- end slide item -->
        <div class="hero-txt">
            you ride
        </div>
        <!-- slide control -->
        <ul class="slide-control">
            <li class="slide-prev"><i class="bx bx-chevron-left"></i></li>
            <li class="slide-control-item active">01</li>
            <li class="slide-control-item">02</li>
            <li class="slide-control-item">03</li>
            <li class="slide-next"><i class="bx bx-chevron-right"></i></li>
        </ul>
        <!-- end slide control -->
    </div>
</div>
<!-- end hero slide -->

<!-- category section -->
<div class="section">
    <div class="section-title">
        <h3 class="second-title to-right show-on-scroll">bike category</h3>
        <h3 class="main-title to-left show-on-scroll">choose your style</h3>
    </div>
    <div class="section-content">
        <div class="row">
            <div class="col-4">
                <div class="category-img to-top show-on-scroll">
                    <img class="category-img-inner" src="{{ asset('client-theme/images/alvan-nee-EHILKZNmTuA-unsplash.jpg')}}" alt="">
                    <div class="category-title">
                        Urban
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="category-img to-top show-on-scroll">
                    <img class="category-img-inner" src="{{ asset('client-theme/images/eberhard-grossgasteiger-8lDkmXnKo7s-unsplash.jpg')}}" alt="">
                    <div class="category-title">
                        mountain
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="category-img to-top show-on-scroll">
                    <img class="category-img-inner" src="{{ asset('client-theme/images/tom-austin-3L76b-LMyeI-unsplash.jpg')}}" alt="">
                    <div class="category-title">
                        Road
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end category section -->

<!-- new arrivals section -->
<div class="section">
    <div class="section-title">
        <h3 class="second-title to-right show-on-scroll">new bikes</h3>
        <h3 class="main-title to-left show-on-scroll">new arrivals</h3>
        <div class="btn-wrapper">
            <div class="to-top show-on-scroll">
                <a href="#" class="btn ">view all bikes</a>
            </div>
        </div>
    </div>
    <div class="section-content">
        <div class="row">
            <div class="col-5 col-center">
                <div class="to-right show-on-scroll">
                    <div class="product-card product-card-large">
                        <a href="#">
                            <div class="product-card-img">
                                <img src="{{ asset('client-theme/images/Polygon Cascade.png')}}" alt="">
                            </div>
                            <h3 class="product-name">
                                polygon cascade
                            </h3>
                            <span class="product-price">
                                $3,900.00
                            </span>
                        </a>
                        <button class="btn">add to cart</button>
                    </div>
                </div>
            </div>
            <div class="col-7">
                <div class="row">
                    <div class="col-6">
                        <div class="to-top show-on-scroll">
                            <div class="product-card">
                                <a href="#">
                                    <div class="product-card-img">
                                        <img src="{{ asset('client-theme/images/b2.png')}}" alt="">
                                    </div>
                                    <h3 class="product-name">
                                        norco youth bicycle
                                    </h3>
                                    <span class="product-price">
                                        $3,900.00
                                    </span>
                                </a>
                                <button class="btn">add to cart</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="to-top show-on-scroll">
                            <div class="product-card">
                                <a href="#">
                                    <div class="product-card-img">
                                        <img src="{{ asset('client-theme/images/MTBROMO_N7_2022.png')}}" alt="">
                                    </div>
                                    <h3 class="product-name">
                                        mt bromo n7
                                    </h3>
                                    <span class="product-price">
                                        $3,900.00
                                    </span>
                                </a>
                                <button class="btn">add to cart</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="to-top show-on-scroll">
                            <div class="product-card">
                                <a href="#">
                                    <div class="product-card-img">
                                        <img src="{{ asset('client-theme/images/b1.png')}}" alt="">
                                    </div>
                                    <h3 class="product-name">
                                        haibike xduro rx
                                    </h3>
                                    <span class="product-price">
                                        $3,900.00
                                    </span>
                                </a>
                                <button class="btn">add to cart</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="to-top show-on-scroll">
                            <div class="product-card">
                                <a href="#">
                                    <div class="product-card-img">
                                        <img src="{{ asset('client-theme/images/531352.png')}}" alt="">
                                    </div>
                                    <h3 class="product-name">
                                        polygon siskiu
                                    </h3>
                                    <span class="product-price">
                                        $3,900.00
                                    </span>
                                </a>
                                <button class="btn">add to cart</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end new arrivals section -->

<!-- special bike -->
<div class="section special-section">
    <div class="section-title">
        <h3 class="second-title to-left show-on-scroll">
            best seller
        </h3>
        <h3 class="main-title to-right show-on-scroll">xtrada hardtail</h3>
        <div class="special-price to-top show-on-scroll">
            $1,099.00
        </div>
        <div class="to-top show-on-scroll">
            <a href="#" class="btn">buy now</a>
        </div>
    </div>
    <div class="special-img">
        <img src="{{ asset('client-theme/images/6489548.png')}}" alt="" class="to-left show-on-scroll">
    </div>
</div>
<!-- end special bike -->

<!-- popular section -->
<div class="section">
    <div class="section-title">
        <h3 class="second-title to-right show-on-scroll">customer choice</h3>
        <h3 class="main-title to-left show-on-scroll">popular bikes</h3>
        <div class="btn-wrapper">
            <div class="to-top show-on-scroll">
                <a href="#" class="btn">view all bikes</a>
            </div>
        </div>
    </div>
    <div class="section-content">
        <div class="row">
            <div class="col-3">
                <div class="to-top show-on-scroll">
                    <div class="product-card">
                        <a href="#">
                            <div class="product-card-img">
                                <img src="{{ asset('client-theme/images/6489548.png')}}" alt="">
                            </div>
                            <h3 class="product-name">
                                xtrada hardtail
                            </h3>
                            <span class="product-price">
                                $3,900.00
                            </span>
                        </a>
                        <button class="btn">add to cart</button>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="to-top show-on-scroll">
                    <div class="product-card">
                        <a href="#">
                            <div class="product-card-img">
                                <img src="{{ asset('client-theme/images/Polygon Cascade.png')}}" alt="">
                            </div>
                            <h3 class="product-name">
                                Polygon Cascade
                            </h3>
                            <span class="product-price">
                                $3,900.00
                            </span>
                        </a>
                        <button class="btn">add to cart</button>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="to-top show-on-scroll">
                    <div class="product-card">
                        <a href="#">
                            <div class="product-card-img">
                                <img src="{{ asset('client-theme/images/b2.png')}}" alt="">
                            </div>
                            <h3 class="product-name">
                                norco youth bicycle
                            </h3>
                            <span class="product-price">
                                $3,900.00
                            </span>
                        </a>
                        <button class="btn">add to cart</button>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="to-top show-on-scroll">
                    <div class="product-card">
                        <a href="#">
                            <div class="product-card-img">
                                <img src="{{ asset('client-theme/images/MTBROMO_N7_2022.png')}}" alt="">
                            </div>
                            <h3 class="product-name">
                                mt bromo n7
                            </h3>
                            <span class="product-price">
                                $3,900.00
                            </span>
                        </a>
                        <button class="btn">add to cart</button>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="to-top show-on-scroll">
                    <div class="product-card">
                        <a href="#">
                            <div class="product-card-img">
                                <img src="{{ asset('client-theme/images/b1.png')}}" alt="">
                            </div>
                            <h3 class="product-name">
                                haibike xduro rx
                            </h3>
                            <span class="product-price">
                                $3,900.00
                            </span>
                        </a>
                        <button class="btn">add to cart</button>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="to-top show-on-scroll">
                    <div class="product-card">
                        <a href="#">
                            <div class="product-card-img">
                                <img src="{{ asset('client-theme/images/531352.png')}}" alt="">
                            </div>
                            <h3 class="product-name">
                                polygon siskiu
                            </h3>
                            <span class="product-price">
                                $3,900.00
                            </span>
                        </a>
                        <button class="btn">add to cart</button>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="to-top show-on-scroll">
                    <div class="product-card">
                        <a href="#">
                            <div class="product-card-img">
                                <img src="{{ asset('client-theme/images/b2.png')}}" alt="">
                            </div>
                            <h3 class="product-name">
                                norco youth bicycle
                            </h3>
                            <span class="product-price">
                                $3,900.00
                            </span>
                        </a>
                        <button class="btn">add to cart</button>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="to-top show-on-scroll">
                    <div class="product-card">
                        <a href="#">
                            <div class="product-card-img">
                                <img src="{{ asset('client-theme/images/6489548.png')}}" alt="">
                            </div>
                            <h3 class="product-name">
                                xtrada hardtail
                            </h3>
                            <span class="product-price">
                                $3,900.00
                            </span>
                        </a>
                        <button class="btn">add to cart</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end popular section -->

<!-- news section -->
<div class="section">
    <div class="section-title">
        <h3 class="second-title to-right show-on-scroll">bike news</h3>
        <h3 class="main-title to-left show-on-scroll">latest news</h3>
        <div class="btn-wrapper">
            <div class=" to-top show-on-scroll">
                <a href="#" class="btn">view all news</a>
            </div>
        </div>
    </div>
    <div class="section-content">
        <div class="row">
            <div class="col-4">
                <div class="news-card to-top show-on-scroll">
                    <a href="#" class="news-card-img">
                        <div class="img-wrapper">
                            <img src="{{ asset('client-theme/images/portuguese-gravity-MLbsn2aQfQs-unsplash.jpg')}}" alt="">
                        </div>
                    </a>
                    <h3 class="news-title">
                        <a href="#">
                            Cycling On Your Period: Harness The Power Of Your Hormones
                        </a>
                    </h3>
                    <p class="news-preview">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas exercitationem reprehenderit assumenda similique debitis consequuntur aliquid eum temporibus tempora, error qui in iusto ducimus expedita earum aspernatur dignissimos, porro dolores!
                    </p>
                    <a href="#" class="btn">read more</a>
                </div>
            </div>
            <div class="col-4">
                <div class="news-card to-top show-on-scroll">
                    <a href="#" class="news-card-img">
                        <div class="img-wrapper">
                            <img src="{{ asset('client-theme/images/asoggetti-HPpj2190tGs-unsplash.jpg')}}" alt="">
                        </div>
                    </a>
                    <h3 class="news-title">
                        <a href="#">
                            Cycling On Your Period: Harness The Power Of Your Hormones
                        </a>
                    </h3>
                    <p class="news-preview">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas exercitationem reprehenderit assumenda similique debitis consequuntur aliquid eum temporibus tempora, error qui in iusto ducimus expedita earum aspernatur dignissimos, porro dolores!
                    </p>
                    <a href="#" class="btn">read more</a>
                </div>
            </div>
            <div class="col-4">
                <div class="news-card to-top show-on-scroll">
                    <a href="#" class="news-card-img">
                        <div class="img-wrapper">
                            <img src="{{ asset('client-theme/images/paolo-chiabrando-KSwd2lb3lfs-unsplash.jpg')}}" alt="">
                        </div>
                    </a>
                    <h3 class="news-title">
                        <a href="#">
                            Cycling On Your Period: Harness The Power Of Your Hormones
                        </a>
                    </h3>
                    <p class="news-preview">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas exercitationem reprehenderit assumenda similique debitis consequuntur aliquid eum temporibus tempora, error qui in iusto ducimus expedita earum aspernatur dignissimos, porro dolores!
                    </p>
                    <a href="#" class="btn">read more</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection