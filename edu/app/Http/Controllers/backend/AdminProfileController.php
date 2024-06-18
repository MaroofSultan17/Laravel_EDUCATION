<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\backend\AdminAuthModel;
use Illuminate\Http\Request;

class AdminProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function profile($token)
    {
        $profiledata = AdminAuthModel::where('token', $token)->first();
        // dd($profiledata);
        if (is_null($profiledata)) {
            ?>
            <script>
                alert('No Record FOund');
            </script>
            <?php
        } else {
            $data = compact('profiledata');
            return view('backend.profile')->with($data);
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function profile_edit($token)
    {
        $profiledata = AdminAuthModel::where('token', $token)->first();
        // dd($profiledata);
        if (is_null($profiledata)) {
            ?>
            <script>
                alert('No Record FOund');
            </script>
            <?php
        } else {
            $data = compact('profiledata');
            return view('backend.profile-edit')->with($data);
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function profile_edit_submit(Request $request, $token)
    {
        $profile = AdminAuthModel::where('token', $token)->first();
        $request->validate([
            'name' => 'required',
            'phoneno' => 'required|max:14',
            'email' => 'required|email',
            'address' => 'required',
            'image' => 'nullable|mimes:png,jpg,jpeg|max:1024'
        ]);
        // Image
        if (isset($request->image)) {
            $ImageName = "admin_profile_" . time() . "." . $request->image->extension();
            $FolderPath = 'uploads/profile';
            $ImagePath = $FolderPath . "/" . $ImageName;
            $request->image->move(public_path($FolderPath), $ImageName);
            $profile->image = $ImagePath;
        }
        $profile->name = $request->name;
        $profile->phoneno = $request->phoneno;
        $profile->email = $request->email;
        $profile->address = $request->address;
        $profile->save();
        return redirect()->route('profile.show', ['token' => $profile->token])->with('success', 'Profile is Updated!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
