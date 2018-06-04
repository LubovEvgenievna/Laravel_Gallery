@extends('adminpanel.index')

@section('content')
    <main>
            <div class="admin-content">
                <button type="button" class="btn btn-danger btn-right" onclick="window.location.href='/openmymessagedelete/delete/{{$mymaildata -> id}}'; return false">Удалить</button>
                <div class="clearfix"></div>

                <div class="panel panel-default">
                    <div class="panel-heading">Кому</div>
                    <div class="panel-body">
                        {{ $mymaildata -> name }}
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">E-mail</div>
                    <div class="panel-body">
                        {{ $mymaildata -> email }}
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">Сообщение</div>
                    <div class="panel-body">
                        {{ $mymaildata -> message }}
                    </div>
                </div>
            </div>
    </main>
@stop