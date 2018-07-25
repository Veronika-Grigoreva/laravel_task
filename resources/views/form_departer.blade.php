@extends('app')
@section('content')
    <div class="my-3 my-md-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <form action="#" method="post" class="card">
                        <div class="card-header">
                            <h3 class="card-title">{{ $title }}</h3>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-label">Название отдела<span class="form-required">*</span></label>
                                        <input type="text" class="form-control" name="example-text-input" placeholder="Название отдела" required>
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