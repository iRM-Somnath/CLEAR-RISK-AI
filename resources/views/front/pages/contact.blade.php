@extends('front.layouts.master')
@section('content')

    @push('meta-tags')
        <meta name="title" content="Contact ClearRisk.AI | Grow Your Business with Risk Management Solutions">
        <meta name="description"
            content="Get in touch with ClearRisk.AI today for expert support in growing your business. Reach out for personalized risk management solutions in audit management and enterprise risk management. Contact us via phone, email, or by submitting the contact form on this page.">
        <meta name="keywords"
            content="Contact ClearRisk, ClearRisk.AI support, risk management contact, business growth support, audit management inquiries, enterprise risk management inquiries, contact form, ClearRisk phone, ClearRisk email, ClearRisk UK office">
    @endpush

    <!-- Contact Us Page -->

    <div class="Contact-us-page-container">
        <div class="col-10 co-sm-8 col-lg-6 w-100 d-flex flex-column gap-20">

            <div class="heading d-flex gap-10 justify-content-center">
                <h1 class="lh-1 mb-3 main-heading-gray">
                    Contact ClearRisk.AI Today
                </h1>
            </div>

            <!-- <div class="AM-vid d-flex gap-100 justify-content-center ">
                                                                    <video src="../assets/videos/AM-Video.mp4" controls></video>
                                                                    <video src="../assets/videos/AM-Video.mp4" controls></video>
                                                                  </div> -->

            <div class="product d-flex align-items-start px-5 justify-content-around row">

                <div class="col-xl-6 col-lg-6 col-md-10 col-sm-12 col-12 d-flex flex-column gap-20">
                    <h1 class="lh-1 mb-3 main-heading-dark ">
                        We support you to grow your business
                    </h1>
                    <div class="d-flex flex-column gap-20">
                        {{-- <div class="address d-flex align-items-center gap-20">
                            <img src="../assets/svgs/Black-location.svg" alt="" />
                            <p class="lead">
                                Suite 1 Second Floor EverdeneHouse Deansleigh Road, Bournemouth,
                                England, BH7 7DU, United Kingdom
                            </p class="lead">
                        </div> --}}

                        {{-- <div class="contact-us-details phoneNumber d-flex align-items-center  gap-10">
                            <img src="{{ asset('front/assets/svgs/Black-phone.svg') }}" alt="" />
                            <p class="lead">US: 1-425-864-2958</p class="lead">
                        </div>

                        <div class="contact-us-details phoneNumber d-flex align-items-center gap-10">
                            <img src="{{ asset('front/assets/svgs/Black-phone.svg') }}" alt="" />
                            <p class="lead">Germany: 49-176-2590-8274</p class="lead">
                        </div>

                        <div class="contact-us-details phoneNumber d-flex align-items-center gap-10">
                            <img src="{{ asset('front/assets/svgs/Black-phone.svg') }}" alt="" />
                            <p class="lead">UK: 44-7768-012397</p class="lead">
                        </div>

                        <div class="contact-us-details mailId d-flex align-items-center gap-10">
                            <img src="{{ asset('front/assets/svgs/Black-mail.svg') }}" alt="" />
                            <p class="lead">hello@clearrisk.ai</p class="lead">
                        </div> --}}

                        @php
                            
                            $contactDetails = json_decode($oldData->phone_no, TRUE);
                            // dd($contactDetails);
                        @endphp
                            
                        @foreach($contactDetails  as $key => $value)
                            
                            <div class="contact-us-details phoneNumber d-flex align-items-center  gap-10">
                                <img src="{{ asset('front/assets/svgs/Black-phone.svg') }}" alt="" />
                                <p class="lead">{{ $value["country"] }}: {{ $value["phone_no"] }}</p class="lead">
                            </div>
                        @endforeach
                    </div>

                </div>

                <div class="elfsight-app-ac002fc6-841f-40ac-a83f-2dd27a1c1f68 col-xl-6 col-lg-6 col-md-10 col-sm-12 col-12"
                    data-elfsight-app-lazy>
                </div>

            </div>
        </div>
    </div>

@stop

@push('scripts')
    <script src="https://static.elfsight.com/platform/platform.js" data-use-service-core defer></script>
@endpush
