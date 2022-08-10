<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        $data = [
            'title' => "Marsel | Home",
            'test' => ["satu", "dua", "tiga"]
        ];
        return view('pages/home', $data);
    }
    public function about()
    {
        $data = [
            'title' => "Marsel | About"
        ];
        return view('pages/about', $data);
    }
    public function project()
    {
        $data = [
            'title' => 'Marsel | Project'
        ];

        return view('pages/project', $data);
    }
    public function gallery()
    {
        $data = [
            'title' => 'Marsel | Gallery'
        ];

        return view('pages/gallery', $data);
    }
    public function contact()
    {
        $data = [
            'title' => "Marsel | contact",
        ];
        return view('pages/contact', $data);
    }
}
