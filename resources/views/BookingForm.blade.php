

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="{{ asset('css/BookingForm.css')}}">
    <link rel="icon" href="{{ asset('Img/logo1.png')}}">
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"
        integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" />
    <title>Hotel And Restaurant</title>

<body>
    <div class="container">
        <form class="form-group"  method="POST">
            <div id="form">
                <h1 class="text-white text-center">Reserve Now! </h1>

                <div id="first-group">

                    <div id="content">
                        <i class="fa fa-user" aria-hidden="true"></i>
                        <input type="text" id="input-group" placeholder="First name" name="firstname">
                    </div>

                    <div id="content">
                        <i class="fa fa-phone" aria-hidden="true"></i>
                        <input type="number" id="input-group" placeholder="Phone number" name="phonenumber">
                    </div>

                    <div id="content">
                        <i class="fa fa-calendar" aria-hidden="true"></i>
                        <input type="text" id="input-group" placeholder="Departure Date"name="Departure">
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
                        <input type="text" id="input-group" placeholder="Last name" name="lastname">
                    </div>

                    <div id="content">
                        <i class="fa fa-envelope-o" aria-hidden="true"></i>
                        <input type="email" id="input-group" placeholder="Email" name="email">
                    </div>

                    <div id="content">
                        <i class="fa fa-calendar" aria-hidden="true"></i>
                        <input type="text" id="input-group" placeholder="Arrival Date" name="ArrivalDate">
                    </div>

                    <div id="content">
                        <i class="fa fa-users" aria-hidden="true"></i>
                        <select id="input-group" style="background-color: black;">
                            <option value="">Room Type</option>
                            <option value="">AC</option>
                            <option value="">Non-AC</option>
                            <option value="">Single Bedroom</option>
                            <option value="">Double/Full Bedroom</option>
                            <option value="">Triple Bedroom</option>
                            <option value="">Quad Bedroom</option>
                            <option value="">King </option>
                            <option value="">Queen</option>
                            <option value="">Twin Room</option>
                            <option value=""> Hollywood Twin Room</option>
                            <option value="">Double-double</option>
                            <option value="">Studio Room</option>
                            <option value="">Suite / Executive Suite</option>
                            <option value="">Mini Suite or Junior Suite</option>
                            <option value="">President Suite | Presidential Suite</option>
                            <option value="">Apartments / Room for Extended Stay</option>
                            <option value="">Connecting rooms</option>
                            <option value="">Murphy Room</option>
                            <option value="">Accessible Room / Disabled Room</option>
                        </select>
                    </div>

                </div>
                <button type="button" class="btn">Hotels<a href="{{ url('Hotels')}}"><i
                            class="fas fa-arrow-circle-left"></i></a></button>
                <button type="button" class="btn">Book now<a href="{{ url('home')}}"><i
                            class="fas fa-arrow-circle-right"></i></a></button>

            </div>
        </form>
    </div>
</body>

</html>