@extends('layout')

@section('sidebar')
    <a href="/"><button type="button" class="button btn btn-light m-2">Домой</button></a>
    @foreach($tasks as $tsk)
    <a href="{{$tsk->id}}"><button type="button" class="button btn btn-light m-2">{{ $tsk->id}}</button></a>
    @endforeach
@endsection

@section('content')
    @foreach($task as $el)
        
        <h5>Задание:</h5>
        <p>{{ $el->task }}</p>
        @if ($el->id != 10)
        <h5>Пример кода/ответ:</h5>
        <p>{{ $el->code_example }}</p>
        <h5>Результат:</h5>
        <p>{{ $el->result }}</p>
        @else
        
        <h6>2) Запрос выберет имя пользователя с самой высокой ценой заявки</h6>
        @foreach ($bids as $bid)
        <p>{{ $bid->name }}</p>
        @endforeach
        <h6>3) Запрос, который выберет название мероприятия, по которому нет заявок</h6>
        @if($no_events->count() > 0)
        @foreach ($no_events as $no_event)
            <p>{{ $no_event->caption }}</p>
        @endforeach
        @else
            <p>По всем мероприятиям есть заявки</p>
        @endif
    
        <h6>4) Запрос, который выберет название мероприятния, по которому больше трех заявок</h6>   
        @foreach ($tcap as $caps)
        <p>{{ $caps->caption }}</p>
        @endforeach

        <h6>5) Напишите запрос, который выберет название мероприятния, по которому больше всего заявок</h6>
        @foreach ($maxcap as $mcaps)
        <p>{{ $mcaps->caption }}</p>
        @endforeach

        @endif
    @endforeach
@endsection