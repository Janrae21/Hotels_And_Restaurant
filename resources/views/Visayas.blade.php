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
    <link rel="stylesheet" href="{{ asset('css/Visayas.css')}}">

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

<div class="book">
    <form class="book-form">
        <div class="form-item">
            <label for="checkin-date">Check In Date: </label>
            <input type="date" id="chekin-date">
        </div>
        <div class="form-item">
            <label for="checkout-date">Check Out Date: </label>
            <input type="date" id="chekout-date">
        </div>
        <div class="form-item">
            <label for="adult">Adults: </label>
            <input type="number" min="1" value="1" id="adult">
        </div>
        <div class="form-item">
            <label for="children">Children: </label>
            <input type="number" min="1" value="1" id="children">
        </div>
        <div class="form-item">
            <label for="rooms">Rooms: </label>
            <input type="number" min="1" value="1" id="rooms">
        </div>
        <div class="form-item">
            <input type="submit" class="btn" value="Reserve Now">
        </div>
    </form>
</div>





<section class="offer mtop" id="services">
    <div class="container">
        <div class="content grid1 mtop">
            <div class="box flex">
                <div class="left">
                    <img src="{{ asset('Img/Azure.jpg')}}" alt="">
                </div>
                <div class="right">
                    <h4>Azure Camotes Resort Hotel</h4>
                    <div class="rate flex">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p><b> Camotes Islands </b> <br>


                        Located in Camotes Islands, 500 m from Puerto Bello, Azure Camotes Resort Hotel provides
                        accommodation with a restaurant, free private parking, an outdoor swimming pool and a bar.
                    </p>
                    <h5>Price from<br>
                        ₱ 1,799/night <br>
                        +₱ 396 taxes and charges</h5>
                    <a href="{{ url('BookingForm')}}"><button class="flex1">
                            <span>Reserve Now!</span>
                            <i class="fas fa-arrow-circle-right"></i>
                        </button></a>
                </div>
            </div>

            <div class="box flex">
                <div class="left">
                    <img src="{{ asset('Img/pearl.jpg')}}" style="height:100%" alt="">
                </div>
                <div class="right">
                    <h4> Visaya Pearl </h4>
                    <div class="rate flex">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p><b>Panglao</b> <br>
                        Each unit comes with a sofa bed, a seating area, a flat-screen TV, a well-fitted kitchen, a
                        safety deposit box and a private bathroom with a hairdryer. A fridge, a stovetop and toaster
                        are also provided, as well as a kettle.</p>
                    <h5>Price from<br>
                        ₱ 1,970/night<br>
                        +₱ 433 taxes and charges</h5>
                    <a href="{{ url('BookingForm')}}"><button class="flex1">
                            <span>Reserve Now!</span>
                            <i class="fas fa-arrow-circle-right"></i>
                        </button></a>
                </div>
            </div>
            <div class="box flex">
                <div class="left">
                    <img src="{{ asset('Img/bantayan.jpg')}}" style="height:100%" alt="">
                </div>
                <div class="right">
                    <h4>BANTAYAN Indai Aquasports and Resort </h4>
                    <div class="rate flex">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p><b>Pooc</b> <br>
                        The units at the hotel come with a seating area. All rooms come with a private bathroom, a
                        bidet and free toiletries, and certain units at BANTAYAN Indai Aquasports and Resort have a
                        safety deposit box. At the accommodation the rooms have bed linen and towels.

                        BANTAYAN Indai Aquasports and Resort offers a continental or American breakfast.

                        The hotel offers a terrace.</p>
                    <h5>Price from<br>
                        ₱ 2,527/night<br>
                        +₱ 556 taxes and charges</h5>
                    <a href="{{ url('BookingForm')}}"><button class="flex1">
                            <span>Reserve Now!</span>
                            <i class="fas fa-arrow-circle-right"></i>
                        </button></a>
                </div>
            </div>
            <div class="box flex">
                <div class="left">
                    <img src="{{ asset('Img/avenue.jpg')}}" style="height:100%" alt="">
                </div>
                <div class="right">
                    <h4>88th Avenue</h4>
                    <div class="rate flex">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p> <b>Cebu City</b> <br>
                        Each unit comes with a sofa, a seating area, a flat-screen TV, a well-fitted kitchenette, a
                        safety deposit box and a private bathroom with bathrobes. A microwave, a fridge and stovetop
                        are also provided, as well as a kettle.

                        At the aparthotel guests are welcome to take advantage of a hot tub.</p>
                    <h5>Price from<br>
                        ₱ 12,142/night<br>
                        +₱ 1,457 taxes and charge</h5>
                    <a href="{{ url('BookingForm')}}"><button class="flex1">
                            <span>Reserve Now!</span>
                            <i class="fas fa-arrow-circle-right"></i>
                        </button></a>
                </div>
            </div>
            <div class="box flex">
                <div class="left">
                    <img src="{{ asset('Img/CebuParklane.jpg')}}" alt="">
                </div>
                <div class="right">
                    <h4> Cebu Parklane International Hotel</h4>
                    <div class="rate flex">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p> <b> Lahug, Cebu City<br></b>
                        Guests can use the fitness centre and sauna for free, while in-room massage services may be
                        arranged at an additional cost. The 24-hour front desk can assist guests with any queries or
                        for currency exchange, tour arrangements, and concierge services. Airport shuttle service
                        and car rentals are also available at an additional charge. Complimentary parking is
                        accessible at the property.

                        At the hotel guests are welcome to take advantage of a sauna.</p>
                    <h5>Price from<br>
                        ₱ 5,740/night<br>
                        +₱ 1,263 taxes and charges</h5>
                    <a href="BookingForm"><button class="flex1">
                            <span>Reserve Now!</span>
                            <i class="fas fa-arrow-circle-right"></i>
                        </button></a>
                </div>
            </div>
            <div class="box flex">
                <div class="left">
                    <img src="{{ asset('Img/inn.jpg')}}" style="height:100%" alt="">
                </div>
                <div class="right">
                    <h4>Holiday Inn Cebu City, an IHG Hotel</h4>
                    <div class="rate flex">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p><b>Cebu Business Park, Cebu City <br></b>
                        At the hotel, each room is equipped with a desk. Each room includes a safety deposit box and
                        some rooms have city views. At Holiday Inn Cebu City, an IHG Hotel rooms are equipped with
                        bed linen and towels.

                        A continental breakfast is available each morning at the accommodation.

                        Guests will find a 24-hour front desk, a shared lounge and a business centre at the
                        property.
                    </p>
                    <h5>Price from<br>
                        ₱ 4,400/night<br>
                        +₱ 1,001 taxes and charges</h5>
                    <a href="{{ url('BookingForm')}}"><button class="flex1">
                            <span>Reserve Now!</span>
                            <i class="fas fa-arrow-circle-right"></i>
                        </button></a>
                </div>
            </div>
            <div class="box flex">
                <div class="left">
                    <img src="{{ asset('Img/sandscape.jpg')}}" style="height:100%" alt="">
                </div>
                <div class="right">
                    <h4>Sandscape Hotel</h4>
                    <div class="rate flex">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p><b> Bantayan Island</b>

                        <br>
                        Sandscape Hotel is situated in Pooc, Santa Fe, Bantayan Island. Among the facilities at this
                        property are a shared kitchen and a shared lounge, along with free WiFi throughout the
                        property. Private parking can be arranged at an extra charge.
                        The hotel offers a à la carte or Asian breakfast.
                    </p>
                    <h5>Price from<br>
                        ₱ 3,150/night<br>
                        +₱ 693 taxes and charges</h5>
                    <a href="{{ url('BookingForm')}}"><button class="flex1">
                            <span>Reserve Now!</span>
                            <i class="fas fa-arrow-circle-right"></i>
                        </button></a>
                </div>
            </div>
            <div class="filters__container" data-lp-ga-view="filter:view">
                <h3 class="filters__header">Filter by:</h3>
                <hr class="bui-divider bui-spacer--medium">
                <div class="bui-spacer--large"><br>
                    <h4 class="filter__title">Star rating</h4>
                    <div class="bui-group filters__list" role="group">
                        <span onclick="" class="bui-checkbox filter" data-lp-ga-click="filter:click">
                            <input class="bui-checkbox__input" type="checkbox">
                            <span class="bui-checkbox__label filter__label">5 stars</span><br>
                        </span>
                        <span onclick="" class="bui-checkbox filter" data-lp-ga-click="filter:click">
                            <input class="bui-checkbox__input" type="checkbox">
                            <span class="bui-checkbox__label filter__label">4 stars</span><br>
                        </span>
                        <span onclick="" class="bui-checkbox filter" data-lp-ga-click="filter:click">
                            <input class="bui-checkbox__input" type="checkbox">
                            <span class="bui-checkbox__label filter__label">3 stars</span><br>
                        </span>
                        <span onclick="" class="bui-checkbox filter" data-lp-ga-click="filter:click">
                            <input class="bui-checkbox__input" type="checkbox">
                            <span class="bui-checkbox__label filter__label">2 stars</span><br>
                        </span>
                        <span onclick="" class="bui-checkbox filter" data-lp-ga-click="filter:click">
                            <input class="bui-checkbox__input" type="checkbox">
                            <span class="bui-checkbox__label filter__label">1 star</span><br>
                        </span>
                    </div>
                </div>
                <br>
                <!--Amenities-->
                <h4 class="filter__title">Amenities</h4>
                <div class="bui-group filters__list" role="group">
                    <span onclick="" class="bui-checkbox filter" data-lp-ga-click="filter:click">
                        <input class="bui-checkbox__input" type="checkbox">
                        <span class="bui-checkbox__label filter__label">Free Parking</span><br>
                    </span>
                    <span onclick="" class="bui-checkbox filter" data-lp-ga-click="filter:click">
                        <input class="bui-checkbox__input" type="checkbox">
                        <span class="bui-checkbox__label filter__label">Free Wifi</span><br>
                    </span>
                    <span onclick="" class="bui-checkbox filter" data-lp-ga-click="filter:click">
                        <input class="bui-checkbox__input" type="checkbox">
                        <span class="bui-checkbox__label filter__label">Breakfast included
                        </span><br>
                    </span>
                    <span onclick="" class="bui-checkbox filter" data-lp-ga-click="filter:click">
                        <input class="bui-checkbox__input" type="checkbox">
                        <span class="bui-checkbox__label filter__label">Pool</span><br>
                    </span>
                    <span onclick="" class="bui-checkbox filter" data-lp-ga-click="filter:click">
                        <input class="bui-checkbox__input" type="checkbox">
                        <span class="bui-checkbox__label filter__label">Spa</span><br>
                    </span>
                    <span onclick="" class="bui-checkbox filter" data-lp-ga-click="filter:click">
                        <input class="bui-checkbox__input" type="checkbox">
                        <span class="bui-checkbox__label filter__label">Yoga Class</span><br>
                    </span>
                    <a style="color: #CC8C18;" href="">+ See all</a>
                </div>
                <br>
                <!--Style-->
                <br>
                <h4 class="filter__title"> Style</h4>
                <div class="bui-group filters__list" role="group">
                    <span onclick="" class="bui-checkbox filter" data-lp-ga-click="filter:click">
                        <input class="bui-checkbox__input" type="checkbox">
                        <span class="bui-checkbox__label filter__label">Budget</span><br>
                    </span>
                    <span onclick="" class="bui-checkbox filter" data-lp-ga-click="filter:click">
                        <input class="bui-checkbox__input" type="checkbox">
                        <span class="bui-checkbox__label filter__label">Mid-ranges</span><br>
                    </span>
                    <span onclick="" class="bui-checkbox filter" data-lp-ga-click="filter:click">
                        <input class="bui-checkbox__input" type="checkbox">
                        <span class="bui-checkbox__label filter__label">Family- friendly</span><br>
                    </span>
                    <span onclick="" class="bui-checkbox filter" data-lp-ga-click="filter:click">
                        <input class="bui-checkbox__input" type="checkbox">
                        <span class="bui-checkbox__label filter__label">Business</span><br>
                    </span>
                    <span onclick="" class="bui-checkbox filter" data-lp-ga-click="filter:click">
                        <input class="bui-checkbox__input" type="checkbox">
                        <span class="bui-checkbox__label filter__label">Modern</span><br>
                    </span>
                </div>
                <br>
                <!--Deals-->
                <div class="bui-spacer--large">
                    <h4 class="filter__title"> Deals</h4>
                    <div class="bui-group filters__list" role="group">
                        <span onclick="" class="bui-checkbox filter" data-lp-ga-click="filter:click">
                            <input class="bui-checkbox__input" type="checkbox">
                            <span class="bui-checkbox__label filter__label">Free Cancellation</span><br>
                        </span>
                        <span onclick="" class="bui-checkbox filter" data-lp-ga-click="filter:click">
                            <input class="bui-checkbox__input" type="checkbox">
                            <span class="bui-checkbox__label filter__label">Reserve now, pay at stay</span><br>
                        </span>
                        <span onclick="" class="bui-checkbox filter" data-lp-ga-click="filter:click">
                            <input class="bui-checkbox__input" type="checkbox">
                            <span class="bui-checkbox__label filter__label">Properties with special
                                offers</span><br>
                        </span>`
                    </div>
                </div>
            </div>
        </div>
</section><br><br>
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

</body>

</html>