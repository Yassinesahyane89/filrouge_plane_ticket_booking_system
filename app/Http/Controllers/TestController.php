<?php

namespace App\Http\Controllers;

use App\Models\Test;

class TestController extends Controller
{
    public function index()
    {
        return view('content.test.table');
    }

    public function create()
    {
        return view('content.test.form', [
            'test' => new Test(),
        ]);
    }

    public function edit($id)
    {
        $test = Test::find($id);

        return view('content.test.form', [
            'test' => $test,
        ]);
    }
}
