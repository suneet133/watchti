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
<section class="hero is-light is-fullheight">
    <!-- Hero header: will stick at the top -->
    <div class="hero-head">
        <header class="nav">
            <div class="container">
                <div class="nav-left">
                    <a class="nav-item">
                        <h6>WatchTI</h6>
                    </a>
                </div>
            </div>
        </header>
    </div>

    <!-- Hero content: will be in the middle -->
    <div class="container">
        <div class="columns">
            <div class="column">
                    <div class="box">
                        <form method="post" action="/updatechannel">
                            {{csrf_field()}}
                            <input type="hidden" name="id" value="{{$channel->id}}">
                            <div class="field">
                                <label class="label">Channel Name</label>
                                <div class="control">
                                    <input class="input is-fullwidth" name="name" type="text" placeholder="enter name of channel" value="{{$channel->name}}">
                                </div>
                            </div>
                            <div class="field">
                                <label class="label">Video Link</label>
                                <div class="control">
                                    <input class="input" name="link" type="text" placeholder="provide link" value="{{$channel->link}}">
                                </div>
                            </div>
                            <div class="field">
                                <label class="label">Channel Chat</label>
                                <div class="control">
                                    <input class="input" name="chat" type="text" placeholder="provide chat link" value="{{$channel->chat}}">
                                </div>
                            </div>
                            <div class="field">
                                <label class="label">Channel Link</label>
                                <div class="control">
                                    <input class="input" name="channel_link" type="text" placeholder="provide link" value="{{$channel->channel_link}}">
                                </div>
                            </div>
                            <div class="field">
                                <button class="button is-info" type="submit">Update Channel</button>
                            </div>
                        </form>
                    </div>


            </div>
        </div>

    </div>

    <!-- Hero footer: will stick at the bottom -->
    <div class="hero-foot">
        <nav class="tabs is-boxed is-fullwidth">
            <div class="container has-text-centered">
                Website by Suneet
            </div>
        </nav>
    </div>
</section>

</body>
</html>
