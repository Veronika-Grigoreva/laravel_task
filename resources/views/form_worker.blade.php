@extends('app')
@section('content')
    <div class="my-3 my-md-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <form action="{{ url('/worker/save') }}" method="post" class="card">
                        {{ csrf_field() }}
                        @if(isset($worker))
                            <input type="hidden" name="id" value="{{ $worker->id }}">
                        @endif
                        <div class="card-header">
                            <h3 class="card-title">{{ $title }}</h3>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-label">Имя<span class="form-required">*</span></label>
                                        @if(isset($worker))
                                            <input type="text" class="form-control" name="name" placeholder="Имя" required value="{{ $worker->name }}">
                                        @else
                                            <input type="text" class="form-control" name="name" placeholder="Имя" required>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-label">Фамилия<span class="form-required">*</span></label>
                                        @if(isset($worker))
                                            <input type="text" class="form-control" name="last_name" placeholder="Фамилия"  value="{{ $worker->last_name }}">
                                        @else
                                            <input type="text" class="form-control" name="last_name" placeholder="Фамилия" required>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-label">Отчество</label>
                                        @if(isset($worker))
                                            <input type="text" class="form-control" name="third_name" placeholder="Отчество" value="{{ $worker->third_name }}">
                                        @else
                                            <input type="text" class="form-control" name="third_name" placeholder="Отчество">
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-label">Пол</label>
                                        <select class="form-control custom-select" name="sex">
                                            @foreach($sex as $sexOptionKey => $sexOptionValue)
                                                @if(isset($worker) && $worker->sex === $sexOptionKey)
                                                    <option value="{{ $sexOptionKey }}" selected>{{ $sexOptionValue }}</option>
                                                @else
                                                    <option value="{{ $sexOptionKey }}">{{ $sexOptionValue }}</option>
                                                @endif
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-label">Заработная плата</label>
                                        @if(isset($worker))
                                            <input type="text" class="form-control" name="salary" placeholder="Заработная плата" value="{{ $worker->salary }}">
                                        @else
                                            <input type="text" class="form-control" name="salary" placeholder="Заработная плата">
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-label">Отделы<span class="form-required">*</span></label>
                                        <select multiple class="form-control custom-select" name="departments[]" required>
                                            @foreach($departaments as $departament)
                                                @if(isset($worker) && in_array($departament->id, $worker->departmentsIds))
                                                    <option value="{{ $departament->id }}" selected>{{ $departament->name }}</option>
                                                @else
                                                    <option value="{{ $departament->id }}">{{ $departament->name }}</option>
                                                @endif
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="card-footer text-right">
                                        <div class="d-flex">
                                            <a href="{{ url('/worker') }}" class="btn btn-link">Отмена</a>
                                            <button type="submit" class="btn btn-primary ml-auto">Сохранить</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection