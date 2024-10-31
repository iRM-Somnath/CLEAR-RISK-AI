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
                    <th width="25%">Plan Name</th>
                    <th width="25%">Plan Decsription</th>
                    <th width="5%">Currency</th>
                    <th width="5%">Price</th>
                    <th width="5%">Status</th>
                    <th width="5%">Action</th>

                </tr>
            </thead>
            <tbody>
                @forelse ($data as $item)
                    <tr>
                        <td>{{$loop->index + 1}}</td>
                        <td>{{$item->question}}</td>
                        <td>{{$item->answer}}</td>
                        <td>{{$item->plan_name}}</td>
                        {{-- <td>{{$item->currency}}</td> --}}
                        <td>{{$item->price}}</td>
                        <td>
                            @if($item->status == 1)
                            <span class="label label-success">Active</span>
                            @else
                            <span class="label label-danger">Inactive</span>
                            @endif
                        </td>
                        <td>
                            {{-- <a href="{{route('admin.question.edit', $item->id)}}" class="btn btn-sm btn-primary"><i class="fa fa-pencil"></i> Edit</a> --}}
                            {{-- <form action="{{route('admin.question.destroy', $item->id)}}" method="POST" onsubmit="return confirm('Are you sure --}}
                    </tr>
                @empty
                    
                @endforelse
            </tbody>
        </table>
    </div>
</section>

@endsection
