@extends('app')
@section('navigation')
    <div class="header collapse d-lg-flex p-0" id="headerMenuCollapse">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg order-lg-first">
                    <ul class="nav nav-tabs border-0 flex-column flex-lg-row">
                        <li class="nav-item">
                            <a href="{{ url('/home') }}" class="nav-link"><i class="fe fe-home"></i> Главная</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/depart') }}" class="nav-link" data-toggle="dropdown"><i class="fe fe-folder"></i> Отделы</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a href="{{ url('/worker') }}" class="nav-link active" data-toggle="dropdown"><i class="fe fe-user"></i> Сотрудники</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <div class="my-3 my-md-5">
        <div class="container">
            <div class="row row-cards row-deck">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="col-md-9">
                                <h3 class="card-title">Сотрудники</h3>
                            </div>
                            <div class="col-md-3 text-right">
                                <a href="{{ url('/worker/create') }}" class="btn btn-primary">Добавить сотрудника</a>
                            </div>
                        </div>
                        @if($workers->isEmpty())
                            <p class="text-muted col-lg-12" style="text-align: center">У вас еще нет сотрудников</p>
                        @else
                            <div class="table-responsive">
                                <table class="table card-table table-vcenter text-nowrap">
                                    <thead>
                                    <tr>
                                       <th>Имя</th>
                                       <th>Фамилия</th>
                                       <th>Отчество</th>
                                       <th>Пол</th>
                                       <th>Заработная плата</th>
                                       <th>Отделы, в которых работает сотрудник</th>
                                       <th></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($workers as $worker)
                                     <tr>
                                        <td>{{ $worker->name }}</td>
                                        <td>{{ $worker->last_name }}</td>
                                        <td>{{ $worker->third_name }}</td>
                                        <td>{{ $sex[$worker->sex] }}</td>
                                        <td>{{ $worker->salary }}</td>
                                        <td>{{ $worker->departmentsList }}</td>
                                        <td class="text-right">
                                            <a href="{{ url('/worker/edit', [$worker->id]) }}" class="btn btn-primary">Редактировать</a>
                                            <div class="dropdown">
                                                <a href="{{ url('/worker/destroy', [$worker->id]) }}" class="btn btn-secondary" data-toggle="dropdown">Удалить</a>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection