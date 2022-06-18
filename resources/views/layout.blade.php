<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF=8">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="/css/styling.css">
</head>

<body>
    <ul id="navbar">
        <li class="nav"><a href="/" class="{{ Request::path() === '/' ? 'active' : '' }}">Home</a></li>
        <li class="nav"><a href="/profile" class="{{ Request::path() === 'profile' ? 'active' : '' }}">My profile</a></li>
        <li class="nav"><a href="/motivation" class="{{ Request::path() === 'motivation' ? 'active' : '' }}">My motivation</a></li>
        <li class="nav"><a href="/profession" class="{{ Request::path() === 'profession' ? 'active' : '' }}">Profession</a></li>
        <li class="nav"><a href="/grades" class="{{ Request::path() === 'grades' ? 'active' : '' }}">Grades</a></li>
        <li class="nav"><a href="/faq" class="{{ Request::path() === 'faq' ? 'active' : '' }}">FAQ</a></li>
        <li class="nav"><a href="/article" class="{{ Request::path() ==='article' ? 'active' : '' }}">Articles</a></li>
    </ul>
    @yield ('content')
    <footer>
        @yield ('resources')
    </footer>
</body>

</html>
