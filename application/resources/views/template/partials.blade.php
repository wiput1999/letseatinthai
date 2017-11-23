<!DOCTYPE html>
<html>
<head>
    <title>Let's Eat in Thai</title>
    <meta name="description" content="Got problem ordering Thai foods? Here's your solution!">
    <meta name="keywords" content="thai food, translate, in english, menu, restaurant, thailand, thai, bangkok, eating, diner, dinner, lunch, food, meals">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>
<body>

    @yield('content')
    <footer class="page-section bg-gray-lighter footer">
    <!-- Footer -->
        <div class="container">
            <!-- Social Links -->
            <div class="footer-social-links mb-30">
                <a href="#" title="Facebook" target="_blank"><i class="fa fa-facebook"></i></a>
                <a href="#" title="Twitter" target="_blank"><i class="fa fa-twitter"></i></a>
            </div>
            <!-- End Social Links -->

            <!-- Footer Text -->
            <div class="footer-text">
                <div class="footer-copy font-alt">
                    <a href="" target="_blank">&copy; LetsEatinThai 2017</a>.
                </div>
                <div class="footer-made">
                    Made with love.
                </div>

            </div>
            <!-- End Footer Text -->
        </div>
        <!-- Top Link -->
        <div class="local-scroll">
            <a href="#top" class="link-to-top"><i class="fa fa-caret-up"></i></a>
        </div>
        <!-- End Top Link -->
    </footer>
    <!-- End Footer -->

    <script type="text/javascript" src="{{ mix('js/app.js') }}"></script>

</body>
</html>
