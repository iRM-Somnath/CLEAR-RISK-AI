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
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th width="3%">Sl No.</th>
                        <th width="10%">Title</th>
                        <th width="10%">Image</th>
                        <th width="15%">Meta Title</th>
                        <th width="10%">Meta Tags</th>
                        <th width="15%">Meta Keywords</th>
                        <th width="15%">Meta Description</th>
                        <th width="10%">Content</th>
                        <th width="10%">Published Date</th>
                        <th width="8%">Author</th>
                        <th width="5%">Status</th>
                        <th width="8%">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($data as $item)
                        <tr>
                            <td>{{ $loop->index + 1 }}</td>
                            <td>{{ $item->title }}</td>
                            <td>
                                <img src="{{ asset('uploads/blog/' . $item->image) }}" alt="Blog Image" style="max-height: 100px; margin-top: 10px;">
                            </td>
                            <td>{{ $item->meta_title }}</td>
                            <td>{{ $item->meta_tags }}</td>
                            <td>{{ $item->meta_keywords }}</td>
                            <td>{{ Str::limit($item->meta_description, 50) }}</td>
                            <td>{{ Str::limit($item->content, 50) }}</td>
                            <td>{{ date('d-m-Y', strtotime($item->published_date)) }}</td>
                            <td>{{ $item->author }}</td>
                            <td>
                                @if ($item->status == 1)
                                    <span class="label label-success change-status" id="{{ $item->id }}" data-id="{{ $item->id }}" data-key="id" data-table="blogs" data-status="0">Active</span>
                                @else
                                    <span class="label label-danger change-status" id="{{ $item->id }}" data-id="{{ $item->id }}" data-key="id" data-table="blogs" data-status="1">In-active</span>
                                @endif
                            </td>
                            <td>
                                <a href="{{ route('admin.blogs.edit', $item->id) }}" class="btn btn-sm btn-primary"><i class="fa fa-pencil"></i></a>
                                <button class="btn btn-sm btn-danger change-status" data-id="{{ $item->id }}" data-key="id" data-table="blogs" data-status="3"><i class="fa fa-trash"></i></button>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="12" class="text-center">No Blog entries found.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</section>

@endsection
