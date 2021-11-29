@extends('layouts.admin')
@section('title')
    {{$subheading}}
@endsection
@section('content')
<div class="container my-4">
    <h3 class="text-center">{{$subheading}}</h3>
    <div class="row d-flex justify-content-center">
        <div class="col-md-4">
            <div class="border border-2 rounded border-info p-4">
                @include('utils.alerts.success')
                <form method="post" action="{{$action}}">
                    <div class="mb-3">
                        <label for="name" class="form-label">Название</label>
                        <input type="text" class="form-control" id="name" aria-describedby="nameHelp" name="name">
                        <div id="nameHelp" class="form-text">Введите название задачи</div>
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">Описание</label>
                        <input type="text" class="form-control" id="name" aria-describedby="nameHelp" name="name">
                        <div id="nameHelp" class="form-text">Введите описание задачи</div>
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">Дедлайн</label>
                        <input type="text" class="form-control" id="name" aria-describedby="nameHelp" name="name">
                        <div id="nameHelp" class="form-text">Введите дедлайн задачи</div>
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">Описание</label>
                        <input type="text" class="form-control" id="name" aria-describedby="nameHelp" name="name">
                        <div id="nameHelp" class="form-text">Введите название описание</div>
                    </div>
                    <div class="mb-3">
                        <select name="tags[]" id="tags" class="form-control">
                            <option selected>Укажите метки</option>
                            @foreach($tags as $tag)
                                <option value="{{$tag->id}}">{{$tag->name}}</option>
                            @endforeach
                        </select>

                        <input type="text" class="form-control" id="name" aria-describedby="nameHelp" name="name">
                        <div id="nameHelp" class="form-text">Введите название описание</div>
                    </div>
                    @csrf
                    <button type="submit" class="btn btn-info">Создать</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection