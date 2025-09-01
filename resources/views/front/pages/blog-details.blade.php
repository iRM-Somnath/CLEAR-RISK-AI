@extends('front.layouts.master')
@push('meta-tags')
<meta name="title" content="{{@$blog->meta_title}}">
<meta name="description" content="{{@$blog->meta_description}}">
<meta name="keywords" content="{{@$blog->meta_keywords}}">
<meta name="tags" content="{{@$blog->meta_tags}}">
@endpush
@section('content')
    <div class="blog-section px-5 d-flex flex-column gap-20">
        <div class="blog-text-img col-xl-8 col-lg-8 col-md-8 col-sm-12 flex-col gap-20 mx-auto">
            <h1 class="display-5 lh-1 mb-3 main-heading-dark">
                {{ $blog->title ?? '' }}
            </h1>
            <div class="blog-detail-img d-flex">
                <img src="{{  !is_null($blog)?asset('uploads/blog/'.$blog->image ):"" }}" class="" alt="{{$blog->meta_title}}"
                    loading="lazy" />
            </div>

            {!! $blog->content !!}
        </div>
    </div>
@stop
