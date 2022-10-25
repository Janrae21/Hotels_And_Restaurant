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
    <link rel="stylesheet" href="{{ asset('css/Hotels.css')}}">

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

<body>
    <div class="slideshow-container">

        <div class="mySlides fade">
            <li>
                <img srcset="https://d2e5ushqwiltxm.cloudfront.net/wp-content/uploads/sites/172/2019/02/28112207/P_624_1-edit-300x200.jpg 300w, https://d2e5ushqwiltxm.cloudfront.net/wp-content/uploads/sites/172/2019/02/28112207/P_624_1-edit-768x512.jpg 768w, https://d2e5ushqwiltxm.cloudfront.net/wp-content/uploads/sites/172/2019/02/28112207/P_624_1-edit-1024x683.jpg 1024w, https://d2e5ushqwiltxm.cloudfront.net/wp-content/uploads/sites/172/2019/02/28112207/P_624_1-edit-698x465.jpg 698w, https://d2e5ushqwiltxm.cloudfront.net/wp-content/uploads/sites/172/2019/02/28112207/P_624_1-edit-585x390.jpg 585w, https://d2e5ushqwiltxm.cloudfront.net/wp-content/uploads/sites/172/2019/02/28112207/P_624_1-edit-923x615.jpg 923w, https://d2e5ushqwiltxm.cloudfront.net/wp-content/uploads/sites/172/2019/02/28112207/P_624_1-edit-150x100.jpg 150w, https://d2e5ushqwiltxm.cloudfront.net/wp-content/uploads/sites/172/2019/02/28112207/P_624_1-edit.jpg 1800w, https://d2e5ushqwiltxm.cloudfront.net/wp-content/uploads/sites/172/2019/02/28112207/P_624_1-edit.jpg 2x"
                    sizes="(min-width: 300w) 300w, (min-width: 768w) 768w, (min-width: 1024w) 1024w, (min-width: 1200w) 1200w"
                    class="resp"
                    src="https://d2e5ushqwiltxm.cloudfront.net/wp-content/uploads/sites/172/2019/02/28112207/P_624_1-edit-698x465.jpg"
                    width="698" height="465" alt="rooms-and-suites">
            </li>

        </div>

        <div class="mySlides fade">
            <li>
                <img srcset="https://d2e5ushqwiltxm.cloudfront.net/wp-content/uploads/sites/172/2019/05/15025804/1218-AJS-Hotel-de-Coupole-Sapa-1274_NPV_V02-HD-300x200.jpg 300w, https://d2e5ushqwiltxm.cloudfront.net/wp-content/uploads/sites/172/2019/05/15025804/1218-AJS-Hotel-de-Coupole-Sapa-1274_NPV_V02-HD-768x512.jpg 768w, https://d2e5ushqwiltxm.cloudfront.net/wp-content/uploads/sites/172/2019/05/15025804/1218-AJS-Hotel-de-Coupole-Sapa-1274_NPV_V02-HD-1024x683.jpg 1024w, https://d2e5ushqwiltxm.cloudfront.net/wp-content/uploads/sites/172/2019/05/15025804/1218-AJS-Hotel-de-Coupole-Sapa-1274_NPV_V02-HD-697x465.jpg 697w, https://d2e5ushqwiltxm.cloudfront.net/wp-content/uploads/sites/172/2019/05/15025804/1218-AJS-Hotel-de-Coupole-Sapa-1274_NPV_V02-HD-585x390.jpg 585w, https://d2e5ushqwiltxm.cloudfront.net/wp-content/uploads/sites/172/2019/05/15025804/1218-AJS-Hotel-de-Coupole-Sapa-1274_NPV_V02-HD-922x615.jpg 922w, https://d2e5ushqwiltxm.cloudfront.net/wp-content/uploads/sites/172/2019/05/15025804/1218-AJS-Hotel-de-Coupole-Sapa-1274_NPV_V02-HD-150x100.jpg 150w, https://d2e5ushqwiltxm.cloudfront.net/wp-content/uploads/sites/172/2019/05/15025804/1218-AJS-Hotel-de-Coupole-Sapa-1274_NPV_V02-HD.jpg 1600w, https://d2e5ushqwiltxm.cloudfront.net/wp-content/uploads/sites/172/2019/05/15025804/1218-AJS-Hotel-de-Coupole-Sapa-1274_NPV_V02-HD.jpg 2x"
                    sizes="(min-width: 300w) 300w, (min-width: 768w) 768w, (min-width: 1024w) 1024w, (min-width: 1200w) 1200w"
                    class="resp"
                    src="https://d2e5ushqwiltxm.cloudfront.net/wp-content/uploads/sites/172/2019/05/15025804/1218-AJS-Hotel-de-Coupole-Sapa-1274_NPV_V02-HD-697x465.jpg"
                    width="697" height="465" alt="rooms-and-suites">
            </li>

        </div>

        <div class="mySlides fade">
            <li>
                <img srcset="https://d2e5ushqwiltxm.cloudfront.net/wp-content/uploads/sites/172/2019/05/15025800/1218-AJS-Hotel-de-Coupole-Sapa-1223_NPV_V05-HD-300x200.jpg 300w, https://d2e5ushqwiltxm.cloudfront.net/wp-content/uploads/sites/172/2019/05/15025800/1218-AJS-Hotel-de-Coupole-Sapa-1223_NPV_V05-HD-768x512.jpg 768w, https://d2e5ushqwiltxm.cloudfront.net/wp-content/uploads/sites/172/2019/05/15025800/1218-AJS-Hotel-de-Coupole-Sapa-1223_NPV_V05-HD-1024x683.jpg 1024w, https://d2e5ushqwiltxm.cloudfront.net/wp-content/uploads/sites/172/2019/05/15025800/1218-AJS-Hotel-de-Coupole-Sapa-1223_NPV_V05-HD-697x465.jpg 697w, https://d2e5ushqwiltxm.cloudfront.net/wp-content/uploads/sites/172/2019/05/15025800/1218-AJS-Hotel-de-Coupole-Sapa-1223_NPV_V05-HD-585x390.jpg 585w, https://d2e5ushqwiltxm.cloudfront.net/wp-content/uploads/sites/172/2019/05/15025800/1218-AJS-Hotel-de-Coupole-Sapa-1223_NPV_V05-HD-922x615.jpg 922w, https://d2e5ushqwiltxm.cloudfront.net/wp-content/uploads/sites/172/2019/05/15025800/1218-AJS-Hotel-de-Coupole-Sapa-1223_NPV_V05-HD-150x100.jpg 150w, https://d2e5ushqwiltxm.cloudfront.net/wp-content/uploads/sites/172/2019/05/15025800/1218-AJS-Hotel-de-Coupole-Sapa-1223_NPV_V05-HD.jpg 1600w, https://d2e5ushqwiltxm.cloudfront.net/wp-content/uploads/sites/172/2019/05/15025800/1218-AJS-Hotel-de-Coupole-Sapa-1223_NPV_V05-HD.jpg 2x"
                    sizes="(min-width: 300w) 300w, (min-width: 768w) 768w, (min-width: 1024w) 1024w, (min-width: 1200w) 1200w"
                    class="resp"
                    src="https://d2e5ushqwiltxm.cloudfront.net/wp-content/uploads/sites/172/2019/05/15025800/1218-AJS-Hotel-de-Coupole-Sapa-1223_NPV_V05-HD-697x465.jpg"
                    width="697" height="465" alt="rooms-and-suites">
            </li>

        </div>
        <div class="mySlides fade">
            <li>
                <img srcset="https://d2e5ushqwiltxm.cloudfront.net/wp-content/uploads/sites/172/2019/02/28112124/P_Chiffon818_4-edit-300x200.jpg 300w, https://d2e5ushqwiltxm.cloudfront.net/wp-content/uploads/sites/172/2019/02/28112124/P_Chiffon818_4-edit-768x512.jpg 768w, https://d2e5ushqwiltxm.cloudfront.net/wp-content/uploads/sites/172/2019/02/28112124/P_Chiffon818_4-edit-1024x683.jpg 1024w, https://d2e5ushqwiltxm.cloudfront.net/wp-content/uploads/sites/172/2019/02/28112124/P_Chiffon818_4-edit-698x465.jpg 698w, https://d2e5ushqwiltxm.cloudfront.net/wp-content/uploads/sites/172/2019/02/28112124/P_Chiffon818_4-edit-585x390.jpg 585w, https://d2e5ushqwiltxm.cloudfront.net/wp-content/uploads/sites/172/2019/02/28112124/P_Chiffon818_4-edit-923x615.jpg 923w, https://d2e5ushqwiltxm.cloudfront.net/wp-content/uploads/sites/172/2019/02/28112124/P_Chiffon818_4-edit-150x100.jpg 150w, https://d2e5ushqwiltxm.cloudfront.net/wp-content/uploads/sites/172/2019/02/28112124/P_Chiffon818_4-edit.jpg 1800w, https://d2e5ushqwiltxm.cloudfront.net/wp-content/uploads/sites/172/2019/02/28112124/P_Chiffon818_4-edit.jpg 2x"
                    sizes="(min-width: 300w) 300w, (min-width: 768w) 768w, (min-width: 1024w) 1024w, (min-width: 1200w) 1200w"
                    class="resp"
                    src="https://d2e5ushqwiltxm.cloudfront.net/wp-content/uploads/sites/172/2019/02/28112124/P_Chiffon818_4-edit-698x465.jpg"
                    width="698" height="465" alt="rooms-and-suites">
            </li>

        </div>
        <div class="mySlides fade">
            <li>
                <img srcset="https://d2e5ushqwiltxm.cloudfront.net/wp-content/uploads/sites/172/2019/05/15025841/1218-AJS-Hotel-de-Coupole-Sapa-0242_NPV_V02-HD-300x200.jpg 300w, https://d2e5ushqwiltxm.cloudfront.net/wp-content/uploads/sites/172/2019/05/15025841/1218-AJS-Hotel-de-Coupole-Sapa-0242_NPV_V02-HD-768x512.jpg 768w, https://d2e5ushqwiltxm.cloudfront.net/wp-content/uploads/sites/172/2019/05/15025841/1218-AJS-Hotel-de-Coupole-Sapa-0242_NPV_V02-HD-1024x683.jpg 1024w, https://d2e5ushqwiltxm.cloudfront.net/wp-content/uploads/sites/172/2019/05/15025841/1218-AJS-Hotel-de-Coupole-Sapa-0242_NPV_V02-HD-697x465.jpg 697w, https://d2e5ushqwiltxm.cloudfront.net/wp-content/uploads/sites/172/2019/05/15025841/1218-AJS-Hotel-de-Coupole-Sapa-0242_NPV_V02-HD-585x390.jpg 585w, https://d2e5ushqwiltxm.cloudfront.net/wp-content/uploads/sites/172/2019/05/15025841/1218-AJS-Hotel-de-Coupole-Sapa-0242_NPV_V02-HD-922x615.jpg 922w, https://d2e5ushqwiltxm.cloudfront.net/wp-content/uploads/sites/172/2019/05/15025841/1218-AJS-Hotel-de-Coupole-Sapa-0242_NPV_V02-HD-150x100.jpg 150w, https://d2e5ushqwiltxm.cloudfront.net/wp-content/uploads/sites/172/2019/05/15025841/1218-AJS-Hotel-de-Coupole-Sapa-0242_NPV_V02-HD.jpg 1600w, https://d2e5ushqwiltxm.cloudfront.net/wp-content/uploads/sites/172/2019/05/15025841/1218-AJS-Hotel-de-Coupole-Sapa-0242_NPV_V02-HD.jpg 2x"
                    sizes="(min-width: 300w) 300w, (min-width: 768w) 768w, (min-width: 1024w) 1024w, (min-width: 1200w) 1200w"
                    class="resp"
                    src="https://d2e5ushqwiltxm.cloudfront.net/wp-content/uploads/sites/172/2019/05/15025841/1218-AJS-Hotel-de-Coupole-Sapa-0242_NPV_V02-HD-697x465.jpg"
                    width="697" height="465" alt="rooms-and-suites">
            </li>>

        </div>
        <div class="mySlides fade">
            <li>
                <img srcset="https://d2e5ushqwiltxm.cloudfront.net/wp-content/uploads/sites/172/2019/05/15025835/1218-AJS-Hotel-de-Coupole-Sapa-0199_NPV_V01-HD-300x200.jpg 300w, https://d2e5ushqwiltxm.cloudfront.net/wp-content/uploads/sites/172/2019/05/15025835/1218-AJS-Hotel-de-Coupole-Sapa-0199_NPV_V01-HD-768x512.jpg 768w, https://d2e5ushqwiltxm.cloudfront.net/wp-content/uploads/sites/172/2019/05/15025835/1218-AJS-Hotel-de-Coupole-Sapa-0199_NPV_V01-HD-1024x683.jpg 1024w, https://d2e5ushqwiltxm.cloudfront.net/wp-content/uploads/sites/172/2019/05/15025835/1218-AJS-Hotel-de-Coupole-Sapa-0199_NPV_V01-HD-697x465.jpg 697w, https://d2e5ushqwiltxm.cloudfront.net/wp-content/uploads/sites/172/2019/05/15025835/1218-AJS-Hotel-de-Coupole-Sapa-0199_NPV_V01-HD-585x390.jpg 585w, https://d2e5ushqwiltxm.cloudfront.net/wp-content/uploads/sites/172/2019/05/15025835/1218-AJS-Hotel-de-Coupole-Sapa-0199_NPV_V01-HD-922x615.jpg 922w, https://d2e5ushqwiltxm.cloudfront.net/wp-content/uploads/sites/172/2019/05/15025835/1218-AJS-Hotel-de-Coupole-Sapa-0199_NPV_V01-HD-150x100.jpg 150w, https://d2e5ushqwiltxm.cloudfront.net/wp-content/uploads/sites/172/2019/05/15025835/1218-AJS-Hotel-de-Coupole-Sapa-0199_NPV_V01-HD.jpg 1600w, https://d2e5ushqwiltxm.cloudfront.net/wp-content/uploads/sites/172/2019/05/15025835/1218-AJS-Hotel-de-Coupole-Sapa-0199_NPV_V01-HD.jpg 2x"
                    sizes="(min-width: 300w) 300w, (min-width: 768w) 768w, (min-width: 1024w) 1024w, (min-width: 1200w) 1200w"
                    class="resp"
                    src="https://d2e5ushqwiltxm.cloudfront.net/wp-content/uploads/sites/172/2019/05/15025835/1218-AJS-Hotel-de-Coupole-Sapa-0199_NPV_V01-HD-697x465.jpg"
                    width="697" height="465" alt="rooms-and-suites">
            </li>
        </div>
        <div class="mySlides fade">
            <li>
                <img srcset="https://d2e5ushqwiltxm.cloudfront.net/wp-content/uploads/sites/172/2019/05/15025831/1218-AJS-Hotel-de-Coupole-Sapa-0172_HNL_V3-HD-300x200.jpg 300w, https://d2e5ushqwiltxm.cloudfront.net/wp-content/uploads/sites/172/2019/05/15025831/1218-AJS-Hotel-de-Coupole-Sapa-0172_HNL_V3-HD-768x512.jpg 768w, https://d2e5ushqwiltxm.cloudfront.net/wp-content/uploads/sites/172/2019/05/15025831/1218-AJS-Hotel-de-Coupole-Sapa-0172_HNL_V3-HD-1024x683.jpg 1024w, https://d2e5ushqwiltxm.cloudfront.net/wp-content/uploads/sites/172/2019/05/15025831/1218-AJS-Hotel-de-Coupole-Sapa-0172_HNL_V3-HD-697x465.jpg 697w, https://d2e5ushqwiltxm.cloudfront.net/wp-content/uploads/sites/172/2019/05/15025831/1218-AJS-Hotel-de-Coupole-Sapa-0172_HNL_V3-HD-585x390.jpg 585w, https://d2e5ushqwiltxm.cloudfront.net/wp-content/uploads/sites/172/2019/05/15025831/1218-AJS-Hotel-de-Coupole-Sapa-0172_HNL_V3-HD-922x615.jpg 922w, https://d2e5ushqwiltxm.cloudfront.net/wp-content/uploads/sites/172/2019/05/15025831/1218-AJS-Hotel-de-Coupole-Sapa-0172_HNL_V3-HD-150x100.jpg 150w, https://d2e5ushqwiltxm.cloudfront.net/wp-content/uploads/sites/172/2019/05/15025831/1218-AJS-Hotel-de-Coupole-Sapa-0172_HNL_V3-HD.jpg 1600w, https://d2e5ushqwiltxm.cloudfront.net/wp-content/uploads/sites/172/2019/05/15025831/1218-AJS-Hotel-de-Coupole-Sapa-0172_HNL_V3-HD.jpg 2x"
                    sizes="(min-width: 300w) 300w, (min-width: 768w) 768w, (min-width: 1024w) 1024w, (min-width: 1200w) 1200w"
                    class="resp"
                    src="https://d2e5ushqwiltxm.cloudfront.net/wp-content/uploads/sites/172/2019/05/15025831/1218-AJS-Hotel-de-Coupole-Sapa-0172_HNL_V3-HD-697x465.jpg"
                    width="697" height="465" alt="rooms-and-suites">
            </li>
        </div>
        <div class="mySlides fade">
            <li>
                <img srcset="https://d2e5ushqwiltxm.cloudfront.net/wp-content/uploads/sites/172/2019/05/15025742/1218-AJS-Hotel-de-Coupole-Sapa-2492_NPV_V01-HD-300x200.jpg 300w, https://d2e5ushqwiltxm.cloudfront.net/wp-content/uploads/sites/172/2019/05/15025742/1218-AJS-Hotel-de-Coupole-Sapa-2492_NPV_V01-HD-768x512.jpg 768w, https://d2e5ushqwiltxm.cloudfront.net/wp-content/uploads/sites/172/2019/05/15025742/1218-AJS-Hotel-de-Coupole-Sapa-2492_NPV_V01-HD-1024x683.jpg 1024w, https://d2e5ushqwiltxm.cloudfront.net/wp-content/uploads/sites/172/2019/05/15025742/1218-AJS-Hotel-de-Coupole-Sapa-2492_NPV_V01-HD-697x465.jpg 697w, https://d2e5ushqwiltxm.cloudfront.net/wp-content/uploads/sites/172/2019/05/15025742/1218-AJS-Hotel-de-Coupole-Sapa-2492_NPV_V01-HD-585x390.jpg 585w, https://d2e5ushqwiltxm.cloudfront.net/wp-content/uploads/sites/172/2019/05/15025742/1218-AJS-Hotel-de-Coupole-Sapa-2492_NPV_V01-HD-922x615.jpg 922w, https://d2e5ushqwiltxm.cloudfront.net/wp-content/uploads/sites/172/2019/05/15025742/1218-AJS-Hotel-de-Coupole-Sapa-2492_NPV_V01-HD-150x100.jpg 150w, https://d2e5ushqwiltxm.cloudfront.net/wp-content/uploads/sites/172/2019/05/15025742/1218-AJS-Hotel-de-Coupole-Sapa-2492_NPV_V01-HD.jpg 1600w, https://d2e5ushqwiltxm.cloudfront.net/wp-content/uploads/sites/172/2019/05/15025742/1218-AJS-Hotel-de-Coupole-Sapa-2492_NPV_V01-HD.jpg 2x"
                    sizes="(min-width: 300w) 300w, (min-width: 768w) 768w, (min-width: 1024w) 1024w, (min-width: 1200w) 1200w"
                    class="resp"
                    src="https://d2e5ushqwiltxm.cloudfront.net/wp-content/uploads/sites/172/2019/05/15025742/1218-AJS-Hotel-de-Coupole-Sapa-2492_NPV_V01-HD-697x465.jpg"
                    width="697" height="465" alt="rooms-and-suites">
            </li>
        </div>
        <div class="mySlides fade">
            <li>
                <img srcset="https://d2e5ushqwiltxm.cloudfront.net/wp-content/uploads/sites/172/2019/05/15025738/1218-AJS-Hotel-de-Coupole-Sapa-2433_NPV_V01-HD-300x200.jpg 300w, https://d2e5ushqwiltxm.cloudfront.net/wp-content/uploads/sites/172/2019/05/15025738/1218-AJS-Hotel-de-Coupole-Sapa-2433_NPV_V01-HD-768x512.jpg 768w, https://d2e5ushqwiltxm.cloudfront.net/wp-content/uploads/sites/172/2019/05/15025738/1218-AJS-Hotel-de-Coupole-Sapa-2433_NPV_V01-HD-1024x683.jpg 1024w, https://d2e5ushqwiltxm.cloudfront.net/wp-content/uploads/sites/172/2019/05/15025738/1218-AJS-Hotel-de-Coupole-Sapa-2433_NPV_V01-HD-697x465.jpg 697w, https://d2e5ushqwiltxm.cloudfront.net/wp-content/uploads/sites/172/2019/05/15025738/1218-AJS-Hotel-de-Coupole-Sapa-2433_NPV_V01-HD-585x390.jpg 585w, https://d2e5ushqwiltxm.cloudfront.net/wp-content/uploads/sites/172/2019/05/15025738/1218-AJS-Hotel-de-Coupole-Sapa-2433_NPV_V01-HD-922x615.jpg 922w, https://d2e5ushqwiltxm.cloudfront.net/wp-content/uploads/sites/172/2019/05/15025738/1218-AJS-Hotel-de-Coupole-Sapa-2433_NPV_V01-HD-150x100.jpg 150w, https://d2e5ushqwiltxm.cloudfront.net/wp-content/uploads/sites/172/2019/05/15025738/1218-AJS-Hotel-de-Coupole-Sapa-2433_NPV_V01-HD.jpg 1600w, https://d2e5ushqwiltxm.cloudfront.net/wp-content/uploads/sites/172/2019/05/15025738/1218-AJS-Hotel-de-Coupole-Sapa-2433_NPV_V01-HD.jpg 2x"
                    sizes="(min-width: 300w) 300w, (min-width: 768w) 768w, (min-width: 1024w) 1024w, (min-width: 1200w) 1200w"
                    class="resp"
                    src="https://d2e5ushqwiltxm.cloudfront.net/wp-content/uploads/sites/172/2019/05/15025738/1218-AJS-Hotel-de-Coupole-Sapa-2433_NPV_V01-HD-697x465.jpg"
                    width="697" height="465" alt="rooms-and-suites">
            </li>
        </div>
        <div class="mySlides fade">
            <li>
                <img srcset="https://d2e5ushqwiltxm.cloudfront.net/wp-content/uploads/sites/172/2019/01/29055536/0163-edit-300x200.jpg 300w, https://d2e5ushqwiltxm.cloudfront.net/wp-content/uploads/sites/172/2019/01/29055536/0163-edit-768x512.jpg 768w, https://d2e5ushqwiltxm.cloudfront.net/wp-content/uploads/sites/172/2019/01/29055536/0163-edit-1024x683.jpg 1024w, https://d2e5ushqwiltxm.cloudfront.net/wp-content/uploads/sites/172/2019/01/29055536/0163-edit-698x465.jpg 698w, https://d2e5ushqwiltxm.cloudfront.net/wp-content/uploads/sites/172/2019/01/29055536/0163-edit-585x390.jpg 585w, https://d2e5ushqwiltxm.cloudfront.net/wp-content/uploads/sites/172/2019/01/29055536/0163-edit-923x615.jpg 923w, https://d2e5ushqwiltxm.cloudfront.net/wp-content/uploads/sites/172/2019/01/29055536/0163-edit-150x100.jpg 150w, https://d2e5ushqwiltxm.cloudfront.net/wp-content/uploads/sites/172/2019/01/29055536/0163-edit.jpg 1800w, https://d2e5ushqwiltxm.cloudfront.net/wp-content/uploads/sites/172/2019/01/29055536/0163-edit.jpg 2x"
                    sizes="(min-width: 300w) 300w, (min-width: 768w) 768w, (min-width: 1024w) 1024w, (min-width: 1200w) 1200w"
                    class="resp"
                    src="https://d2e5ushqwiltxm.cloudfront.net/wp-content/uploads/sites/172/2019/01/29055536/0163-edit-698x465.jpg"
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
        <span style="--i:2">O</span>
        <span style="--i:3">O</span>
        <span style="--i:4">M</span>
        <span style="--i:5">S</span>
        <span style="--i:6"></span>
        <span style="--i:7">A</span>
        <span style="--i:8">N</span>
        <span style="--i:9">D</span>
        <span style="--i:11"></span>
        <span style="--i:12">S</span>
        <span style="--i:13">U</span>
        <span style="--i:14">I</span>
        <span style="--i:15">T</span>
        <span style="--i:16">E</span>
        <span style="--i:17">S</span>



    </div>

    <section class="customer-top" id="testimonials">
        <div class="container">
            <div class="heading">
                <h5>LUXURY WONDERS' EXPERIENCES </h5><br>
                <p style="color:black;text-align: justify;">Luxury Wonders is a leading hospitality group listed on the
                    Stock Exchange of Philippines. Building on its two core areas of business REstaurants, Hotels &
                    Resorts and Hospitality Education – the company has expanded its operations over the past four years
                    to comprise five business units. The additional units include Foods, Property Development, and
                    Hospitality-Related Services. Today, the company’s property portfolio comprises more than 300
                    distinctive hotels, as well as two
                    leading hospitality colleges with campuses in Thailand and the Philippines.<br><br> Following a
                    three-pronged strategy for sustainable growth, including balance, expansion and diversification, the
                    company has recently expanded into food production, on-demand hospitality services, and property
                    development to reach new markets and add further recurring streams of revenue to the company.All
                    rooms feature full-length doors leading to balconies overlooking the hotel's pretty courtyard
                    garden, Sapa town, the mountains or the iconic rice paddies of the Sapa valley, allowing guests to
                    fully immerse themselves in the stunning surroundings.
                </p>
                <br><br>
                <h1> “Hospitality means primarily the creation of free space where the stranger can enter and become a
                    friend instead of an enemy."</h1>


            </div>
    </section>
    <!-- body content  -->
    <section class="services sec-width" id="services">
        <div class="title">
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
                    <p>Hotel food and beverage services cover everything from room service to continental breakfast to
                        in-house restaurants. Today we’ll be walking through the role food and beverage work plays in
                        the hotel industry. We'll also cover how you, as a hotel owner or manager, can maximize your
                        food and beverage services. </p>
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
                    <p>ENSURING COMFORTABLE STAY: <br>
                        Your priority is to ensure that your guests feel at home in your hotel. Whether it’s a
                        boisterous family on a holiday or a business traveler, they should feel welcomed, safe, and
                        comfortable.
                        <br>
                        An effective housekeeping services staff will keep the guests in their comfort zone, ultimately
                        improving your business’s bottom line.
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
                    <p>HOSPITALITY HOUSEKEEPING SERVICES FOR COMPETITIVE BUSINESS ADVANTAGE<br>
                        Hospitality housekeeping services are very important to the success of any business. Read about
                        ways that hospitality housekeeping services can help keep your business ahead of the competition
                        here.</p>
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
                    <p>Hotel security involves the overall security of the hotel’s building and grounds as well as its
                        guests, employees, visitors and day users. Outlined below are some of the most important aspects
                        of hotel security that properly trained officers can address.</p>
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
                <input type="submit" class="btn" value="Reserve Now">
            </div>
        </form>
    </div>

    <section class="rooms sec-width" id="rooms">
        <div class="title">
            <h1>Rooms</h1>
        </div>
        <div class="rooms-container">
            <!--single room-->
            <article class="room">
                <div class="room-image">
                    <img src="{{ asset('Img/Manila .png')}}" alt="room image">
                </div>
                <div class="room-text">
                    <h3>LUZON</h3>
                    <p><b>Manila</b><br>
                        Enjoy a luxurious stay in a 45-sq. m. luxurious Makati hotel suite, embellished with Thai design
                        elements. Choose from a king or twin beds and relax with all the comforts and conveniences you
                        need.</p>
                    <p><b>Savoy Hotel Manila - Multiple Use Hotel </b><br>
                        Hotel in Pasay, Manila<br>
                        Savoy Hotel Manila boasts of an outdoor swimming pool, situated 200 metres from Resorts World
                        Manila, this 4-star property offers 24-hour front desk and an on-site restaurant and bar.</p>
                    <p class="rate">
                        <span>₱ 3,161.05 /</span> Per Night
                    </p>
                    <button type="button" class="btn"><a href="{{ url('Luzon')}}">Book now<i
                                class="fas fa-arrow-circle-right"></i></a></button>
                </div>
            </article>
            <!-- end of single room -->
            <!-- single room -->
            <article class="room">
                <div class="room-image">
                    <img src="{{ asset('Img/mactan visayas.png')}}" alt="room image">
                </div>
                <div class="room-text">
                    <h3>VISAYAS</h3>
                    <p><b>Mactan. Cebu Resort</b><br>
                        Treat yourself and your loved ones to the comforts of a 127-sq. m two-bedroom haven. Take in
                        breathtaking views of Magellan Bay from your private balcony and enjoy the added space to relax
                        with separate living and dining areas and a generous pantry.</p>
                    <p><b>Waterfront Airport Hotel and Casino</b> <br>
                        MactanShow on map3 km from centre
                        Travel Sustainable property
                        Waterfront Airport Hotel and Casino is located next to the Mactan international Airport. It
                        offers soundproof rooms, an outdoor pool, 5 dining options, Karaoke rooms and free parking.</p>
                    <p class="rate">
                        <span>₱ 4,173.62/</span> Per Night
                    </p>
                    <button type="button" class="btn"><a href="{{ url('Visayas')}}">Book now<i
                                class="fas fa-arrow-circle-right"></i></a></button>
                </div>
            </article>
            <!-- single room -->
            <article class="room">
                <div class="room-image">
                    <img src="{{ asset('Img/Visayas (2).png')}}" alt="room image">
                </div>
                <div class="room-text">
                    <h3>MINDANAO</h3>
                    <p><b>Davao City</b><br>
                        We give you a legendary welcome, every time you come back.We make the ordinary, extraordinary
                        and we aim to redefine a new dimension of luxury and relaxation.The finest hotel at the best
                        price.</p>
                    <p><b>Fair Crown Suites</b>
                        Boasting a garden, Fair Crown Suites is located in Davao City in the Mindanao region, 1.8 km
                        from SM City Davao and 3.6 km from People's Park. very close to restaurants and mall</p>
                    <p class="rate">
                        <span>₱ 2,500 /</span> Per Night
                    </p>
                    <button type="button" class="btn"><a href="{{ url('Mindanao')}}">Book now<i
                                class="fas fa-arrow-circle-right"></i></a></button>
                </div>
            </article>
            <!-- end of single room -->

        </div>
    </section>


    <section class="customers" id="customers">
        <div class="sec-width">
            <div class="title">
                <h1>Customer's Reviews</h1>
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
                    <p>I love the place, it is very well maintained. The rooms are spacious and very clean. We totally
                        enjoyed our stay here, the hosts are very accommodating and kind. We truly appreciate the
                        customer service, 10 out of 10, and highly recommend this resort to everyone. Thank you so much
                        Mylene and Peter for going out of your way to help us out with everything. It was an amazing
                        holiday because of you.</p>
                    <span style="color:#CC8C18">Edrian Santos<br>
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
                    <h3>Comfortable Living</h3>
                    <p>The hotel has an amazing authentic style and very beatuful territory. Location is amazing, just 3
                        minutes by moto to Cloud 9. Breakfasts were perfect too. Strongly recommend for couples who wish
                        to enjoy Siargao at its best!</p>
                    <span style="color:#CC8C18">John Smith<br>
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
                    <h3>Nice Place</h3>
                    <p>The room was spacious and clean and also has complete amenities for it's price, the place is near
                        people's park and good choices of restaurants. the staff were nice and friendly. Overall, it's a
                        great deal! will surely book here again when we come back.</p>
                    <span style="color:#CC8C18">Katrina Yap<br>
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