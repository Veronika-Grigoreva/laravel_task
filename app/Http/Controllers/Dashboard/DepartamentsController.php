<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Department;

class DepartamentsController extends Controller
{
    public function run()
    {
        $departments = Department::all();
        $department = Department::find(1);

//        $count = [];
//
//        foreach ($department->workers as $worker) {
//            $count[] .= $worker->name;
//        }
//        echo count($count);
//        unset($count);

        return view('departaments', [
            'departments' => $departments,
            //'count' => $count,
            'department' => $department
        ]);
    }
}
