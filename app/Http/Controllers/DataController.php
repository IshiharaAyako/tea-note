<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataController extends Controller
{
    public function store(Request $request)
    {
        // $validated = $request->validated();

        $information = Information::create([
            'title' => $request['title'],
            'body' => $request['body'],
        ]);

        Log::info('管理画面でお知らせを登録しました(管理者ID:'.Auth::id().', お知らせID:'.$information->id.')');

        return redirect()->route('admin.informations.show', ['information' => $information])
            ->with('alert-success', 'お知らせの内容を登録しました。');
    }
}
