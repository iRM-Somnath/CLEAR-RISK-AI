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
                <div class="col-sm-3">
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
                <div class="col-sm-3">
                    <div class="form-group">
                        <label class="control-label">Choose plan type</label>
                        <select class="form-control mb-md">
                                <option value="">~Choose Option~</option>
                                <option value="1">Monthly</option>
                                <option value="2">Yearly</option>

                            {{-- <option value="">~Choose Option~</option>
                            @forelse ($productData as $key=> $product)
                                    <option value="{{ $product->id }}">{{ $product->name }}</option>
                            @empty
                                    <option value="">~Not available~</option>
                            @endforelse --}}
                        </select>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <label class="control-label">Price</label>
                        <input type="text" name="price" class="form-control" data-check="Price">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="form-group">
                        <label class="control-label">Title</label>
                        <input type="text" name="qustion" class="form-control requiredCheck" data-check="Title">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="form-group">
                        <label class="control-label">Description</label>
                        <textarea name="answer" id="" cols="30" rows="10" class="form-control requiredCheck" data-check="Decsription"></textarea>
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
