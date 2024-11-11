@push('admin-css')
<link href="https://cdn.jsdelivr.net/npm/summernote@0.9.0/dist/summernote.min.css" rel="stylesheet">
@endpush
@extends('admin.layouts.master')
@section('content')
    <section class="panel">
        <header class="panel-heading">
            <div class="panel-actions">
                {{-- <a href="#" class="btn btn-lg btn-info">View List</a> --}}
                {{-- <a href="#" class="panel-action panel-action-dismiss" data-panel-dismiss></a> --}}
            </div>

            {{-- <h2 class="panel-title">Ajax</h2> --}}
        </header>
        <div class="panel-body">
            <form data-action="blogs/save" class="adminFrm" method="POST">
                <input type="hidden" name="updateId" value="{{ !is_null($oldData) ? $oldData->id : '' }}">
                @csrf
                <div class="panel-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label class="control-label">Title</label>
                                <input type="text" name="title" class="form-control requiredCheck" data-check="Title"
                                    value="{{ !is_null($oldData) ? $oldData->title : '' }}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label class="control-label">Content</label>
                                <textarea name="content" cols="30" rows="10" id="summernote"  class="form-control requiredCheck" data-check="Content">{{ !is_null($oldData) ? $oldData->content : '' }}</textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label class="control-label">Image</label>
                                <input type="file" name="image" class="form-control"
                                    accept="image/png, image/jpg, image/jpeg">
                                @if (isset($oldData) && $oldData->image)
                                    <img src="{{ asset('uploads/blog/' . $oldData->image) }}" alt="Event Image"
                                        style="max-height: 100px; margin-top: 10px;">
                                @endif
                                @error('image')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                                <p class="help-block">Image size should be less than 2MB.</p>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label class="control-label">Author</label>
                                <input type="text" name="author" class="form-control requiredCheck" data-check="Author"
                                    value="{{ !is_null($oldData) ? $oldData->author : '' }}">
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="form-group">
                                <label class="control-label">Published Date</label>
                                <input type="date" name="published_date" class="form-control requiredCheck"
                                    data-check="Published Date"
                                    value="{{ !is_null($oldData) ? $oldData->published_date : '' }}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label class="control-label">Meta Tags</label>
                                <input type="text" name="meta_tags" class="form-control"
                                    value="{{ !is_null($oldData) ? $oldData->meta_tags : '' }}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label class="control-label">Meta Keywords</label>
                                <input type="text" name="meta_keywords" class="form-control"
                                    value="{{ !is_null($oldData) ? $oldData->meta_keywords : '' }}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label class="control-label">Meta Title</label>
                                <input type="text" name="meta_title" class="form-control"
                                    value="{{ !is_null($oldData) ? $oldData->meta_title : '' }}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label class="control-label">Meta Description</label>
                                <textarea name="meta_description" cols="30" rows="5"  class="form-control requiredCheck" data-check="meta_description">{{ !is_null($oldData) ? $oldData->meta_description : '' }}</textarea>


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
