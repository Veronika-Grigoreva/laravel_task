<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Department;
use App\Worker;

class HomePageController extends Controller
{
    public function index()
    {
        $departments = Department::all();
        $workers = Worker::all();

        return view('index', [
            'departments' => $departments,
            'workers' => $workers
        ]);
    }
}
