<!DOCTYPE html>
<!--[if IE 9]><html class="lt-ie10" lang="en" > <![endif]-->
<html lang="pt">
<head>
    <meta charset="utf-8">
    {{ HTML::style('learning/stylesheets/app.css'); }}
    {{ HTML::script('learning/bower_components/modernizr/modernizr.js'); }}
</head>

<body>
    <nav class="top-bar" data-topbar>
        <ul class="title-area">
            <li class="name">
                <h1><a href="#">My Site</a></h1>
            </li>
            <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
            <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
        </ul>

        <section class="top-bar-section">
            <!-- Right Nav Section -->
            <ul class="right">
                <li class="active"><a href="#">Right Button Active</a></li>
                <li class="has-dropdown">
                    <a href="#">Right Button Dropdown</a>
                    <ul class="dropdown">
                        <li><a href="#">First link in dropdown</a></li>
                    </ul>
                </li>
            </ul>

            <!-- Left Nav Section -->
            <ul class="left">
                <li><a href="#">Left Nav Button</a></li>
            </ul>
        </section>
    </nav>
    @yield('content')
    {{ HTML::script('learning/bower_components/jquery/dist/jquery.min.js'); }}
    {{ HTML::script('learning/bower_components/foundation/js/foundation.min.js'); }}
    {{ HTML::script('learning/js/app.js'); }}
</body>

</html>