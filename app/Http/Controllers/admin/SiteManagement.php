<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\SiteSettings;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

use function PHPUnit\Framework\isNull;

class SiteManagement extends Controller
{
    public function index()
    {
        $title = "Site Management";
        $oldData = SiteSettings::find(1);
        return view('admin.pages.site-settings', compact("title", "oldData"));
    }

    public function save(Request $request)
    {
        DB::beginTransaction();
        try {
            // Validate the incoming request
            $validated = $request->validate([
                'logo' => 'nullable|image|mimes:png|max:2048',
                'favicon' => 'nullable|image|mimes:png|max:2048',
                'smtp_user_id' => 'required',
                'smtp_password' => 'required',
                'smtp_port' => 'required',
                'sender_mail' => 'required',
                'sender_name' => 'required',
                'phone_no' => 'required',
                'country' => 'required',
                // 'contact_address' => 'required',
                'footer_short_desc' => 'required',
                'receiver_mail_id' => 'required',
            ]);
            if ($validated) {

                $oldData = SiteSettings::find(1); // Fetch the existing record with id = 1
                $logo = $oldData->logo ?? null;
                $favicon = $oldData->favicon ?? null;

                // Handle logo upload
                if ($request->hasFile('logo')) {
                    $image = $request->file('logo');
                    $imageName = $image->getClientOriginalName(); // Get the original file name
                    $image->move(public_path('uploads/site-setting'), $imageName); // Move the file to the desired directory
                    $logo = $imageName; // Assign the original name to the $logo variable
                }

                // Handle favicon upload
                if ($request->hasFile('favicon')) {
                    $image = $request->file('favicon');
                    $imageName = $image->getClientOriginalName();
                    $image->move(public_path('uploads/site-setting'), $imageName);
                    $favicon = $imageName;
                }
                $tempContactNoArr = [];
                if(!empty($request->country) || !isNull($request->country)):
                    for($i = 0; $i<count($request->country); $i++):
                        $tempContactNoArr[$i]= [
                            "country"=>$request->country[$i],
                            "phone_no"=>$request->phone_no[$i]
                        ];
                    endfor;
                endif;
                // Check if data with id=1 exists, if not create a new one
                if ($oldData) {
                    // Update existing record with id = 1
                    $oldData->update([
                        "logo" => $logo,
                        "favicon" => $favicon,
                        "smtp_user_id" => $request->smtp_user_id,
                        "smtp_password" => $request->smtp_password,
                        "smtp_port" => $request->smtp_port,
                        "sender_mail" => $request->sender_mail,
                        "sender_name" => $request->sender_name,
                        "phone_no" => json_encode($tempContactNoArr,TRUE),
                        "contact_address" => $request->contact_address,
                        "footer_short_desc" => $request->footer_short_desc,
                        "receiver_mail_id" => $request->receiver_mail_id,
                        "updated_by" => Auth::user()->id, // Track who updated the record
                    ]);
                    DB::commit();
                    return response()->json([
                        'status' => TRUE,
                        'message' => 'Data updated successfully!',
                        'redirect' => 'site-settings',
                    ]);
                }
            }
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json([
                'status' => FALSE,
                'message' => 'Oops! Something went wrong.',
                'redirect' => '',
                'error' => $e->getMessage(),
            ]);
        }
    }

}
