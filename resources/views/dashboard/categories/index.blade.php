@extends('dashboard.layouts.app_dashboard')

@section('content')
<div class="container">
    @component('dashboard.components.breadcrumb')
        @slot('title') Список категорий @endslot
        @slot('parent') Главная @endslot
        @slot('active') Категории @endslot
    @endcomponent
    <hr>

    {{--<a href="{{route('dashboard.category.create')}}" class="btn btn-primary pull-right">--}}
        {{--<i class="far fa-plus-square"> Создать категорию </i>--}}
    {{--</a>--}}


    <a class="btn btn-primary btn-lg btn-block mb-2" href="{{route('dashboard.category.create')}}">
        <i class="far fa-plus-square"> Создать категорию </i>
    </a>

    <table class="table table-striped">
        <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Наименование</th>
                <th scope="col">Публикация</th>
                <th scope="col" class="text-right">Действие</th>
            </tr>
        </thead>
        <tbody>
            @forelse($categories as $category)
                <tr>
                    <td>{{$category->id}}</td>
                    <td>{{$category->title}}</td>
                    <td>{{$category->published}}</td>
                    <td>
                        <form class="text-right" action="{{route('dashboard.category.destroy', $category)}}" method="post">
                            {{csrf_field()}}
                            <input type="hidden" name="_method" value="DELETE">
                            <a class="btn btn-default" href="{{route('dashboard.category.edit', $category)}}">
                                <i class="fas fa-edit">Редактировать</i>
                            </a>
                            <button type="submit" class="btn btn-danger">
                                <i class="far fa-trash-alt">Удалить</i>
                            </button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="4" class="text-center"><h3>Данные отсутствуют</h3></td>
                </tr>
            @endforelse
        </tbody>
        <tfoot>
            <tr>
                <td colspan="4">
                    <ul class="pagination pull-right">
                        {{$categories->links()}}
                    </ul>
                </td>
            </tr>
        </tfoot>
    </table>
</div>
@endsection