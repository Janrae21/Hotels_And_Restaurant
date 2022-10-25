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
    <link rel="stylesheet" href="{{ asset('css/Mindanao.css')}}">

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
                        <img src="{{ asset('Img/tique.jpg')}}" alt="">
                    </div>
                    <div class="right">
                        <h4>Surfing Temple Hotel Boutique</h4>
                        <div class="rate flex">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <p><b> Hotel in General Luna </b> <br>


                            Surfing Temple Hotel Boutique features accommodation with a restaurant, free private
                            parking, an outdoor swimming pool and a bar.All rooms are fitted with air conditioning, a
                            fridge, a minibar, a kettle, a bidet, a hairdryer and a wardrobe. All units have a private
                            bathroom, free toiletries and bed linen.
                        </p>
                        <h5>Price from<br>
                            ₱ 7,125/night
                        </h5>
                        <a href="{{ url('BookingForm')}}"><button class="flex1">
                                <span>Book Now!</span>
                                <i class="fas fa-arrow-circle-right"></i>
                            </button></a>
                    </div>
                </div>

                <div class="box flex">
                    <div class="left">
                        <img src="{{ asset('Img/asrodel.jpg')}}" style="height:100%" alt="">
                    </div>
                    <div class="right">
                        <h4>Capital O 461 Asrodel Hotel </h4>
                        <div class="rate flex">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <p><b>Davao City, Davao del Sur, Philippines</b> <br>
                            Capital O 461 Asrodel Hotel provides rooms with air conditioning and a private bathroom in
                            Davao City. Among the facilities at this property are a 24-hour front desk and room service,
                            along with free WiFi throughout the property. Eden Nature Park is 28 km away and D' Bone
                            Collector Museum is 1 km from the hotel.

                            At the hotel, rooms are equipped with a desk. At Capital O 461 Asrodel Hotel every room is
                            equipped with bed linen and towels.</p>
                        <h5>Price from<br>
                            ₱ 1,447.55/night
                        </h5>
                        <a href="{{ url('BookingForm')}}"><button class="flex1">
                                <span>Reserve now!</span>
                                <i class="fas fa-arrow-circle-right"></i>
                            </button></a>
                    </div>
                </div>
                <div class="box flex">
                    <div class="left">
                        <img src="{{ asset('Img/Rosa.jpg')}}" style="height:100%" alt="">
                    </div>
                    <div class="right">
                        <h4>DaRosa Del Mar </h4>
                        <div class="rate flex">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <p><b> Hotel in Santa Monica</b> <br>
                            DaRosa Del Mar offers accommodation with a restaurant, free private parking, a bar and a
                            shared lounge. With a garden, the 3-star hotel has air-conditioned rooms with free WiFi,
                            each with a private bathroom. The hotel has a private beach area.

                            At the hotel, all rooms include a desk, bed linen and a balcony with a garden view. All
                            guest rooms feature a safety deposit box.</p>
                        <h5>Price from<br>
                            ₱ 1,500/night
                        </h5>
                        <a href="{{ url('BookingForm')}}"><button class="flex1">
                                <span>Reserve now!</span>
                                <i class="fas fa-arrow-circle-right"></i>
                            </button></a>
                    </div>
                </div>
                <div class="box flex">
                    <div class="left">
                        <img src="{{ asset('Img/Agoho.jpg')}}" style="height:100%" alt="">
                    </div>
                    <div class="right">
                        <h4>Agoho Resort</h4>
                        <div class="rate flex">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <p> <b>Agoho Agoho Mambajao</b> <br>
                            Featuring family rooms, this property also provides guests with a terrace. Some units at the
                            property have a patio with a river view.

                            Complete with a private bathroom fitted with a bidet and free toiletries, all rooms at the
                            hotel have a flat-screen TV and air conditioning, and selected rooms also boast a seating
                            area. At Agoho Resort the rooms have bed linen and towels.</p>
                        <h5>Price from<br>
                            ₱ 2,500/night
                        </h5>
                        <a href="{{ url('BookingForm')}}"><button class="flex1">
                                <span>Reserve now!</span>
                                <i class="fas fa-arrow-circle-right"></i>
                            </button></a>
                    </div>
                </div>
                <div class="box flex">
                    <div class="left">
                        <img src="{{ asset('Img/farm.jpg')}}" style="height:100%" alt="">
                    </div>
                    <div class="right">
                        <h4> San Pedro Country Farm Resort and Event Center Inc</h4>
                        <div class="rate flex">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <p> <b> Hotel in Cantilan<br></b>
                            It provides accommodation with a restaurant, free private parking, an outdoor swimming pool
                            and a bar. With a garden, the 3-star hotel has air-conditioned rooms with free WiFi, each
                            with a private bathroom. The accommodation features a 24-hour front desk, room service and
                            luggage storage for guests.

                            Each room has a flat-screen TV, and certain rooms at the hotel have a garden view.

                            San Pedro Country Farm Resort and Event Center Inc offers a à la carte or Asian breakfast.

                            You can play table tennis and tennis at the accommodation.</p>
                        <h5>Price from<br>
                            ₱ 2,517.50/night
                        </h5>
                        <a href="{{ url('BookingForm')}}"><button class="flex1">
                                <span>Reserve now!</span>
                                <i class="fas fa-arrow-circle-right"></i>
                            </button></a>
                    </div>
                </div>
                <div class="box flex">
                    <div class="left">
                        <img src="{{ asset('Img/bourke.jpg')}}" style="height:100%" alt="">
                    </div>
                    <div class="right">
                        <h4>The Bourke Hotel</h4>
                        <div class="rate flex">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <p><b>Davao City, Philippines<br></b>
                            The Bourke Hotel features a tour desk, allergy-free rooms, a restaurant, free WiFi
                            throughout the property and a bar. Boasting family rooms, this property also provides guests
                            with a terrace. Some units at the property include a patio with a city view.
                        </p>
                        <h5>Price from<br>
                            ₱ 3,829.50/night
                        </h5>
                        <a href="{{ url('BookingForm')}}"><button class="flex1">
                                <span>Reserve now!</span>
                                <i class="fas fa-arrow-circle-right"></i>
                            </button></a>
                    </div>
                </div>
                <div class="box flex">
                    <div class="left">
                        <img src="{{ asset('Img/acacia.jpg')}}" style="height:100%" alt="">
                    </div>
                    <div class="right">
                        <h4>Acacia Hotel Davao - Multiple Use and Staycation Approved</h4>
                        <div class="rate flex">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <p><b>Laurel Street Lanag, Davao City</b>

                            <br>
                            All rooms at the hotel come with air conditioning, a seating area, a flat-screen TV with
                            cable channels, a safety deposit box and a private bathroom with a bidet, bathrobes and
                            slippers. Acacia Hotel Davao - Multiple Use and Staycation Approved provides some rooms with
                            pool views, and the rooms are equipped with a kettle. At the accommodation rooms are
                            equipped with bed linen and towels.
                        </p>
                        <h5>Price from<br>
                            ₱ 4,807.69/night
                        </h5>
                        <a href="{{ url('BookingForm')}}"><button class="flex1">
                                <span>Reserve now!</span>
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