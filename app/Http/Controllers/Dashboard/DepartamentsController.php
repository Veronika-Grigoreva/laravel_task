<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Department;

/**
 * Class DepartamentsController
 * @package App\Http\Controllers\Dashboard
 */
class DepartamentsController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $departments = Department::all();

        foreach ($departments as $department) {
            $salaries = [];
            foreach ($department->workers as $worker) {
                $salaries[] = $worker->salary;
            }

            if ($salaries) {
                $department->maxSalary = max($salaries);
            } else {
                $department->maxSalary = 0;
            }
        }

        return view('departaments', [
            'departments' => $departments
        ]);
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        return view('form_departer', [
            'title' => 'Добавление отдела'
        ]);
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function save(Request $request)
    {
        if ($request->id) {
            $departament = Department::find($request->id);
        } else {
            $departament = new Department();
        }

        $departament->fill($request->all());
        $departament->save();

        \Session::flash('flash_message', 'Отдел успешно сохранен!');

        return redirect('/depart');
    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id)
    {
        $departament = Department::find($id);

        if (!$departament) {
            \Session::flash('flash_message_error', 'Такого отдела не существует!');

            return redirect('/depart');
        }

        return view('form_departer', [
            'title' => 'Редактирование отдела',
            'id' => $id,
            'departament' => $departament
        ]);
    }

    /**
     * @param $id
     * @return $this
     */
    public function destroy($id)
    {
        $departaments = Department::find($id);

        if (count($departaments->workers) > 0) {
            \Session::flash('flash_message_warning', 'Нельзя удалить отдел!');
        } else {
            $departaments->delete();

            \Session::flash('flash_message', 'Отдел успешно удален!');
        }

        return redirect('/depart');
    }
}
