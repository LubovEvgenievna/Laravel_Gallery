<!DOCTYPE html>
<html>
<head>
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/adminpanel/main.css') }}">


    <link href="{{ asset('css/adminpanel/admin.css') }}" rel="stylesheet">
    <link href="{{ asset('css/adminpanel/dropzone.css') }}" rel="stylesheet">

    <meta name="csrf-token" content="{{ csrf_token() }}">

</head>

<body>
<div class="wrapper">
    <div class="login-content">
        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        {!! Form::open() !!}

        <div class="panel panel-default">
            <div class="login-panel-heading">Логин:</div>
            <div class="panel-body">
                {!! Form::text('login') !!}
            </div>
        </div>

        <div class="panel panel-default">
            <div class="login-panel-heading">Пароль:</div>
            <div class="panel-body">
                {!! Form::text('password') !!}
            </div>
        </div>

            {!! Form::submit('Войти', ['class' => 'btn btn-primary']) !!}
            {!! Form::close() !!}

    </div>
</div>

</body>
</html>