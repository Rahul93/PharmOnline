<html>
<head>
    <title>App Name - @yield('title')</title>
</head>
<body>
<div class="container">
    @yield('content')
</div>
</body>
<link defer href="{{ asset('css/app.css') }}" media="all" rel="stylesheet" type="text/css" />
<script defer type="text/javascript" src="{{ asset('js/app.js') }}"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</html>
