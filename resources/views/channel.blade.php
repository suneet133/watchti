<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta content='WatchTi' property='og:site_name'>
    <meta content='WatchTi' property='og:title'>
    <meta content="Watch Dota 2, The International 4 channels at once." property='og:description'>
    <meta content='/images/international2017.png' property='og:image'>
    <meta content='https://www.watchti.club/{{$channel->id}}' property='og:url'>
    <meta content='website' property='og:type'>
    <meta content='@suneet133' property='twitter:site'>

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
                    <a class="nav-item">
                        <img src="/images/logo.png" alt="Logo"><h6>WatchTi </h6>
                    </a>
                </div>
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
            <a href="https://twitter.com/home?status=http%3A//watchti.club" class="button is-small is-primary" style="background: #1da1f2">
              <span class="icon is-small">
                <i class="fa fa-twitter"></i>
              </span>
              <span>Twitter</span>
            </a>
          </span>
                    <span class="nav-item">
            <a href="https://twitter.com/home?status=http%3A//watchti.club" class="button is-small is-primary" style="background: #bd081c">
              <span class="icon is-small">
                <i class="fa fa-pinterest"></i>
              </span>
              <span>Pintrest</span>
            </a>
          </span>
                </div>
            </div>
        </header>
    </div>

    <!-- Hero content: will be in the middle -->
    <div class="hero-body">
        <div class="columns is-mobile">
            <div class="column is-three-quarters">
                {!! $channel->link !!}
            </div>
            <div class="column">
                {!! $channel->chat !!}
            </div>

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


</body>

</html>
