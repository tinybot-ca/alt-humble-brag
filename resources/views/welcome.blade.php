<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Alt Humble Brag</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('css/public.css') }}" rel="stylesheet">
    </head>

    <body>
        <div class="flex-center position-ref full-height">
            {{-- @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif --}}

            <div class="content">
                <div class="title m-b-md">
                    {{ $brag->description }}
                </div>

                <div class="__links">
                    <a class="btn btn-primary" href="">Next</a>
                    <a class="btn btn-primary" href="https://www.facebook.com/sharer/sharer.php?u=test.com&t={{ urlencode($brag->description) }}">Facebook</a>
                    <a class="btn btn-primary" href="https://twitter.com/intent/tweet?text={{ urlencode($brag->description) }}">Twitter</a>
                </div>
            </div>

        </div>
    </body>
</html>
