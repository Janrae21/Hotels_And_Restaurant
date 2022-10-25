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
    <link rel="stylesheet" href="{{ asset('css/Restaurant.css')}}">

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

    <div class="slideshow-container">

        <div class="mySlides fade">
            <li>
                <img srcset="https://www.restaurantinteriordesign.eu/wp-content/uploads/2019/07/Luxury-Restaurant-Design-Ideas-Beefbar-10.jpgttps://d4t7t8y8xqo0t.cloudfront.net/resized/750X436/eazytrendz%2F2947%2Ftrend20200930101748.jpg 500w, https://www.restaurantinteriordesign.eu/wp-content/uploads/2019/07/Luxury-Restaurant-Design-Ideas-Beefbar-10.jpg 2x"
                    sizes="(min-width: 300w) 300w, (min-width: 768w) 768w, (min-width: 1024w) 1024w, (min-width: 1200w) 1200w"
                    class="resp"
                    src="https://www.restaurantinteriordesign.eu/wp-content/uploads/2019/07/Luxury-Restaurant-Design-Ideas-Beefbar-10.jpg"
                    width="698" height="465" alt="rooms-and-suites">
            </li>

        </div>

        <div class="mySlides fade">
            <li>
                <img srcset="https://www.lux-review.com/wp-content/uploads/2019/01/kenny-luo-649778-unsplash-1-1024x683.jpg 2x"
                    sizes="(min-width: 300w) 300w, (min-width: 768w) 768w, (min-width: 1024w) 1024w, (min-width: 1200w) 1200w"
                    class="resp"
                    src="https://www.lux-review.com/wp-content/uploads/2019/01/kenny-luo-649778-unsplash-1-1024x683.jpg"
                    width="697" height="465" alt="rooms-and-suites">
            </li>

        </div>

        <div class="mySlides fade">
            <li>
                <img srcset="https://media.istockphoto.com/photos/beef-steak-grill-beef-steak-black-lentils-mixed-with-vegetable-cognac-picture-id882125314?k=20&m=882125314&s=612x612&w=0&h=uPOPW2C1_fC_Qr0vmVvLPIt6t5xLTJc6xEWXp7VK6BY= 2x"
                    sizes="(min-width: 300w) 300w, (min-width: 768w) 768w, (min-width: 1024w) 1024w, (min-width: 1200w) 1200w"
                    class="resp"
                    src="https://media.istockphoto.com/photos/beef-steak-grill-beef-steak-black-lentils-mixed-with-vegetable-cognac-picture-id882125314?k=20&m=882125314&s=612x612&w=0&h=uPOPW2C1_fC_Qr0vmVvLPIt6t5xLTJc6xEWXp7VK6BY="
                    width="697" height="465" alt="rooms-and-suites">
            </li>

        </div>
        <div class="mySlides fade">
            <li>
                <img srcset="https://static.trip101.com/paragraph_media/pictures/001/808/141/large/27518039275_3c9c671356_b.jpg?1581481091 300w, https://static.trip101.com/paragraph_media/pictures/001/808/141/large/27518039275_3c9c671356_b.jpg?1581481091 2x"
                    sizes="(min-width: 300w) 300w, (min-width: 768w) 768w, (min-width: 1024w) 1024w, (min-width: 1200w) 1200w"
                    class="resp"
                    src="https://static.trip101.com/paragraph_media/pictures/001/808/141/large/27518039275_3c9c671356_b.jpg?1581481091"
                    width="697" height="465" alt="rooms-and-suites">
            </li>

        </div>
        <div class="mySlides fade">
            <li>
                <img srcset="https://d4t7t8y8xqo0t.cloudfront.net/resized/750X436/eazytrendz%2F2947%2Ftrend20200930101748.jpg 300w, https://d4t7t8y8xqo0t.cloudfront.net/resized/750X436/eazytrendz%2F2947%2Ftrend20200930101748.jpg 2x"
                    sizes="(min-width: 300w) 300w, (min-width: 768w) 768w, (min-width: 1024w) 1024w, (min-width: 1200w) 1200w"
                    class="resp"
                    src="https://d4t7t8y8xqo0t.cloudfront.net/resized/750X436/eazytrendz%2F2947%2Ftrend20200930101748.jpg"
                    width="697" height="465" alt="rooms-and-suites">
            </li>>

        </div>
        <div class="mySlides fade">
            <li>
                <img srcset="https://www.medoc-atlantique.com/wp-content/uploads/2019/02/restaurant-1600x900.jpg 300w, https://www.medoc-atlantique.com/wp-content/uploads/2019/02/restaurant-1600x900.jpg 768w, https://www.medoc-atlantique.com/wp-content/uploads/2019/02/restaurant-1600x900.jpg 1024w, https://www.medoc-atlantique.com/wp-content/uploads/2019/02/restaurant-1600x900.jpg 2x"
                    sizes="(min-width: 300w) 300w, (min-width: 768w) 768w, (min-width: 1024w) 1024w, (min-width: 1200w) 1200w"
                    class="resp"
                    src="https://www.medoc-atlantique.com/wp-content/uploads/2019/02/restaurant-1600x900.jpg"
                    width="697" height="465" alt="rooms-and-suites">
            </li>
        </div>
        <div class="mySlides fade">
            <li>
                <img srcset="https://images.occasiongenius.com/plugins/download_by_size/action.php?id=20102&part=e&size=medium   2x"
                    sizes="(min-width: 300w) 300w, (min-width: 768w) 768w, (min-width: 1024w) 1024w, (min-width: 1200w) 1200w"
                    class="resp"
                    src="https://images.occasiongenius.com/plugins/download_by_size/action.php?id=20102&part=e&size=medium"
                    width="697" height="465" alt="rooms-and-suites">
            </li>
        </div>
        <div class="mySlides fade">
            <li>
                <img srcset="https://www.deccanherald.com/sites/dh/files/articleimages/2020/06/12/iStock-1081560570-1591947820.jpg 2x"
                    sizes="(min-width: 300w) 300w, (min-width: 768w) 768w, (min-width: 1024w) 1024w, (min-width: 1200w) 1200w"
                    class="resp"
                    src="https://www.deccanherald.com/sites/dh/files/articleimages/2020/06/12/iStock-1081560570-1591947820.jpg"
                    width="697" height="465" alt="rooms-and-suites">
            </li>
        </div>
        <div class="mySlides fade">
            <li>
                <img srcset="https://q-xx.bstatic.com/xdata/images/hotel/840x460/321481772.jpg?k=88099f3e5122595a7cc8dd7afa3bac7fd728172da45c752a405ae967bf225e2f&o= 2x"
                    sizes="(min-width: 300w) 300w, (min-width: 768w) 768w, (min-width: 1024w) 1024w, (min-width: 1200w) 1200w"
                    class="resp"
                    src="https://q-xx.bstatic.com/xdata/images/hotel/840x460/321481772.jpg?k=88099f3e5122595a7cc8dd7afa3bac7fd728172da45c752a405ae967bf225e2f&o="
                    width="697" height="465" alt="rooms-and-suites">
            </li>
        </div>
        <div class="mySlides fade">
            <li>
                <img srcset="https://www.interiordesignmagazines.eu/wp-content/uploads/2019/02/Top-Luxury-Hotels-and-Restaurants-To-Go-During-AD-Design-Show-2019-8.jpg 300w, https://www.interiordesignmagazines.eu/wp-content/uploads/2019/02/Top-Luxury-Hotels-and-Restaurants-To-Go-During-AD-Design-Show-2019-8.jpg 768w, https://www.interiordesignmagazines.eu/wp-content/uploads/2019/02/Top-Luxury-Hotels-and-Restaurants-To-Go-During-AD-Design-Show-2019-8.jpg 1024w, https://www.interiordesignmagazines.eu/wp-content/uploads/2019/02/Top-Luxury-Hotels-and-Restaurants-To-Go-During-AD-Design-Show-2019-8.jpg 698w, https://www.interiordesignmagazines.eu/wp-content/uploads/2019/02/Top-Luxury-Hotels-and-Restaurants-To-Go-During-AD-Design-Show-2019-8.jpg 585w, https://www.interiordesignmagazines.eu/wp-content/uploads/2019/02/Top-Luxury-Hotels-and-Restaurants-To-Go-During-AD-Design-Show-2019-8.jpg 923w, https://www.interiordesignmagazines.eu/wp-content/uploads/2019/02/Top-Luxury-Hotels-and-Restaurants-To-Go-During-AD-Design-Show-2019-8.jpg 150w, https://www.interiordesignmagazines.eu/wp-content/uploads/2019/02/Top-Luxury-Hotels-and-Restaurants-To-Go-During-AD-Design-Show-2019-8.jpg 1800w, https://www.interiordesignmagazines.eu/wp-content/uploads/2019/02/Top-Luxury-Hotels-and-Restaurants-To-Go-During-AD-Design-Show-2019-8.jpg 2x"
                    sizes="(min-width: 300w) 300w, (min-width: 768w) 768w, (min-width: 1024w) 1024w, (min-width: 1200w) 1200w"
                    class="resp"
                    src="https://www.interiordesignmagazines.eu/wp-content/uploads/2019/02/Top-Luxury-Hotels-and-Restaurants-To-Go-During-AD-Design-Show-2019-8.jpg"
                    width="698" height="465" alt="rooms-and-suites">
            </li>
        </div>
    </div>

    <br>
    <div style="text-align:center">
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>




    </div>

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
    let slideIndex = 0;
    showSlides();

    function showSlides() {
        let i;
        let slides = document.getElementsByClassName("mySlides");
        let dots = document.getElementsByClassName("dot");
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        slideIndex++;
        if (slideIndex > slides.length) {
            slideIndex = 1
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex - 1].style.display = "block";
        dots[slideIndex - 1].className += " active";
        setTimeout(showSlides, 2000); // Change image every 2 seconds
    }
    </script>

    <div class="waviy">
        <span style="--i:1">R</span>
        <span style="--i:2">E</span>
        <span style="--i:3">S</span>
        <span style="--i:4">T</span>
        <span style="--i:5">A</span>
        <span style="--i:6">U</span>
        <span style="--i:7">R</span>
        <span style="--i:8">A</span>
        <span style="--i:9">N</span>
        <span style="--i:11">T</span>
        <span style="--i:12"></span>
        <span style="--i:13">A</span>
        <span style="--i:14">N</span>
        <span style="--i:15">D</span>
        <span style="--i:16"></span>
        <span style="--i:17">D</span>
        <span style="--i:18">I</span>
        <span style="--i:19">N</span>
        <span style="--i:20">I</span>
        <span style="--i:21">N</span>
        <span style="--i:21">G</span>



    </div>

    <section class="customer-top" id="testimonials">
        <div class="container">
            <div class="heading">
                <h5>LUXURY WONDERS' EXPERIENCES </h5><br>
                <p style="color:black;text-align: justify;">Luxury Wonders is a leading hospitality group listed on
                    the Stock Exchange of Philippines. Building on its two core areas of business REstaurants,
                    Hotels & Resorts and Hospitality Education – the company has expanded its operations over the
                    past four years to comprise five business units. The additional units include Foods, Property
                    Development, and Hospitality-Related Services. Today, the company’s property portfolio comprises
                    more than 300 distinctive hotels, as well as two
                    leading hospitality colleges with campuses in Thailand and the Philippines.<br><br> Following a
                    three-pronged strategy for sustainable growth, including balance, expansion and diversification,
                    the company has recently expanded into food production, on-demand hospitality services, and
                    property development to reach new markets and add further recurring streams of revenue to the
                    company.All rooms feature full-length doors leading to balconies overlooking the hotel's pretty
                    courtyard garden, Sapa town, the mountains or the iconic rice paddies of the Sapa valley,
                    allowing guests to fully immerse themselves in the stunning surroundings.
                </p>
                <br><br>
                <h1> “Hospitality means primarily the creation of free space where the stranger can enter and become
                    a friend instead of an enemy."</h1>


            </div>
    </section>
    <!-- body content  -->
    <section class="services sec-width" id="services">
        <div class="titles">
            <h1>Services</h1>
        </div>
        <div class="services-container">
            <!-- single service -->
            <article class="service">
                <div class="service-icon">
                    <span>
                        <i class="fas fa-utensils"></i>
                    </span>
                </div>
                <div class="service-content">
                    <h2>Food Service/ Food Runner</h2>
                    <pstyle="color: black;">Hotel food and beverage services cover everything from room service to
                        continental breakfast
                        to in-house restaurants. Today we’ll be walking through the role food and beverage work
                        plays in the hotel industry. We'll also cover how you, as a hotel owner or manager, can
                        maximize your food and beverage services. </p>
                        <button type="button" class="button">Know More</button>
                </div>
            </article>
            <!-- end of single service -->
            <!-- single service -->
            <article class="service">
                <div class="service-icon">
                    <span>
                        <i class="fas fa-swimming-pool"></i>
                    </span>
                </div>
                <div class="service-content">
                    <h2>Refreshment</h2>
                    <p style="color: black;">ENSURING COMFORTABLE STAY: <br>
                        Your priority is to ensure that your guests feel at home in your hotel. Whether it’s a
                        boisterous family on a holiday or a business traveler, they should feel welcomed, safe, and
                        comfortable.
                        <br>
                        An effective housekeeping services staff will keep the guests in their comfort zone,
                        ultimately improving your business’s bottom line.
                    </p>
                    <button type="button" class="button">Know More</button>
                </div>
            </article>
            <!-- end of single service -->
            <!-- single service -->
            <article class="service">
                <div class="service-icon">
                    <span>
                        <i class="fas fa-broom"></i>
                    </span>
                </div>
                <div class="service-content">
                    <h2>Housekeeping</h2>
                    <p style="color: black;">HOSPITALITY HOUSEKEEPING SERVICES FOR COMPETITIVE BUSINESS
                        ADVANTAGE<br>
                        Hospitality housekeeping services are very important to the success of any business. Read
                        about ways that hospitality housekeeping services can help keep your business ahead of the
                        competition here.</p>
                    <button type="button" class="button">Know More</button>
                </div>
            </article>
            <!-- end of single service -->
            <!-- single service -->
            <article class="service">
                <div class="service-icon">
                    <span>
                        <i class="fas fa-door-closed"></i>
                    </span>
                </div>
                <div class="service-content">
                    <h2>Room Security</h2>
                    <p style="color: black;">Hotel security involves the overall security of the hotel’s building
                        and grounds as well as
                        its guests, employees, visitors and day users. Outlined below are some of the most important
                        aspects of hotel security that properly trained officers can address.</p>
                    <button type="button" class="button">Know More</button>
                </div>
            </article>
            <!-- end of single service -->
        </div>
    </section>

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

    <section class="rooms sec-width" id="rooms">
        <div class="title">
            <h1>RESTAURANTS</h1>
        </div>
        <div class="rooms-container">
            <!--single room-->
            <article class="room">
                <div class="room-image">
                    <img src="{{ asset('Img\luzon.png')}}" alt="room image">
                </div>
                <div class="room-text">
                    <h3>LUZON</h3>
                    <p><b>Manila</b>

                        Antonio’s offers spectacular fine dining in the Philippines amidst gorgeous views and a
                        stunning interior design. It offers elegant venue rentals for private events, accommodating
                        staff ready to help you plan every detail, table settings customized to your tastes, and a
                        wide wine selection. </p>
                    <p><b>Order the Savory Gorgonzola Cheesecake to start your meal with a delectable appetizer.
                        </b><br>
                        It includes herb-roasted marble potatoes, citrus mostarda, salsa verde, salsa Rosso, and
                        fermented black garlic rice.</p>
                    <p class="rate">
                        <span>₱ 210.00 /</span> Per Serve
                    </p>
                    <button type="button" class="btn">book now<a href="{{ url('Restaurant-luzon')}}"><i
                                class="fas fa-arrow-circle-right"></i></a></button>
                </div>
            </article>
            <!-- end of single room -->
            <!-- single room -->
            <article class="room">
                <div class="room-image">
                    <img src="{{ asset('Img\visayasIto.png')}}" alt="room image">
                </div>
                <div class="room-text">
                    <h3>VISAYAS</h3>
                    <p><b>Bar Pintxos BGC</b><br>
                        Consider this outstanding eatery when looking for the coolest and best restaurants downtown
                        to enjoy delicious food and a couple of drinks with your friends.</p>
                    <p><b>Bar Pintxos BGC</b> <br>
                        Here, you can enjoy premium craft alcoholic beverages, Spanish-style tapas, platters for
                        large groups, fresh seafood, and other mouth-watering options.

                    </p>
                    <p class="rate">
                        <span>₱ 343.62/</span> Per Serve
                    </p>
                    <button type="button" class="btn">book now<a href="{{ url('Restaurant-Visayas')}}"><i
                                class="fas fa-arrow-circle-right"></i></a></button>
                </div>
            </article>
            <!-- single room -->
            <article class="room">
                <div class="room-image">
                    <img src="{{ asset('Img\mindanao (2).png')}}" alt="room image">
                </div>
                <div class="room-text">
                    <h3>MINDANAO</h3>
                    <p><b>Benjarong Thai Restaurant</b><br>
                        The Benjarong Thai Restaurant is one of the best places to eat in the Philippines, boasting
                        authentic Thai cuisine prepared by professional chefs.
                    </p>
                    <p>
                        It features two private dining rooms for intimate occasions, a full-service bar, and a
                        sophisticated space with elegant décor.
                    </p>
                    <p class="rate">
                        <span>₱ 300 /</span> Per Serve
                    </p>
                    <button type="button" class="btn">book now<a href="{{ url('Restaurant-Mindanao')}}"><i
                                class="fas fa-arrow-circle-right"></i></a></button>
                </div>
            </article>
            <!-- end of single room -->

        </div>
    </section>


    <section class="customers" id="customers">
        <div class="sec-width">
            <div class="titless">
                <h1>Visitor's Reviews</h1>
            </div>
            <div class="customers-container">
                <!-- single customer -->
                <div class="customer">
                    <div class="rating">
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="far fa-star"></i></span>
                    </div>
                    <h3>We Loved it</h3>
                    <p>“Breakfast was delicious. Like a good homestyle country savory breakfast (and Im from the
                        south, thats saying a lot)… Enjoyed the whole experience and definitely recommend this place
                        for a place to eat on the cape.The absolute best red sauce. Weather on Pizza or Pasta, it’s
                        honestly delicious. Portions are huge and the staff is extremely friendly and courteous.”
                    </p>
                    <span style="color:#CC8C18">Ronnie E..<br>
                        1h ago</span>
                </div>
                <!-- end of single customer -->
                <!-- single customer -->
                <div class="customer">
                    <div class="rating">
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="far fa-star"></i></span>
                    </div>
                    <h3>Best breakfast on the east coast!</h3>
                    <p>“Very good service, good menu … not overly extensive. Food was very good quality all around.
                        They know how to prepare home fries and their omelets are top-notch. Prices were
                        reasonable.We enjoyed the Eggs Benedict served on homemade focaccia bread and hot coffee.
                        Perfect service.” </p>
                    <span style="color:#CC8C18">Bill M.<br>
                        2h ago

                    </span>
                </div>
                <!-- end of single customer -->
                <!-- single customer -->
                <div class="customer">
                    <div class="rating">
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="far fa-star"></i></span>
                    </div>
                    <h3>Great food, great coffee, great service.</h3>
                    <p>“Walked in for dinner in a Wednesday night and sat at the bar. The bartender, Erin, couldn’t
                        have been nicer. She was quick, efficient and friendly. She helped recommend something for
                        my dinner and the Lobster Florentine didn’t disappoint! I even returned the next morning for
                        breakfast and got similar service! It was a gem I found and can’t wait to return next year-
                        I just hope Erin is still bartending then!” </p>
                    <span style="color:#CC8C18">Angel Yap<br>
                        8 hours ago</span>
                </div>
                <!-- end of single customer -->
            </div>
        </div>
    </section>
    <div class="background"> </div>
    <div class="container">
        <div class="heading">
            <h2> <span>So what are you Waiting For? <br></span> Come with us today!</h2>
        </div>

    </div>
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
    <script>
    // ToDOLIST
    class slider {
        constructor() {
            // All Element
            this.sliderParent = document.querySelector(".slider");
            this.sliderItems = document.querySelector(".slider__items");
            this.sliderItem = document.querySelectorAll(".slider__item");
            this.dotsWrapper = document.querySelector(".slider__dots");
            this.dots;
            this.btnNav;

            // All property of slider
            this.currentSlider = 0;
            this.sliderWidth;
            this.startPoint = -1;
            this.distancePoint = 0;
            this.currentTranslate;
            this.autoPlayId;
            this.autoPlayTime = 8000;
            // All event
            this.renderSliderWrapper = this.renderSliderWrapper.bind(this);
            this.renderDots = this.renderDots.bind(this);
            this.updateDots = this.updateDots.bind(this);
            this.renderNav = this.renderNav.bind(this);
            this.updateNav = this.updateNav.bind(this);
            this.changeSlider = this.changeSlider.bind(this);
            this.onPress = this.onPress.bind(this);
            this.onMove = this.onMove.bind(this);
            this.onLeave = this.onLeave.bind(this);
            this.onTranformEnd = this.onTranformEnd.bind(this);
            this.autoPlay = this.autoPlay.bind(this);

            this.init = this.init.bind(this);

            this.init();
        }

        renderSliderWrapper() {
            //Calc width for sliderItems and add it
            this.sliderWidth = this.sliderItems.offsetWidth;
            const totalParentWidth = this.sliderWidth * this.sliderItem.length;
            this.sliderItems.style.width = `${totalParentWidth}px`;
            this.sliderItems.style.transform = `translateX(${this.currentSlider * this.sliderWidth}px)`;
            //Add width for every slider__Item
            Array.prototype.forEach.call(this.sliderItem, (item, index) => {
                item.style.width = `${this.sliderWidth}px`;
            });
        }

        renderDots() {
            const dotsNumber = this.sliderItem.length;
            let dots = [];

            for (let x = 0; x < dotsNumber; x++) {
                const classForActiveDot = (x === this.currentSlider) ? "slider__dot--active" : '';
                const dot = `<div class="slider__dot ${classForActiveDot}" data-slide=${x}></div>`;
                dots.push(dot);
            }
            // Add dots
            this.dotsWrapper.innerHTML = dots.join("");
            // get all dot and addEventListener
            this.dots = document.querySelectorAll(".slider__dot");
        }

        updateDots() {
            Array.prototype.forEach.call(this.dots, (dot, index) => {
                if (index === this.currentSlider) {
                    dot.classList.add("slider__dot--active");
                } else {
                    dot.classList.remove("slider__dot--active");
                }
            });
        }

        renderNav() {
            let navButtonWrapper = document.querySelector(".slider__nav");
            const classOfPreButton = 'slider__button slider__button--previous js-btnNav';
            const classOfNextButton = 'slider__button slider__button--next js-btnNav';

            const prevButton = this.currentSlider === 0 ?
                `<div class="${classOfPreButton} slider__button--disable" ></div>` :
                `<div class="${classOfPreButton}" data-slide=${this.currentSlider - 1} ></div>`;

            const nextButton = this.currentSlider === (this.sliderItem.length - 1) ?
                `<div class="${classOfNextButton} slider__button--disable"></div>` :
                `<div class="${classOfNextButton}" data-slide=${this.currentSlider + 1}></div>`;

            navButtonWrapper.innerHTML = prevButton.concat(nextButton);

            this.btnNav = document.querySelectorAll(".js-btnNav");
        }

        updateNav() {
            let prevButton = this.btnNav[0];
            let nextButton = this.btnNav[1];

            if (this.currentSlider === 0) {
                prevButton.setAttribute("data-slide", "");
                prevButton.classList.add("slider__button--disable");
            } else {
                prevButton.setAttribute("data-slide", this.currentSlider - 1);
                prevButton.classList.remove("slider__button--disable");
            }

            if (this.currentSlider === (this.sliderItem.length - 1)) {
                nextButton.setAttribute("data-slide", "");
                nextButton.classList.add("slider__button--disable");
            } else {
                nextButton.setAttribute("data-slide", this.currentSlider + 1);
                nextButton.classList.remove("slider__button--disable");
            }
        }


        changeSlider(eventEl) {
            // Get toslider's number, and toTransition pixel
            let toSlider = Number.parseInt(eventEl.target.getAttribute("data-slide"));
            let toTransition = -(this.sliderWidth * toSlider);

            this.sliderItems.style.transform = `translate(${toTransition}px)`;
            this.sliderItems.style.transition = `.3s transform`;
            this.sliderItems.addEventListener("transitionend", this.onTranformEnd);

            this.currentSlider = toSlider;
            // update dots style
            this.updateDots();
            // update nav
            this.updateNav();
        }

        changeSliderTo(toSlider) {
            let toTransition = -(this.sliderWidth * toSlider);

            this.sliderItems.style.transform = `translate(${toTransition}px)`;
            this.sliderItems.style.transition = `.3s transform`;
            this.sliderItems.addEventListener("transitionend", this.onTranformEnd);

            this.currentSlider = toSlider;
            // update dots style
            this.updateDots();
            // update nav
            this.updateNav();
        }

        onPress(event) {
            this.startPoint = event.clientX;
            this.distancePoint = 0;

            clearInterval(this.autoPlayId);
        }

        onMove(event) {
            if (this.startPoint > 0) {
                // At first slider item, midde, the end
                if (this.currentSlider === 0) {
                    this.distancePoint = Math.min(0, event.clientX - this.startPoint);
                } else if (this.currentSlider === (this.sliderItem.length - 1)) {
                    this.distancePoint = Math.max(0, event.clientX - this.startPoint);
                } else {
                    this.distancePoint = event.clientX - this.startPoint;
                }

                // Add new translate
                this.currentTranslate = -(this.sliderWidth * this.currentSlider)
                this.sliderItems.style.transform = `translateX(${this.distancePoint + this.currentTranslate}px)`;
            }
        }

        onLeave(event) {
            if (this.startPoint !== -1) {
                // Did user drag enough far? 
                if (Math.abs(this.distancePoint) > (this.sliderParent.offsetWidth / 10)) {
                    if (this.distancePoint > 0)
                        this.changeSliderTo(this.currentSlider - 1);
                    if (this.distancePoint < 0)
                        this.changeSliderTo(this.currentSlider + 1);
                } else if (this.distancePoint !== 0) {
                    this.distancePoint = 0;
                    this.sliderItems.style.transform = `translateX(${this.currentTranslate}px)`;
                    this.sliderItems.style.transition = `.3s transform`;
                    // remove transtion when transfrom end
                    this.sliderItems.addEventListener("transitionend", this.onTranformEnd);
                }
                // Reset start
                this.startPoint = -1;
                // Start auto play again
                this.autoPlay(this.autoPlayTime);
            }
        }

        onTranformEnd() {
            this.sliderItems.style.transition = `0s transform`;
            this.sliderItems.removeEventListener("transitionend", this.onTranformEnd);
        }

        autoPlay(milliseconds) {
            let stepNumber = 1;

            this.autoPlayId = setInterval(() => {
                if (this.currentSlider === this.sliderItem.length - 1) {
                    stepNumber = -1;
                }

                if (this.currentSlider === 0) {
                    stepNumber = 1;
                }
                this.changeSliderTo(this.currentSlider + stepNumber);
            }, milliseconds)
        }

        addEventListeners() {
            // Add event for dots
            Array.prototype.forEach.call(this.dots, (item) => {
                item.addEventListener('click', this.changeSlider);
            });
            // Add event for nav button
            Array.prototype.forEach.call(this.btnNav, (item) => {
                item.addEventListener('click', this.changeSlider);
            });
            // Add event when user mouse down/move/up
            this.sliderParent.addEventListener("mousedown", this.onPress);
            this.sliderParent.addEventListener("mousemove", this.onMove);
            this.sliderParent.addEventListener("mouseup", this.onLeave);
            this.sliderParent.addEventListener("mouseleave", this.onLeave);
        }

        init() {
            // Render slide
            this.renderSliderWrapper();
            // Render dots
            this.renderDots();
            // Render nav button
            this.renderNav();
            // Auto play
            this.autoPlay(this.autoPlayTime);
            // Add event
            this.addEventListeners();
        }
    }

    new slider;
    </script>



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