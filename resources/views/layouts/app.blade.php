<!DOCTYPE html>
<html lang="it">
    @include ('partials.head')
    <body>
        @include('partials.header')

        <main class="">
            @yield('main-content')
        </main>

        @include('partials.footer')

        @yield('footer-script')
    </body>
    <script src="{{ asset("js/app.js") }}"></script>
</html>
