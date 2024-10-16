<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>{{ $title ? $title : '' }}</title>
    <link rel="stylesheet" href="{{ asset('front/css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('front/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('front/css/My-Media-Query.css') }}" />
    @stack('css')
</head>

<body>
    <div class="bg">
        <div class="bg1"></div>
        <div class="bg2"></div>
    </div>
    <!-- NAVBAR  -->
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid d-flex">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="{{ url('/') }}"><img
                    src="{{ asset('front/assets/images/Optimized-Images/navimage-66dad39351057.webp') }}"
                    alt="logo" /></a>

            <div class="collapse navbar-collapse justify-content-center navbar-text" id="navbarSupportedContent">
                <ul class="navbar-nav mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="{{ url('/') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/about-us') }}">About Us</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Products
                            <img src="{{ asset('front/assets/svgs/Down-Arrow.svg') }}" alt="" />
                        </a>

                        <ul class="dropdown-menu">
                            <li>
                                <a class="dropdown-item d-flex" href="{{ url('/audit-management') }}">Audit Management</a>
                            </li>
                            <li><a class="dropdown-item d-flex" href="{{ url('/enterprise-risk-management') }}">Enterprise Risk Management</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/pricing') }}">Pricing</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/contact-us') }}">Contact Us</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Resources
                            <img src="{{ asset('front/assets/svgs/Down-Arrow.svg') }}" alt="" />
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a class="dropdown-item d-flex" href="{{ url('/blogs') }}">Blogs</a>
                            </li>
                            <li>
                                <a class="dropdown-item d-flex" href="{{ url('/events') }}">Events</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="d-flex">
                <!-- <button class="btn btn-outline-dark me-2 rounded-pill" type="submit">
            Log In
          </button> -->
                <a href="{{ url('/') }}">
                    <button class="btn btn-dark rounded-pill" type="submit">
                        Get a demo
                    </button>
                </a>

            </div>
        </div>
    </nav>

    @yield('content')

    <!-- FOOTER -->

    <footer>
        <div class="footer-container row">
            <div class="footer-item col-xl-3 col-lg-6 col-md-12">
                <a class="footer-img" href="../html/index.html"><img
                        src="{{ asset('front/assets/images/Optimized-Images/footerimage-66dad3902cdcf.webp') }}"
                        alt="logo" /></a>
                <p>
                    Choosing TRPGLOBAL means embracing a transformative experience that
                    unlocks your business's full potential.
                </p>
            </div>
            <div class="footer-item padding-40 d-flex flex-column gap-10 col-xl-3 col-lg-6 col-md-12">
                <h4>Extra Links</h4>
                <ul>
                    <li><a href="../html/index.html">Home</a></li>
                    <li><a href="../html/about-page.html">About</a></li>
                    <li><a href="../html/pricing-page.html">Pricing</a></li>
                    <li><a href="../html/contact-page.html">Contact Us</a></li>
                    <li><a href="../html/blogs-page.html">Blogs</a></li>
                    <li><a href="../html/events-page.html">Events</a></li>
                </ul>
            </div>
            <div class="footer-item padding-40 d-flex flex-column gap-10 col-xl-3 col-lg-6 col-md-12">
                <h4>Our contacts</h4>
                <div class="d-flex flex-column gap-10">
                    <div class="address d-flex align-items-center gap-10">
                        <img src="../assets/svgs/LocationIcon.svg" alt="" />
                        <p>
                            Suite 1 Second Floor EverdeneHouse Deansleigh Road, Bournemouth,
                            England, BH7 7DU, United Kingdom
                        </p>
                    </div>
                    <div class="phoneNumber d-flex align-items-center gap-10">
                        <img src="../assets/svgs/PhoneIcon.svg" alt="" />
                        <p>+1-425-864-2958</p>
                    </div>
                    <div class="phoneNumber d-flex align-items-center gap-10">
                        <img src="../assets/svgs/PhoneIcon.svg" alt="" />
                        <p>+49-176-2590-8274</p>
                    </div>
                    <div class="phoneNumber d-flex align-items-center gap-10">
                        <img src="../assets/svgs/PhoneIcon.svg" alt="" />
                        <p>++44-7768-012397</p>
                    </div>
                    <div class="mailId d-flex align-items-center gap-10">
                        <img src="../assets/svgs/MailIcon.svg" alt="" />
                        <p>hello@clearrisk.ai</p>
                    </div>
                </div>

            </div>
            <div class="footer-item padding-40 d-flex flex-column gap-10 col-xl-3 col-lg-6 col-md-12">
                <h4>Subscribe to our Newsletter!</h4>
                <div class="email-input-field d-flex gap-10">
                    <!-- <label for="customInput" class="form-label">Your Name</label> -->
                    <input type="text" id="customInput" class="form-control" placeholder="Your email" />
                    <button type="submit" class="email-submit-btn">
                        <img src="{{ asset('front/assets/svgs/Right-Long-Arrow.svg') }}" alt="" />
                    </button>
                </div>
            </div>
        </div>
    </footer>
    <script src="{{ asset('front/js/bootstrap.bundle.js') }}"></script>
    @stack('scripts')
</body>

</html>