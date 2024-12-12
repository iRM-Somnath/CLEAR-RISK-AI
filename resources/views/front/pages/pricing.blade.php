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
            <h1 class="display-5 lh-1 mb-3 main-heading-dark">
              Pricing
            </h1>
          </div>



          <div class="monthly-pricing-btns d-flex w-100 product-btns justify-content-between px-5 align-items-center">

            <div class="d-flex">
              <label class="form-check-label me-2" for="plan-type">Monthly</label>
              <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" id="plan-type" >
                <label class="form-check-label" for="plan-type">Yearly</label>
              </div>
            </div>

            <div class="d-flex pricing-btns">
               
                @forelse ( $productData as $item )
                    <button id="product-btn-{{ $loop->index + 1 }}"
                        class="btn btn-outline-dark me-2 rounded-pill product" data-product-id="{{ $item->id }}"
                        type="button">
                        {{ $item->name }}
                    </button>
                @empty

                @endforelse
                @if(!empty($productData))
                  <button id="product-btn-both"
                    class="btn btn-outline-dark me-2 rounded-pill product" data-product-id="both"
                    type="button">Both
                    
                  </button>
                    
                @endif
                  
            </div>

          </div>


          <div class="product-pricing-cards d-flex justify-content-center row" id="plan-container">


          </div>
        </div>
      </div>

@stop

@push('scripts')
  <script src="{{ asset('front/js/pricing.js') }}"></script>
@endpush
