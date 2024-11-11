@extends('front.layouts.master')
@section('content')
    <div class="blog-section px-5 d-flex flex-column gap-20">
        <div class="blog-text-img col-xl-8 col-lg-8 col-md-8 col-sm-12 gap-20 mx-auto">
            <h1 class="display-5 fw-bold lh-1 mb-3 main-heading-dark">
                {{ $blog->title ?? '' }}
            </h1>
            <div class="findout-img d-flex">
                <img src="{{  !is_null($blog)?asset('uploads/blog/'.$blog->image ):"" }}" class="m-3" alt="ClearRiskGif"
                    width="700" height="500" loading="lazy" />
            </div>

            {!! $blog->content !!}
        </div>
    </div>
@stop
