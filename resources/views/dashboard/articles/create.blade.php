@extends('dashboard.layouts.app_dashboard')

@section('content')
    <div class="container">
        @component('dashboard.components.breadcrumb')
        @slot('title') Список новостей @endslot
        @slot('parent') Главная @endslot
        @slot('active') Новости @endslot
        @endcomponent

        <hr>

        <form class="" action="{{route('dashboard.article.store')}}" method="post">
            {{csrf_field()}}
            @include ('dashboard.articles.partials.form')
            <input type="hidden" value="{{Auth::id()}}" name="created_by">
        </form>
    </div>
@endsection