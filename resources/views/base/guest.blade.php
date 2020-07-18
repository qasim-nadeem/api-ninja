<!DOCTYPE html>
<html lang="en">
<head>
    <title>API Ninja - Create API end point with ease</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Work+Sans:300,400,500,600,700" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="css/animate.css">

    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<!-- START nav -->
<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="{{route('home')}}">API Ninja</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active"><a href="{{route('home')}}" class="nav-link">Home</a></li>
                <li class="nav-item"><a href="about.html" class="nav-link">About Developer</a></li>
                <li class="nav-item"><a href="pricing.html" class="nav-link">Blog</a></li>
{{--                <li class="nav-item"><a class="nav-link" href="leadership.html">Leadership</a></li>--}}
{{--                <li class="nav-item"><a href="blog.html" class="nav-link">Blog</a></li>--}}
{{--                <li class="nav-item"><a href="contact.html" class="nav-link">Contact</a></li>--}}
                <li class="nav-item cta"><a href="#" class="nav-link"><span>Create API</span></a></li>
            </ul>
        </div>
    </div>
</nav>
<!-- END nav -->

@yield('content')


<footer class="ftco-footer ftco-bg-dark ftco-section">
    <div class="container">
{{--        <div class="row mb-5">--}}
{{--            <div class="col-md">--}}
{{--                <div class="ftco-footer-widget mb-4">--}}
{{--                    <h2 class="ftco-heading-2">API Ninja</h2>--}}
{{--                    <p>Create Dummy API endpoints.</p>--}}
{{--                    <ul class="ftco-footer-social list-unstyled mb-0">--}}
{{--                        <li class="ftco-animate"><a href="#"><span class="fa fa-twitter"></span></a></li>--}}
{{--                        <li class="ftco-animate"><a href="#"><span class="fa fa-facebook"></span></a></li>--}}
{{--                        <li class="ftco-animate"><a href="#"><span class="fa fa-instagram"></span></a></li>--}}
{{--                    </ul>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-md">--}}
{{--                <div class="ftco-footer-widget mb-4 ml-md-5">--}}
{{--                    <h2 class="ftco-heading-2">Unseful Links</h2>--}}
{{--                    <ul class="list-unstyled">--}}
{{--                        <li><a href="#" class="py-2 d-block">Company</a></li>--}}
{{--                        <li><a href="#" class="py-2 d-block">Pricing</a></li>--}}
{{--                        <li><a href="#" class="py-2 d-block">Leadership</a></li>--}}
{{--                        <li><a href="#" class="py-2 d-block">Blog</a></li>--}}
{{--                        <li><a href="#" class="py-2 d-block">Contact</a></li>--}}
{{--                    </ul>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-md">--}}
{{--                <div class="ftco-footer-widget mb-4">--}}
{{--                    <h2 class="ftco-heading-2">Navigational</h2>--}}
{{--                    <ul class="list-unstyled">--}}
{{--                        <li><a href="#" class="py-2 d-block">Join Us</a></li>--}}
{{--                        <li><a href="#" class="py-2 d-block">Blog</a></li>--}}
{{--                        <li><a href="#" class="py-2 d-block">Privacy &amp; Policy</a></li>--}}
{{--                        <li><a href="#" class="py-2 d-block">Terms &amp; Condition</a></li>--}}
{{--                    </ul>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-md">--}}
{{--                <div class="ftco-footer-widget mb-4">--}}
{{--                    <h2 class="ftco-heading-2">Office</h2>--}}
{{--                    <div class="block-23 mb-3">--}}
{{--                        <ul>--}}
{{--                            <li><span class="mr-3 fa fa-map-marker"></span><span class="text">203 Fake St. Mountain View, San Francisco, California, USA</span></li>--}}
{{--                            <li><a href="#"><span class="mr-3 fa fa-phone"></span><span class="text">+2 392 3929 210</span></a></li>--}}
{{--                            <li><a href="#"><span class="mr-3 fa fa-envelope"></span><span class="text">info@yourdomain.com</span></a></li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
        <div class="row">
            <div class="col-md-12 text-center">

                <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | API NINJA <i class="fa flaticon-cloud-computing" aria-hidden="true"></i> by <a href="http://qasim-nadeem.github.io/" target="_blank">QASIM NADEEM</a>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
            </div>
        </div>
    </div>
</footer>



<!-- loader -->
<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


<script src="js/jquery.min.js"></script>
<script src="js/jquery-migrate-3.0.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/jquery.waypoints.min.js"></script>
<script src="js/jquery.stellar.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/jquery.animateNumber.min.js"></script>
<script src="js/scrollax.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
<script src="js/google-map.js"></script>
<script src="js/main.js"></script>

</body>
</html>
