<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use App\Service\ProfileService;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ProfileController extends Controller
{
    //
    public function index()
    {
        return Profile::all();
    }

    public function show(Profile $profile)
    {
        return $profile;
    }

    public function store()
    {
        $data = [
            'login' => 'my login',
            'user' => 'my user',
            'description' => 'my description'
        ];
        $profile = ProfileService::create($data);
        return $profile;
    }

    public function update(Profile $profile)
    {
        $profile->update(['description' => 'update description']);
    }

    public function destroy(Profile $profile)
    {
        $profile->delete();
        return response([
            'message' => 'delete success'
        ], Response::HTTP_OK);
    }
}
