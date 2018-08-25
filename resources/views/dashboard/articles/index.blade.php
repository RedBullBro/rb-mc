@extends('dashboard.layouts.app_dashboard')

@section('content')
    <div class="container">
        @component('dashboard.components.breadcrumb')
        @slot('title') Список новостей @endslot
        @slot('parent') Главная @endslot
        @slot('active') Новости @endslot
        @endcomponent
        <hr>

        <a class="btn btn-primary btn-lg btn-block mb-2" href="{{route('dashboard.article.create')}}">
            <i class="far fa-plus-square"> Создать новость </i>
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
            @forelse($articles as $article)
                <tr>
                    <td>{{$article->id}}</td>git
                    <td>{{$article->title}}</td>
                    <td>{{$article->published}}</td>
                    <td>
                        <form class="text-right" action="{{route('dashboard.article.destroy', $article)}}" method="post">
                            {{csrf_field()}}
                            <input type="hidden" name="_method" value="DELETE">
                            <a class="btn btn-default" href="{{route('dashboard.article.edit', $article)}}">
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
                        {{$articles->links()}}
                    </ul>
                </td>
            </tr>
            </tfoot>
        </table>
    </div>
@endsection