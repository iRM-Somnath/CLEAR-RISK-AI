@extends('front.layouts.master')
@section('content')

@push('meta-tags')
<meta name="title" content="ClearRisk Blog - Expert Insights on Technology & Risk Management" />
<meta name="description" content="Welcome to the ClearRisk blog, your trusted source for expert advice on technology, risk management, and governance solutions. Explore insightful articles covering topics like risk and threat intelligence platforms, quantitative risk management, and the role of GRC in modern business operations." />
<meta name="keywords" content="ClearRisk blog, technology insights, risk management articles, risk and threat intelligence, quantitative risk management, GRC in business, governance solutions, compliance management, business risk solutions, expert advice on risk management" />
@endpush

    <!-- Blogs Page -->

    <div class="blog-section px-5 d-flex flex-column gap-20">
        <div class="heading d-flex flex-column align-items-center gap-10">
          <h1 class="display-5 fw-bold lh-1 mb-3 main-heading-dark">Our Blog</h1>
          <p class="text-center">
            Welcome to TRPGLOBAL! We are your trusted partners in the world of
            Technology Risk Management, offering expert advice and tailored
            solutions to optimize your company’s journey.
          </p>
        </div>
  
        <div class="row">
          <!-- Blog Item 1 -->
          <div class="col-md-4 blog-item">
            <div class="d-flex align-items-center flex-column gap-10">
              <img
                src="{{asset('front/assets/images/Optimized-Images/dashboard-interface-user-panel-template-2-66dad38d1e5c7.webp')}}"
                alt="Blog 1"
              />
            </div>
            <div>
              <h5>
                3 Essential Features of Risk & Threat Intelligence Platforms
              </h5>
              <p>
                Explore the three essential features of risk and threat
                intelligence platforms: comprehensive data collection, advanced
                analytics, and real-time response capabilities.
              </p>
            </div>
  
            <div class="d-grid gap-2 d-md-flex justify-content-md-start">
              <button type="button" class="btn btn btn-dark rounded-pill">
                Read More
              </button>
            </div>
          </div>
          <!-- Blog Item 2 -->
          <div class="col-md-4 blog-item">
            <div class="d-flex align-items-center flex-column gap-10">
              <img
                src="{{asset('front/assets/images/Optimized-Images/dashboard-interface-user-panel-template-2-66dad38d1e5c7.webp')}}"
                alt="Blog 2"
              />
            </div>
            <div>
              <h5>
                Overcoming Barriers to Quantitative Risk Management Implementation
              </h5>
              <p>
                This blog discusses why many organizations have not yet
                implemented quantitative risk management despite its advantages.
              </p>
            </div>
            <div class="d-grid gap-2 d-md-flex justify-content-md-start">
              <button type="button" class="btn btn btn-dark rounded-pill">
                Read More
              </button>
            </div>
          </div>
          <!-- Blog Item 3 -->
          <div class="col-md-4 blog-item">
            <div class="d-flex align-items-center flex-column gap-10">
              <img
                src="{{asset('front/assets/images/Optimized-Images/dashboard-interface-user-panel-template-2-66dad38d1e5c7.webp')}}"
                alt="Blog 3"
              />
            </div>
            <div>
              <h5>The Role of GRC in Modern Business Operations</h5>
              <p>
                Explore the critical importance of integrating Governance, Risk
                Management, and Compliance (GRC) into modern business operations.
              </p>
            </div>
  
            <div class="d-grid gap-2 d-md-flex justify-content-md-start">
              <button type="button" class="btn btn btn-dark rounded-pill">
                Read More
              </button>
            </div>
          </div>
        </div>
        <div class="row">
          <!-- Blog Item 4 -->
          <div class="col-md-4 blog-item">
            <div class="d-flex align-items-center flex-column gap-10">
              <img
                src="{{asset('front/assets/images/Optimized-Images/dashboard-interface-user-panel-template-2-66dad38d1e5c7.webp')}}"
                alt="Blog 4"
              />
            </div>
            <div>
              <h5>
                From Crisis to Opportunity: How Businesses Pivoted Successfully
              </h5>
              <p>
                Learn how businesses can turn crises into opportunities with
                TRPGLOBAL’s support.
              </p>
            </div>
  
            <div class="d-grid gap-2 d-md-flex justify-content-md-start">
              <button type="button" class="btn btn btn-dark rounded-pill">
                Read More
              </button>
            </div>
          </div>
          <!-- Blog Item 5 -->
          <div class="col-md-4 blog-item">
            <div class="d-flex align-items-center flex-column gap-10">
              <img
                src="{{asset('front/assets/images/Optimized-Images/dashboard-interface-user-panel-template-2-66dad38d1e5c7.webp')}}"
                alt="Blog 5"
              />
            </div>
            <div>
              <h5>How to Get More Value from Risk Management in Your Business</h5>
              <p>
                Learn how to turn risk management into a strategic advantage by
                integrating it with your business strategy.
              </p>
            </div>
  
            <div class="d-grid gap-2 d-md-flex justify-content-md-start">
              <button type="button" class="btn btn btn-dark rounded-pill">
                Read More
              </button>
            </div>
          </div>
          <!-- Blog Item 6 -->
          <div class="col-md-4 blog-item">
            <div class="d-flex align-items-center flex-column gap-10">
              <img src="{{asset('front/assets/images/Optimized-Images/dashboard-interface-user-panel-template-2-66dad38d1e5c7.webp')}}" />
            </div>
            <div>
              <h5>Implementing Risk Management: A Guide for Business Leaders</h5>
              <p>
                This guide for business leaders outlines essential strategies for
                effective risk management, including risk identification and
                analysis.
              </p>
            </div>
  
            <div class="d-grid gap-2 d-md-flex justify-content-md-start">
              <button type="button" class="btn btn btn-dark rounded-pill">
                Read More
              </button>
            </div>
          </div>
        </div>
      </div>

@stop