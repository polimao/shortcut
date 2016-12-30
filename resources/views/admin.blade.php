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
{{--     <link href="https://unpkg.com/animate.css@3.5.1/animate.min.css" rel="stylesheet" type="text/css">
 --}}
    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body>
<div id="app">
    {{-- <transition name="custom-classes-transition" mode="out-in" enter-active-class="animated tada" --}}
    {{-- leave-active-class="animated bounceOutRight"> --}}
        <router-view class="view"></router-view>
    {{-- </transition> --}}
</div>

    <!-- Scripts -->
    <script src="/js/app.js"></script>
</body>
</html>
