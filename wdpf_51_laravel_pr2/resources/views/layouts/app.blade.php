<html>
<head>
    @stack('styles')
    <title>App Template</title>
</head>
<body>

    @yield('content')


 <!-- the rest of the page -->
 <script src="/css/global.css"></script>
 <!-- the placeholder where stack content will be placed -->
    @stack('scripts')
</body>
</html>
