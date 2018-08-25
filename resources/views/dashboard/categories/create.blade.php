@extends('dashboard.layouts.app_dashboard')

@section('content')
    <div class="container">
        @component('dashboard.components.breadcrumb')
            @slot('title') Список категорий @endslot
            @slot('parent') Главная @endslot
            @slot('active') Категории @endslot
        @endcomponent

        <hr>

        <form class="" action="{{route('dashboard.category.store')}}" method="post">
            {{csrf_field()}}
            @include ('dashboard.categories.partials.form')
        </form>
    </div>
@endsection