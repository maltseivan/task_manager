@extends('layouts.app')

@section('title-text')Регистрация@endsection

@section('content')
<div class="container pb-5">
    <div class="row">
        <div class="col-12 flex-all-center">
            <div class="register__form">
                <h3 class="mt-5 mb-5">Зарегестрироваться</h3>
                <form action="{{ route('store-user') }}" method="post" novalidate>
                    @csrf
                    <div class="row mb-4">
                        <div class="col">
                            <div class="form-outline">
                                <input type="text" name="name" class="form-control" />
                                <label class="form-label">Имя</label>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-outline">
                                <input type="text" name="surname" class="form-control" />
                                <label class="form-label">Фамилия</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-outline mb-4">
                        <input type="email" name="email" class="form-control" />
                        <label class="form-label">Email</label>
                    </div>
                    <div class="form-outline mb-4">
                        <input type="password" name="pwd" class="form-control" />
                        <label class="form-label">Пароль</label>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block mb-4">Зарегестрироваться</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
