@extends('layouts.admin')
@section('title')
    {{$subheading}}
@endsection
@section('content')
<div class="container my-4">
    <h3 class="text-center">{{$subheading}}</h3>
    @foreach($tasks as $chunk)
    <div class="row">
        @foreach($chunk as $task)
        <div class="col-md-2 bg-secondary m-2 border-info p-4 border-2 border">{{$task->title}} : {{$task->description}}
        <form method="post" action="{{$task->getActionDelete()}}">
            @method('DELETE')
            @csrf
            <button type="submit" class="btn"><i class="fas fa-trash"></i> </button>
        </form>
            <a class="btn" href="{{$task->getActionEdit()}}"><i class="fas fa-pen-square"></i></a>
        </div>
        @endforeach
    </div>
    @endforeach
</div>
@endsection
