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
                    <th width="40%">Quwstion</th>
                    <th width="40%">Answer</th>
                    <th width="7%">Status</th>
                    <th width="8%">Action</th>

                </tr>

            </thead>
            <tbody>
                @forelse ($data as $item)
                    <tr>
                        <td>{{$loop->index + 1}}</td>
                        <td>{{$item->question}}</td>
                        <td>{{$item->answer}}</td>
                        <td>
                            @if($item->status == 1)
                            <span class="label label-success change-status" data-id="{{ $item->id }}" data-key="id" data-table="f_a_q_s" data-status="0">Active</span>
                            @else
                            <span class="label label-danger change-status" data-id="{{ $item->id }}" data-key="id" data-table="f_a_q_s" data-status="1">In-active</span>
                            @endif
                        </td>
                        <td>

                    </tr>
                @empty

                @endforelse
            </tbody>
        </table>
    </div>
</section>

@endsection
