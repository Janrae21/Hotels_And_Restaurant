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
    <link rel="stylesheet" href="{{ asset('css/About Us.css')}}">

    <title>Hotels And Restaurant</title>

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
                        <a href="{{ route('register') }}"
                            class="Register">Register</a>
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


<img src="{{ asset('Img/homepage.png')}}" alt="">
<section class="about" id="about">
    <div class="container">
        <div class="heading">
            <h2>We serve a perfect place for a perfect vacation.
            </h2>
        </div>
        <div class="content flex top">
            <div class="left" style="text-align:justify;">
                <h1>Welcome at </h1>
                <h3>Luxury Wonders
                </h3>
                <p>
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
                <b> For more information, please</b> visit <u> www.luxurystayphil.com</u></p>

                <button> <a href="" style="color:white;; font-size: 15px">Read More...</a></button>

            </div>
            <div class="right">
                <img src="{{ asset('/Img/sm.webp')}}" style="width:100%; height:60%" alt="">
            </div>
        </div>
    </div>
</section>
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
<div class="container">
    <div class="heading">
        <h5 style="font-size:18px">PASSERELLES NUMERIQUES PHILIPPINES</h5>
        <h4>We are team of expert designers</h4>
        <br><br>
    </div>


</div>
</div>
</section>


<main style="margin-bottom:10%">
    <section class="cards-section">

        <div class="card-wrapper">

            <div class="card">

                <div class="card-image">
                    <img src="{{ asset('/Img/janrae.png')}}"
                        style="width:80%; height:80%; margin-top: 10%;margin-left: 10%;" alt="profile one">
                </div>

                <ul class="social-icons">
                    <li>
                        <a href="">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <i class="fab fa-twitter"></i>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <i class="fab fa-dribbble"></i>
                        </a>
                    </li>

                </ul>

                <div class="details">
                    <h2>Janrae Fagaragan
                        <br>
                        <span class="job-title">WebApp Developer</span>
                    </h2>
                </div>
            </div>
        </div>
        <div class="card-wrapper">

            <div class="card">

                <div class="card-image">
                    <img src="{{ asset('/Img/Anna.jpg')}}"
                        style="width:80%; height:80%; margin-top: 10%;margin-left: 10%" alt="profile one">
                </div>

                <ul class="social-icons">
                    <li>
                        <a href="">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <i class="fab fa-twitter"></i>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <i class="fab fa-dribbble"></i>
                        </a>
                    </li>
                </ul>

                <div class="details">
                    <h2>Anna Mae Jorge
                        <br>
                        <span class="job-title">WebApp Developer</span>
                    </h2>
                </div>
            </div>
        </div>
        <div class="card-wrapper">

            <div class="card">

                <div class="card-image">
                    <img src="{{ asset('/Img/leah.jpg')}}"
                        style="width:80%; height:80%; margin-top: 10%;margin-left: 10%;" alt="profile one">
                </div>

                <ul class="social-icons">
                    <li>
                        <a href="">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <i class="fab fa-twitter"></i>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <i class="fab fa-dribbble"></i>
                        </a>
                    </li>
                </ul>

                <div class="details">
                    <h2>Leah Mangmang
                        <br>
                        <span class="job-title">WebApp Developer</span>
                    </h2>
                </div>
            </div>
        </div>
    </section>
</main>


</div>

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
            <a href="">LEAH MANGMANG<br>
                <a href="">ANNA MAE JORGE</a>
        </div>
        <br>

        <a href="#top" class="btn3" style="color:gray"><i class="fa fa-arrow-up w3-margin-left"></i>To the
            top</a>

    </div>
</footer>
</body>
<script>
/* When the user clicks on the button,
  toggle between hiding and showing the dropdown content */
function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
    if (!event.target.matches('.dropbtn')) {
        var dropdowns = document.getElementsByClassName("dropdown-content");
        var i;
        for (i = 0; i < dropdowns.length; i++) {
            var openDropdown = dropdowns[i];
            if (openDropdown.classList.contains('show')) {
                openDropdown.classList.remove('show');
            }
        }
    }
}
</script>

</html>