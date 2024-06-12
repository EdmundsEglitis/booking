<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link>
        <title>Laravel</title>
        <link href="/css/index.css" rel="stylesheet"/>
    </head>
    <body>
    <div class="login-box">
                        @if (Route::has('login'))
                            <nav class="-mx-3 flex flex-1 justify-end">
                                @auth
                                    <a href="{{ url('/dashboard') }}">Dashboard</a>
                                @else
                                    <a href="{{ route('login') }}" >Log in</a>
                                    @if (Route::has('register'))
                                        <a href="{{ route('register') }}">Register</a>
                                    @endif
                                @endauth
                            </nav>
                        @endif
                    </header>
        </div>
</html>
