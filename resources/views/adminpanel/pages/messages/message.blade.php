@extends('adminpanel.index')

@section('content')
    <main>
        <div class="admin-content">
            <button type="button" class="btn btn-danger btn-right" onclick="window.location.href='/openmessagedelete/delete/{{$maildata -> id}}'; return false">Удалить</button>
            <div class="clearfix"></div>

            <div class="panel panel-default">
                <div class="panel-heading">От кого</div>
                <div class="panel-body">
                    {{ $maildata -> name }}
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">E-mail</div>
                <div class="panel-body">
                    {{ $maildata -> email }}
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">Сообщение</div>
                <div class="panel-body">
                    {{ $maildata -> message }}
                </div>
            </div>

            <a href="/answer/{{$maildata -> id}}"><button type="button" class="btn btn-primary">Ответить</button></a>
        </div>
    </main>
@stop