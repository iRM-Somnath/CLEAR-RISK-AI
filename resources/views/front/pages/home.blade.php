@extends('front.layouts.master')
@section('content')
    @push('meta-tags')
        <meta name="title" content="Intelligent Risk Management Solutions for Bold Leaders | ClearRisk" />
        <meta name="description"
            content="Discover how ClearRisk empowers businesses across industries like IT, manufacturing, healthcare, and more with AI-driven risk management solutions. Our innovative products help identify, assess, and mitigate risks with precision. Explore audit and enterprise risk management tools tailored to bold leaders seeking to navigate uncertainties and drive success." />
        <meta name="keywords"
            content="Intelligent risk management, AI-driven risk solutions, audit management, enterprise risk management, business risk solutions, proactive risk mitigation, IT risk management, manufacturing risk solutions, healthcare risk management, ClearRisk products, industries we helped" />
    @endpush

    <!-- First Page -->
    <div class="row px-5 flex-lg-row-reverse align-items-center">
        <div class="col-10 col-sm-8 col-lg-6 circlegif">
            <img src="{{ asset('front//assets/images/Optimized-Images/hero image.webp') }}" alt="
          class="d-block
                mx-lg-auto img-fluid" alt="ClearRiskGif" loading="lazy" />
        </div>
        <div class="col-lg-6 hero-text-area d-flex flex-column gap-10">
            <h1 class="display-5 fw-bold lh-1 mb-3 main-heading-dark">
                Intelligent Risk Management<br>for Bold Leaders.
            </h1>
            <p class="lead hero-desc">
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
        <div class="sectors">
            {{-- <img src="{{asset('front/assets/images/Optimized-Images/Industries2.webp')}}" alt="" /> --}}
            <div class="sectors-slide">
                <img src="{{ asset('front/assets/images/Sector Images/Chemicals.webp') }}" alt="" />
                <img src="{{ asset('front/assets/images/Sector Images/EnergyResource.webp') }}" alt="" />
                <img src="{{ asset('front/assets/images/Sector Images/Government.webp') }}" alt="" />
                <img src="{{ asset('front/assets/images/Sector Images/Healthcare.webp') }}" alt="" />
                <img src="{{ asset('front/assets/images/Sector Images/ITSector.webp') }}" alt="" />
                <img src="{{ asset('front/assets/images/Sector Images/Lifestyle.webp') }}" alt="" />
                <img src="{{ asset('front/assets/images/Sector Images/Manufacturing.webp') }}" alt="" />
            </div>


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
                <img src="{{ asset('front/assets/images/Optimized-Images/frame-12-66dad391ab1db.webp') }}" class=""
                    alt="ClearRiskGif" width="700" height="500" loading="lazy" />
            </div>


            <div class="cards col-xl-6 col-lg-12 col-md-12 d-flex flex-column gap-10 align-items-center">

                <div class="card col-md-12 col-12">
                    <div class="card-heading">
                        Identify and handle additional risks
                    </div>
                    <div class="bio">
                        Remain at the forefront of the contemporary landscape
                        characterized by escalating risk demands by smooth and
                        effectively integrating and coordinating teams, stakeholders,
                        data and processes.
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


    <div class="product-container d-flex flex-column align-items-center gap-20">
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
                        <img src="{{ asset('front/assets/svgs/Frame.svg') }}" alt="" />
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
                            <img src="{{ asset('front/assets/svgs/Right-Long-Arrow.svg') }}" alt="" />
                        </button>
                    </a>

                </div>
            </div>
            <div class="card product-card col-xl-5 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="text">
                    <div class="card-heading product-card-heading">
                        <img src="{{ asset('front/assets/svgs/Frame1.svg') }}" alt="" />
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
                            <img src="{{ asset('front/assets/svgs/Right-Long-Arrow.svg') }}" alt="" />
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
                @forelse ($faq as $item)
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading-{{ $loop->iteration }}">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapse-{{ $loop->iteration }}" aria-expanded="true"
                                aria-controls="collapse-{{ $loop->iteration }}">
                                Q.{{ $loop->iteration }} {{ $item->question }}
                            </button>
                        </h2>
                        <div id="collapse-{{ $loop->iteration }}"
                            class="accordion-collapse collapse {{ $loop->iteration == 1 ? 'show' : '' }}"
                            aria-labelledby="heading-{{ $loop->iteration }}" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Ans. {{ $item->answer }}
                            </div>
                        </div>
                    </div>
                @empty
                @endforelse

            </div>
        </div>
    </div>
@stop
