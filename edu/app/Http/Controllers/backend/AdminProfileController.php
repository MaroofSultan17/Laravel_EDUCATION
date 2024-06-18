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
    public function store(Request $request)
    {
        //
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
