<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,300i,400,400i,500,500i,600,600i,700,700i&amp;subset=latin-ext">
        <script src="{{ asset('js/require.min.js') }}"></script>
        <!-- Dashboard Core -->
        <link href="{{ asset('css/dashboard.css') }}" rel="stylesheet">
        <script src="{{ asset('js/dashboard.js') }}"></script>
        <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="jquery"
                src="{{ asset ('js/vendors/jquery-3.2.1.min.js') }}"></script>
        <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="bootstrap"
                src="{{ asset('js/vendors/bootstrap.bundle.min.js') }}"></script>
        <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="core"
                src="{{ asset('js/core.js') }}"></script>
    </head>
    <body>

        <div class="container">
            @if(Session::has('flash_message'))
                <div class="alert alert-success {{ Session::has('flash_message_important') ? 'alert-important' : '' }} col-lg-9">
                    {{ Session::get('flash_message') }}
                </div>
            @endif
        </div>

    @yield('navigation')
    @yield('content')

    <script>
        $('div.alert').not('.alert-important').delay(3000).slideUp(300);
    </script>

    </body>
</html>
