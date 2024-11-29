@push('admin-css')
<link href="https://cdn.jsdelivr.net/npm/summernote@0.9.0/dist/summernote.min.css" rel="stylesheet">
@endpush
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
            <form data-action="pricing/save" class="adminFrm" method="POST">
                <input type="hidden" name="updateId" value="{{!is_null($oldData)?$oldData->id:''}}">
                @csrf
                <div class="panel-body">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label class="control-label">Choose Product</label>
                                <select class="form-control mb-md" name="choose_product">
                                    <option value="">~Choose Option~</option>
                                    @forelse ($productData as $key=> $product)
                                        <option value="{{ $product->id }}" {{ (!is_null($oldData) && ($oldData->product_id == $product->id ))? 'selected':'' }}>{{ $product->name }}
                                        </option>
                                    @empty
                                        <option value="">~Not available~</option>
                                    @endforelse
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label class="control-label">Choose plan type</label>
                                <select class="form-control mb-md" name="choose_plans">
                                    <option value="">~Choose Option~</option>
                                    <option value="1" {{ !is_null($oldData) && ($oldData->plan_type == 1 )? 'selected':'' }}>Monthly</option>
                                    <option value="2" {{ !is_null($oldData) && ($oldData->plan_type == 2 )? 'selected':'' }}>Yearly</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label class="control-label">Price</label>
                                <input type="text" name="price" class="form-control checkDecimal requiredCheck " data-check="Price" value="{{ !is_null($oldData)?$oldData->price:'' }}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label class="control-label">Title</label>
                                <input type="text" name="title" class="form-control requiredCheck restrictSpecial" data-check="Title" value="{{ !is_null($oldData)?$oldData->name:'' }}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label class="control-label">Description</label>
                                <textarea name="description" id="summernote" cols="30" rows="10" class="form-control requiredCheck restrictSpecial "
                                    data-check="Decsription">{{ !is_null($oldData)?$oldData->description:'' }}</textarea>
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
