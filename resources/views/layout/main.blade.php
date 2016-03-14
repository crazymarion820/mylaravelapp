<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>My Laravel App</title>
    <!-- Twitter Bootstrap -->
    <link href="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container">
    @yield('header-nav-bar')
    @yield('content')
    @yield('footer')
</div>
</body>
</html>