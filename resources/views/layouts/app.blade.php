<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title')</title>

</head>
<body>
    <header class="content">
        <h1>@yield('title')</h1>
        <nav>
            <a href="{{route('book.index')}}"<i class="fa-solid fa-cat"></i>>List</a>
            <a href="{{route('book.create')}}"<i class="fa-solid fa-cat"></i>>New fucking book</a>
        </nav>
        <br>
    </header>
    <main class="content">
        @yield('content')
    </main>
    <footer class="content">
        &copy; Le Fucking Bocal Academy 2085
    </footer>
</body>
</html>