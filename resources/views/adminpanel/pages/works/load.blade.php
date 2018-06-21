@extends('adminpanel.index')

@section('content')
    <main>
        <div class="admin-content">
            <form action="/load/{{ $categoryid }}"
                  class="dropzone"
                  id="my-awesome-dropzone">
                {{ csrf_field() }}
            </form>
        </div>
    </main>
@stop