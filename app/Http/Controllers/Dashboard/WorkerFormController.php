<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class WorkerFormController extends Controller
{
    public function add()
    {
        return view('form_worker', [
            'title' => 'Добавить сотрудника'
        ]);
    }

    public function edit($id)
    {
        return view('form_worker', [
            'title' => 'Редактировать сотрудника',
            'id' => $id
        ]);
    }
}
