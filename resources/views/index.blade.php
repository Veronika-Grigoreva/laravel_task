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
                        <div class="table-responsive">
                            <table class="table card-table table-vcenter text-nowrap">
                                <thead>
                                <tr>
                                    @foreach($departments as $department)
                                        <th class="w-1"></th>
                                        <th>{{ $department->name }}</th>
                                    @endforeach
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($workers as $worker)
                                <tr>
                                    <td><span class="text-muted">{{ $worker->name. ' ' . $worker->last_name}}</span></td>
                                    @foreach($worker->departments as $department)
                                        @foreach($departments as $department_name)
                                            @if($department_name->name == $department->name)
                                                <td>&#10003;</td>
                                            @endif
                                        @endforeach
                                    @endforeach
                                    {{--<td>&#10003;</td>--}}
                                    {{--<td></td>--}}
                                    {{--<td></td>--}}
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection