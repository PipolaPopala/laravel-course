<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Profile\StoreRequest;
use App\Http\Requests\Api\Profile\UpdateRequest;
use App\Http\Resources\Profile\ProfileResource;
use App\Models\Profile;
use App\Service\ProfileService;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ProfileController extends Controller
{
    public function index()
    {
        return ProfileResource::collection(Profile::all())->resolve();
    }

    public function show(Profile $profile)
    {
        return ProfileResource::make($profile)->resolve();
    }

    public function store(StoreRequest $request)
    {
        $data = $request->validated();
        $profile = ProfileService::create($data);
        return $profile;
    }

    public function update(UpdateRequest $request, Profile $profile)
    {
        $data = $request->validated();
        $profile->update($data);
        return $profile;
    }

    public function destroy(Profile $profile)
    {
        $profile->delete();
        return response([
            'message' => 'delete success'
        ], Response::HTTP_OK);
    }
}
