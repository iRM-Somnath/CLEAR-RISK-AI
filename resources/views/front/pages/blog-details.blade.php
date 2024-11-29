@extends('front.layouts.master')
@section('content')
    <div class="blog-section px-5 d-flex flex-column gap-20">
        <div class="blog-text-img col-xl-8 col-lg-8 col-md-8 col-sm-12 flex-col gap-20 mx-auto">
            <h1 class="display-5 lh-1 mb-3 main-heading-dark">
                {{ $blog->title ?? '' }}
            </h1>
            <div class="blog-detail-img d-flex">
                <img src="{{  !is_null($blog)?asset('uploads/blog/'.$blog->image ):"" }}" class="" alt="ClearRiskGif"
                    width="700" height="500" loading="lazy" />
            </div>

            {!! $blog->content !!}
        </div>
    </div>
@stop
