@extends('front.layouts.master')

@section('content')
    <!-- Events Page -->

    <div class="events-webinar-section col-lg-12 px-5 d-flex flex-column">
        <div class="webinar-section">
            <div class="heading d-flex flex-column align-items-center gap-20">
                <h1 class="display-5 lh-1 mb-3 main-heading-dark">Webinars</h1>
                <p class="text-center">
                    Engage with the ClearRisk community through our upcoming webinars.
                </p>
            </div>

            <div class="events-cards d-flex justify-content-center gap-20 row">
                @forelse ($events as $event)
                <div class="event-card col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="d-flex justify-content-center">
                      <img class="event-img"
                          src="{{ asset('uploads/event/'.$event->image_name ) }}"
                          alt="{{$event->title}}">
                    </div>
                    <div class="event-card-text d-flex flex-column gap-10">
                        <div class="card-heading product-card-heading">
                            <span class="title">{{ $event->title }}</span>
                        </div>
                        <p>{{ $event->location }}</p>
                        <p>{{ date('d/m/Y', strtotime($event->start_date)) }} - {{ date('d/m/Y', strtotime($event->end_date)) }}</p>
                    </div>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                        <button 
                            onclick="showSubscribeAlert('{{ $event->title }}')" 
                            class="btn btn-dark rounded-pill d-flex align-items-center gap-2 w-100 justify-content-center"
                            aria-label="Subscribe to {{ $event->title }}">
                            Subscribe
                        </button>
                    </div>
                </div>
                @empty
                <div class="col-12 text-center">
                    <p>No webinars available at the moment. Please check back later.</p>
                </div>
                @endforelse
            </div>

            {{ $events->links('pagination::bootstrap-5') }}
        </div>
    </div>

    <script>
        function showSubscribeAlert(eventTitle) {
            alert("You have subscribed to the event: " + eventTitle);
        }
    </script>
@stop
