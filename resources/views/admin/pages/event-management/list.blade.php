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
                    <th width="3%">Sl No.</th>
                    <th width="10%">Title</th>
                    <th width="13%">Description</th>
                    <th width="10%">Image</th>
                    <th width="7%">Organizer</th>
                    <th width="10%">Location</th>
                    <th width="10%">Meeting URL</th>
                    <th width="8%">Start Date</th>
                    <th width="8%">End Date</th>
                    <th width="5%">Status</th>
                    <th width="8%">Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($data as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->title }}</td>
                        <td>{!! Str::limit($item->description, 50) !!}</td>
                        <td>
                            <img src="{{ asset('uploads/event/' . $item->image_name) }}" alt="Event Image" style="max-height: 100px; margin-top: 10px;">
                        </td>
                        <td>{{ $item->organizer }}</td>
                        <td>{{ $item->location }}</td>
                        <td>{{ $item->meeting_url }}</td>
                        <td>{{ date('d-m-Y', strtotime($item->start_date)) }}</td>
                        <td>{{ date('d-m-Y', strtotime($item->end_date)) }}</td>
                        <td>
                            @if ($item->status == 1)
                                <span class="label label-success change-status" id="{{ $item->id }}" data-id="{{ $item->id }}" data-key="id" data-table="events" data-status="0">Active</span>
                            @else
                                <span class="label label-danger change-status" id="{{ $item->id }}" data-id="{{ $item->id }}" data-key="id" data-table="events" data-status="1">Inactive</span>
                            @endif
                        </td>
                        <td>
                            <a href="{{ route('admin.event.edit', $item->id) }}" class="btn btn-sm btn-primary"><i class="fa fa-pencil"></i></a>
                            <button class="btn btn-sm btn-danger change-status" data-id="{{ $item->id }}" data-key="id" data-table="events" data-status="3"><i class="fa fa-trash"></i></button>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="11" class="text-center">No Event entries found.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</section>

@endsection
