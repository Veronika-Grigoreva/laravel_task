@extends('app')
@section('navigation')
    <div class="header collapse d-lg-flex p-0" id="headerMenuCollapse">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg order-lg-first">
                    <ul class="nav nav-tabs border-0 flex-column flex-lg-row">
                        <li class="nav-item">
                            <a href="{{ url('/home') }}" class="nav-link active"><i class="fe fe-home"></i> Главная</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/depart') }}" class="nav-link" data-toggle="dropdown"><i class="fe fe-folder"></i> Отделы</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a href="{{ url('/worker') }}" class="nav-link" data-toggle="dropdown"><i class="fe fe-user"></i> Сотрудники</a>
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
                        @if($departaments->isEmpty() && $workers->isEmpty())
                            <div class="card-header">
                                <p class="text-muted col-lg-12" style="text-align: center">Добавьте сотрудников и отделы</p>
                            </div>
                        @else
                            <div class="table-responsive">
                                <table class="table card-table table-vcenter text-nowrap">
                                    <thead>
                                    <tr>
                                        <th class="w-1"></th>
                                        @foreach($departaments as $departament)
                                            <th style="text-align: center">{{ $departament->name }}</th>
                                        @endforeach
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($workers as $worker)
                                    <tr>
                                        <td><span class="text-muted">{{ $worker->name. ' ' . $worker->last_name}}</span></td>
                                        @foreach($departaments as $departament)
                                                @if(!empty($worker->departName) && in_array($departament->name, $worker->departName))
                                                    <td style="text-align: center">&#10003;</td>
                                                @else
                                                    <td></td>
                                                @endif
                                        @endforeach
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