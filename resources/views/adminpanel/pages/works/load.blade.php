@extends('adminpanel.index')

@section('content')
    <main>
        <div class="admin-content">
            <form action="/load"
                  class="dropzone"
                  id="my-awesome-dropzone">
                {{ csrf_field() }}
            </form>
        </div>
    </main>
@stop