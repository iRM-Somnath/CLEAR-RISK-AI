@extends('front.layouts.master')
@section('content')

@push('meta-tags')
<meta name="title" content="What is an ERM? - Enterprise Risk Management Solutions | ClearRisk">
<meta name="description" content="ClearRisk's Enterprise and Operational Risk Management (ERM) solutions serve as a centralized hub for identifying, assessing, and monitoring risks across the entire enterprise. Learn how ClearRisk can streamline your risk management program to enhance collaboration, reduce silos, and mitigate risks in modern business operations.">
<meta name="keywords" content="Enterprise Risk Management, ERM, operational risk management, risk assessment, risk monitoring, centralized risk management, business risk solutions, process silos, risk mitigation, ClearRisk ERM solutions, comprehensive risk framework, risk management program">
@endpush

    <!-- ERM Page -->

<div
      class="AM-container d-flex align-items-center px-5 justify-content-center flex-column gap-20"
    >
      <div class="AM-vid d-flex justify-content-center">
        <video src="{{asset('front\assets\videos\GRC_ClearRiskDemo.mp4')}}" autoplay controls></video>
      </div>
      <div class="col-lg-12 d-flex flex-column gap-20">
        <h1 class="display-5 fw-bold lh-1 mb-3 main-heading-dark">
          What is an ERM ?
        </h1>
        <p class="lead">
          Modern business operations involve complex interactions between
          people, processes, and technology. Risks increase when teams work in
          isolation, leading to process silos and communication breakdowns.
          ClearRisk Enterprise & Operational Risk Management serves as a
          centralized hub, providing your risk management program with a
          comprehensive framework. This empowers your organization to
          systematically identify, assess, and monitor risks across the entire
          enterprise. Explore how ClearRisk can enhance your operational risk
          management program today.
        </p>
        <div class="d-grid gap-2 d-md-flex justify-content-md-start">
          
          <a href="{{asset('front/assets/PDFS/ERM pdf ClearRisk 2.pdf')}}" target="_blank">
            <button type="button" class="btn btn btn-dark rounded-pill">
            Read More
          </button>
          </a>

          <a href="{{ url('/pricing') }}" class="text-decoration-none">
            <button
            type="button"
            class="btn btn btn-dark rounded-pill d-flex align-items-center gap-2"
          >
            View Price
            <img src="{{asset('front/assets/svgs/Right-Long-Arrow.svg')}}" alt="" />
          </button>
          </a>
          
        </div>
      </div>
    </div>

@stop