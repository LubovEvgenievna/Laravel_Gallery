<!DOCTYPE html>
<html>
<head>
  <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="{{ asset('css/adminpanel/main.css') }}">


  <link href="{{ asset('css/adminpanel/admin.css') }}" rel="stylesheet">

  <meta name="csrf-token" content="{{ csrf_token() }}">

</head>

<body>

  @include('adminpanel._parts.header')

  @yield('content')

  @include('adminpanel._parts.footer')

</body>
</html>
