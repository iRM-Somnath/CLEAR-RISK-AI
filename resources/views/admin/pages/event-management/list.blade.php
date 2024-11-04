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
                    <th width="15%">Title</th>
                    <th width="10%">Image</th>
                    <th width="10%">Location</th>
                    <th width="15%">Meeting URL</th>
                    <th width="10%">Start Date</th>
                    <th width="10%">End Date</th>
                    <th width="10%">Status</th>
                    <th width="15%">Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($data as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->title }}</td>
                        <td>
                            <img src="{{ asset('uploads/event/' . $item->image_name) }}" alt="Event Image" style="max-height: 100px; margin-top: 10px;">
                        </td>
                        <td>{{ $item->location }}</td>
                        <td>{{ $item->meeting_url }}</td>
                        <td>{{ $item->start_date }}</td>
                        <td>{{ $item->end_date }}</td>
                        <td>
                            <form action="{{ route('admin.event.changeStatus', $item->id) }}" method="POST" style="display: inline;">
                                @csrf
                                <button type="submit" class="btn btn-sm {{ $item->status == 1 ? 'btn-success' : 'btn-danger' }}">
                                    {{ $item->status == 1 ? 'Active' : 'Inactive' }}
                                </button>
                                <input type="hidden" name="status" value="{{ $item->status == 1 ? 0 : 1 }}">
                            </form>
                        </td>
                        <td>
                            <a href="{{ route('admin.event.edit', $item->id) }}" class="btn btn-sm btn-primary">
                                <i class="fa fa-pencil"></i> Edit
                            </a>
                            <form action="{{ route('admin.event.delete', $item->id) }}" method="POST" 
                                  style="display: inline;" 
                                  onsubmit="return confirm('Are you sure you want to delete this event?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">
                                    <i class="fa fa-trash"></i> Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="9" class="text-center">No events available.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
        {{-- Pagination links (if data is paginated) --}}
        @if($data instanceof \Illuminate\Pagination\LengthAwarePaginator)
            {{ $data->links() }}
        @endif
    </div>
</section>

@endsection
