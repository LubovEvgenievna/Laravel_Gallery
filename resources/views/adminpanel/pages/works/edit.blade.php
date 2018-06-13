@extends('adminpanel.index')

@section('content')
    <main>
        <div class="admin-content">
            <div class="flexbox-edit-works">
                @foreach($workdata as $work)

                <div class="flex-edit-work">
                    <img class="edit-work-img" src="img/work/full/{{ $work -> full_img }}.jpg">
                    <div class="work-red-off-{{ $work -> id }}">
                        <p>{{ $work -> title }}</p>
                        <p>{{ $work -> title }}</p>
                        <p>{{ $work -> description }}</p>
                    <button class="btn btn-primary" onclick="workRed({{ $work -> id }})">Редактировать</button>
                    </div>

                    <div class="work-red-on-{{ $work -> id }}" style="display: none">
                    {!! Form::open(['id' => 'edit-form-'.$work->id]) !!}
                    {!! Form::hidden('id', $work -> id) !!}
                    {!! Form::text('title', $work -> title) !!}
                    {!! Form::text('title', $work -> title) !!}
                    {!! Form::textarea('description', $work -> description) !!}
                    {!! Form::close() !!}
                    <button class="btn btn-primary" onclick="workRedClose({{ $work -> id }})">Отмена</button>
                    </div>
                </div>
                <!-- End Item Project -->

                @endforeach
            </div>
        </div>
    </main>
@stop