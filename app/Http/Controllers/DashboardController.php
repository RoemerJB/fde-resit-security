<?php


namespace App\Http\Controllers;

use App\Models\Grade;

class DashboardController
{
    public function show($value) {
        if ($value == "index") {
            return view('index', [
                'grades' => Grade::all()
            ]);
        }
    }
}
