@push('admin-css')
<link href="https://cdn.jsdelivr.net/npm/summernote@0.9.0/dist/summernote.min.css" rel="stylesheet">
@endpush
@extends('admin.layouts.master')
@section('content')

<section class="panel">
    <header class="panel-heading">
        <div class="panel-actions">
            <!-- Action buttons (if needed) -->
        </div>
    </header>

    <div class="panel-body">
        <form data-action="event/save" class="adminFrm" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="updateId" value="{{ !is_null($oldData) ? $oldData->id : '' }}">

            <div class="panel-body">
                <div class="row">
                    <div class="col-sm-8">
                        <div class="form-group">
                            <label class="control-label">Event Title</label>
                            <input type="text" name="title" class="form-control requiredCheck restrictSpecial" data-check="Event Title" value="{{ !is_null($oldData) ? $oldData->title : '' }}">
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="form-group">
                            <label class="control-label">Event Image</label>
                            <input type="file" name="image" class="form-control">
                            @if(isset($oldData) && $oldData->image_name)
                                <img src="{{ asset('uploads/event/' . $oldData->image_name) }}" alt="Event Image" style="max-height: 100px; margin-top: 10px;">
                            @endif
                            @error('image')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                            <p class="help-block">Image size should be less than 2MB.</p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label class="control-label">Event Description</label>
                            <textarea name="description" cols="30" rows="10" id="summernote"  class="form-control requiredCheck" data-check="Event Description">{{ !is_null($oldData) ? $oldData->description : '' }}</textarea>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label class="control-label">Event Location</label>
                            <input type="text" name="location" class="form-control requiredCheck restrictSpecial" data-check="Event Location" value="{{ !is_null($oldData) ? $oldData->location : '' }}">
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group">
                            <label class="control-label">Meeting URL (if any)</label>
                            <input type="text" name="meeting_url" class="form-control" value="{{ !is_null($oldData) ? $oldData->meeting_url : '' }}">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-3">
                        <div class="form-group">
                            <label class="control-label">Start Date</label>
                            <input type="date" name="start_date" class="form-control requiredCheck " data-check="Start Date" value="{{ !is_null($oldData) ? $oldData->start_date : '' }}">
                        </div>
                    </div>

                    <div class="col-sm-3">
                        <div class="form-group">
                            <label class="control-label">End Date</label>
                            <input type="date" name="end_date" class="form-control requiredCheck " data-check="End Date" value="{{ !is_null($oldData) ? $oldData->end_date : '' }}">
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group">
                            <label class="control-label">Event Organizer</label>
                            <input type="text" name="organizer" class="form-control requiredCheck restrictSpecial" value="{{ !is_null($oldData) ? $oldData->organizer : '' }}">
                        </div>
                    </div>
                </div>
            </div>

            <footer class="panel-footer">
                <button class="btn btn-success" type="submit">Save</button>
            </footer>
        </form>
    </div>
</section>
@endsection
@push('admin-js')
<script src="https://cdn.jsdelivr.net/npm/summernote@0.9.0/dist/summernote.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('#summernote').summernote({
            height: 300,
        });
    });
</script>
@endpush
