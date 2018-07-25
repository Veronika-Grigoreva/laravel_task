<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Worker;

class WorkersController extends Controller
{
    public function run()
    {
        $workers = Worker::all();

        foreach ($workers as $worker) {
            $workerDepartments = [];
            foreach ($worker->departments as $department) {
                $workerDepartments[] = $department->name;
            }
            $worker->departments = $workerDepartments;
            echo '<pre>';
            var_dump($workerDepartments);
            echo '</pre>';
        }
        return view('workers', [
            'workers' => $workers,
            'workerDepartments' => $workerDepartments,
            'male' => 'Мужской',
            'female' => 'Женский'
        ]);
    }
}
