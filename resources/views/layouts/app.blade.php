<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title> {{ trans('message.title') }} </title>

    <!-- Fonts -->
    <link href="{{ asset('bower_components/font-awesome/css/fontawesome.min.css') }}" rel='stylesheet' type='text/css'>

    <!-- Styles -->
    <link href="{{ asset('bower_components/boostrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    
    <link rel="stylesheet" type="text/css" href="{{ asset('css/all.css') }}">
</head>
<body id="app-layout">
    <nav class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header">

                <!-- Branding Image -->
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ trans('message.task_list') }}
                </a>
            </div>

        </div>
    </nav>

    @yield('content')

    <!-- JavaScripts -->
    <script type="text/javascript" src="{{ asset('bower_components/jquery/dist/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('bower_components/bootstrap/dist/bootstrap.min.js') }}"></script>
</body>
</html>

