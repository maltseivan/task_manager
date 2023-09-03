@extends('layouts.app')

@section('title-text')Авторизовация@endsection

@section('content')
    <div class="container pb-5">
        <div class="row">
            <div class="col-12 flex-all-center">
                <div class="register__form">
                    <h3 class="mt-5 mb-5">Авторизоваться</h3>

                    <div class="row">
                        <div class="col-12">
                            @error('еmail')
                                <div class="alert alert-danger" role="alert">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <form action="{{ route('login-submit') }}" method="post" novalidate>
                        @csrf
                        <div class="form-outline mb-4">
                            <input type="email" name="email" class="form-control" value="{{ old('email') }}" />
                            <label class="form-label">Email</label>
                        </div>
                        <div class="form-outline mb-4">
                            <input type="password" name="password" class="form-control" />
                            <label class="form-label">Пароль</label>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block mb-4">Войти</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
