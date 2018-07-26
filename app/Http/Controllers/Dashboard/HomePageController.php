<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Department;
use App\Worker;

/**
 * Class HomePageController
 * @package App\Http\Controllers\Dashboard
 */
class HomePageController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
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
