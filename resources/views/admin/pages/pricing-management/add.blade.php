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
                <div class="col-sm-6">
                    <div class="form-group">
                        <label class="control-label">Choose Product</label>
                        <select class="form-control mb-md">
                            <option value="">~Choose Option~</option>
                            @forelse ($productData as $key=> $product)
                                    <option value="{{ $product->id }}">{{ $product->name }}</option>
                            @empty
                                    <option value="">~Not available~</option>
                            @endforelse
                        </select>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label class="control-label">Last Name</label>
                        <input type="text" name="lastname" class="form-control">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label class="control-label">Email</label>
                        <input type="email" name="email" class="form-control">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label class="control-label">Website</label>
                        <input type="url" name="website" class="form-control">
                    </div>
                </div>
            </div>
        </div>
        <footer class="panel-footer">
            <button class="btn btn-primary">Submit Card</button>
        </footer>
    </div>
</section>

@endsection
