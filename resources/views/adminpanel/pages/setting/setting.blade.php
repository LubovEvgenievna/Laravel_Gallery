@extends('adminpanel.index')

@section('content')
    <main>
        <div class="admin-content">
            @foreach($bodydata as $body)
            {!! Form::open() !!}
            {!! Form::hidden('id', $body -> id) !!}
            {!! Form::textarea('description', $body -> description) !!}
            {!! Form::text('email', $body -> email) !!}
            {!! Form::text('phone', $body -> phone) !!}
            {!! Form::text('address', $body -> address) !!}
            {!! Form::text('worktime', $body -> worktime) !!}
            {!! Form::text('instagram', $body -> instagram) !!}
            {!! Form::text('vk', $body -> vk) !!}
            {!! Form::submit('Сохранить', ['class' => 'btn btn-primary']) !!}
            {!! Form::close() !!}
            @endforeach
        </div>
    </main>
@stop