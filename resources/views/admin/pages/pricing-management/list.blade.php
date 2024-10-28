@extends('admin.layouts.master')
@section('content')



<section class="panel">
    <header class="panel-heading">
        <div class="panel-actions">
            {{-- <a href="#" class="panel-action panel-action-toggle" data-panel-toggle></a>
            <a href="#" class="panel-action panel-action-dismiss" data-panel-dismiss></a> --}}
        </div>

        {{-- <h2 class="panel-title">Ajax</h2> --}}
    </header>
    <div class="panel-body">
        <table class="table table-bordered table-striped" >
            <thead>
                <tr>
                    <th width="5%">Sl No.</th>
                    <th width="15%">Product</th>
                    <th width="10%">Plan Type</th>
                    <th width="30%">Plan Name</th>
                    <th width="5%">Currency</th>
                    <th width="10%">Price</th>
                    <th width="10%">Status</th>
                    <th width="10%">Action</th>

                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div>
</section>

@endsection
