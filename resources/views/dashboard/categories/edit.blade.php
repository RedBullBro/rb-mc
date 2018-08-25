@extends('dashboard.layouts.app_dashboard')

@section('content')
    <div class="container">
        @component('dashboard.components.breadcrumb')
        @slot('title') Редактирование категории @endslot
        @slot('parent') Главная @endslot
        @slot('active') Категории @endslot
        @endcomponent

        <hr>

        <form class="" action="{{route('dashboard.category.update', $category)}}" method="post">
            {{csrf_field()}}
            <input type="hidden" name="_method" value="put">
            @include ('dashboard.categories.partials.form')
        </form>
    </div>
@endsection