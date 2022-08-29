<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>@yield('title')</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/styles.css') }}">

        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        <script src="{{ asset('js/jQuery.js') }}" defer></script>
    
       <link rel="stylesheet" href="//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
    </head>
    <body>

@include('layouts.inc.admin-navbar')
<div id="layoutSidenav">
@include('layouts.inc.admin-sidebar')
<div id="layoutSidenav_content">
<main>
@yield('content')
</main>
@include('layouts.inc.admin-footer')
</div>
</div>



    <script src="{{ asset('js/bootstrap.bundle.min.js') }}" ></script>
    <script src="{{ asset('js/scripts.js') }}" ></script>

    <script src="//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js" ></script>
    <script>
        $(document).ready(function() {
    $('#myDataTable').DataTable();
     });
    </script>
         
    </body>
</html>