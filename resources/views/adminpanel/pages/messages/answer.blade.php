@extends('adminpanel.index')

@section('content')
    <main>
        <div class="admin-content">

            {!! Form::open() !!}

            {!! Form::hidden('id', $maildata -> id) !!}
            <div class="panel panel-default">
                <div class="panel-heading">Кому</div>
                <div class="panel-body">
                    {{ $maildata -> name }}
                    {!! Form::hidden('name', $maildata -> name) !!}
                </div>
            </div>

            <div class="panel panel-default">
                <div class="panel-heading">E-mail</div>
                <div class="panel-body">
                    {{ $maildata -> email }}
                    {!! Form::hidden('email', $maildata -> email) !!}
                </div>
            </div>

            <div class="panel panel-default">
                <div class="panel-heading">Сообщение</div>
                <div class="panel-body">
                    {!! Form::textarea('message', null, ['placeholder' => 'Введите текст..']) !!}
                </div>
            </div>

            {!! Form::submit('Отправить', ['class' => 'btn btn-primary']) !!}
            {!! Form::close() !!}

        </div>
    </main>
@stop