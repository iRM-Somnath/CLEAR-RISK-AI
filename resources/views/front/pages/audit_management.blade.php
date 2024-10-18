@extends('front.layouts.master')
@section('content')

@push('meta-tags')
<meta name="title" content="Internal Audit Management - Efficient Risk-Based Solutions | ClearRisk">
<meta name="description" content="ClearRisk offers internal audit management solutions aimed at enhancing and protecting organizational value. Through risk-based and objective assurance, we help ensure your organization's internal controls operate efficiently, effectively, and ethically, providing clear insight into governance.">
<meta name="keywords" content="Internal audit management, risk-based internal audit, organizational governance, audit controls, internal controls, effective audit solutions, organizational efficiency, ClearRisk audit management, governance and audit assurance, ethical internal operations">
@endpush

    <!-- Audit Management Page -->

    <div class="AM-container d-flex align-items-center px-5 justify-content-center flex-column gap-20"
    >
    <div class="AM-vid d-flex justify-content-center col-lg-12">
        <video src="{{asset('front\assets\videos\AuditManagement_ClearRiskV2 1.mp4')}}" autoplay controls></video>
      </div>
    <div class="col-lg-12 d-flex flex-column gap-20">
        <h1 class="display-5 fw-bold lh-1 mb-3 main-heading-dark">
            Internal Audit Management
        </h1>
        <p class="lead">
            Internal auditing is a critical component of organizational governance, aimed at enhancing and protecting organizational value by providing risk-based and objective assurance, advice, and insight. Effective internal audit management ensures that an organization’s internal controls are operating effectively and that its operations are running efficiently and ethically.
        </p>
        <div class="d-grid gap-2 d-md-flex justify-content-md-start ">

          <a href="{{asset('front\assets\PDFS\ClearRisk_AuditManagement.pdf')}}" target="_blank">
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