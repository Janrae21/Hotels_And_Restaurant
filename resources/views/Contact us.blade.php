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
    <link rel="stylesheet" href="{{ asset('css/Contact Us.css')}}">

    <title>Hotels And Restaurant</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">


    <!-- Styles -->



</head>
<header class="header">
    <div class="container">
        <nav class="navbar flex1">
            <div class="sticky_logo logo">
                <!-- <a href="#"><img src="{{ asset('Img/logo1.png')}}" alt=""></a> -->
            </div>

            <ul class="nav-menu">
                <li> <a href="{{ url('/welcome')}}">Restaurant</a> </li>
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
<div>
    <img src="{{ asset('Img/homepage.png')}}" alt="">
</div>

<body>
    <section id="contact">

        <h1 class="section-header">Contact</h1>

        <div class="contact-wrapper">

            <!-- Left contact page -->

            <form id="contact-form" class="form-horizontal" role="form">

                <div class="form-group">
                    <div class="col-12">
                        <input type="text" class="form-control1" id="name" placeholder="Name:" name="name" value=""
                            required>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-12">
                        <input type="email" class="form-control1" id="email" placeholder="Email: example@gmail.com"
                            name="email" value="" required>
                    </div>
                </div>

                <textarea class="form-control" rows="10" placeholder="Your Message" name="message" required></textarea>

                <button class="btn btn-primary send-button" id="submit" type="submit" value="SEND">
                    <div class="alt-send-button" style="color:#000">
                        <i class="fa fa-paper-plane"></i><span class="send-text">SEND</span>
                    </div>

                </button>

            </form>

            <!-- Left contact page -->

            <div class="direct-contact-container">

                <ul class="contact-list">
                    <li class="list-item"><i class="fa fa-map-marker fa-1x"><span class="contact-text place">Manila |
                                Philippines</span></i></li>

                    <li class="list-item"><i class="fa fa-phone fa-1x"><span class="contact-text phone"><a
                                    href="tel:1-212-555-5555" title="Give me a call">(212) 555-2368</a></span></i></li>

                    <li class="list-item"><i class="fa fa-envelope fa-1x"><span class="contact-text gmail"><a
                                    href="mailto:#" title="Send me an email">luxurys.wonders@gmail.com</a></span></i>
                    </li>

                </ul>
            </div>

        </div>



    </section>

    <footer id="footer">
        <div class="container">
            <h3>LUXURY WONDERS</h3>
            <p>"Welcome to our Luxurious Hotel to Stays, the friendly heart of the Accommodation we offer
                and
                one of
                the most
                attractive Hotel in the Philippines. We heartily invite you to come
                and
                visit Hotel
                yourself, and offer you this website to help you get the first book.



                "</p>

            <div class="copyright">
                &copy; Copyright <strong></strong><span>Luxury Wonders</span></strong>. All Rights Reserved 2022
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