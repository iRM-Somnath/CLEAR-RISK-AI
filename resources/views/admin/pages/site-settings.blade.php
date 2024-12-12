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
      {{-- 
      <h2 class="panel-title">Ajax</h2>
      --}}
   </header>
   <div class="panel-body">
      <form data-action="site-settings/save" class="adminFrm" method="POST">
         <input type="hidden" name="updateId" value="{{ !is_null($oldData) ? $oldData->id : '' }}">
         @csrf
         <div class="panel-body">
            <h5 class=" text-uppercase"><strong>Logo:</strong></h5>
            <div class="row">
               <div class="col-sm-6">
                  <div class="form-group">
                     <label class="control-label">Logo</label>
                     <input type="file" name="logo"
                     class="form-control @if (!isset($oldData) || !$oldData->logo) requiredCheck @endif"
                     data-check="Logo" accept="image/png" @if (!isset($oldData) || !$oldData->logo) required @endif>
                     @if (isset($oldData) && $oldData->logo)
                     <img src="{{ asset('uploads/site-setting/' . $oldData->logo) }}" alt="Logo Image"
                        style="max-height: 100px;">
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
                     <input type="file" name="favicon"
                     class="form-control @if (!isset($oldData) || !$oldData->favicon) requiredCheck @endif"
                     data-check="favicon" accept="image/png"
                     @if (!isset($oldData) || !$oldData->favicon) required @endif>
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
            <hr>
            <h5 class=" text-uppercase"><strong>SMTP Settings:</strong></h5>
            <div class="row">
               <div class="col-sm-4">
                  <div class="form-group">
                     <label class="control-label">User</label>
                     <input type="text" name="smtp_user_id" class="form-control requiredCheck"
                        data-check="Smtp User Id"
                        value="{{ !is_null($oldData) ? $oldData->smtp_user_id : '' }}">
                  </div>
               </div>
               <div class="col-sm-4">
                  <div class="form-group">
                     <label class="control-label">Password</label>
                     <input type="text" name="smtp_password" class="form-control requiredCheck"
                        data-check="Smtp Password"
                        value="{{ !is_null($oldData) ? $oldData->smtp_password : '' }}">
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="form-group">
                     <label class="control-label">Port</label>
                     <input type="text" name="smtp_port" class="form-control requiredCheck"
                        data-check="Smtp Password"
                        value="{{ !is_null($oldData) ? $oldData->smtp_password : '' }}">
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="form-group">
                     <label class="control-label">Encryption</label>
                     <select class="form-control">
                        <option value="tls">TLS</option>
                        <option value="SSL">SSL</option>
                     </select>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-sm-4">
                  <div class="form-group">
                     <label class="control-label">Sender Name</label>
                     <input type="text" name="sender_name" class="form-control requiredCheck"
                        data-check="Sender Name" value="{{ !is_null($oldData) ? $oldData->sender_name : '' }}">
                  </div>
               </div>
               <div class="col-sm-4">
                  <div class="form-group">
                     <label class="control-label">Sender Mail</label>
                     <input type="text" name="sender_mail" class="form-control requiredCheck"
                        data-check="Sender Mail" value="{{ !is_null($oldData) ? $oldData->sender_mail : '' }}">
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
            <hr>
            <h5 class=" text-uppercase"><strong>Footer:</strong></h5>
            <div class="row">
               <div class="col-sm-12">
                  <div class="form-group">
                     <label class="control-label">Short Description</label>
                     <textarea name="footer_short_desc" cols="30" rows="5" id="summernote" class="form-control requiredCheck"
                        data-check="Footer Short Desc">{{ !is_null($oldData) ? $oldData->footer_short_desc : '' }}</textarea>
                  </div>
               </div>
            </div>
            <h5 class=" text-uppercase"><strong>Phone Number:</strong></h5>
            <div id="repeater">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label class="control-label">Country</label>
                            <input type="text" name="country[]" class="form-control requiredCheck"
                                data-check="Country"
                                value="">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label class="control-label">Phone</label>
                            <input type="text" name="phone_no[]" class="form-control requiredCheck"
                                data-check="Phone"
                                value="">
                        </div>
                    </div>
                    <div class="col-sm-4" style="top: 25.5px;">
                            <button class="btn btn-primary" type="button" id="addMore">+ Add More </button>
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
   });
   let counter = 1;
   $(document).on('click','#addMore',function(event){
        if(counter >=5){
            $.alert({
                    icon: "fa fa-warning",
                    title: "Warning!",
                    content: "You can not add more than 5 phone numbers at a time",
                    type: "orange",
                    typeAnimated: true,
                  });
            return false;
        }
        $("#repeater").append(`
            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        <label class="control-label">Country</label>
                        <input type="text" name="country[]" class="form-control requiredCheck"
                            data-check="Country"
                            value="">
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label class="control-label">Phone</label>
                        <input type="text" name="phone_no[]" class="form-control requiredCheck"
                            data-check="Phone"
                            value="">
                    </div>
                </div>
                <div class="col-sm-4" style="top: 25.5px;">
                        <button class="btn btn-danger remove" type="button" > - Remove </button>
                </div>
            </div>`);
            
        counter++;
   })
    $(document).on('click','.remove',function(event){
            $.confirm({
                    icon: "fa fa-warning",
                    title: 'Confirm Delete!',
                    content: 'Are you sure?',
                    type: "orange",
                    typeAnimated: true,
                    buttons: {
                        Yes: {
                            text: 'Yes',
                            btnClass: 'btn-blue',
                            keys: ['enter'],
                            action : function(){
                                event.target.closest(".row").remove();
                            }
                        },
                        No: {
                            text: 'No',
                            btnClass: 'btn-red',
                            keys: ['shift'],
                            action : function(){
                                return false;
                            }
                        }
                    
                    }
            });

   });
</script>
@endpush