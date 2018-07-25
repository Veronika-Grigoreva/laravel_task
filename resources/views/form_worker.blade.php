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
                                        <label class="form-label">Имя<span class="form-required">*</span></label>
                                        <input type="text" class="form-control" name="example-text-input" placeholder="Имя" required>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-label">Фамилия<span class="form-required">*</span></label>
                                        <input type="text" class="form-control" name="example-text-input" placeholder="Фамилия" required>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-label">Отчество</label>
                                        <input type="text" class="form-control" name="example-text-input" placeholder="Отчество">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-label">Пол</label>
                                        <select class="form-control custom-select">
                                            <option value="">Женский</option>
                                            <option value="">Мужской</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-label">Заработная плата</label>
                                        <input type="text" class="form-control" name="example-text-input" placeholder="Заработная плата">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-label">Отделы<span class="form-required">*</span></label>
                                        <select multiple class="form-control custom-select" required>
                                            <option value="">Женский</option>
                                            <option value="">Мужской</option>
                                            <option value="">Мужской</option>
                                            <option value="">Мужской</option>
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