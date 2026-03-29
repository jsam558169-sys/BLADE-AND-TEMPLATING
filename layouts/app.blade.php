<!DOCTYPE html>
<html>

<head>
    <title>My App</title>
</head>

<body>

    @include('partials.navbar')

    <h1>Student Portal</h1>

    <p>School: {{ $school }}</p>

    @yield('content')

</body>

</html>