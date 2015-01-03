<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="IE=edge,chrome=1">
    <title>Blacknight Web Development Blog</title>

    {{ HTML::style('css/style.css') }}
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>
<body>

<header>
    <div class="container">
        <h1>Blacknight Blog</h1>
        <p>By Bryan Knight</p>
    </div>
</header>

<main class="container">
    @yield('content')
</main>

<footer>
    <div class="container">
        &copy; {{ date('Y') }} Blacknight Web Development |
        {{ link_to_route('admin.posts.index', 'Admin') }}
    </div>
</footer>

</body>
</html>