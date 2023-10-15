<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Http\Request;
use Inertia\Inertia;

class VideoController extends Controller
{
    public function video()
    {
        $videos = Video::all();
        return Inertia::render('Video', ['videos'=>$videos]);
    }

    public function videoUpdate(Request $request)
    {
        $data = $request->only(['kind', 'title', 'url']);
        Video::create($data);

        return redirect('/video/show');
    }

    public  function searchVideo(Request $request)
    {

        $data = Video::where('kind', 'LIKE','%'.$request->keyword.'%')->get();
        return response()->json($data);
    }
}
