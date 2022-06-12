<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="apple-touch-icon" sizes="76x76" href="{{asset('assets/img/apple-icon.png')}}" />
        <link rel="icon" type="image/png" href="{{asset('assets/img/favicon.png')}}" />
        <title>Aras Method | Admin</title>
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
        <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
        <link href="{{asset('assets/css/nucleo-icons.css')}}" rel="stylesheet" />
        <link href="{{asset('assets/css/nucleo-svg.css')}}" rel="stylesheet" />
        <link href="{{asset('assets/css/styles.css?v=1.0.1')}}" rel="stylesheet" />
        @yield('extraCSS')
    </head>

    <body class="m-0 font-sans antialiased font-normal text-size-base leading-default bg-gray-50 text-slate-500">
        @include('admin.components.sidebar')

        <main class="ease-soft-in-out xl:ml-68.5 relative h-full max-h-screen rounded-xl transition-all duration-200">
            @include('admin.components.navbar')
            @yield('content')
            @include('admin.components.footer')
        </main>
        @include('admin.components.configuration')
    </body>

    <script src="https://unpkg.com/@popperjs/core@2"></script>
    <script src="{{asset('assets/js/plugins/chartjs.min.js')}}" async></script>
    <script src="{{asset('assets/js/plugins/perfect-scrollbar.min.js')}}" async></script>
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <script src="{{asset('assets/js/soft-ui-dashboard-tailwind.js?v=1.0.1')}}" async></script>
</html>