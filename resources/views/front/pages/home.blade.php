@extends('front.layouts.master')
@section('content')
@push('meta-tags')
<meta name="title" content="Intelligent Risk Management Solutions for Bold Leaders | ClearRisk" />
<meta name="description" content="Discover how ClearRisk empowers businesses across industries like IT, manufacturing, healthcare, and more with AI-driven risk management solutions. Our innovative products help identify, assess, and mitigate risks with precision. Explore audit and enterprise risk management tools tailored to bold leaders seeking to navigate uncertainties and drive success." />
<meta name="keywords" content="Intelligent risk management, AI-driven risk solutions, audit management, enterprise risk management, business risk solutions, proactive risk mitigation, IT risk management, manufacturing risk solutions, healthcare risk management, ClearRisk products, industries we helped" />
@endpush

    <!-- First Page -->
    <div class="row flex-lg-row-reverse align-items-center px-5">
        <div class="col-10 col-sm-8 col-lg-6 circlegif">
            <img src="{{ asset('front//assets/images/Optimized-Images/hero image.webp') }}" alt="
          class="d-block mx-lg-auto img-fluid" alt="ClearRiskGif" loading="lazy" />
        </div>
        <div class="col-lg-6 hero-text-area d-flex flex-column gap-10">
            <h1 class="display-5 fw-bold lh-1 mb-3 main-heading-dark">
                Intelligent Risk Management<br>for Bold Leaders.
            </h1>
            <p class="lead">
                At ClearRisk, we empower businesses to navigate uncertainties with precision. Our AI-driven risk management
                solutions provide actionable insights, helping leaders mitigate potential threats and drive success with
                confidence.
                <br>
                Stay proactive, stay ahead, and lead with clarity.
            </p>
            <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                <button type="button" class="btn btn btn-dark rounded-pill" data-bs-toggle="modal"
                    data-bs-target="#exampleModal">
                    Watch a video
                </button>
            </div>
        </div>
    </div>


    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-l">
            <div class="modal-content">
                <div class="modal-header">
                    {{-- <h5 class="modal-title" id="exampleModalLabel">Introduction Videos</h5> --}}
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <video class="intro-video" src="{{ asset('front/assets/videos/ClearRisk_Intro 3.mp4') }}" controls></video>
            </div>
        </div>
    </div>



    <div class="client-logos text-center">
        <h1 class="display-5 fw-bold lh-1 margin40 main-heading-dark">
            Industries We Helped
        </h1>
        <div class="logos">
            <img src="{{asset('front/assets/images/Optimized-Images/Industries2.webp')}}" alt="" />
            <!-- <img src="../assets/images/Client Logos/acino-logo-66dad3b63bd12.webp" alt="" />
                                        <img src="../assets/images/Client Logos/acwa-power-logo-66dad3b70715d.webp" alt="" />
                                        <img src="../assets/images/Client Logos/adnec-logo-66dad3b73aedf.webp" alt="" />
                                        <img src="../assets/images/Client Logos/adq-logo-2-66dad3b8c2511.webp" alt="" />
                                        <img src="../assets/images/Client Logos/agthia-logo-66dad3b856d06.webp" alt="" />
                                        <img src="../assets/images/Client Logos/airbnb-logo-66dad3b95b1f6.webp" alt="" />
                                        <img src="../assets/images/Client Logos/beltone-logo-66dad3ba9baef.webp" alt="" /> -->
        </div>
    </div>

    <div class="find-out-container margin40">
        <div class="col-10 col-sm-8 col-lg-6 w-100">
            <div class="heading">
                <h1 class="display-5 fw-bold lh-1 mb-3 main-heading-dark">
                    Find out why<br />leading companies choose
                </h1>
                <h1 class="display-5 fw-bold lh-1 mb-3 main-heading-dark">
                    ClearRisk.AI
                </h1>
            </div>

        </div>

        <div class="row findout-img-cards">

            <div class="findout-img col-xl-6 col-lg-12 col-md-12 d-flex justify-content-center align-items-center">
                <img src="{{asset('front/assets/images/Optimized-Images/frame-12-66dad391ab1db.webp')}}" class="" alt="ClearRiskGif"
                    width="700" height="500" loading="lazy" />
            </div>


            <div class="cards col-xl-6 col-lg-12 col-md-12 d-flex flex-column gap-10 align-items-center">

                <div class="card col-md-12 col-12">
                    <div class="card-heading">
                        Identify and handle additional risks
                    </div>
                    <div class="bio">
                        Remain at the forefront of the contemporary landscape
                        characterized by escalating risk demands by smoothly and
                        effectively integrating and coordinating teams, stakeholders,
                        data, and processes.
                    </div>
                    <!-- <div class="gap-2 d-md-flex justify-content-md-start">
                                              <button
                                                type="button"
                                                class="btn btn btn-dark rounded-pill d-flex align-items-center gap-2"
                                              >
                                                Learn More
                                                <img src="../assets/svgs/Right-Long-Arrow.svg" alt="" />
                                              </button>
                                            </div> -->
                </div>

                <div class="card col-md-12 col-12">
                    <div class="card-heading">
                        Operate more efficiently to achieve a greater impact.
                    </div>

                    <div class="bio">
                        Achieve transformative efficiencies by utilizing comprehensive,
                        purpose-built workflows, advanced automation technologies, and
                        in-depth analytics to their fullest potential.
                    </div>
                    <!-- <div class=" gap-2 d-md-flex justify-content-md-start">
                                              <button
                                                type="button"
                                                class="btn btn btn-dark rounded-pill d-flex align-items-center gap-2"
                                              >
                                                Learn More
                                                <img src="../assets/svgs/Right-Long-Arrow.svg" alt="" />
                                              </button>
                                            </div> -->
                </div>

                <div class="card col-md-12 col-12">
                    <div class="card-heading">
                        Foster ownership and accountability at the front line.
                    </div>

                    <div class="bio">
                        Establish strong and productive partnerships with stakeholders
                        throughout the organization by leveraging exceptional
                        collaboration capabilities.
                    </div>
                    <!-- <div class=" gap-2 d-md-flex justify-content-md-start">
                                              <button
                                                type="button"
                                                class="btn btn btn-dark rounded-pill d-flex align-items-center gap-2"
                                              >
                                                Learn More
                                                <img src="../assets/svgs/Right-Long-Arrow.svg" alt="" />
                                              </button>
                                            </div> -->
                </div>

            </div>

        </div>

    </div>


    <div class="product-container margin50 d-flex flex-column align-items-center gap-20">
        <div class="col-10 col-sm-8 col-lg-6 w-100">
            <div class="heading d-flex justify-content-center">
                <h1 class="display-5 fw-bold lh-1 mb-3 main-heading-dark">
                    Products
                </h1>
            </div>
        </div>

        <div class="product-cards row d-flex justify-content-around px-5">

            <div class="card product-card col-xl-5 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="text">
                    <div class="card-heading product-card-heading">
                        <img src="{{asset('front/assets/svgs/Frame.svg')}}" alt="" />
                        Audit Management
                    </div>

                    <div class="bio">

                        ClearRisk's Audit Management solution simplifies the entire audit process, ensuring compliance and
                        reducing risk exposure. This tool provides seamless tracking, reporting, and auditing capabilities
                        to maintain transparency and meet regulatory standards with ease.
                        <ul>
                            <li>Streamline internal and external audit processes</li>
                            <li>Automate report generation and compliance tracking</li>
                            <li>Centralize audit records and documentation</li>
                        </ul>


                    </div>
                </div>
                <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                    <a href="{{ url('/audit-management') }}" class="text-decoration-none">
                        <button type="button" class="btn btn btn-dark rounded-pill d-flex align-items-center gap-2">
                            View More
                            <img src="{{asset('front/assets/svgs/Right-Long-Arrow.svg')}}" alt="" />
                        </button>
                    </a>

                </div>
            </div>
            <div class="card product-card col-xl-5 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="text">
                    <div class="card-heading product-card-heading">
                        <img src="{{asset('front/assets/svgs/Frame1.svg')}}" alt="" />
                        Enterprise Risk Management
                    </div>

                    <div class="bio">
                        Our Enterprise Risk Management platform provides comprehensive tools to identify, assess, and
                        mitigate risks across your organization. With real-time reporting and collaboration features,
                        ClearRisk’s solution ensures your business stays ahead of potential threats.
                        <ul>
                            <li>Holistic approach to risk identification and assessment</li>
                            <li>Real-time dashboards for monitoring and reporting</li>
                            <li>Scalable solutions for organizations of any size</li>
                        </ul>
                    </div>
                </div>

                <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                    <a href="{{ url('/enterprise-risk-management') }}" class="text-decoration-none">
                        <button type="button" class="btn btn btn-dark rounded-pill d-flex align-items-center gap-2">
                            View More
                            <img src="{{asset('front/assets/svgs/Right-Long-Arrow.svg')}}" alt="" />
                        </button>
                    </a>

                </div>
            </div>
        </div>
    </div>

    <div class="faq-container">
        <div class="col-10 col-sm-8 col-lg-6 w-100 d-flex flex-column gap-20">
            <div class="heading d-flex">
                <h1 class="display-5 fw-bold lh-1 mb-3 main-heading-dark">
                    Frequently Asked Questions
                </h1>
            </div>

            <div class="accordion" id="accordionExample">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Q.1 What makes ClearRisk different from other IT and risk management solution providers?
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            ClearRisk focuses on simplicity and effectiveness, offering easy-to-use and straightforward
                            solutions that help businesses tackle IT and risk challenges with confidence.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Q.2 What kind of support does ClearRisk offer for its clients?
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            We are committed to providing reliable, ongoing support throughout the entire process, ensuring
                            our solutions meet and exceed client expectations.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            Q.3 How does ClearRisk ensure client satisfaction and quality?
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            ClearRisk is dedicated to delivering high-quality solutions tailored to your business needs,
                            with a focus on client satisfaction. Every project is designed to exceed expectations.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingFour">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                            Q.4 What industries or businesses can benefit from ClearRisk’s services?
                        </button>
                    </h2>
                    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            ClearRisk provides flexible IT consulting and risk management solutions that are designed to
                            meet the needs of various industries, helping businesses simplify their challenges and achieve
                            success.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingFive">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                            Q.5 How does ClearRisk stay ahead of industry trends in IT and risk management?
                        </button>
                    </h2>
                    <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            ClearRisk stays ahead by constantly innovating and keeping up with the latest developments in
                            IT consulting and risk management, allowing our clients to benefit from cutting-edge solutions.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
