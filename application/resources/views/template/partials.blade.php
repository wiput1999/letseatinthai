<!DOCTYPE html>
<html>
<head>
    <title>Let's Eat in Thai</title>
    <meta name="description" content="Got problem ordering Thai foods? Here's your solution!">
    <meta name="keywords" content="Thai Food, Translate, In English,">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>
<body>
    {{--Navbar--}}
    @include('template.nav')

    @yield('content')

    <script type="text/javascript" src="{{ mix('js/app.js') }}"></script>

</body>
</html>
