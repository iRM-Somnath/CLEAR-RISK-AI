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
            <h1 class="display-5 lh-1 mb-3 main-heading-dark">Our Blog</h1>
            <p class="text-center">
                Welcome to TRPGLOBAL! We are your trusted partners in the world of
                Technology Risk Management, offering expert advice and tailored
                solutions to optimize your company’s journey.
            </p>
        </div>

        <div class="events-cards d-flex justify-content-center gap-20 row">
            @forelse ($blogs as $item)

            <div class="event-card col-xl-3 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="d-flex justify-content-center">
                    <img class="blog-img"
                        src="{{ asset('uploads/blog/'.$item->image ) }}"
                        alt="{{$item->title}}">
                </div>
                <div class="event-card-text d-flex flex-column gap-10">
                    <div class="card-heading product-card-heading">
                        {{ $item->title }}
                    </div>
                    <div class="d-flex gap-3">
                        <div class="blog-icon d-flex align-middle gap-1">
                            <img src="{{asset('front/assets/svgs/user-solid.svg')}}" alt="" />
                            <p>{{ $item->author }}</p>
                        </div>
                        <div class="blog-icon d-flex blog-icon gap-1">
                            <img src="{{asset('front/assets/svgs/calendar-days-solid (1).svg')}}" alt="" />
                            <p>{{date('d/m/Y', strtotime($item->published_date)) }}</p>
                        </div> 
                    </div>
                    <p>  {{ \Str::words(strip_tags($item->content), 20, '...') }}</p>

                </div>
                <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                    <a href="{{ route('blogs.show',$item->slug) }}" class="btn btn-dark rounded-pill d-flex align-items-center gap-2 w-100 justify-content-center">
                        Read More
                    </a>
                </div>
            </div>
        @empty

        @endforelse


        </div>


        {{ $blogs->links('pagination::bootstrap-5') }}

    </div>

@stop
