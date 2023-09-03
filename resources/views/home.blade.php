@extends('layouts.app')

@section('title-text')Главная@endsection

@section('content')
    <div class="container mb-5 pt-5">
        <div class="row">
            <div class="col-12">
                <h1 class="flex-all-center mb-5">Task manager</h1>
            </div>
            <div class="col-6 mb-4">
                <h5 class="">ДОБАВИТЬ ЗАДАЧУ</h5>
            </div>
            <div class="col-6 mb-4">
                <h5 class="">МОИ ЗАДАЧИ</h5>
            </div>
            <div class="col-5">
                <form method="post" name="task" action="{{ route('task-form') }}">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Наименование:</label>
                        <input type="text" class="form-control" id="name-task" name="name-task" placeholder="Введите наименование задачи" value="">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Описание:</label>
                        <textarea class="form-control text__area" id="desk-task" name="desk-task" placeholder="Введите описание задачи"></textarea>
                    </div>
                    <button class="btn btn-primary" type="submit">Добавить</button>
                </form>
            </div>
            <div class="col-1"></div>
            <div class="col-6">
                <ol class="list-group list-group-numbered">
                    @foreach($data as $elem)
                        <li class="list-group-item d-flex justify-content-between align-items-start">
                            <div class="ms-2 me-auto">
                                <div class="fw-bold">{{ $elem->name }}</div>
                                {{ $elem->description }}
                            </div>
                            <a href="{{ route('one-task', $elem->id) }}"><i class="fa fa-pencil fa-lg edit__task" aria-hidden="true"></i></a>
                        </li>
                    @endforeach
                </ol>
            </div>
        </div>
    </div>
@endsection
