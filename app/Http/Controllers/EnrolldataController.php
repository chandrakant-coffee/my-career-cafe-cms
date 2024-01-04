<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Enrolldata;
use Illuminate\Support\Str;

class EnrolldataController extends Controller
{
    public function index()
    {
        $data = Enrolldata::where('is_deleted', 0)->paginate(10);
        return view('enrolldata.index', compact('data'))->with('i', (request()->input('page', 1) - 1) * 10);
    }


}
