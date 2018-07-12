<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Alt Humble Brag</title>

        <meta property="og:url"                content="https://betterhumblebrags.com" />
        <meta property="og:title"              content="Better Humble Brags" />
        <meta property="og:description"        content="Better Humble Brag Generator" />
        <meta property="og:image"              content="{{ asset('images/tinybot-icon.png') }}" />
        <meta property="og:image:secure_url"   content="{{ asset('images/tinybot-icon.png') }}" />

        <link rel="icon" href="img/favicon.ico" type="image/png" sizes="16x16">

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
                    <a class="btn btn-primary btn-lg" href="">Next</a>
                    <button class="btn btn-primary btn-lg" onclick="facebook('{{ urlencode($brag->description) }}')">Facebook</button>
                    <button class="btn btn-primary btn-lg" onclick="twitter('{{ urlencode($brag->description) }}')">Twitter</button>
                </div>
            </div>

        </div>
    </body>
</html>

<script>

    function twitter(brag) {
        window.open("https://twitter.com/intent/tweet?text=" + brag + "+%23AltHumbleBrag+alt-humble-brag.tinybot.ca", "_blank", "toolbar=yes,scrollbars=yes,resizable=yes,top=100,left=300,width=600,height=450");
    }

    function facebook(brag) {
        window.open("https://www.facebook.com/share.php?u=https://alt-humble-brag.tinybot.ca&title=+%23AltHumbleBrag&mobile_iframe=true&description=&quote=" + brag, "_blank", "toolbar=yes,scrollbars=yes,resizable=yes,top=100,left=300,width=600,height=450");
    }

</script>
