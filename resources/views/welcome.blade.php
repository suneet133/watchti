<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta property="og:url"  content="http://watchti.club" />
        <meta property="og:title" content="WatchTi"/>
        <meta property="og:image" content="http://watchti.club/images/international2017.png"/>
        <meta property="og:site_name" content="WatchTi"/>
        <meta property="og:description" content="Watch Dota 2 The Internationals, four different channels on one screen"/>
        <meta property="fb:app_id" content="1902516209989210" />


        <title>WatchTi</title>

        <!-- Fonts -->
        <link href='/favicon.ico' rel='shortcut icon' type='image/x-icon'>
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
                        <a class="nav-item" href="/">
                            <img src="/images/logo.png" alt="Logo"><h6>WatchTi </h6>
                        </a>
                    </div>
                    <span class="nav-toggle">
                      <span></span>
                      <span></span>
                      <span></span>
                    </span>
                    <div class="nav-right nav-menu">
                        <span class="nav-item">
                            Share on:
                        </span>
                        <span class="nav-item">
            <a href="https://www.facebook.com/sharer/sharer.php?u=http%3A//watchti.club" class="button is-small is-primary " style="background:#3b5998;">
              <span class="icon is-small">
                <i class="fa fa-facebook"></i>
              </span>
              <span>Facebook</span>
            </a>
          </span>

                        <span class="nav-item">
            <a href="https://twitter.com/home?status=Join%20the%20club%20and%20Watch%204%20channels%20on%20one%20screen%20%23WatchTi%20http%3A//watchti.club" class="button is-small is-primary" style="background: #1da1f2">
              <span class="icon is-small">
                <i class="fa fa-twitter"></i>
              </span>
              <span>Twitter</span>
            </a>
          </span>
                        <span class="nav-item">
            <a href="https://plus.google.com/share?url=http%3A//watchti.club" class="button is-small is-light" >
              <span class="icon is-small">
                <i class="fa fa-google-plus"></i>
              </span>
              <span>Google</span>
            </a>
          </span>
                    </div>
                </div>
            </header>
        </div>

        <!-- Hero content: will be in the middle -->
        <div class="hero-body">
            <div class="columns is-multiline is-mobile">
                @foreach($channels as $channel)
                <div class="column is-half">
                    <div class="control">
                        <a href="channel/{{$channel->id}}" class="button is-primary">{{$channel->name}}</a>
                    </div>
                    <div class="control">
                        {!! $channel->link !!}
                    </div>

                </div>
                @endforeach

            </div>
        </div>

        <!-- Hero footer: will stick at the bottom -->
        <div class="hero-foot" style="margin-bottom: 1rem">
            <nav class="is-fullwidth">
                <div class="container has-text-centered">
                    Website by Suneet &nbsp;&nbsp;<span><a href="https://twitter.com/suneet133" target="_blank"><i class="fa fa-twitter"></i></a></span>&nbsp;&nbsp;
                    <span><a href="https://facebook.com/suneet133" target="_blank"><i class="fa fa-facebook"></i></a></span>&nbsp;&nbsp;
                    <span><a href="https://github.com/suneet133" target="_blank"><i class="fa fa-github"></i></a></span>&nbsp;&nbsp;
                    <span><a href="mailto:suneet133@gmail.com" target="_top">
                        <i class="fa fa-envelope" aria-hidden="true" ></i>
                    </a></span>&nbsp;&nbsp;
                    <a target="_blank"  href="https://www.paypal.me/suneet133/100inr">
              <span class="icon">
                <i class="fa fa-paypal"></i>
              </span>
                        <span></span>
                    </a>
                </div>
            </nav>
        </div>
    </section>
<script>
    (function () {
        var burger = document.querySelector('.nav-toggle');
        var menu = document.querySelector('.nav-menu');
        burger.addEventListener('click', function () {
            burger.classList.toggle('is-active');
            menu.classList.toggle('is-active');
        });
    })();

</script>
<script src="https://chatwee-api.com/v2/script/5988a046bd616db95662f0fe.js"></script>

    </body>

</html>
