@extends('dashboard.layouts.app_dashboard')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <div class="jumbotron">
                    <p><span class="label label-primary">Категорий 0</span></p>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="jumbotron">
                    <p><span class="label label-primary">Материалов 0</span></p>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="jumbotron">
                    <p><span class="label label-primary">Посетителей 0</span></p>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="jumbotron">
                    <p><span class="label label-primary">Сегодня 0</span></p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-6">
                <a class="btn btn-block btn-default" href="{{route('dashboard.category.create')}}">Создать категорию</a>
                <a href="#" class="list-group-item">
                    <h4 class="list-group-item-heading">Категория первая</h4>
                    <p class="list-group-text">
                        Кол-во материалов
                    </p>
                </a>
            </div>
            <div class="col-sm-6">
                <a class="btn btn-block btn-default" href="#">Создать материал</a>
                <a href="#" class="list-group-item">
                    <h4 class="list-group-item-heading">Материал первый</h4>
                    <p class="list-group-text">
                        Категория
                    </p>
                </a>
        </div>
    </div>
@endsection