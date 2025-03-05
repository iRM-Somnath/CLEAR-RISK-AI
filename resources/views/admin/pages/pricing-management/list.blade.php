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
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th width="5%">Sl No.</th>
                        <th width="15%">Product</th>
                        <th width="10%">Plan Type</th>
                        <th width="25%">Plan Name</th>
                        <th width="25%">Description</th>
                        {{-- <th width="5%">Currency</th> --}}
                        <th width="5%">Original Price</th>
                        <th width="5%">Price</th>
                        <th width="10%">Show Original Price</th>
                        <th width="10%">Created At</th>
                        <th width="10%">Created By</th>
                        <th width="10%">Updated At</th>
                        <th width="10%">Updated By</th>
                        <th width="5%">Status</th>
                        <th width="5%">Action</th>

                    </tr>
                </thead>
                <tbody>
                    @forelse ($data as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->product_id == 1 ? 'Internal Audit Management' : 'Enterprise Risk Management' }}</td>
                            <td>
                                {{ $item->plan_type == 1 ? 'Monthly' : 'Yearly' }}

                            </td>
                            <td>{{ $item->name }}</td>
                            <td>{!! $item->description !!}</td>
                            <td>{!! $item->original_price !!}</td>
                            <td>{{ $item->price }}</td>
                            <td><input type="checkbox" class="showprice" data-row-id="{{$item->id}}" data-key="id" data-table="plans" data-col="show_original_price"></td>
                            <td>{{ date('d-m-Y h:i A', strtotime($item->created_at)) }}</td>
                            <td>{{ $item?->creator?->name ?? 'N/A' }}</td>
                            <td>{{ $item?->lastUpdator?->name ?? 'N/A' }}</td>
                            <td>{{ date('d-m-Y h:i A', strtotime($item->updated_at)) }}</td>
                            <td>
                                @if ($item->status == 1)
                                    <span class="label label-success change-status" id="{{ $item->id }}"
                                        data-id="{{ $item->id }}" data-key="id" data-table="plans"
                                        data-status="0">Active</span>
                                @else
                                    <span class="label label-danger change-status" id="{{ $item->id }}"
                                        data-id="{{ $item->id }}" data-key="id" data-table="plans"
                                        data-status="1">In-active</span>
                                @endif
                            </td>
                            <td>
                                <a href="{{ route('admin.pricing.edit', $item->id) }}" class="btn btn-sm btn-primary"><i
                                        class="fa fa-pencil"></i></a>
                                <button class="btn btn-sm btn-danger change-status" data-id="{{ $item->id }}"
                                    data-key="id" data-table="plans" data-status="3"><i class="fa fa-trash"></i></button>
                            </td>
                        </tr>
                    @empty
                    @endforelse
                </tbody>
            </table>
        </div>
    </section>
    
@endsection
@push('admin-js')
<script>
    $(document).on('click',".showprice",function(event) {
        // event.preventDefault();
        let isChecked = 0;
        if($(this).prop('checked')){
            isChecked = 1
        }else{
            isChecked = 0
        }
        console.log(isChecked)

    })
</script>
@endpush