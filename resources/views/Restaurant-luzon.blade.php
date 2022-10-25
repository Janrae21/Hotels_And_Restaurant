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
    <link rel="stylesheet" href="{{ asset('css/Restaurant-luzon.css')}}">

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
                        <img src="https://media-cdn.tripadvisor.com/media/photo-s/1a/45/dd/23/the-lobby.jpg" alt="">
                    </div>
                    <div class="right">
                        <h4>Pool House - Luxury Restaurants Luzon</h4>
                        <div class="rate flex">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <p><b>Pool House</b> <br>


                            Located at Grand Hyatt Manila, 8th Avenue Corner 35th Street, Bonifacio Global City
                            Bonifacio Global City,
                            Taguig City, Luzon 1634 Philippines - Had a very pleasant early dinner at the Pool House.
                            Food was pretty
                            good and ambiance was relaxing.</p>
                        <h5>Price from<br>
                            ₱ 546.10/serve</h5>
                        <a href="{{ url('BookingRestaurant')}}"><button class="flex1">
                                <span>Book Now!</span>
                                <i class="fas fa-arrow-circle-right"></i>
                            </button></a>
                    </div>
                </div>

                <div class="box flex">
                    <div class="left">
                        <img src="https://media-cdn.tripadvisor.com/media/photo-s/11/ee/0a/72/china-blue-by-jereme.jpg"
                            style="height:100%" alt="">
                    </div>
                    <div class="right">
                        <h4> Finestra Italian Steakhouse - Luxury Restaurants Luzon</h4>
                        <div class="rate flex">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <p><b> Finestra Italian Steakhouse </b> <br>
                            Located at 1 Aseana Avenue Entertainment City, Solaire Resort & Casino, Paranaque, Luzon
                            1701 Philippines
                            - Food and ambience
                            Italian, Vegetarian Friendly, Vegan Options, Gluten Free Options.Elevate your dining
                            experience at
                            Finestra Italian Steakhouse, recognized by Philippine Tatler's T.Dining as one of the top 20
                            Best
                            Restaurants in Manila for 2018 and 2019. </p>
                        <h5>Price from<br>
                            ₱ 700/serve</h5>
                        <a href="./../public/book online.html"><button class="flex1">
                                <span>Book Now!</span>
                                <i class="fas fa-arrow-circle-right"></i>
                            </button></a>
                    </div>
                </div>
                <div class="box flex">
                    <div class="left">
                        <img src="https://media-cdn.tripadvisor.com/media/photo-s/0e/17/b3/4b/cafe-ilang-iland.jpg"
                            style="height:100%" alt="">
                    </div>
                    <div class="right">
                        <h4>Cafe Ilang-Ilang - Luxury Restaurant Luzon </h4>
                        <div class="rate flex">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <p><b>Cafe Ilang-Ilang</b> <br>
                            Located at Manila Hotel, One Rizal Park Manila, Philippines, Manila, Luzon Philippines.
                            SPECIAL DIETS
                            Vegetarian Friendly, Vegan Options, Gluten Free Options</p>
                        <h5>From ₱500/serve </h5>
                        <a href="./../public/book online.html"><button class="flex1">
                                <span>Book Now!</span>
                                <i class="fas fa-arrow-circle-right"></i>
                            </button></a>
                    </div>
                </div>
                <div class="box flex">
                    <div class="left">
                        <img src="https://media-cdn.tripadvisor.com/media/photo-s/11/ee/07/78/china-blue-by-jereme.jpg"
                            style="height:100%" alt="">
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
                        <p> <b>China Blue by Jereme Leung - Luxury Restaurant Luzon </b> <br>
                            Situated in Conrad Manila, Seaside Boulevard corner Coral Way Mall of Asia Complex, Pasay,
                            Luzon 1300
                            Philippines. Great food Best place to celebrate your birthday! </p>
                        <h5>Price from<br>
                            ₱ 240.00/serve</h5>
                        <a href="./../public/book online.html"><button class="flex1">
                                <span>Book Now!</span>
                                <i class="fas fa-arrow-circle-right"></i>
                            </button></a>
                    </div>
                </div>
                <div class="box flex">
                    <div class="left">
                        <img src="https://media-cdn.tripadvisor.com/media/photo-s/11/62/a2/57/som-tam-salmon-foo.jpg"
                            style="height:100%" alt="">
                    </div>
                    <div class="right">
                        <h4> Benjarong Thai - Luxury Restaurant Luzon</h4>
                        <div class="rate flex">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <p> <b>Benjarong Thai Restaurant<br></b>
                            Located at Dusit Thani Manila Ayala Centre, Makati, Luzon 1223 Philippines. Anniversary Date
                        </p>
                        The food was great and the service as well. Accommodating staff and servers especially, Hazel
                        and Liezel.
                        The phad thai was my favorite but everything we ordered was really good. <h5>Price from<br>
                            ₱ 8,096/night</h5>
                        <a href="./../public/book online.html"><button class="flex1">
                                <span>Book Now!</span>
                                <i class="fas fa-arrow-circle-right"></i>
                            </button></a>
                    </div>
                </div>
                <div class="box flex">
                    <div class="left">
                        <img src="https://media-cdn.tripadvisor.com/media/photo-s/13/09/5f/72/for-table-reservation.jpg"
                            style="height:100%" alt="">
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
                        <p><b>Finestra Italian Steakhouse - Luxury Restaurant Luzon<br></b>
                            Locates at 1 Aseana Avenue Entertainment City, Solaire Resort & Casino, Paranaque, Luzon
                            1701 Philippines.
                            Special occasions, Romantic, Scenic view, Large groups, Bar scene.Food and ambience
                            Italian, Vegetarian Friendly, Vegan Options, Gluten Free Options

                        </p>
                        <h5>Price from<br>
                            ₱ 326.79/serve</h5>
                        <a href="./../public/book online.html"><button class="flex1">
                                <span>Book Now!</span>
                                <i class="fas fa-arrow-circle-right"></i>
                            </button></a>
                    </div>
                </div>
                <div class="box flex">
                    <div class="left">
                        <img src="https://media-cdn.tripadvisor.com/media/photo-p/14/39/5d/8e/photo2jpg.jpg"
                            style="height:100%" alt="">
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
                        <p><b>Sala Restaurant - Luzon</b>

                            <br>
                            Located at 6752 Ayala Avenue corner Makati Ave Podium Level LV Locsin Building, Makati,
                            Luzon 1203
                            Philippines.
                            SPECIAL DIETS
                            Vegetarian Friendly, Gluten Free Options.Very good food, ambiance and great service. Would
                            love to come
                            back soon, missing all the good food.
                        </p>
                        <h5>Price from<br>
                            ₱ 900/serve</h5>
                        <a href="./../public/book online.html"><button class="flex1">
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