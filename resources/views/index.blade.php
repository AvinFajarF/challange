<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Car Rent</title>
    <link rel="stylesheet" href="{!! asset('assets/css/style.css') !!}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>


    {{-- navbar --}}
    <div class="hero">

        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand" href="#"><img src="{!! asset('assets/img/carmania.png') !!}" alt=""
                        srcset=""></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav mb-5 ms-auto">
                        <li class="nav-item">
                            <a class="nav-link active fw-semibold" aria-current="page" href="#">Why choose us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fw-semibold" href="#">How it works?</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fw-semibold" href="#">How to Rent ?</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fw-semibold">Catch Our Deals</a>
                        </li>
                        <li class="nav-item">
                            <a class="btn btn-outline-secondary fw-semibold">Login</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="container">

            {{-- hero section --}}
            <div class="row">
                <div class="col">
                    <h1 class="fw-bold">Rent your favorite car in Easy steps.</h1>
                    <p class="hero-paragraf">Get a car wherever and whenever you need it with your iOS or Android
                        device.</p>
                </div>
                <div class="col">
                    <img src="{!! asset('assets/img/hero-car.png') !!}" style="width: 45rem" alt="" srcset="">

                </div>
            </div>

        </div>
        {{-- end hero --}}
    </div>


    <div class="container">

        {{-- merek mobil --}}

        <div class="brand">

            <div class="row">
                <div class="col">
                    <img src="{!! asset('assets/img/Volkswagen.png') !!}" alt="" srcset="">
                </div>
                <div class="col">
                    <img src="{!! asset('assets/img/Bmw.png') !!}" alt="" srcset="">
                </div>
                <div class="col">
                    <img src="{!! asset('assets/img/tata-logo.png') !!}" alt="" srcset="">
                </div>
                <div class="col">
                    <img src="{!! asset('assets/img/mahindra-logo.png') !!}" alt="" srcset="">
                </div>
                <div class="col">
                    <img src="{!! asset('assets/img/Mazda.png') !!}" alt="" srcset="">
                </div>
                <div class="col">
                    <img src="{!! asset('assets/img/toyota-logo.png') !!}" alt="" srcset="">

                </div>
                <div class="col">
                    <img src="{!! asset('assets/img/Ford.png') !!}" alt="" class="mt-3" srcset="">
                </div>
                <div class="col">
                    <img src="{!! asset('assets/img/Nissan.png') !!}" alt="" srcset="">
                </div>
            </div>
        </div>
        {{-- end merek --}}


        {{-- How it work --}}

        <div class="how-it-work">

            <h5 class="text-center title-work">HOW IT WORK</h5>
            <h1 class="fw-bold text-center paragraf-work">Rent your desired car with following 3 working steps</h1>

            <div class="row text-center mt-5">
                <div class="col">
                    <img src="{!! asset('assets/img/location.png') !!}" alt="" srcset="">
                    <h6 class="fw-bold">Pick Your location</h6>
                    <p class="hero-paragraf">Choose your location and find your best car.</p>
                </div>
                <div class="col">
                    <img src="{!! asset('assets/img/arrow.png') !!}" class="arrow" alt="" srcset="">
                </div>
                <div class="col">
                    <img src="{!! asset('assets/img/date.png') !!}" alt="" srcset="">
                    <h6 class="fw-bold">Pick-up date/time</h6>
                    <p class="hero-paragraf">Select your pick up date and time to book your car.</p>
                </div>
                <div class="col">
                    <img src="{!! asset('assets/img/arrow.png') !!}" class="arrow" alt="" srcset="">
                </div>
                <div class="col">
                    <img src="{!! asset('assets/img/desired.png') !!}" alt="" srcset="">
                    <h6 class="fw-bold">Book your Desired Car</h6>
                    <p class="hero-paragraf">We will deliver it directly to you.</p>
                </div>
            </div>


        </div>
        {{-- end How it work --}}

    </div>
    {{-- Why choose us --}}


    <div class="my-choose-us py-5">

        <div class="container">

            <div class="row">
                <div class="col">
                    <img src="{!! asset('assets/img/content-image.png') !!}" class="content-image" alt="" srcset="">
                </div>
                <div class="col">
                    <h6 class="hero-paragraf">Why choose us</h6>
                    <h1 class="fw-bold w-100">Get the best experience of rental cars</h1>

                    <div class="point d-flex flex-column mt-5">

                        <div class="cheapest">
                            {{-- <img src="{!! asset('assets/img/dompet.png') !!}" class="dompet" alt="" srcset=""> --}}
                            <h6 class="fw-bold">Cheapest Market Price Guaranteed</h6>
                            <p class="hero-paragraf">We refund 100% if you find cheaper alternative</p>
                        </div>
                        <div class="hire-drive">
                            <h6 class="fw-bold">Hire Driver</h6>
                            <p class="hero-paragraf">Don’t have a driver? We got you covered with that too.</p>
                        </div>
                        <div class="same-day">
                            <h6 class="fw-bold">Same Day Delivery</h6>
                            <p class="hero-paragraf">Book and we will deliver it directly to you within 24 Hours</p>
                        </div>
                        <div class="support">
                            <h6 class="fw-bold">24/7 Support</h6>
                            <p class="hero-paragraf">Contact us if you have any issues</p>
                        </div>

                    </div>

                </div>






            </div>
        </div>

    </div>




    {{-- end Why choose us --}}





    </div>



    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>
