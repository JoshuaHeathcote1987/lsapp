<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = 'Welcome To Laravel!';
        // return view('pages.index', compact('titlphp artisan make:model Post -me'));    One way of passing through a value.
        return view('pages.index')->with('title', $title);  // Another way of passing through a var value, this allows to pass through multiple vars also as array.

    }

    public function about(){
        $title = 'Josh was here on the about pages 2018.';
        return view('pages.about')->with('title', $title);
    }

    public function services(){
        $data = array(
            'title' => 'Services',
            'services' => ['Web Design', 'Programming', 'SEO']
        );
        return view('pages.services')->with($data);
    }
}
