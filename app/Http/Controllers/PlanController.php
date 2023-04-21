<?php

namespace App\Http\Controllers;

use App\Models\Plan;

class PlanController extends Controller
{
    public function index()
    {
        return view('content.plan.table');
    }

    public function create()
    {
        return view('content.plan.form', [
            'plan' => new Plan()
        ]);
    }

    public function edit($id)
    {
        $plan = Plan::find($id);

        return view('content.plan.form', [
            'plan' => $plan,
        ]);
    }
}
