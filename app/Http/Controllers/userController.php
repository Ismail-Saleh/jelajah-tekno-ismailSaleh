<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class userController extends Controller
{
    //

    public function show()
    {
        $data = Post::all();
        return response()->json([
            'message' => 'berhasil',
            'data' => $data,
        ]);
    }

    public function post(Request $request)
    {
        $user = new Post();

        $user->name = strtoupper($request->name);
        $user->age = strtoupper($request->age);
        $user->city = strtoupper($request->city);

        $user->save();

        return response()->json([
            'message' => 'Berhasil',
            'data' => $user,
        ]);
    }
}
