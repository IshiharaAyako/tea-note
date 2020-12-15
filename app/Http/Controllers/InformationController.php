<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Information;

class InformationController extends Controller
{
    public function store(Request $request)
    {
        // $validated = $request->validated();

        $information = Information::create([
            'title' => $request['title'],
            'body' => $request['body'],
        ]);

        return redirect()->route('home');
        // return view('home');
    }
}
