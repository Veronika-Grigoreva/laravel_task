@extends('app')
@section('content')
    <div class="my-3 my-md-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <form action="{{ url('/depart/save') }}" method="post" class="card">
                        {{ csrf_field() }}
                        @if(isset($departament))
                            <input type="hidden" name="id" value="{{ $departament->id }}">
                        @endif
                        <div class="card-header">
                            <h3 class="card-title">{{ $title }}</h3>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-label">Название отдела<span class="form-required">*</span></label>
                                        @if(isset($departament))
                                            <input type="text" class="form-control" name="name" placeholder="Название отдела" required value="{{ $departament->name }}">
                                        @else
                                            <input type="text" class="form-control" name="name" placeholder="Название отдела" required>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="card-footer text-right">
                                        <div class="d-flex">
                                            <a href="{{ url('/depart') }}" class="btn btn-link">Отмена</a>
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