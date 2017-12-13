<?php

namespace App\Controllers;

use App\Core\App;

class TasksController
{
    public function create()
    {
        return view('new-task');
    }

    public function store()
    {
        App::get('db')->insert('tasks', [
            'description' => $_POST['description']
        ]);

        return redirect('');
    }
}