
@extends('layouts.app')

@section('title-text')Обновить@endsection

@section('content')
    <div class="container mb-5">
        <div class="row">
            <div class="col-12 mb-4 mt-5">
                <h5 class="">Обновить задачу: <span style="color: red">{{ $data->name }}</span></h5>
            </div>
            <div class="col-5">
                <form method="post" name="task" action="{{ route('update-task-submit', $data->id) }}">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Наименование:</label>
                        <input type="text" class="form-control" id="name-task" name="name-task" placeholder="Введите наименование задачи" value="{{ $data->name }}">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Описание:</label>
                        <textarea class="form-control text__area" id="desk-task" name="desk-task" placeholder="Введите описание задачи">{{ $data->description }}</textarea>
                    </div>
                    <button class="btn btn-success" type="submit">Обновить</button>
                    <a href="{{ route('one-task', $data->id) }}" class="btn btn-secondary">Назад</a>
                </form>
            </div>
        </div>
    </div>
@endsection
