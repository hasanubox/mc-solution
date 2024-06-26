<?php

namespace App\Http\Controllers;

use App\Http\Requests\DashboardRequest;
use App\Events\OptionSelected;
class DashboardController extends Controller
{
    public function submit(DashboardRequest $request)
    {
        $selectedOption = $request->input('single_select');
        event(new OptionSelected($selectedOption));
        return redirect()->route('dashboard')->with('success', 'Option selected successfully!');
    }
}
