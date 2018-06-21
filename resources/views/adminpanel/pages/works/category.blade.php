@extends('adminpanel.index')

@section('content')
    <main>
        <div class="admin-content">
            <ul>
                @foreach($categorydata as $category)
                    <li><a href="/loadworks/{{$category -> id}}">{{ $category -> title }}</a></li>
                @endforeach
            </ul>
        </div>
    </main>
@stop