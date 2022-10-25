<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="{{ asset('css/BookingRestaurant.css')}}">
    <link rel="icon" href="{{ asset('Img/logo1.png')}}">
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"
        integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" />
    <title>Hotel And Restaurant</title>

<body>
    <div class="container">
        <form class="form-group">
            <div id="form">
                <h1 class="text-white text-center">Reserve Now! </h1>

                <div id="first-group">

                    <div id="content">
                        <i class="fa fa-user" aria-hidden="true"></i>
                        <input type="text" id="input-group" placeholder="First name">
                    </div>

                    <div id="content">
                        <i class="fa fa-phone" aria-hidden="true"></i>
                        <input type="number" id="input-group" placeholder="Phone number">
                    </div>

                    <div id="content">
                        <i class="fa fa-calendar" aria-hidden="true"></i>
                        <input type="text" id="input-group" placeholder="Reservation Date">
                    </div>

                    <div id="content">
                        <i class="fa fa-users" aria-hidden="true"></i>
                        <select id="input-group" style="background-color: black;">
                            <option value="">No.of guests</option>
                            <option value="">1-5</option>
                            <option value="">6-10</option>
                            <option value="">11-20</option>
                        </select>
                    </div>

                </div>

                <div id="second-group">

                    <div id="content">
                        <i class="fa fa-user" aria-hidden="true"></i>
                        <input type="text" id="input-group" placeholder="Last name">
                    </div>

                    <div id="content">
                        <i class="fa fa-envelope-o" aria-hidden="true"></i>
                        <input type="email" id="input-group" placeholder="Email">
                    </div>

                    <div id="content">
                        <i class="fa fa-calendar" aria-hidden="true"></i>
                        <input type="text" id="input-group" placeholder="Reservation Time">
                    </div>

                    

                </div>
                <button type="button" class="btn">Restaurant<a href="{{ url('Restaurant')}}"><i
                            class="fas fa-arrow-circle-left"></i></a></button>
                <button type="button" class="btn">Book now <a href="{{ url('home')}}"><i
                            class="fas fa-arrow-circle-right"></i></a></button>

            </div>
        </form>
    </div>
</body>

</html>