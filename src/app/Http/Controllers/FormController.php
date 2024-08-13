<?php

namespace App\Http\Controllers;

use App\Http\Requests\TestFormRequest;

class FormController extends Controller
{
    public function form(TestFormRequest $request)
    {
        return view('form-result');
    }
}
