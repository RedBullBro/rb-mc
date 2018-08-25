<div class="form-group">
    <label for="published">Статус</label>
    <select class="form-control" name="published">
        @if(isset($category->id))
            <option value="0" @if($category->id == 0) selected @endif>Не опубликовано</option>
            <option value="1" @if($category->id == 1) selected @endif>На проверке</option>
            <option value="2" @if($category->id == 2) selected @endif>Опубликовано</option>
        @else
            <option value="1">Не опубликовано</option>
            <option value="2">На проверке</option>
            <option value="3">Опубликовано</option>
        @endif
    </select>
</div>

<div class="form-group">
    <label for="">Наименование</label>
    <input type="text" name="title" class="form-control" placeholder="Заголовок" value="{{$category->title or ''}}" required>
</div>

<div class="form-group">
    <label for="">Сылка</label>
    <input type="text" name="url" class="form-control" placeholder="Автоматическая генерация" value="{{$category->url or ''}}" readonly="">
</div>

<div class="form-group">
    <label for="">Описание</label>
    <input type="text" name="description" class="form-control" placeholder="Короткое описание" value="{{$category->description or ''}}" required>
</div>

<div class="form-group">
    <label for="published">Родительская категория</label>
    <select class="form-control" name="parent_id">
        <option value="0">-- Без родительской категории --</option>
        @include('dashboard.categories.partials.categories', ['categories' => $categories])
    </select>
</div>

<input type="submit" class="btn btn-primary" value="Сохранить">

