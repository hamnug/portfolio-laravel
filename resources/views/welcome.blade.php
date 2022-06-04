<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ secure_asset('css/app.css') }}" rel="stylesheet">
    <title>Portfolio || Ilham Nugraha</title>
    <script>
        if (localStorage.theme === 'dark' || (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
        document.documentElement.classList.add('dark')
        } else {
        document.documentElement.classList.remove('dark')
        }
    </script>
</head>
<body>
    @include('partials.navbar')

    @include('layout.hero')

    @include('layout.about')

    @include('layout.portfolio')

    @include('layout.blog')

    @include('email')

    @include('partials.footer')


<script src="{{ secure_asset('js/app.js') }}"></script>
</body>
</html>
