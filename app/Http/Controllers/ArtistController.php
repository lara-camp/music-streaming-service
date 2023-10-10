<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateArtistRequest;
use App\Http\Requests\UpdateArtistRequest;
use Inertia\Inertia;
use Illuminate\Support\Facades\Session;
use App\Models\Artist;
use Illuminate\Support\Facades\Hash;

class ArtistController extends Controller
{
    function create()
    {
        return Inertia::render('User/Page/artistCreate');
    }

    function store(CreateArtistRequest $request)
    {
        $name = $request->name;
        $displayName = $request->displayName;
        $email = $request->email;
        $password = $request->password;
        $profileImg = $request->profileImg;
        if ($request->hasFile('profileImg')) {
            $profileImg = uniqid() . "image." . $request->file('profileImg')->extension();
            $request->profileImg->move(public_path('artists'), $profileImg);
        }
        Artist::create([
            'name' => $name,
            'display_name' => $displayName,
            'email' => $email,
            'password' => Hash::make($password),
            'image_s3_path' => $profileImg,
            'thumbnail_s3_path' => $profileImg
        ]);
        return Inertia::render('User/Page/login', ['type' => 'signin']);
    }

    public function show($id)
    {
        $artist = Artist::find($id);
        return Inertia::render('User/Page/profile', ['artistDetail' => $artist]);
    }

    public function edit($id)
    {
        $artist = Artist::find($id);
        return Inertia::render('User/Page/artistEdit', ['artistDetail' => $artist]);
    }

    public function update(UpdateArtistRequest $request, $id)
    {
        $name = $request->name;
        $displayName = $request->displayName;
        $email = $request->email;
        $profileImg = $request->profileImg;
        if ($request->hasFile('profileImg')) {
            $profileImg = uniqid() . "image." . $request->file('profileImg')->extension();
            $request->profileImg->move(public_path('artists'), $profileImg);
        }
        Artist::where('id', $id)->update([
            'name' => $name,
            'display_name' => $displayName,
            'email' => $email,
            'image_s3_path' => $profileImg,
            'thumbnail_s3_path' => $profileImg
        ]);
        return redirect()->route('artists.show', ['id' => $id]);
    }

    public function delete($id)
    {
        Artist::where('id', $id)->delete();
        Session::flush();
        return redirect()->route('artists.create');
    }
}
