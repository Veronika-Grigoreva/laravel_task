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
        $departaments = Department::all();
        $workers = Worker::all();

        foreach ($workers as $worker) {
            $departName = [];

            foreach ($worker->departments as $department) {
                $departName[] = $department->name;

            }
            $worker->departName = $departName;
        }

        return view('index', [
            'departaments' => $departaments,
            'workers' => $workers
        ]);
    }
}
