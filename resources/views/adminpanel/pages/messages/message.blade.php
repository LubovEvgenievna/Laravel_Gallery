@extends('adminpanel.index')

@section('content')
    <main>
        @foreach($maildata as $mail)
        <div class="admin-content">
            <button type="button" class="btn btn-danger btn-right" onclick="window.location.href='/openmessagedelete/delete/{{$mail -> id}}'; return false">Удалить</button>
            <div class="clearfix"></div>

            <div class="panel panel-default">
                <div class="panel-heading">От кого</div>
                <div class="panel-body">
                    {{ $mail -> name }}
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">E-mail</div>
                <div class="panel-body">
                    {{ $mail -> email }}
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">Сообщение</div>
                <div class="panel-body">
                    {{ $mail -> message }}
                </div>
            </div>

            <a href="/answer/{{$mail -> id}}"><button type="button" class="btn btn-primary">Ответить</button></a>
        </div>
            @endforeach
    </main>
@stop