<?php

namespace App\Http\Controllers;

use App\Http\Requests\DashboardRequest;

class DashboardController extends Controller
{
    public function submit(DashboardRequest $request)
    {
        $selectedOption = $request->input('single_select');
        $selectedSteps = $request->input('multi_select');
        return view('dashboard', [
            'selectedOption' => $selectedOption,
            'selectedSteps' => $selectedSteps
        ]);
    }
}
