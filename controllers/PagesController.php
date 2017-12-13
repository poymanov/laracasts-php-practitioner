<?php

class PagesController
{
    public function home()
    {
        $tasks = App::get('db')->selectAll('tasks');

        return view('index', compact('tasks'));
    }

    public function about()
    {
        return view('about');
    }

    public function contacts()
    {
        return view('contacts');
    }
}