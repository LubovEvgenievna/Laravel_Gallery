@extends('adminpanel.index')

@section('content')
    <main>
        <div class="table-div">
            <div id="response" class="send-messages-div print-error-msg" style="display:none">
                <ul></ul>
            </div>
            <table class="table table-hover">
                <tr class="table-head">
                    <th>Название</th>
                    <th>Порядковый номер</th>
                    <th>Редактировать</th>
                    <th class="column-width">Удалить</th>
                </tr>
                @foreach($worktypedata as $worktype)
                <tr class="cat-red-off-{{ $worktype -> id }}">
                    <td class="title-{{ $worktype -> id }}">{{ $worktype -> title }}</td>
                    <td class="sort_id-{{ $worktype -> id }}">{{ $worktype -> sort_id }}</td>
                    <td>
                        <p class="href-color btn-delete-message" onclick="showCategoryRed({{ $worktype -> id }})">&#9998;</p>
                    </td>
                    <td class="column-width">
                        <p class="href-color btn-delete-message" onclick="deleteCategory({{ $worktype -> id }})">&#10008;</p>
                    </td>
                </tr>
                <tr class="cat-red-on-{{ $worktype -> id }}" style="display: none">
                    {!! Form::open(['id' => 'category-form-'.$worktype -> id]) !!}
                    {!! Form::hidden('id', $worktype -> id) !!}
                    <td>{!! Form::text('title', $worktype -> title, ['placeholder' => $worktype -> title]) !!}</td>
                    <td>{!! Form::text('sort_id', $worktype -> sort_id, ['placeholder' => $worktype -> sort_id]) !!}</td>
                    {!! Form::close() !!}
                    <td class="column-width">
                        <button class="saveCatRed-{{$worktype -> id}} btn btn-primary" onclick="saveCategory({{ $worktype -> id }})">Сохранить</button>
                    </td>
                    <td class="column-width">
                        <button class="btn btn-primary" onclick="showCategoryRedClose({{ $worktype -> id }})">Отмена</button>
                    </td>
                </tr>
                @endforeach
            </table>

            <td class="column-width">
                <button class="btn btn-primary" onclick="newCat()">Добавить категорию</button>
            </td>

            <div class="newCat" style="display: none">
                <div class="print-error-msg-newcat send-messages-div" style="display:none">
                    <ul></ul>
                </div>
                {!! Form::open(['id' => 'newCategory-form'], ['class' => 'newCategory-form']) !!}
                {!! Form::text('title', null, ['placeholder' => 'Введите Название..'], ['id' => 'title']) !!}
                {!! Form::text('sort_id', null, ['placeholder' => 'Введите Порядковый номер..'], ['id' => 'sort_id']) !!}
                {!! Form::submit('Сохранить', ['class' => 'btn_newCategory btn']) !!}
                {!! Form::close() !!}
            </div>
        </div>
    </main>
@stop