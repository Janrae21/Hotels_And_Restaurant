
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
    <link rel="stylesheet" href="{{ asset('css/Luzon.css')}}">

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
                        <img src="{{ asset('Img/mactan hotel.png')}}" alt="">
                    </div>
                    <div class="right">
                        <h4>Hotel 101 Manila - Multiple Use Hotel </h4>
                        <div class="rate flex">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <p><b> Hotel in Pasay, Manila </b> <br>


                            Located in the Manila Bay district, Hotel 101 Manila offers accommodation 700 metres away
                            from SM Mall of Asia. long queues during checkout. staff are very friendly and nice</p>
                        <h5>Price from<br>
                            ₱ 2,546.10/night</h5>
                        <a href="{{ url('BookingForm')}}"><button class="flex1">
                                <span>Reserve Now!</span>
                                <i class="fas fa-arrow-circle-right"></i>
                            </button></a>
                    </div>
                </div>

                <div class="box flex">
                    <div class="left">
                        <img src="{{ asset('Img/14.png')}}" style="height:100%" alt="">
                    </div>
                    <div class="right">
                        <h4> Seda Residences Makati - Multiple Use Hotel </h4>
                        <div class="rate flex">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <p><b> Hotel in Makati, Manila</b> <br>
                            Set in Manila, 1.3 km from Greenbelt Mall, Seda Residences Makati - Multiple Use Hotel
                            offers accommodation with a restaurant, free private parking and a bar. great location, very
                            clean, very comfortable</p>
                        <h5>Price from<br>
                            ₱ 7,000/night</h5>
                        <a href="{{ url('BookingForm')}}"><button class="flex1">
                                <span>Reserve Now!</span>
                                <i class="fas fa-arrow-circle-right"></i>
                            </button></a>
                    </div>
                </div>
                <div class="box flex">
                    <div class="left">
                        <img src="{{ asset('Img/bed.png')}}" style="height:100%" alt="">
                    </div>
                    <div class="right">
                        <h4>Italy Condotel Darasa </h4>
                        <div class="rate flex">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <p><b>Hotel in Tanauan</b> <br>
                            Located in Tanauan, within 24 km of Taal Lake and 28 km of Picnic Grove, Italy Condotel
                            Darasa offers accommodation with a terrace and free WiFi throughout the property as well as
                            free private parking</p>
                        <h5>From ₱5000/night</h5>
                        <a href="{{ url('BookingForm')}}"><button class="flex1">
                                <span>Reserve Now!</span>
                                <i class="fas fa-arrow-circle-right"></i>
                            </button></a>
                    </div>
                </div>
                <div class="box flex">
                    <div class="left">
                        <img src="{{ asset('Img/bhotel.png')}}" style="height:100%" alt="">
                    </div>
                    <div class="right">
                        <h4>Fairmont Makati</h4>
                        <div class="rate flex">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <p> <b>Hotel in Makati, Manila</b> <br>
                            Situated in the heart of Makati Central Business District, Fairmont Makati features an
                            outdoor swimming pool, a gym and business centre.</p>
                        <h5>Price from<br>
                            ₱ 6,640.00/night</h5>
                        <a href="{{ url('BookingForm')}}"><button class="flex1">
                                <span>Reserve Now!</span>
                                <i class="fas fa-arrow-circle-right"></i>
                            </button></a>
                    </div>
                </div>
                <div class="box flex">
                    <div class="left">
                        <img src="{{ asset('Img/grand.jpg')}}" style="height:100%" alt="">
                    </div>
                    <div class="right">
                        <h4> Grand Hyatt Manila</h4>
                        <div class="rate flex">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <p> <b> Hotel in Fort Bonifacio, Manila<br></b>
                            At the hotel all rooms have air conditioning, a seating area, a flat-screen TV with cable
                            channels, a safety deposit box and a private bathroom with a shower, bathrobes and slippers.
                            Grand Hyatt Manila offers some units with city views, and each room has a coffee machine. At
                            the accommodation rooms have bed linen and towels.
                            A buffet breakfast is available every morning at Grand Hyatt Manila.

                            At the hotel guests are welcome to take advantage of a sauna.</p>
                        <h5>Price from<br>
                            ₱ 8,096/night</h5>
                        <a href="{{ url('BookingForm')}}"><button class="flex1">
                                <span>Reserve Now!</span>
                                <i class="fas fa-arrow-circle-right"></i>
                            </button></a>
                    </div>
                </div>
                <div class="box flex">
                    <div class="left">
                        <img src="{{ asset('Img/219305458.jpg')}}" style="height:100%" alt="">
                    </div>
                    <div class="right">
                        <h4>Paradores de Vigan </h4>
                        <div class="rate flex">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <p><b>Hotels in Vigan <br></b>
                            The hotel will provide guests with air-conditioned rooms offering a desk, a kettle, a
                            microwave, a fridge, a safety deposit box, a flat-screen TV and a private bathroom with a
                            bidet. At Paradores de Vigan each room is equipped with bed linen and towels.

                            Popular points of interest near the accommodation include Bantay Bell Tower, Vigan and
                            Tamag. The nearest airport is Tuguegarao Airport, 290 km from Paradores de Vigan.

                            Couples particularly like the location — they rated it 9.0 for a two-person trip.

                        </p>
                        <h5>Price from<br>
                            ₱ 3,526.79/night</h5>
                        <a href="../html/booking form.html"><button class="flex1">
                                <span>Reserve Now!</span>
                                <i class="fas fa-arrow-circle-right"></i>
                            </button></a>
                    </div>
                </div>
                <div class="box flex">
                    <div class="left">
                        <img src="{{ asset('Img/shangri-la.jpg')}}" style="height:100%" alt="">
                    </div>
                    <div class="right">
                        <h4>Shangri-La The Fort, Manila </h4>
                        <div class="rate flex">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <p><b> Hotel in Fort Bonifacio, Manila</b>

                            <br>
                            Features with luxuriously furnishing, all rooms at the hotel offer views of the city and are
                            fitted with a flat-screen TV with cable channels, air conditioning, and a safety deposit
                            box. Every room is equipped with a private bathroom with shower or bath facilities, slippers
                            and free toiletries.
                        </p>
                        <h5>Price from<br>
                            ₱ 14,900/night</h5>
                        <a href="../html/booking form.html"><button class="flex1">
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