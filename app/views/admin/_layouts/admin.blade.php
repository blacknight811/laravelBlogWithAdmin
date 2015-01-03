<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="IE=edge,chrome=1">
    <title>Post Admin Panel</title>

    {{ HTML::style('css/admin.css') }}
    <!--[if lt IE 9]>
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>
<body>

<header>
    <div class="container">
        <h1>Post Admin Panel</h1>
    </div>
</header>

<main class="container">
    @yield('content')
</main>

<footer>
    <div class="container">
        &copy; {{ date('Y') }} Blacknight Web Development
    </div>
</footer>

</body>
</html>