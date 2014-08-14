<!DOCTYPE html>
<!--[if IE 9]><html class="lt-ie10" lang="en" > <![endif]-->
<html lang="pt">
<head>
    <meta charset="utf-8">
    {{ HTML::style('learning/stylesheets/app.css'); }}
    {{ HTML::script('learning/bower_components/modernizr/modernizr.js'); }}
</head>

<body>
    <div class="contain-to-grid">
        <nav class="top-bar" data-topbar>
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