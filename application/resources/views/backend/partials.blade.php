<!DOCTYPE html>
<html>
<head>
    <title>Let's Eat in Thai</title>
    <meta property="og:type" content="website"/>
    <meta property="og:author" content="https://www.facebook.com/ACPowerParty"/>
    <meta property="og:image" content="{{ asset('/images/og_image.png') }}"/>
    <meta property="og:url" content="http://letseatinthai.com/"/>
    <meta name="author" content="Let's eat in thai"/>
    <meta name="description" content="Got problem ordering Thai foods? Here's your solution!">
    <meta name="keywords" content="thai food, translate, in english, menu, restaurant, thailand, thai, bangkok, eating, diner, dinner, lunch, food, meals">
    <link rel="stylesheet" href="{{ mix('css/backend.css') }}">
</head>
<body>

@yield('content')

    <script type="text/javascript" src="{{ asset('js/jquery-1.11.2.min.js') }}"></script>
    <script type="text/javascript" src="{{ mix('js/app.js') }}"></script>
</body>
</html>
