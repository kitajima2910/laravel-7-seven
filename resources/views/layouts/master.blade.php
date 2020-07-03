<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css"
        integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">

    {{-- <title>{{ $title }}</title> --}}
    <title>@yield('title')</title>
    <style>
        .active {
            color: red;
        }

    </style>
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                {{-- <x-alert type="success">
                    <x-slot name="msg">
                        Test arlet!!!
                    </x-slot>
                    <ul>
                        <li>Test arlet!!!</li>
                    </ul>
                </x-alert> --}}

                <nav class="nav justify-content-center">
                    <a class="nav-link {{ Request::is('home') ? 'active' : '' }}"
                        href="/home">{{ __('message.home') }}</a>
                    <a class="nav-link {{ Request::is('about') ? 'active' : '' }}"
                        href="/about">{{ __('message.about_us') }}</a>
                    <a class="nav-link {{ Request::is('contact') ? 'active' : '' }}"
                        href="/contact">{{ __('message.contact_us') }}</a>
                    <a class="nav-link {{ Request::is('upload') ? 'active' : '' }}"
                        href="/upload">{{ __('message.upload') }}</a>
                    {{-- <a class="nav-link {{ 'home' == request()->path() ? 'active' : '' }}"
                    href="/home">Home</a>
                    <a class="nav-link {{ 'about' == request()->path() ? 'active' : '' }}"
                        href="/about">About Us</a>
                    <a class="nav-link {{ 'contact' == request()->path() ? 'active' : '' }}"
                        href="/contact">Contact Us</a> --}}
                </nav>

                @yield('content')
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- Popper.js first, then Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"
        integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous">
    </script>
</body>

</html>
