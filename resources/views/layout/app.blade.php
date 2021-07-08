<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
</head>
<body>
    
    {{-- site header --}}
    <header id="site_header">
        header content
        <div class="top_header">

        </div>
        <nav>

        </nav>
    </header>

    {{-- Site main --}}
    <main id="site_main">
        @yield('content')
    </main>

    {{-- Site footer --}}
    <footer id="site_footer">

        Footer content

    </footer>

</body>
</html>