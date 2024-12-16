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
    {{-- <div class="d-flex justify-center z-50 align-middle"> </div> --}}
    <div class="row px-5 flex-lg-row-reverse align-items-center">
        <div class="col-10 col-sm-8 col-lg-6 circlegif">
            <img src="{{ asset('front//assets/images/gif/home_page_gif.webp') }}" alt="
          class="d-block
                mx-lg-auto img-fluid" alt="ClearRiskGif" />
        </div>
        <div class="col-lg-6 hero-text-area d-flex flex-column gap-10">
            <h1 class="display-5 fw-bold lh-1 mb-3 main-heading-dark">
                Intelligent Risk Management<br>for Bold Leaders.
            </h1>
            <p class="lead hero-desc">
                ClearRisk turns uncertainty into opportunity. With AI-driven insights, we help businesses stay ahead, mitigate risks, and lead confidently. Empower your decisions, outpace the unexpected, and thrive with clarity.
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
        <h1 class=" lh-1 margin40 main-heading-dark">
            Industries We Helped
        </h1>
        <div class="sectors">
            {{-- <img src="{{asset('front/assets/images/Optimized-Images/Industries2.webp')}}" alt="" /> --}}
            <div class="sectors-slide">
                <img src="{{ asset('front/assets/images/Sector Images/Icons/Chemicals_Icon.webp') }}" alt="" />
                <img src="{{ asset('front/assets/images/Sector Images/Icons/EnergyResource_Icon.webp') }}" alt="" />
                <img src="{{ asset('front/assets/images/Sector Images/Icons/Government_Icon.webp') }}" alt="" />
                <img src="{{ asset('front/assets/images/Sector Images/Icons/Healthcare_Icon.webp') }}" alt="" />
                <img src="{{ asset('front/assets/images/Sector Images/Icons/ITSector_Icon.webp') }}" alt="" />
                <img src="{{ asset('front/assets/images/Sector Images/Icons/Lifestyle_Icon.webp') }}" alt="" />
                <img src="{{ asset('front/assets/images/Sector Images/Icons/Manufacturing_Icon.webp') }}" alt="" />
            </div>


        </div>
    </div>

    <div class="find-out-container margin40">
        <div class="col-10 col-sm-8 col-lg-6 w-100">
            <div class="heading">
                <h1 class="  lh-1 mb-3 main-heading-dark">
                    Find out why<br />leading companies choose
                </h1>
                <h1 class="display-5  lh-1 mb-3 main-heading-dark">
                    ClearRisk.AI
                </h1>
            </div>

        </div>

        <div class="row findout-img-cards">

            <div class="findout-img  col-xl-6 col-lg-12 col-md-12 d-flex">
                <img src="{{ asset('front/assets/images/Optimized-Images/WhyChooseUs.webp') }}" class=""
                    alt="ClearRisk"/>
                    
            </div>


            <div class="cards col-xl-6 col-lg-12 col-md-12 d-flex flex-column gap-10 align-items-center">

                <div class="card col-md-12 col-12">
                    <div class="card-heading">
                        Stay Ahead of Emerging Risks:
                    </div>
                    <div class="bio">
                        Seamlessly align teams, data, and processes to tackle the ever-evolving risk landscape.
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
                        Achieve Unmatched Efficiency:
                    </div>

                    <div class="bio">
                        Harness automation, purpose-built workflows, and analytics to unlock transformative results.
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
                        Inspire Accountability at Every Level:
                    </div>

                    <div class="bio">
                        Cultivate ownership and collaboration with stakeholders across your organization.
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
                <h1 class=" lh-1 mb-3 main-heading-dark">
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
                        <div class="bio-data">
                            ClearRisk’s Audit Management simplifies audits, ensuring compliance and reducing risks. Effortlessly track, report, and manage documentation to stay transparent and meet regulatory standards.
                        </div>
                        <ul>
                            <li>Streamline Processes: Simplify internal and external audits.</li>
                            <li>Automate Compliance: Generate reports and track requirements with ease.</li>
                            <li>Centralize Records: Keep all audit data organized in one place.</li>
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
                        <div class="bio-data">
                            ClearRisk’s Enterprise Risk Management platform empowers organizations to identify, assess, and mitigate risks with ease. Real-time reporting and collaboration tools keep your business ahead of potential threats.
                        </div>

                        <ul>
                            <li>Comprehensive Risk Assessment: Take a holistic approach to identifying and managing risks.</li>
                            <li>Real-Time Insights: Monitor and report with intuitive dashboards.</li>
                            <li>Scalable Solutions: Designed to fit organizations of any size.</li>
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
                <h1 class=" lh-1 mb-3 main-heading-dark">
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
                            class="accordion-collapse collapse {{ $loop->iteration == 1 ?  : '' }}"
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

@push('scripts')
    <script type="text/javascript">
        let copy = document.querySelector(".sectors-slide").cloneNode(true);
        document.querySelector(".sectors").appendChild(copy); // For Home Slider Image Copy
    </script>
@endpush
