<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(Request $request)
    {

        return view('index');
    }
    public function confirm(Request $request)
    {  // この後、処理内容を記述します
        $contact = $request->only(['name', 'email', 'tel', 'content']);

        return view('confirm', compact('contact'));
    }
    public function store(Request $request)
    {
        // ここに処理を記述していきます。}
        $contact = $request->only(['name', 'email', 'tel', 'content']);
    }

}