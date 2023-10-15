<?php

namespace App\Http\Controllers;

use App\Models\Memo;
use Illuminate\Http\Request;
use Inertia\Inertia;

class MemoController extends Controller
{
    public function memo()
    {
        $memos = Memo::all();
        return Inertia::render('Memo', ['memos' => $memos]);
    }

    public function searchMemo(Request $request)
    {
        $data = Memo::where('kind', 'LIKE','%'.$request->keyword.'%')->get();
        return response()->json($data);
    }

    public function memoUpdate(Request $request)
    {
        $data = $request->only(['kind', 'jap_pron', 'jap_lang', 'jap_mean']);
        Memo::create($data);

        return redirect('/memo/show');
    }
}
