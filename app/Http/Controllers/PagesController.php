<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class PagesController extends Controller
{
    public function index() {
        $title = 'Welcome to Centrilink';
        return view('pages.index')->with('title', $title);
    }

    public function about() {
        $title = 'About Us';
        return view('pages.about')->with('title', $title);
    }

    public function services() {
        $data = array(
            'title' => 'Services',
            'services' => ['Service One', 'Service Two', 'Service Three     ']
        );
        return view('pages.services')->with($data);
    }

    public function fetchData() {
        $user = User::where('id', 1)->first();
        return $user->name;
    }
}
