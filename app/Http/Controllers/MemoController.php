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
        // Memo 모델과 연결된 데이터베이스 테이블에 직접 데이터를 삽입합니다.
        Memo::insert($data);

        return redirect('/memo/show');
    }
}
