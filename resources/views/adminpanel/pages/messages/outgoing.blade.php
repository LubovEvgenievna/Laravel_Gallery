@extends('adminpanel.index')

@section('content')
    <main>
        <div class="table-div">
                @if (session('message'))
                    <div class="send-messages-div">
                        {{ session('message') }}
                    </div>
                @endif
            <table class="table table-hover">
                <tr  class="table-head">
                    <th>Имя</th>
                    <th>E-mail</th>
                    <th class="table_overflow">Сообщение</th>
                    <th class="table_overflow">Дата</th>
                    <th class="column-width">Удалить</th>
                </tr>
                @foreach($mymaildata as $mymail)
                    <tr class="tr-href mymail_{{$mymail -> id}}">
                        <td onclick="window.location.href='/mymessage/{{$mymail -> id}}'; return false">{{ $mymail -> name }}</td>
                        <td onclick="window.location.href='/mymessage/{{$mymail -> id}}'; return false">{{ $mymail -> email }}</td>
                        <td class="table_overflow" onclick="window.location.href='/mymessage/{{$mymail -> id}}'; return false">{{ $mymail -> message }}</td>
                        <td onclick="window.location.href='/mymessage/{{$mymail -> id}}'; return false">{{ $mymail -> created_at }}</td>
                        <td class="column-width">
                            <p class="href-color btn-delete-message" onClick="adminmymessagedelete({{$mymail -> id}})">&#10008;</p>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </main>
@stop