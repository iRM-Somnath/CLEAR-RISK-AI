@extends('front.layouts.master')
@section('content')

@push('meta-tags')
<meta name="title" content="About Us - Effortless IT and Risk Management Solutions | ClearRisk">
<meta name="description" content="Learn more about ClearRisk's mission to simplify IT and risk management. We provide easy-to-use solutions that prioritize quality and client satisfaction, ensuring your business's success. With a passion for innovation and reliable support, ClearRisk helps you stay ahead of the curve.">
<meta name="keywords" content="About ClearRisk, IT management solutions, risk management consulting, business IT support, client satisfaction, simple risk solutions, reliable IT services, ClearRisk mission, IT and risk management expertise, business success">
@endpush

    <!-- About Us Page -->

    <div class="find-out-container margin40">
      <div class="row about-img-cards">
        <div
          class="about-img col-xl-6 col-lg-12 col-md-12 d-flex align-items-center"
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
            <h1 class="display-5  lh-1 mb-3 main-heading-dark">
              About Us
            </h1>
            <p class="lead">
              At ClearRisk, we make IT consulting and risk management effortless. Our solutions are designed to be simple, effective, and tailored to help your business tackle challenges head-on.
              <br>
              <br>
              We’re passionate about delivering tools that work seamlessly, ensuring every project exceeds your expectations. With a focus on quality and client satisfaction, we’re here to help you navigate risks and streamline operations with ease.
              <br>
              <br>
              By staying ahead of industry trends, we empower you to stay ahead too. Let ClearRisk transform complexity into clarity and provide the confidence you need to succeed.
            </p>
          </div>
        </div>
      </div>
    </div>


@stop
