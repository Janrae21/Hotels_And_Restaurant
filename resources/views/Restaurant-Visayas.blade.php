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
    <link rel="stylesheet" href="{{ asset('css/Restaurant-Visayas.css')}}">

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
                <input type="submit" class="btn" value="Book Now">
            </div>
        </form>
    </div>





    <section class="offer mtop" id="services">
        <div class="container">
            <div class="content grid1 mtop">
                <div class="box flex">
                    <div class="left">
                        <img src="https://media-cdn.tripadvisor.com/media/photo-s/0e/5d/fa/45/when-it-comes-to-authentic.jpg"
                            alt="">
                    </div>
                    <div class="right">
                        <h4>Acqua at Shangri-La Mactan, Cebu - Luxury Restaurant Visayas </h4>
                        <div class="rate flex">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <p><b>Acqua at Shangri-La Mactan, Cebu </b> <br>


                            Located in Punta Engano Road, Lapu Lapu 6015 Philippines. The ambiance was nice, quiet,
                            clean and
                            comfortable seat, staff was kind, courteous, polite,efficient and quick service, food
                            serving is average.
                        </p>
                        <h5>Price from<br>
                            ₱ 396/serve</h5>
                        <a href="{{ url('BookingRestaurant')}}"><button class="flex1">
                                <span>Book Now!</span>
                                <i class="fas fa-arrow-circle-right"></i>
                            </button></a>
                    </div>
                </div>

                <div class="box flex">
                    <div class="left">
                        <img src="https://media-cdn.tripadvisor.com/media/photo-s/06/90/df/f2/blu-bar.jpg"
                            style="height:100%" alt="">
                    </div>
                    <div class="right">
                        <h4> Blu Bar and Grill - Luxury Restaurant Visayas </h4>
                        <div class="rate flex">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <p><b>Blu Bar and Grill
                            </b> <br>
                            Located at Marco Polo Hotel, Cebu City 6000 Philippines. <br>FEATURES
                            Reservations, Outdoor Seating, Seating, Parking Available, Wheelchair Accessible, Serves
                            Alcohol, Full
                            Bar, Table Service</p>
                        <h5>Price from<br>
                            ₱ 470/serve
                        </h5>
                        <a href="{{ url('BookingRestaurant')}}"><button class="flex1">
                                <span>Book Now!</span>
                                <i class="fas fa-arrow-circle-right"></i>
                            </button></a>
                    </div>
                </div>
                <div class="box flex">
                    <div class="left">
                        <img src="https://media-cdn.tripadvisor.com/media/photo-s/16/8d/c2/7c/photo1jpg.jpg"
                            style="height:100%" alt="">
                    </div>
                    <div class="right">
                        <h4>Tavolata - Luxury Restaurant Visayas/h4>
                            <div class="rate flex">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <p><b>Tavolata</b> <br>
                                Located at A.S. Fortuna St. Design Center of Cebu, Cebu City 6000 Philippines.<br>Such a
                                lovely place.
                                Seafood was unbelievably good!</p>
                            <h5>Price from<br>
                                ₱527/serve</h5>
                            <a href="{{ url('BookingRestaurant')}}"><button class="flex1">
                                    <span>Book Now!</span>
                                    <i class="fas fa-arrow-circle-right"></i>
                                </button></a>
                    </div>
                </div>
                <div class="box flex">
                    <div class="left">
                        <img src="https://media-cdn.tripadvisor.com/media/photo-s/17/32/a3/93/seafood-platter.jpg"
                            style="height:100%" alt="">
                    </div>
                    <div class="right">
                        <h4>The Terrace - Luxury Restaurant Visayas</h4>
                        <div class="rate flex">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <p> <b>The Terrace</b> <br>
                            Located at Inside Bliss Day Spa and Hotel Casia - Soong Road, Lapu Lapu 6015
                            Philippines.<br>
                            Its not a restaurant anymore. Its a cafe, where you can take studio pictures. Went with
                            friends and had a
                            good time. The owner needs to update this.</p>
                        <h5>Price from<br>
                            ₱ 342/serve</h5>
                        <a href="{{ url('BookingRestaurant')}}"><button class="flex1">
                                <span>Book Now!</span>
                                <i class="fas fa-arrow-circle-right"></i>
                            </button></a>
                    </div>
                </div>
                <div class="box flex">
                    <div class="left">
                        <img src="https://media-cdn.tripadvisor.com/media/photo-s/1c/70/8c/f1/outdoor-view-of-happy.jpg"
                            style="height:100%" alt="">
                    </div>
                    <div class="right">
                        <h4> Happy Hippos - Luxury Restaurant Visayas
                        </h4>
                        <div class="rate flex">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <p> <b>Happy Hippos
                                <br></b>
                            Located at Streetscape Unit 5, Cebu City 6000 Philippines. <br>
                            Perfect place for food and friends. Something for everyone from vegan to vegetarian to
                            pescatarian and
                            meat eaters.</p>
                        <h5>Price from<br>
                            ₱ 740/serve</h5>
                        <a href="{{ url('BookingRestaurant')}}"><button class="flex1">
                                <span>Book Now!</span>
                                <i class="fas fa-arrow-circle-right"></i>
                            </button></a>
                    </div>
                </div>
                <div class="box flex">
                    <div class="left">
                        <img src="https://media-cdn.tripadvisor.com/media/photo-s/16/10/9d/08/the-seafood-king-is-here.jpg"
                            style="height:100%" alt="">
                    </div>
                    <div class="right">
                        <h4>Hai Shin Lou Cebu - Luxury Restaurant Visayas</h4>
                        <div class="rate flex">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <p><b>Hai Shin Lou Cebu
                                <br></b>
                            Located at Cebu Veterans Drive Nivel Hills, Apas, Cebu City 6000 Philippines. <br>So
                            delicious!
                            Amazing taste, real authentic Chinese cuisine in Cebu.
                        </p>
                        <h5>Price from<br>
                            ₱ 400/serve</h5>
                        <a href="{{ url('BookingRestaurant')}}"><button class="flex1">
                                <span>Book Now!</span>
                                <i class="fas fa-arrow-circle-right"></i>
                            </button></a>
                    </div>
                </div>
                <div class="box flex">
                    <div class="left">
                        <img src="https://media-cdn.tripadvisor.com/media/photo-s/07/d1/d0/5f/the-abalone-buffet-restaurant.jpg"
                            style="height:100%" alt="">
                    </div>
                    <div class="right">
                        <h4>The Abalone Buffet - Luxury Restaurant Visayas </h4>
                        <div class="rate flex">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <p><b>The Abalone Buffet</b>

                            <br>
                            Located at M.L Quezon Highway, Brgy. Maribago, Lapu Lapu 6015 Philippines.<br>
                            Buffet Breakfast
                            They serve wide array of delectable foods from Chinese cuisines to Italian pastas.
                        </p>
                        <h5>Price from<br>
                            ₱ 693/serve</h5>
                        <a href="{{ url('BookingRestaurant')}}"><button class="flex1">
                                <span>Book Now!</span>
                                <i class="fas fa-arrow-circle-right"></i>
                            </button></a>
                    </div>
                </div>
                <div class="filters__container" data-lp-ga-view="filter:view">
                    <h3 class="filters__header">Filter by:</h3>
                    <hr class="bui-divider bui-spacer--medium">
                    <div class="bui-spacer--large"><br>
                        <h4 class="filter__title">Dining Option</h4>
                        <div class="bui-group filters__list" role="group">
                            <span onclick="" class="bui-checkbox filter" data-lp-ga-click="filter:click">
                                <input class="bui-checkbox__input" type="checkbox">
                                <span class="bui-checkbox__label filter__label">All dining option</span><br>
                            </span>
                            <span onclick="" class="bui-checkbox filter" data-lp-ga-click="filter:click">
                                <input class="bui-checkbox__input" type="checkbox">
                                <span class="bui-checkbox__label filter__label">Delivery only </span><br>
                            </span>
                            <span onclick="" class="bui-checkbox filter" data-lp-ga-click="filter:click">
                                <input class="bui-checkbox__input" type="checkbox">
                                <span class="bui-checkbox__label filter__label">Take out only</span><br>
                            </span>
                        </div>
                    </div>

                    <br>
                    <div class="bui-spacer--large">
                        <h4 class="filter__title"> Price Standard</h4>
                        <div class="bui-group filters__list" role="group">
                            <span onclick="" class="bui-checkbox filter" data-lp-ga-click="filter:click">
                                <input class="bui-checkbox__input" type="checkbox">
                                <span class="bui-checkbox__label filter__label">₱ 0 - ₱15,000+</span><br>
                            </span>
                        </div>
                    </div>
                    <br>

                    <div class="bui-spacer--large">
                        <h4 class="filter__title"> Seating Options</h4>
                        <div class="bui-group filters__list" role="group">
                            <span onclick="" class="bui-checkbox filter" data-lp-ga-click="filter:click">
                                <input class="bui-checkbox__input" type="checkbox">
                                <span class="bui-checkbox__label filter__label">Bar</span><br>
                            </span>
                            <span onclick="" class="bui-checkbox filter" data-lp-ga-click="filter:click">
                                <input class="bui-checkbox__input" type="checkbox">
                                <span class="bui-checkbox__label filter__label">Standard</span><br>
                            </span>
                            <span onclick="" class="bui-checkbox filter" data-lp-ga-click="filter:click">
                                <input class="bui-checkbox__input" type="checkbox">
                                <span class="bui-checkbox__label filter__label">Outdoor</span><br>
                            </span>
                        </div>
                    </div>
                    <br>
                    <!--Amenities-->
                    <h4 class="filter__title">Cuisine</h4>
                    <div class="bui-group filters__list" role="group">
                        <span onclick="" class="bui-checkbox filter" data-lp-ga-click="filter:click">
                            <input class="bui-checkbox__input" type="checkbox">
                            <span class="bui-checkbox__label filter__label">American </span><br>
                        </span>
                        <span onclick="" class="bui-checkbox filter" data-lp-ga-click="filter:click">
                            <input class="bui-checkbox__input" type="checkbox">
                            <span class="bui-checkbox__label filter__label">Italian</span><br>
                        </span>
                        <span onclick="" class="bui-checkbox filter" data-lp-ga-click="filter:click">
                            <input class="bui-checkbox__input" type="checkbox">
                            <span class="bui-checkbox__label filter__label">Steakhouse
                            </span><br>
                        </span>
                        <span onclick="" class="bui-checkbox filter" data-lp-ga-click="filter:click">
                            <input class="bui-checkbox__input" type="checkbox">
                            <span class="bui-checkbox__label filter__label">Japanese</span><br>
                        </span>
                        <span onclick="" class="bui-checkbox filter" data-lp-ga-click="filter:click">
                            <input class="bui-checkbox__input" type="checkbox">
                            <span class="bui-checkbox__label filter__label">Pizzeria</span><br>
                        </span>
                        <span onclick="" class="bui-checkbox filter" data-lp-ga-click="filter:click">
                            <input class="bui-checkbox__input" type="checkbox">
                            <span class="bui-checkbox__label filter__label">Tapas/Small Plates</span><br>
                        </span>
                        <a style="color: #CC8C18;" href="">+ More</a>
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
                        <h4 class="filter__title"> Top Rated</h4>
                        <div class="bui-group filters__list" role="group">
                            <span onclick="" class="bui-checkbox filter" data-lp-ga-click="filter:click">
                                <input class="bui-checkbox__input" type="checkbox">
                                <span class="bui-checkbox__label filter__label">Authenthic</span><br>
                            </span>
                            <span onclick="" class="bui-checkbox filter" data-lp-ga-click="filter:click">
                                <input class="bui-checkbox__input" type="checkbox">
                                <span class="bui-checkbox__label filter__label">Business Meals</span><br>
                            </span>
                            <span onclick="" class="bui-checkbox filter" data-lp-ga-click="filter:click">
                                <input class="bui-checkbox__input" type="checkbox">
                                <span class="bui-checkbox__label filter__label">Casual</span><br>
                            </span>
                            <span onclick="" class="bui-checkbox filter" data-lp-ga-click="filter:click">
                                <input class="bui-checkbox__input" type="checkbox">
                                <span class="bui-checkbox__label filter__label">Comfort Food</span><br>
                            </span>
                            <span onclick="" class="bui-checkbox filter" data-lp-ga-click="filter:click">
                                <input class="bui-checkbox__input" type="checkbox">
                                <span class="bui-checkbox__label filter__label">Cozy</span><br>
                            </span>
                            <span onclick="" class="bui-checkbox filter" data-lp-ga-click="filter:click">
                                <input class="bui-checkbox__input" type="checkbox">
                                <span class="bui-checkbox__label filter__label">Creative Cruisine</span><br>
                            </span>
                            <a style="color: #CC8C18;" href="">+ More</a>
                        </div>
                    </div>
                    <br>

                    <div class="bui-spacer--large">
                        <h4 class="filter__title"> Safety Precautions</h4>
                        <div class="bui-group filters__list" role="group">
                            <span onclick="" class="bui-checkbox filter" data-lp-ga-click="filter:click">
                                <input class="bui-checkbox__input" type="checkbox">
                                <span class="bui-checkbox__label filter__label">Vaccinated Required</span><br>
                            </span>
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