@push('admin-css')
    <link rel="stylesheet" href="{{ asset('admin/assets/vendor/jquery-datatables-bs3/assets/css/datatables.css') }}" />
@endpush
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
            <table class="table table-bordered table-striped" id="datatable-default">
                <thead>
                    <tr>
                        <th width="5%">Sl No.</th>
                        <th width="15%">Product</th>
                        <th width="10%">Plan Type</th>
                        <th width="25%">Plan Name</th>
                        <th width="25%">Description</th>
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
                            <td>{{ $item?->products?->name}}</td>
                            <td>
                                {{ $item->plan_type == 1 ? 'Monthly' : 'Yearly' }}

                            </td>
                            <td>{{ $item->name }}</td>
                            <td>{!! $item->description !!}</td>
                            <td>{!! $item->original_price !!}</td>
                            <td>{{ $item->price }}</td>
                            <td><input type="checkbox" class="showprice" data-row-id="{{$item->id}}" {{ ($item->show_original_price == '1')?'checked':'' }}></td>
                            <td>{{ date('d-m-Y h:i A', strtotime($item->created_at)) }}</td>
                            <td>{{ $item?->creator?->name ?? 'N/A' }}</td>

                            <td>{{ date('d-m-Y h:i A', strtotime($item->updated_at)) }}</td>
                            <td>{{ $item?->lastUpdator?->name ?? 'N/A' }}</td>
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
<script src="{{ asset('admin/assets/vendor/jquery-datatables/media/js/jquery.dataTables.js') }} "></script>
<script src="{{ asset('admin/assets/javascripts/tables/examples.datatables.default.js')}}"></script>
<script src="{{ asset('admin/assets/vendor/jquery-datatables/media/js/dataTables.bootstrap.js') }} "></script>
<script>
    $(document).on('click',".showprice",function(event) {
        // event.preventDefault();
        let isChecked = 0;
        if($(this).prop('checked')){
            isChecked = 1
        }else{
            isChecked = 0
        }
        const dataJSON = {
            id: $(this).data('row-id'),
            value: isChecked,
            _token
        }
        $.confirm({
            icon: "fa fa-spinner fa-spin",
            title: "Confirm!",
            content: "Do you really want to do this ?",
            type: "orange",
            typeAnimated: true,
            buttons: {
                confirm: function () {
                    $.ajax({
                        type: "POST",
                            headers:{},
                            url: baseUrl + "pricing/show-price",
                            data: dataJSON,
                            dataType: "JSON",
                            success: function (data) {
                                if (data.status) {
                                    $.alert({
                                        icon: "fa fa-check",
                                        title: "Success!",
                                        content: data.message,
                                        type: "green",
                                        typeAnimated: true,
                                    });

                                }
                            }
                        });
                },
                cancel: function () {
                    $.alert({
                    icon: "fa fa-times",
                    title: "Canceled!",
                    content: "Process canceled",
                    type: "purple",
                    typeAnimated: true,
                    });
                }
            }
        });

    })
</script>
@endpush
