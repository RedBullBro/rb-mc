<div class="form-group">
    <label for="published">Статус</label>
    <select class="form-control" name="published">
        @if(isset($article->id))
            <option value="0" @if($article->id == 0) selected @endif>Не опубликовано</option>
            <option value="1" @if($article->id == 1) selected @endif>На проверке</option>
            <option value="2" @if($article->id == 2) selected @endif>Опубликовано</option>
        @else
            <option value="1">Не опубликовано</option>
            <option value="2">На проверке</option>
            <option value="3">Опубликовано</option>
        @endif
    </select>
</div>

<div class="form-group">
    <label for="">Заголовок</label>
    <input type="text" name="title" class="form-control" placeholder="Заголовок новости" value="{{$article->title or ''}}" required>
</div>

<div class="form-group">
    <label for="">Сылка (уникальное значение)</label>
    <input type="text" name="slug" class="form-control" placeholder="Автоматическая генерация" value="{{$article->slug or ''}}" readonly="">
</div>

<div class="form-group">
    <label for="published">Категории</label>
    <select class="form-control" name="parent_id">
        @include('dashboard.articles.partials.categories', ['categories' => $categories])
    </select>
</div>

<div class="form-group">
    <label for="published">Краткое описание</label>
    <textarea class="form-control" name="description_short" id="description_short">{{$article->description_short or ''}}</textarea>
</div>

<div class="form-group">
    <label for="published">Полное описание</label>
    <textarea class="form-control" name="description" id="description">{{$article->description or ''}}</textarea>
</div>

<hr/>

<div class="form-group">
    <label for="">Мета заголовок</label>
    <input type="text" name="meta_title" class="form-control" placeholder="Около 40-60 символов" value="{{$article->meta_title or ''}}" required>
</div>

<div class="form-group">
    <label for="">Мета описание</label>
    <input type="text" name="meta_description" class="form-control" placeholder="Не больше 180 символов" value="{{$article->meta_description or ''}}" required>
</div>

<div class="form-group">
    <label for="">Ключевые слова</label>
    <input type="text" name="meta_keyword" class="form-control" placeholder="Ключевые слова, через запятую" value="{{$article->meta_keyword or ''}}" required>
</div>

<hr/>

<input type="submit" class="btn btn-primary" value="Сохранить">

