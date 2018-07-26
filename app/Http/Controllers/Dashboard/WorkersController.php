<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Worker;
use App\Department;

/**
 * Class WorkersController
 * @package App\Http\Controllers\Dashboard
 */
class WorkersController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $workers = Worker::all();

        foreach ($workers as $worker) {
            $workerDepartments = [];
            foreach ($worker->departments as $department) {
                $workerDepartments[] = $department->name;
            }
            $worker->departmentsList = implode(', ', $workerDepartments);
        }

        return view('workers', [
            'workers' => $workers,
            'sex' => Worker::getAllSexOptions()
        ]);
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        $departaments = Department::all();

        return view('form_worker', [
            'title' => 'Добавить сотрудника',
            'departaments' => $departaments,
            'sex' => Worker::getAllSexOptions()
        ]);
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function save(Request $request)
    {
        if ($request->id) {
            $worker = Worker::find($request->id);
        } else {
            $worker = new Worker();
        }

        $data = $request->all();
        $worker->fill($data);
        $worker->save();
        $worker->departments()->sync($data['departments']);

        \Session::flash('flash_message', 'Сотрудник успешно сохранен!');

        return redirect('/worker');
    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id)
    {
        $worker = Worker::findOrFail($id);
        $departaments = Department::all();

        $departmentsIds = [];

        foreach ($worker->departments as $department) {
            $departmentsIds[] = $department->id;
        }

        $worker->departmentsIds = $departmentsIds;

        return view('form_worker', [
            'title' => 'Редактировать сотрудника',
            'id' => $id,
            'worker' => $worker,
            'departaments' => $departaments,
            'sex' => Worker::getAllSexOptions()
        ]);
    }

    /**
     * @param $id
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        Worker::find($id)->delete();

        \Session::flash('flash_message', 'Сотрудник успешно удален!');

        return redirect('/worker');
    }
}
