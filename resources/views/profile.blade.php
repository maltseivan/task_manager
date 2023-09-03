@extends('layouts.app')

@section('title-text')Личный кабинет@endsection

@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-12">
                <h1 class="flex-all-center mb-5">Личный кабинет</h1>
            </div>
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="single_advisor_profile wow fadeInUp" data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
                    <div class="advisor_thumb"><img src="https://bootdey.com/img/Content/avatar/avatar2.png" alt="">
                        <div class="social-info"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-linkedin"></i></a></div>
                    </div>
                    <div class="single_advisor_details_info">
                        <h6>{{ $data->name }} {{ $data->surname }}</h6>
                        <p class="designation">{{ $data->email }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

{{--Привет мир!--}}
