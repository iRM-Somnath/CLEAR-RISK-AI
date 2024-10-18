@extends('front.layouts.master')
@section('content')

@push('meta-tags')
<meta name="title" content="Webinars - Engage with ClearRisk's Risk Management Community" />
<meta name="description" content="Join ClearRisk's upcoming webinars and engage with industry experts on key topics such as audit consulting, education on fraud prevention, and more. Stay informed on the latest trends in risk management by subscribing to our interactive and educational webinars." />
<meta name="keywords" content="ClearRisk webinars, risk management webinars, audit consulting webinars, fraud prevention education, ClearRisk events, risk management community, risk management trends, subscribe to webinars, risk consulting, interactive webinars" />
@endpush

    <!-- Events Page -->

    <div class="events-webinar-section col-lg-12 px-5 d-flex flex-column">

        <div class="webinar-section">
          <div class="heading d-flex flex-column align-items-center gap-20">
                <h1 class="display-5 fw-bold lh-1 mb-3 main-heading-dark">Webinars</h1>
                <p class=" text-center">
                  Engage with the Clear Risk community through our upcoming webinar.
                </p>
              </div>
        
              <div class="events-cards d-flex justify-content-center gap-20 row">
        
                <div class="event-card col-xl-3 col-lg-12 col-md-12 col-sm-12 col-12">
                  <div class="event-card-img d-flex justify-content-center">
                    <img src="{{asset('front/assets/images/Optimized-Images/dashboard-interface-user-panel-template-2-66dad38d1e5c7.webp')}}" alt="">
                  </div>
                  <div class="event-card-text d-flex flex-column gap-10">
                    <div class="card-heading product-card-heading">
                      Audit Consulting Education Fraud Retreat
                    </div>
                    <p>Denver, CO</p>
                    <p>08/08/2024 - 08/09/2024</p>
                  </div>
                  <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                    <button
                      type="button"
                      class="btn btn-dark rounded-pill d-flex align-items-center gap-2 w-100 justify-content-center"
                    >
                      Subscribe
                    </button>
                  </div>
                </div>
        
                <div class="event-card col-xl-3 col-lg-12 col-md-12 col-sm-12 col-12">
                  <div class="event-card-img d-flex justify-content-center">
                    <img src="{{asset('front/assets/images/Optimized-Images/dashboard-interface-user-panel-template-2-66dad38d1e5c7.webp')}}" alt="">
                  </div>
                  <div class="event-card-text d-flex flex-column gap-10">
                    <div class="card-heading product-card-heading">
                      Audit Consulting Education Fraud Retreat
                    </div>
                    <p>Denver, CO</p>
                    <p>08/08/2024 - 08/09/2024</p>
                  </div>
                  <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                    <button
                      type="button"
                      class="btn btn-dark rounded-pill d-flex align-items-center gap-2 w-100 justify-content-center"
                    >
                      Subscribe
                    </button>
                  </div>
                </div>
        
                <div class="event-card col-xl-3 col-lg-12 col-md-12 col-sm-12 col-12">
                  <div class="event-card-img d-flex justify-content-center">
                    <img src="{{asset('front/assets/images/Optimized-Images/frame-12-66dad391ab1db.webp')}}" alt="">
                  </div>
                  <div class="event-card-text d-flex flex-column gap-10">
                    <div class="card-heading product-card-heading">
                      Audit Consulting Education Fraud Retreat
                    </div>
                    <p>Denver, CO</p>
                    <p>08/08/2024 - 08/09/2024</p>
                  </div>
                  <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                    <button
                      type="button"
                      class="btn btn-dark rounded-pill d-flex align-items-center gap-2 w-100 justify-content-center"
                    >
                      Subscribe
                    </button>
                  </div>
                </div>
                
              </div>
        
              <div class="next-btn d-flex justify-content-center">
                <button
                  type="button"
                  class="btn btn-outline-dark rounded-pill d-flex align-items-center gap-2 col-6 justify-content-center"
                >
                  Next
                </button>
              </div>
        </div>
    </div>

@stop