@extends('layouts.app')

@section('title-text'){{ $data->name }}@endsection

@section('content')
<div class="container mb-5">
    <div class="row">
        <div class="col-12">
            <h1 class="mt-5 mb-5">{{ $data->name }}</h1><hr>
        </div>
        <div class="col-12">
            <p class="mb-5 mt-5">{{ $data->description }}</p>
        </div>
    </div>
    <a href="{{ route('task-delete',$data->id ) }}" type="button" class="btn btn-danger">Удалить</a>
    <a href="{{ route('update-task', $data->id ) }}" type="button" class="btn btn-primary">Редактировать</a>
    <a href="{{ route('home') }}" class="btn btn-secondary">Назад</a>
</div>
@endsection
