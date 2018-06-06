@extends('adminpanel.index')

@section('content')
    <main>
        <div class="table-div">
            <table class="table table-hover">
                <tr class="table-head">
                    <th>Имя</th>
                    <th>E-mail</th>
                    <th class="table_overflow">Сообщение</th>
                    <th class="table_overflow">Дата</th>
                    <th class="column-width">Ответ</th>
                    <th class="column-width">Удалить</th>
                </tr>
                @foreach($maildata as $mail)
                    @if($mail -> read)
                    <tr class="tr-href mail_{{$mail -> id}}">
                    @else
                    <tr class="tr-href dontreadmail mail_{{$mail -> id}}">
                    @endif
                        <td onclick="window.location.href='/message/{{$mail -> id}}'; return false">{{ $mail -> name }}</td>
                        <td onclick="window.location.href='/message/{{$mail -> id}}'; return false">{{ $mail -> email }}</td>
                        <td class="table_overflow"  onclick="window.location.href='/message/{{$mail -> id}}'; return false">{{ $mail -> message }}</td>
                        <td onclick="window.location.href='/message/{{$mail -> id}}'; return false">{{ $mail -> created_at }}</td>
                        <td class="column-width"  onclick="window.location.href='/message/{{$mail -> id}}'; return false">
                            @if($mail -> answer)
                                &#10004;
                            @endif
                        </td>
                        <td class="column-width">
                            <p class="href-color btn-delete-message" onClick="adminmessagedelete({{$mail -> id}})">&#10008;</p>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </main>

@stop