@extends('adminpanel.index')

@section('content')
    <main>
        <div class="admin-content">
            <div class="flexbox-edit-works">
                @foreach($workdata as $work)

                <div class="flex-edit-work">
                    <div class="work-red-on-{{ $work -> id }}" style="display: none">
                        <button type="button" class="btn btn-danger btn-right" onclick="window.location.href='/editworks/delete/{{$work -> id}}'; return false">Удалить</button>
                    </div>
                        <img class="edit-work-img" src="storage/{{ $work -> full_img }}.jpg">
                    <div class="work-red-off-{{ $work -> id }}">
                        <p class="worktitle-{{$work->id}}">{{ $work -> worktitle }}</p>
                        <p class="title-{{$work->id}}">{{ $work -> title }}</p>
                        <p class="description-{{$work->id}}">{{ $work -> description }}</p>
                    <button class="btn btn-primary" onclick="workRed({{ $work -> id }})">Редактировать</button>
                    </div>

                    <div class="work-red-on-{{ $work -> id }}" style="display: none">
                    {!! Form::open(['id' => 'edit-form-'.$work->id]) !!}
                    {!! Form::hidden('id', $work -> id) !!}
                    {!! Form::text('worktitle', $work -> worktitle) !!}
                    {!! Form::select('title', $worktype, $work->title) !!}
                    {!! Form::textarea('description', $work -> description) !!}
                    {!! Form::close() !!}
                    <br>
                    <button class="btn btn-primary btn-edit-form-{{ $work -> id }}" onclick="saveWork({{ $work -> id }})">Сохранить</button>
                    <br><br>
                    <button class="btn btn-primary" onclick="workRedClose({{ $work -> id }})">Отмена</button>
                    </div>
                </div>
                <!-- End Item Project -->

                @endforeach
            </div>
        </div>
    </main>
@stop