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
            <form data-action="site-settings/save" class="adminFrm" method="POST">
                <input type="hidden" name="updateId" value="{{ !is_null($oldData) ? $oldData->id : '' }}">
                @csrf
                <div class="panel-body">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="control-label">Logo</label>
                                <input type="file" name="logo" class="form-control requiredCheck" data-check="Logo"
                                    accept="image/png">
                                @if (isset($oldData) && $oldData->logo)
                                    <img src="{{ asset('uploads/site-setting/' . $oldData->logo) }}" alt="Logo Image"
                                        style="max-height: 100px; margin-top: 10px;">
                                @endif
                                @error('logo')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                                <p class="help-block">Image size should be less than 2MB.</p>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="control-label">Favicon</label>
                                <input type="file" name="favicon" class="form-control requiredCheck" data-check="Favicon"
                                    accept="image/png">
                                @if (isset($oldData) && $oldData->favicon)
                                    <img src="{{ asset('uploads/site-setting/' . $oldData->favicon) }}" alt="Favicon Image"
                                        style="max-height: 16px;
                                        max-width: 16px;">
                                @endif
                                @error('favicon')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                                <p class="help-block">Image size should be less than 2MB.</p>
                            </div>
                        </div>
                    </div>



                    <div class="row">
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label class="control-label">Smtp User Id</label>
                                <input type="text" name="smtp_user_id" class="form-control requiredCheck"
                                    data-check="Smtp User Id"
                                    value="{{ !is_null($oldData) ? $oldData->smtp_user_id : '' }}">
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label class="control-label">Smtp Password</label>
                                <input type="text" name="smtp_password" class="form-control requiredCheck"
                                    data-check="Smtp Password"
                                    value="{{ !is_null($oldData) ? $oldData->smtp_password : '' }}">
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label class="control-label">Smtp Port</label>
                                <input type="text" name="smtp_port" class="form-control requiredCheck"
                                    data-check="Smtp Port" value="{{ !is_null($oldData) ? $oldData->smtp_port : '' }}">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label class="control-label">Phone No</label>
                                <input type="text" name="phone_no" class="form-control requiredCheck"
                                    data-check="Phone No" value="{{ !is_null($oldData) ? $oldData->phone_no : '' }}">
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label class="control-label">Contact Address</label>
                                <input type="text" name="contact_address" class="form-control requiredCheck"
                                    data-check="Contact Address"
                                    value="{{ !is_null($oldData) ? $oldData->contact_address : '' }}">
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label class="control-label">Receiver Mail Id</label>
                                <input type="text" name="receiver_mail_id" class="form-control requiredCheck"
                                    data-check="Receiver Mail Id"
                                    value="{{ !is_null($oldData) ? $oldData->receiver_mail_id : '' }}">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="control-label">Sender Name</label>
                                <input type="text" name="sender_name" class="form-control requiredCheck"
                                    data-check="Sender Name" value="{{ !is_null($oldData) ? $oldData->sender_name : '' }}">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="control-label">Sender Mail</label>
                                <input type="text" name="sender_mail" class="form-control requiredCheck"
                                    data-check="Sender Mail"
                                    value="{{ !is_null($oldData) ? $oldData->sender_mail : '' }}">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label class="control-label">Footer Short Desc</label>
                                <textarea name="footer_short_desc" cols="30" rows="10" id="summernote" class="form-control requiredCheck"
                                    data-check="Footer Short Desc">{{ !is_null($oldData) ? $oldData->footer_short_desc : '' }}</textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <footer class="panel-footer">
                    <button class="btn btn-success" type="submit">Update</button>
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
    </script>
@endpush
