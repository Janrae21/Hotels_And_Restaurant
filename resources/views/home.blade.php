@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"
        integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" />
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
        <link rel="icon" href="{{ asset('Img/logo1.png')}}">
    <!-- ===== Link Swiper's CSS ===== -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <!-- ===== Fontawesome CDN Link ===== -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
    <link rel="stylesheet" href="{{ asset('css/app.css')}}">

    <title>Hotels And Restaurant</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">




</head>
<header class="header">
    <div class="container">
        <nav class="navbar flex1">
            <div class="sticky_logo logo">
                <!-- <a href="#"><img src="{{ asset('Img/logo1.png')}}" alt=""></a> -->
            </div>

            <ul class="nav-menu">
                <li> <a href="{{ url('/Restaurant')}}">Restaurant</a> </li>
                <li> <a href="{{ url('/Hotels')}}">Hotels</a> </li>
                <li> <a href="{{ url('/Contact Us')}}">Contact Us</a> </li>
                <li> <a href="{{ url('/About Us')}}">About Us</a> </li>
            </ul>

            <ul>
                <div>
                    @if (Route::has('login'))
                    <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                        @auth
                        <a href="{{ url('/home') }}" class="Home">Home</a>
                        @else
                        <a href="{{ route('login') }}" class="log">Log
                            in</a>

                        @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="Register">Register</a>
                        @endif
                        @endauth
                    </div>
                    @endif
                </div>
            </ul>
            <div class="hamburger">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </div>


        </nav>
    </div>
</header>



