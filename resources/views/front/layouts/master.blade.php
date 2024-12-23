<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @stack('meta-tags')
    <title>{{ $title ? $title : '' }}</title>
    <link rel="stylesheet" href="{{ asset('front/css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('front/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('front/css/My-Media-Query.css') }}" />
    @stack('css')
    <script>
        let baseUrl = "{{ url('') }}/";
        let lang = "en";
        let _token = "{{ csrf_token() }}";
    </script>
</head>


<body>
    <div id="loader" class="loader">
        <div class="spinner"></div>
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
                                <a class="dropdown-item d-flex" href="{{ url('/audit-management') }}">Audit
                                    Management</a>
                            </li>
                            <li><a class="dropdown-item d-flex"
                                    href="{{ url('/enterprise-risk-management') }}">Enterprise Risk Management</a></li>
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
                <a href="{{ url('/contact-us') }}">
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
                <a class="footer-img" href="{{ url('/') }}"><img
                        src="{{ asset('front/assets/images/Optimized-Images/footerimage-66dad3902cdcf.webp') }}"
                        alt="logo" /></a>
                <p>
                    Choosing us means embracing a transformative experience that
                    unlocks your business's full potential.
                </p>
            </div>
            <div class="footer-item padding-40 d-flex flex-column gap-10 col-xl-3 col-lg-6 col-md-12">
                <h4>Extra Links</h4>
                <ul>
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li><a href="{{ url('/about-us') }}">About</a></li>
                    <li><a href="{{ url('/pricing') }}">Pricing</a></li>
                    <li><a href="{{ url('/contact-us') }}">Contact Us</a></li>
                    <li><a href="{{ url('/blogs') }}">Blogs</a></li>
                    <li><a href="{{ url('/events') }}">Events</a></li>
                </ul>
            </div>
            <div class="footer-item padding-40 d-flex flex-column gap-10 col-xl-3 col-lg-6 col-md-12">
                <h4>Our contacts</h4>
                <div class="d-flex flex-column gap-10">
                    {{-- <div class="address d-flex align-items-center gap-10">
                        <img src="../assets/svgs/LocationIcon.svg" alt="" />
                        <p>
                            Suite 1 Second Floor EverdeneHouse Deansleigh Road, Bournemouth,
                            England, BH7 7DU, United Kingdom
                        </p>
                    </div> --}}
                    <div class="phoneNumber d-flex align-items-center gap-10">
                        <img src="{{ asset('front/assets/svgs/PhoneIcon.svg') }}" alt="" />
                        <p>US: 1-425-864-2958</p>
                    </div>
                    <div class="phoneNumber d-flex align-items-center gap-10">
                        <img src="{{ asset('front/assets/svgs/PhoneIcon.svg') }}" alt="" />
                        <p>Germany: 49-176-2590-8274</p>
                    </div>
                    <div class="phoneNumber d-flex align-items-center gap-10">
                        <img src="{{ asset('front/assets/svgs/PhoneIcon.svg') }}" alt="" />
                        <p>UK: 44-7768-012397</p>
                    </div>
                    <div class="mailId d-flex align-items-center gap-10">
                        <img src="{{ asset('front/assets/svgs/MailIcon.svg') }}" alt="" />
                        <p>hello@clearrisk.ai</p>
                    </div>
                </div>

            </div>
            <div class="footer-item padding-40 d-flex flex-column gap-10 col-xl-3 col-lg-6 col-md-12">
                <h4>Subscribe to our Newsletter!</h4>
                <div class="email-input-field d-flex gap-10">
                    <!-- <label for="customInput" class="form-label">Your Name</label> -->
                    <input type="text" id="customInput" class="form-control" name="email"
                        placeholder="Your email" />
                    <button type="submit" class="email-submit-btn" id="subscribeButton">
                        <img src="{{ asset('front/assets/svgs/Right-Long-Arrow.svg') }}" alt="" />
                    </button>
                </div>
                <div class="alert alert-danger" role="alert" id="footer-alert">
                    <p id="alert-desc"></p>
                </div>

            </div>
        </div>
        <div class="copyright-section">
            <p class="copyright">Copyright © ClearRisk {{ date('Y') }} | All Rights Reserved.</p>
        </div>
    </footer>

    <script src="{{ asset('front/js/bootstrap.bundle.js') }}"></script>
    <script src="{{ asset('front/js/script.js') }}"></script>

    <script>
        const footerAlertBox = document.querySelector('#footer-alert');
        (function(){
            footerAlertBox.style.display= 'none'
        })()
        const subscribeBtn = document.getElementById('subscribeButton');
        subscribeBtn.addEventListener('click', (e) => {
            e.preventDefault();
            let emailInput = document.getElementById('customInput');
            const email = emailInput.value.trim(); // Get the email value
            emailInput.value = '';
            emailInput.placeholder = 'Your email'

            // Validate the email input
            if (!validateEmail(email)) {
                footerAlertBox.style.display = 'block';
                footerAlertBox.classList.remove("alert-success");
                footerAlertBox.classList.add('alert-danger');
                document.querySelector('#alert-desc').textContent = "Kindly enter a valid e-Mail Id !";
                setTimeout(() => {
                    footerAlertBox.style.display = 'none'; // Hide completely after fade-out
                }, 3000); 
                return; // Exit if the email is invalid
            }
            postData({
                _token:_token,
                email:email

            },"subscribed-emails")
        })

        function validateEmail(email) {
            // Regular expression for validating email
            const emailPattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
            return emailPattern.test(email);
        }

        function postData(dataJson, url) {
            fetch(`${baseUrl}${url}`, {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json'
                    },
                    body: JSON.stringify(dataJson)
                })
                .then(response => response.json())
                .then(data => {
                    if(data.status){
                        footerAlertBox.classList.remove("alert-danger");
                        footerAlertBox.style.display = 'block';
                        footerAlertBox.classList.add('alert-success');
                        document.querySelector('#alert-desc').textContent = data.message;
                    }else{
                        footerAlertBox.style.display = 'block';
                        footerAlertBox.classList.remove("alert-success");
                        footerAlertBox.classList.add('alert-danger');
                        document.querySelector('#alert-desc').textContent =  data.error;  
                    }
                    setTimeout(() => {
                             footerAlertBox.style.display = 'none'; // Hide completely after fade-out
                    }, 3000); 
                })
                .catch(error => {
                    console.error('There was an error with the POST request:', error);
                });
        }

    </script>

    @stack('scripts')
</body>

</html>
