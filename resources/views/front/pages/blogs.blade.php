@extends('front.layouts.master')
@section('content')

    @push('meta-tags')
        <meta name="title" content="ClearRisk Blog - Expert Insights on Technology & Risk Management" />
        <meta name="description"
            content="Welcome to the ClearRisk blog, your trusted source for expert advice on technology, risk management, and governance solutions. Explore insightful articles covering topics like risk and threat intelligence platforms, quantitative risk management, and the role of GRC in modern business operations." />
        <meta name="keywords"
            content="ClearRisk blog, technology insights, risk management articles, risk and threat intelligence, quantitative risk management, GRC in business, governance solutions, compliance management, business risk solutions, expert advice on risk management" />
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
            @forelse ($blogs as $item)
                <div class="col-md-4 blog-item">
                    <div class="d-flex align-items-center flex-column gap-10">
                        <img src="{{ asset('uploads/blog/'.$item->image ) }}"
                            alt="{{$item->title}}" />
                    </div>
                    <div>
                        <h5>
                            {{ $item->title }}
                        </h5>
                        <p>
                            {{ \Str::words(strip_tags($item->content), 80, '...') }}
                        </p>
                    </div>

                    <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                        <button type="button" class="btn btn btn-dark rounded-pill">
                            Read More
                        </button>
                    </div>
                </div>
            @empty

            @endforelse


        </div>

    </div>

@stop
