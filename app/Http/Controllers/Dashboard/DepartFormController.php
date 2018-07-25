<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DepartFormController extends Controller
{
    public function add()
    {
        return view('form_departer', [
            'title' => 'Добавление отдела'
        ]);
    }

    public function edit($id)
    {
        return view('form_departer', [
            'title' => 'Редактирование отдела',
            'id' => $id
        ]);
    }
}
