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
        <div class="table-responsive">
            <table class="table table-bordered table-striped" >
                <thead>
                    <tr>
                        <th width="5%">Sl No.</th>
                        <th width="25%">Quwstion</th>
                        <th width="30%">Answer</th>
                        <th width="10%">Created At</th>
                        <th width="10%">Created By</th>
                        <th width="10%">Updated At</th>
                        <th width="10%">Updated By</th>
                        <th width="5%">Status</th>
                        <th width="8%">Action</th>

                    </tr>

                </thead>
                <tbody>
                    @forelse ($data as $item)
                        <tr>
                            <td>{{$loop->index + 1}}</td>
                            <td>{{$item->question}}</td>
                            <td>{{$item->answer}}</td>
                            <td>{{ date('d-m-Y h:i A',strtotime($item->created_at)) }}</td>
                            <td>{{$item?->creator?->name??'N/A' }}</td>
                            <td>{{$item?->lastUpdator?->name??'N/A' }}</td>
                            <td>{{ date('d-m-Y h:i A',strtotime($item->updated_at)) }}</td>
                            <td>
                                @if($item->status == 1)
                                <span class="label label-success change-status" id="{{ $item->id }}" data-id="{{ $item->id }}" data-key="id" data-table="f_a_q_s" data-status="0">Active</span>
                                @else
                                <span class="label label-danger change-status" id="{{ $item->id }}" data-id="{{ $item->id }}" data-key="id" data-table="f_a_q_s" data-status="1">In-active</span>
                                @endif
                            </td>
                            <td>
                                <a href="{{ route('admin.faqs.edit', $item->id)}}" class="btn btn-sm btn-primary"><i class="fa fa-pencil"></i></a>
                                <button class="btn btn-sm btn-danger change-status" data-id="{{ $item->id }}" data-key="id" data-table="f_a_q_s" data-status="3"><i class="fa fa-trash"></i></button>
                            </td>

                        </tr>
                    @empty

                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</section>

@endsection
