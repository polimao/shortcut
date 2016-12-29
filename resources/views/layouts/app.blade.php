<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="/css/app.css" rel="stylesheet">

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body>
    <div id="app">
        <h1>Named Routes</h1>
          <p>Current route name: {{ $route.name }}</p>
          <ul>
            <li><router-link :to="{ name: 'home' }">home</router-link></li>
            <li><router-link :to="{ name: 'foo' }">foo</router-link></li>
            <li><router-link :to="{ name: 'bar', params: { id: 123 }}">bar</router-link></li>
          </ul>
        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="/js/app.js"></script>
</body>
</html>
