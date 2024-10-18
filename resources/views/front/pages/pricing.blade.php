@extends('front.layouts.master')
@section('content')

@push('meta-tags')
<meta name="title" content="Pricing Plans for Risk Management Solutions | ClearRisk">
<meta name="description" content="Explore ClearRisk's pricing plans for comprehensive risk management solutions. From Starter to Enterprise Pro, our flexible options cater to businesses of all sizes, offering scalable risk profiles and user management features. Contact us to find the best plan for your organization's needs.">
<meta name="keywords" content="ClearRisk pricing, risk management pricing, starter plan, standard plan, enterprise risk management pricing, scalable risk solutions, risk management software costs, pricing for internal audit management, enterprise risk management, business risk management plans">
@endpush

    <!-- Pricing Page -->

    <div class="product-pricing-container ">
        <div class="col-10 col-sm-8 col-lg-6 w-100 d-flex flex-column gap-20 ">
          <div class="heading d-flex justify-content-center">
            <h1 class="display-5 fw-bold lh-1 mb-3 main-heading-dark">
              Pricing
            </h1>
          </div>
  
          

          <div class="d-flex w-100 product-btns justify-content-between px-5 align-items-center">

            <div class="d-flex">
              <label class="form-check-label me-2" for="flexSwitchCheckDefault">Monthly</label>
              <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
                <label class="form-check-label" for="flexSwitchCheckDefault">Yearly</label>
              </div>
            </div>

            <div>
              <button
            id="product-btn-1"
              class="btn btn-outline-dark me-2 rounded-pill"
              type="submit"
            >
              Internal Audit Management
            </button>
            <button onclick=""
            id="product-btn-2"
              class="btn btn-outline-dark me-2 rounded-pill"
              type="submit"
            >
              Enterprise Risk Management
            </button>
            </div>
            

          </div>
  
          <div class="product-pricing-cards d-flex justify-content-center row"
          >
            <div class="pricing-card product-pricing-card col-xl-3 col-lg-4 col-md-6 col-sm-10 col-10">
              <div class="text">
                <div class="card-heading product-card-heading">Starter</div>
                <div class="card-heading product-card-heading">$400</div>
  
                <div class="bio">
                  <ul>
                    <li>1 Risk Profile</li>
                    <li>5 Users</li>
                    <li>Additional Users $80/ann/pp</li>
                  </ul>
                </div>
              </div>
              <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                <a href="{{ url('/contact-us') }}" class="text-decoration-none w-100">
                   <button
                  type="button"
                  class="btn btn-outline-dark rounded-pill d-flex align-items-center gap-2 w-100 justify-content-center">
                  Contact Us
                </button> 
                </a>
              </div>
            </div>
            <div class="pricing-card product-pricing-card col-xl-3 col-lg-4 col-md-6 col-sm-10 col-10">
              <div class="text">
                <div class="card-heading product-card-heading">Standard</div>
                <div class="card-heading product-card-heading">$1,200</div>
  
                <div class="bio">
                  <ul>
                    <li>Up to 5 Risk Profiles</li>
                    <li>10 Users</li>
                    <li>Additional Users $120/ann/pp</li>
                  </ul>
                </div>
              </div>
              <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                <a href="{{ url('/contact-us') }}" class="text-decoration-none w-100">
                    <button
                   type="button"
                   class="btn btn-outline-dark rounded-pill d-flex align-items-center gap-2 w-100 justify-content-center">
                   Contact Us
                 </button> 
                 </a>
              </div>
            </div>
            <div class="pricing-card product-pricing-card col-xl-3 col-lg-4 col-md-6 col-sm-10 col-10">
              <div class="text">
                <div class="card-heading product-card-heading">Enterprise</div>
                <div class="card-heading product-card-heading">$4,800</div>
  
                <div class="bio">
                  <ul>
                    <li>Unlimited Risk Profiles</li>
                    <li>30 Users</li>
                    <li>10 Additional Users $1,600/ann</li>
                  </ul>
                </div>
              </div>
              <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                <a href="{{ url('/contact-us') }}" class="text-decoration-none w-100">
                    <button
                   type="button"
                   class="btn btn-outline-dark rounded-pill d-flex align-items-center gap-2 w-100 justify-content-center">
                   Contact Us
                 </button> 
                 </a>
              </div>
            </div>
            <div class="pricing-card product-pricing-card col-xl-3 col-lg-4 col-md-6 col-sm-10 col-10">
              <div class="text">
                <div class="card-heading product-card-heading">Enterprise PRO</div>
                <div class="card-heading product-card-heading">$7,200</div>
  
                <div class="bio">
                  <ul>
                    <li>Unlimited Risk Profiles</li>
                    <li>50 Users</li>
                    <li>10 Additional Users $1,300/ann</li>
                    <li>Advanced Search</li>
                    <li>Custom Scope Reporting</li>
                    <li>Editable Risk Universe</li>
                    <li>Control Library & Listing</li>
                    <li>Request Update</li>
                    <li>Editable Heat-Map</li>
                  </ul>
                </div>
              </div>
              <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                <a href="{{ url('/contact-us') }}" class="text-decoration-none w-100">
                    <button
                   type="button"
                   class="btn btn-outline-dark rounded-pill d-flex align-items-center gap-2 w-100 justify-content-center">
                   Contact Us
                 </button> 
                 </a>
              </div>
            </div>
            <div class="pricing-card product-pricing-card col-xl-3 col-lg-4 col-md-6 col-sm-10 col-10">
              <div class="text">
                <div class="card-heading product-card-heading">Enterprise PRO + Control Assurance</div>
                <div class="card-heading product-card-heading">$8,600</div>
  
                <div class="bio">
                  <ul>
                    <li>Unlimited Risk Profiles</li>
                    <li>60 Users</li>
                    <li>10 Additional Users $1,300/ann</li>
                    <li>Control Assessments</li>
                    <li>Assessment Workflows & Access</li>
                    <li>Controls Reporting</li>
                    <li>Assurance Mapping</li>
                  </ul>
                </div>
              </div>
              <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                <a href="{{ url('/contact-us') }}" class="text-decoration-none w-100">
                    <button
                   type="button"
                   class="btn btn-outline-dark rounded-pill d-flex align-items-center gap-2 w-100 justify-content-center">
                   Contact Us
                 </button> 
                 </a>
              </div>
            </div>
          </div>
        </div>
      </div>

@stop