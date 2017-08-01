<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>WatchTI</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.5.0/css/bulma.min.css" rel="stylesheet" type="text/css">

        <!-- Styles -->
    </head>
    <body>
    <section class="hero is-dark is-bold is-fullheight">
        <!-- Hero header: will stick at the top -->
        <div class="hero-head">
            <header class="nav">
                <div class="container">
                    <div class="nav-left">
                        <a class="nav-item">
                            <img src="/images/logo.png" alt="Logo"><h6>WatchTI </h6>
                        </a>
                    </div>
                </div>
            </header>
        </div>

        <!-- Hero content: will be in the middle -->
        <div class="hero-body">
            <div class="columns is-multiline is-mobile">
                @foreach($channels as $channel)
                <div class="column is-half">
                    <p class="help is-info">{{$channel->name}}</p>
                    {!! $channel->link !!}
                </div>
                @endforeach

            </div>
        </div>

        <!-- Hero footer: will stick at the bottom -->
        <div class="hero-foot">
            <nav class="is-fullwidth">
                <div class="container has-text-centered">
                    Website by Suneet &nbsp;&nbsp;<span><a href="https://twitter.com/suneet133" target="_blank"><i class="fa fa-twitter"></i></a></span>&nbsp;&nbsp;
                    <span><a href="https://facebook.com/suneet133" target="_blank"><i class="fa fa-facebook"></i></a></span>&nbsp;&nbsp;
                    <span><a href="https://github.com/suneet133" target="_blank"><i class="fa fa-github"></i></a></span>&nbsp;&nbsp;
                </div>
            </nav>
        </div>
    </section>

    </body>
</html>
