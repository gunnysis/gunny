<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Inertia\Inertia;
use App\Models\Memo;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function index()
    {

    }


}
