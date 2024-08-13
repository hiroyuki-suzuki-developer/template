<?php

namespace App\Http\Controllers\Admin;

use App\Repositories\UserRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TopController extends Controller
{
    /**
     * constract
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * 一覧取得
     * 
     * @param Request $request
     */
    public function index(Request $request)
    {
        return view('admin.top',[
        ]);
    }
}