<body>
    <img src="{{ asset('Img/homepage.png')}}" alt="">
    <section class="about" id="about">
        <div class="container">
            <div class="heading">
                
            </div>
            <br>
            <div class="content flex top">
                <div class="left">
                    <h1>Welcome at </h1>
                    <h3>Luxury Wonders
                    </h3>
                    <p> Luxury Wonders
                        Luxury Wonders is a leading hospitality group listed on the Stock Exchange of Philippines.
                        Building on its
                        two core areas of business – Hotels & Resorts and Hospitality Education – the company has
                        expanded its
                        operations over the past four years to comprise five business units. The additional units
                        include Foods,
                        Property Development, and Hospitality-Related Services. Today, the company’s property portfolio
                        comprises
                        more than 300 distinctive hotels, as well as two leading hospitality colleges with campuses in
                        Thailand and
                        the Philippines. Following a three-pronged strategy for sustainable growth, including balance,
                        expansion and
                        diversification, the company has recently expanded into food production, on-demand hospitality
                        services, and
                        property development to reach new markets and add further recurring streams of revenue to the
                        company.

                    </p>
                    <br>
                    <a href="" class="flex1">
                        <span class="span1">About Us</span>
                    </a>
                </div>
                <div class="right">
                    <img src="{{asset('Img/mactan hotel.png')}}" style="width: 60rem;" alt="">
                </div>
            </div>
        </div>
    </section>
    <br><br><br><br><br><br><br><br><br><br><br>
    <div>
        <img src="{{ asset('Img/5.png')}}" alt="">
    </div>
    <b><br><br><br>
        <section style="margin-left: 13%;">
            <div class="swiper mySwiper container">
                <div class="swiper-wrapper content">

                    <div class="swiper-slide card">
                        <div class="card-content">
                            <div class="image">
                                <iframe width="100%" height="100%" src="https://www.youtube.com/embed/-l6zQgrZMQA"
                                    title="YouTube video player" frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen></iframe>
                            </div>

                            <div class="media-icons">
                                <i class="fab fa-facebook"></i>
                                <i class="fab fa-twitter"></i>
                                <i class="fab fa-github"></i>
                            </div>

                            <div class="name-profession">
                                <span class="name">Hospitality Service</span>
                            </div>

                            <div class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide card">
                        <div class="card-content">
                            <div class="image">
                                <iframe width="100%" height="100%" src="https://www.youtube.com/embed/7EdpBH81XIY"
                                    title="YouTube video player" frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen></iframe>
                            </div>

                            <div class="media-icons">
                                <i class="fab fa-facebook"></i>
                                <i class="fab fa-twitter"></i>
                                <i class="fab fa-github"></i>
                            </div>

                            <div class="name-profession">
                                <span class="name">Dining Service</span>

                            </div>

                            <div class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                            </div>


                        </div>
                    </div>
                    <div class="swiper-slide card">
                        <div class="card-content">
                            <div class="image">
                                <iframe width="100%" height="100%" src="https://www.youtube.com/embed/jSqDKdENTXk"
                                    title="YouTube video player" frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen></iframe>
                            </div>

                            <div class="media-icons">
                                <i class="fab fa-facebook"></i>
                                <i class="fab fa-twitter"></i>
                                <i class="fab fa-github"></i>
                            </div>

                            <div class="name-profession">
                                <span class="name">Room Service</span>

                            </div>

                            <div class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                            </div>


                        </div>
                    </div>
                    <div class="swiper-slide card">
                        <div class="card-content">
                            <div class="image">
                                <iframe width="100%" height="100%" src="https://www.youtube.com/embed/Y3jNHamR5dQ"
                                    title="YouTube video player" frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen></iframe>
                            </div>

                            <div class="media-icons">
                                <i class="fab fa-facebook"></i>
                                <i class="fab fa-twitter"></i>
                                <i class="fab fa-github"></i>
                            </div>

                            <div class="name-profession">
                                <span class="name">Hotel Activities</span>

                            </div>

                            <div class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                            </div>


                        </div>
                    </div>
                    <div class="swiper-slide card">
                        <div class="card-content">
                            <div class="image">
                                <iframe width="100%" height="100%" src="https://www.youtube.com/embed/lcU3pruVyUw"
                                    title="YouTube video player" frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen></iframe>
                            </div>

                            <div class="media-icons">
                                <i class="fab fa-facebook"></i>
                                <i class="fab fa-twitter"></i>
                                <i class="fab fa-github"></i>
                            </div>

                            <div class="name-profession">
                                <span class="name">Restaurant Promo</span>

                            </div>

                            <div class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                            </div>


                        </div>
                    </div>
                    <div class="swiper-slide card">
                        <div class="card-content">
                            <div class="image">
                                <iframe width="100%" height="100%" src="https://www.youtube.com/embed/kRCH8kD1GD0"
                                    title="YouTube video player" frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen></iframe>
                            </div>

                            <div class="media-icons">
                                <i class="fab fa-facebook"></i>
                                <i class="fab fa-twitter"></i>
                                <i class="fab fa-github"></i>
                            </div>

                            <div class="name-profession">
                                <span class="name">Finger-licking Foods</span>

                            </div>

                            <div class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                            </div>


                        </div>
                    </div>
                </div>
            </div>

            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-pagination"></div>
        </section>
        <br><br>

        <!-- Swiper JS -->
        <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

        <!-- Initialize Swiper -->
        <script>
        var swiper = new Swiper(".mySwiper", {
            slidesPerView: 3,
            spaceBetween: 30,
            slidesPerGroup: 3,
            loop: true,
            loopFillGroupWithBlank: true,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });
        </script>


        <footer id="footer">
            <div class="container">
                <h3>LUXURY STAY'S</h3>
                <p>"Welcome to our Luxurious Hotel to Stays, the friendly heart of the Accommodation we offer
                    and
                    one of
                    the most
                    attractive Hotel in the Philippines. We heartily invite you to come
                    and
                    visit Hotel
                    yourself, and offer you this website to help you get the first book.



                    "</p>
                <div class="social flex" style="margin-left:44%; margin-bottom: 5% ; ">
                    <a href=""><i class="fab fa-facebook-f" style="color:white;"></i></a>
                    <a href=""><i class="fab fa-twitter" style="color:white;"></i></a>
                    <a href=""><i class="fab fa-instagram" style="color:white;"></i></a>
                    <a href=""><i class="fab fa-youtube" style="color:white;"></i></a>
                </div>
                <div class="copyright">
                    &copy; Copyright <strong></strong><span>Luxury Stays</span></strong>. All Rights Reserved 2022
                </div>
                <div class="credits">

                    Administered by <br> <a href="">JANRAE FAGARAGAN</a><br>
                    <a href="">LEAH MANGMANG</a><br>

                    <a href="">ANNA MAE JORGE</a>

                </div>
                <br>

                <a href="#top" class="btn3" style="color:gray"><i class="fa fa-arrow-up w3-margin-left"></i>To the
                    top</a>

            </div>
        </footer>

        <script>
        const hamburger = document.querySelector(" .hamburger");
        const navMenu = document.querySelector(".nav-menu");
        hamburger.addEventListener("click", mobliemmenu);

        function mobliemmenu() {
            hamburger.classList.toggle("active");
            navMenu.classList.toggle("active");
        }
        window.addEventListener("scroll", function() {
            var
                header = document.querySelector("header");
            header.classList.toggle("sticky", window.scrollY > 0)
        })
        </script>
</body>

</html>
@endsection