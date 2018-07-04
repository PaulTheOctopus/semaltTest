@extends('layout')


@section('sidebar')
    @foreach($tasks as $task)
    <a href="tasks/{{$task->id}}"><button type="button" class="button btn btn-light m-2">{{ $task->id}}</button></a>
    @endforeach
@endsection

@section('content')
    <h3>Для просмотра выполненного задания выберете пункт в меню слева</h3>            
@endsection