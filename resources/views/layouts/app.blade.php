<!DOCTYPE html>
<html>
<head>
    <title>Laravel User Management</title>
    <!-- Include your CSS and JavaScript links here -->
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">User Management</a>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('user.index') }}">User List</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('user.create') }}">Add User</a>
            </li>
        </ul>
    </nav>
    @yield('content')
</body>
</html>
