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
                        <img src="https://media-cdn.tripadvisor.com/media/photo-s/0e/03/ea/c6/claude-s-2016-holiday.jpg"
                            alt="">
                    </div>
                    <div class="right">
                        <h4>Claude's Le Cafe de Ville - Luxury Restaurant Mindanao</h4>
                        <div class="rate flex">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <p><b> Claude's Le Cafe de Ville </b> <br>


                            Located in143 Rizal Street The Oboza Heritage House, Davao City, Mindanao 8000
                            Philippines.<br>
                            Great place to bring the other half to have a excellent dinner. Staff was on top of
                            everything with
                            excellent service.</p>
                        <h5>Price from<br>
                            ₱ 799/serve </h5>
                        <a href="{{ url('BookingRestaurant')}}"><button class="flex1">
                                <span>Book Now!</span>
                                <i class="fas fa-arrow-circle-right"></i>
                            </button></a>
                    </div>
                </div>

                <div class="box flex">
                    <div class="left">
                        <img src="https://media-cdn.tripadvisor.com/media/photo-s/1b/00/ec/bc/sarsa-de-ambrose-dining.jpg"
                            style="height:100%" alt="">
                    </div>
                    <div class="right">
                        <h4> Sarsa de Ambrose - Luxury Restaurant Mindanao </h4>
                        <div class="rate flex">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <p><b>Sarsa de Ambrose</b> <br>
                            Located at Fuente de Villa Abrille, Tulip Drive, Juna Subdivision Matina, Davao City,
                            Mindanao 8000
                            Philippines.<br>
                            Good food! Great time!
                            Steamed pompano con sarsa, shrmp con sarsa and beef callos great tasting food with large
                            serving, yet very
                            affordable</p>
                        <h5>Price from<br>
                            ₱ 570/serve</h5>
                        <a href="{{ url('BookingRestaurant')}}"><button class="flex1">
                                <span>Book Now!</span>
                                <i class="fas fa-arrow-circle-right"></i>
                            </button></a>
                    </div>
                </div>
                <div class="box flex">
                    <div class="left">
                        <img src="https://img.traveltriangle.com/blog/wp-content/uploads/2019/06/Bon-Appetit-La-Boutique1-400x266.jpg"
                            style="height:100%" alt="">
                    </div>
                    <div class="right">
                        <h4>Bon Appetit! La Boutique - Luxury Restaurant Mindanao </h4>
                        <div class="rate flex">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <p><b>Pooc</b> <br>
                            Located at Plaza Del Carmen, Poblacion District, Davao City, 8000 Davao del Sur,
                            Philippines.<br>
                            If you are looking for a place to dine at after a long day, then the Bon Appetit! La
                            Boutique is one of
                            the fine dining restaurants in Davao city. Here, the charming chef personally visits the
                            customers and
                            explains the weekly specialties to them. The pork tenderloin with the combination of
                            Camembert sauce and
                            apples is one of the special dishes here.</p>
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
                        <img src="https://media-cdn.tripadvisor.com/media/photo-s/02/30/74/fd/polo-bistro.jpg"
                            style="height:100%" alt="">
                    </div>
                    <div class="right">
                        <h4>Polo Bistro - Luxury Restaurant Mindanao</h4>
                        <div class="rate flex">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <p> <b>Polo Bistro</b> <br>
                            Located at C. M. Recto Street, Davao City, Mindanao Philippines. <br>Polo Bistro, the
                            restaurant at The
                            Deck on the fourth level of Marco Polo Hotel whilst appears under used serves very good food
                            and the
                            service is next to none. thoroughly recommend this restaurant.</p>
                        <h5>Price from<br>
                            ₱ 442/serve</h5>
                        <a href="{{ url('BookingRestaurant')}}"><button class="flex1">
                                <span>Book Now!</span>
                                <i class="fas fa-arrow-circle-right"></i>
                            </button></a>
                    </div>
                </div>
                <div class="box flex">
                    <div class="left">
                        <img src="https://media-cdn.tripadvisor.com/media/photo-s/0a/7f/08/ac/chicken-salad-wrap.jpg"
                            style="height:100%" alt="">
                    </div>
                    <div class="right">
                        <h4>Victoria's Samudra - Luxury Restaurant Mindanao </h4>
                        <div class="rate flex">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <p> <b> Victoria's Samudra
                                <br></b>
                            Located at Ecoland West Drive Genesis 88 Bldg. Door 14, Davao City, Mindanao 8000
                            Philippines.<br>CUISINES
                            Indian, Asian, Singaporean, Malaysian
                            SPECIAL DIETS
                            Vegetarian Friendly</p>
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
                        <img src="https://media-cdn.tripadvisor.com/media/photo-s/1a/d2/f7/9c/pollo-alla-valdostana.jpg"
                            style="height:100%" alt="">
                    </div>
                    <div class="right">
                        <h4>The Red Tomato - Luxury Restaurant Mindanao
                        </h4>
                        <div class="rate flex">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <p><b>The Red Tomato
                                <br></b>
                            Located at Diversion Highway The Shoppes Woodlane, Davao City, Mindanao 8000 Philippines.
                            <br>CUISINES
                            Italian, Mediterranean, Spanish, Greek
                            MEALS
                            Lunch, Dinner, Drinks
                        </p>
                        <h5>Price from<br>
                            ₱ 4,400/serve</h5>
                        <a href="{{ url('BookingRestaurant')}}"><button class="flex1">
                                <span>Book Now!</span>
                                <i class="fas fa-arrow-circle-right"></i>
                            </button></a>
                    </div>
                </div>
                <div class="box flex">
                    <div class="left">
                        <img src="https://media-cdn.tripadvisor.com/media/photo-s/18/fa/9b/c9/20190825-130330-largejpg.jpg"
                            style="height:100%" alt="">
                    </div>
                    <div class="right">
                        <h4>Bondi&Bourke Davao - Luxury Restaurant Mindanao
                        </h4>
                        <div class="rate flex">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <p><b> Bondi&Bourke Davao
                            </b>

                            <br>
                            Located at 115 Pelayo Street Poblacion District, Davao City, Mindanao 8000
                            Philippines.<br>Great place for
                            a nice quiet dinner! The chicken skewers were excellent (wish we had ordered more!), the
                            Lapu Lapu dish
                            was great and the wagyu empanadas very tasty.
                        </p>
                        <h5>Price from<br>
                            ₱ 3,150/serve</h5>
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
        <div class="inner-footer">
            <h3>LUXURY WONDERS</h3>
            <p>"Welcome to our Luxurious Hotel to Stays, the friendly heart of the Accommodation we offer
                and
                one of
                the most
                attractive Hotel in the Philippines. We heartily invite you to come
                and
                visit Hotel
                yourself, and offer you this website to help you get the first book."</p>
            <div class="social flex" style="margin-left:44%; margin-bottom: 5% ; ">
                <a href=""><i class="fab fa-facebook-f" style="color:white;"></i></a>
                <a href=""><i class="fab fa-twitter" style="color:white;"></i></a>
                <a href=""><i class="fab fa-instagram" style="color:white;"></i></a>
                <a href=""><i class="fab fa-youtube" style="color:white;"></i></a>
            </div>
            <div class="outer-footer">
                &copy; Copyright <strong></strong><span>Luxury Stays</span></strong>. All Rights Reserved 2022

                <div class="credits">

                    Administered by <br> <a href="">ANNA MAE JORGE</a><br>
                    <a href="">LEAH MANGMANG</a><br>

                    <a href="">JANRAE FAGARAGAN</a>

                </div>

                <br>

                <a href="#top" class="btn3" style="color:gray"><i class="fa fa-arrow-up w3-margin-left"></i>To the
                    top</a>
            </div>
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