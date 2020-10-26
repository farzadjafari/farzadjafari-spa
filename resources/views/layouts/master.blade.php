<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('layouts.partials.google-analytics')
    @include('layouts.partials.meta')
    <title>Farzad Jafari</title>
    @include('layouts.partials.style')
    <script src="https://unpkg.com/feather-icons"></script>
</head>
<body>
<div id="app">
    <header>
        @include('layouts.partials.header')
    </header>

    <main class="@yield('main-class')">
        <router-view></router-view>

        @yield('main')
    </main>

    <footer>
        @include('layouts.partials.footer')
    </footer>
</div>
@include('layouts.partials.script')
</body>
</html>
