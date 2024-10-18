@extends('front.layouts.master')
@section('content')

@push('meta-tags')
<meta name="title" content="About Us - Effortless IT and Risk Management Solutions | ClearRisk">
<meta name="description" content="Learn more about ClearRisk's mission to simplify IT and risk management. We provide easy-to-use solutions that prioritize quality and client satisfaction, ensuring your business's success. With a passion for innovation and reliable support, ClearRisk helps you stay ahead of the curve.">
<meta name="keywords" content="About ClearRisk, IT management solutions, risk management consulting, business IT support, client satisfaction, simple risk solutions, reliable IT services, ClearRisk mission, IT and risk management expertise, business success">
@endpush

    <!-- About Us Page -->

    <div class="find-out-container margin40">
      <div class="row findout-img-cards">
        <div
          class="findout-img col-xl-6 col-lg-12 col-md-12 d-flex justify-content-center align-items-center"
        >
          <img
            src="{{asset('front/assets/images/Optimized-Images/frame-12-66dad391ab1db.webp')}}"
            class=""
            alt="ClearRiskGif"
            width="700"
            height="500"
            loading="lazy"
          />
        </div>

        <div
          class=" col-xl-6 col-lg-12 col-md-12 d-flex flex-column gap-10 align-items-center justify-content-center"
        >
          <div class="col-md-12 col-12">
            <h1 class="display-5 fw-bold lh-1 mb-3 main-heading-dark">
              About Us
            </h1>
            <p class="lead">
              At Clear Risk, we believe that IT and risk management should be
              effortless. That's why we offer solutions that are easy to use,
              easy to buy, and simply the most straightforward you'll find.
              <br />
              Our mission is to provide the simplest, most effective answers to
              your business needs. We're committed to quality and client
              satisfaction, ensuring every project not only meets but exceeds
              your expectations.
              <br />
              With reliable support and a genuine passion for IT consulting and
              risk management, we stay ahead of the curve so you can too. Let us
              simplify your challenges and deliver the confidence you need to
              succeed.
            </p>
          </div>
        </div>
      </div>
    </div>


@stop
