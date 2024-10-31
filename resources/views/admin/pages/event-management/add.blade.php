@extends('admin.layouts.master')
@section('content')



<section class="panel">
    <header class="panel-heading">
        <div class="panel-actions">
            {{-- <a href="#" class="btn btn-lg btn-info" >View List</a> --}}
            {{-- <a href="#" class="panel-action panel-action-dismiss" data-panel-dismiss></a> --}}
        </div>

        {{-- <h2 class="panel-title">Ajax</h2> --}}
    </header>
    <div class="panel-body">
        <div class="panel-body">
            <div class="row">
                <div class="col-sm-12">
                    <div class="form-group">
                        <label class="control-label">Title Name</label>
                        
                        <!-- Text Input for Title Name -->
                        <input type="text" class="form-control mb-md" placeholder="Enter title name">
                    </div>
                </div>                
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label class="control-label">Image</label>
                        <input type="file" name="image" class="form-control">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label class="control-label">Location</label>
                        <input type="text" name="location" class="form-control" placeholder="Enter location">
                    </div>
                </div>
            </div> 
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label class="control-label">Meeting URL for Event</label>
                        <input type="text" name="meeting_url" class="form-control" placeholder="Enter meeting URL">
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <label class="control-label">Start Date</label>
                        <input type="date" name="start_date" class="form-control">
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <label class="control-label">End Date</label>
                        <input type="date" name="end_date" class="form-control">
                    </div>
                </div>
            </div>
        </div>
        <footer class="panel-footer">
            <button class="btn btn-success">Save</button>
        </footer>
    </div>
</section>

@endsection
