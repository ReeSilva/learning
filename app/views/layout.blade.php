<!DOCTYPE html>
<!--[if IE 9]><html class="lt-ie10" lang="en" > <![endif]-->
<html lang="pt">
<head>
    <meta charset="utf-8">
    <meta property="og:title" content="loveSP" />
    <meta property="og:image" content="{{ Config::get(app.url'); }}/learning/img/icon.png" />
    <meta property="og:url" content="{{ Config::get(app.url); }}" />
    <meta property="og:description" content="Venha declarar o seu amor pela cidade mais amor do Brasil. E se você não sabe porque São Paulo é tão maravilhosa, venha ver o que estão dizendo e entenda porque esse lugar é tão mágico." />
    <link rel="icon" href="{{ Config::get('app.url'); }}/learning/img/favicon.ico" />
    {{ HTML::style('learning/stylesheets/app.css'); }}
    {{ HTML::script('learning/bower_components/modernizr/modernizr.js'); }}
</head>

<body>
    <div class="contain-to-grid">
        <nav class="top-bar" data-topbar>
            <li class="toggle-topbar menu-icon"></li>
            <ul class="title-area">
                <li class="name">
                    <h1><a href="#">loveSP</a></h1>
                </li>
                <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
                <li class="toggle-topbar menu-icon"></li>
            </ul>
        </nav>
    </div>
    @yield('content')
    {{ HTML::script('learning/bower_components/jquery/dist/jquery.min.js'); }}
    {{ HTML::script('learning/bower_components/foundation/js/foundation.min.js'); }}
    {{ HTML::script('learning/js/app.js'); }}
</body>

</html>