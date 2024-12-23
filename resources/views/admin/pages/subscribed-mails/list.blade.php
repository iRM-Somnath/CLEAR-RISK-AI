@extends('admin.layouts.master')
@section('content')

<section class="panel">
    <header class="panel-heading">
        <div class="panel-actions">
            <!-- Action buttons (if needed) -->
        </div>
    </header>

    <div class="panel-body">
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th width="5%">Sl No.</th>
                    <th width="95%">email</th>
                    <th width="95%">Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($data as $item)
                    <tr>
                        <td>{{$loop->index + 1}}</td>
                        <td>{{$item->email}}</td>
                        <td>
                            <a href="{{ route('admin.faqs.edit', $item->id)}}" class="btn btn-sm btn-primary"><i class="fa fa-pencil"></i></a>
                            <button class="btn btn-sm btn-danger change-status" data-id="{{ $item->id }}" data-key="id" data-table="f_a_q_s" data-status="3"><i class="fa fa-trash"></i></button>
                        </td>
                    </tr>
                @empty
                <tr>
                    <td colspan="9" class="text-center">No Subscribed emails found.</td>
                </tr>

                @endforelse
            </tbody>
        </table>
    </div>
</section>

@endsection
