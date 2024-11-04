<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Event;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class EventManagement extends Controller
{
    public function index()
    {
        $title = "Event Management";
        $data = Event::where('status', '!=', 3)->get();
        return view('admin.pages.event-management.list', compact("title", "data"));
    }

    public function add($id = null)
    {
        $title = $id ? "Event Management : Edit" : "Event Management : Add";
        $oldData = $id ? Event::where('status', '!=', 3)->find($id) : null;

        // Format dates if old data is found
        if ($oldData) {
            $oldData->start_date = \Carbon\Carbon::parse($oldData->start_date)->format('Y-m-d');
            $oldData->end_date = \Carbon\Carbon::parse($oldData->end_date)->format('Y-m-d');
        }
        return view('admin.pages.event-management.add', compact("title", "oldData"));
    }

    public function save(Request $request, $id = null)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'location' => 'required|string|max:255',
            'meeting_url' => 'required|url',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after_or_equal:start_date',
        ]);

        // Event data array
        $eventData = [
            'title' => $request->title,
            'location' => $request->location,
            'meeting_url' => $request->meeting_url,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'created_by' => Auth::user()->id,
        ];

        // Handle image upload
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads/event'), $imageName);
            $eventData['image_name'] = $imageName;
            $eventData['image_original_name'] = $image->getClientOriginalName();

            // If editing, delete the old image
            if ($id) {
                $oldEvent = Event::find($id);
                if ($oldEvent && $oldEvent->image_name && File::exists(public_path('uploads/event/' . $oldEvent->image_name))) {
                    File::delete(public_path('uploads/event/' . $oldEvent->image_name));
                }
            }
        }

        // Update or create based on the presence of $id
        if ($id) {
            Event::where('id', $id)->update($eventData);
            $message = 'Event updated successfully!';
        } else {
            Event::create($eventData);
            $message = 'Event added successfully!';
        }

        return redirect('admin/event/')->with('success', $message);
    }

    public function changeStatus(Request $request, $id)
    {
        $status = $request->input('status');

        if (in_array($status, [0, 1])) {
            Event::where('id', $id)->update(['status' => $status]);
            return redirect()->back()->with('success', 'Status updated successfully!');
        }

        return redirect()->back()->with('error', 'Invalid status provided!');
    }

    public function delete($id)
    {
        Event::where('id', $id)->update(['status' => 3]);
        return redirect('admin/event/')->with('success', 'Event deleted successfully');
    }
}
