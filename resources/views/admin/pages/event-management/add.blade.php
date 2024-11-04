@extends('admin.layouts.master')
@section('content')

<section class="panel">
    <header class="panel-heading">
        <div class="panel-actions">
            <!-- Action buttons (if needed) -->
        </div>
    </header>

    <div class="panel-body">
        <form action="{{ isset($oldData) ? route('admin.event.update', $oldData->id) : route('admin.event.save') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @if(isset($oldData))
                @method('PUT')
            @endif

            <div class="panel-body">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label class="control-label">Title Name</label>
                            <input type="text" name="title" class="form-control mb-md" 
                                   placeholder="Enter title name" 
                                   value="{{ old('title', $oldData->title ?? '') }}">
                            @error('title')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>                
                </div>

                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label class="control-label">Image</label>
                            <input type="file" name="image" class="form-control">
                            @if(isset($oldData) && $oldData->image)
                                <img src="{{ asset('uploads/event/' . $oldData->image) }}" alt="Event Image" style="max-height: 100px; margin-top: 10px;">
                            @endif
                            @error('image')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror

                            {{-- if you want to show the image in editing  mode --
                            @if(isset($oldData->image_name) && $oldData->image_name)
                                <div>
                                    <img src="{{ asset('uploads/event/' . $oldData->image_name) }}" 
                                        alt="Current Event Image" 
                                        style="max-width: 200px; height: auto; margin-top: 10px;">
                                </div>
                            @endif

                            <!-- File input for uploading new image -->
                            <input type="file" name="image" class="form-control mt-2"> --}}
                            <p class="help-block">Image size should be less than 2MB.</p>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group">
                            <label class="control-label">Location</label>
                            <input type="text" name="location" class="form-control" 
                                   placeholder="Enter location" 
                                   value="{{ old('location', $oldData->location ?? '') }}">
                            @error('location')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label class="control-label">Meeting URL for Event</label>
                            <input type="text" name="meeting_url" class="form-control" 
                                   placeholder="Enter meeting URL" 
                                   value="{{ old('meeting_url', $oldData->meeting_url ?? '') }}">
                            @error('meeting_url')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="col-sm-3">
                        <div class="form-group">
                            <label class="control-label">Start Date</label>
                            <input type="date" name="start_date" class="form-control" 
                                   value="{{ old('start_date', $oldData->start_date ?? '') }}">
                            @error('start_date')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="col-sm-3">
                        <div class="form-group">
                            <label class="control-label">End Date</label>
                            <input type="date" name="end_date" class="form-control" 
                                   value="{{ old('end_date', $oldData->end_date ?? '') }}">
                            @error('end_date')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>

            <footer class="panel-footer">
                <button type="submit" class="btn btn-success">
                    {{ isset($oldData) ? 'Update' : 'Save' }}
                </button>
            </footer>
        </form>
    </div>
</section>

@endsection
