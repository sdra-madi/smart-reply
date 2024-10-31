<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta content="width=device-width, initial-scale=1.0, shrink-to-fit=no" name="viewport" />
    <title>Smart / @yield('title')</title>
    <link rel="icon" href="{{ asset('portal/assets-dash/img/kaiadmin/favicon.ico') }}" type="image/x-icon" />
    <!-- CSS Files -->
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link rel="stylesheet" href="{{ asset('portal/assets-dash/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('portal/assets-dash/css/plugins.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('portal/assets-dash/css/kaiadmin.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('portal/assets-dash/css/demo.css') }}" />
    <script src="{{ asset('portal/assets-dash/js/plugin/webfont/webfont.min.js') }}"></script>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@3.0.0/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link href="{{ asset('portal/assets-pro/css/nucleo-icons.css') }}" rel="stylesheet" />
    <link href="{{ asset('portal/assets-pro/css/nucleo-svg.css') }}" rel="stylesheet" />
    <script src="https://unpkg.com/@popperjs/core@2"></script>
    <link href="{{ asset('portal/assets-pro/css/soft-ui-dashboard-tailwind.css?v=1.0.5') }}" rel="stylesheet" />
    <script defer data-site="YOUR_DOMAIN_HERE" src="https://api.nepcha.com/js/nepcha-analytics.js"></script>
    <script src="{{ asset('portal/assets-dash/js/plugin/webfont/webfont.min.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('portal/assets-pro/css/fonts.min.css') }}">
    <script>
        WebFont.load({
            google: {
                families: ["Public Sans:300,400,500,600,700"]
            },
            custom: {
                families: [
                    "Font Awesome 5 Solid",
                    "Font Awesome 5 Regular",
                    "Font Awesome 5 Brands",
                    "simple-line-icons",
                ],
                urls: ["{{ asset('portal/assets-dash/css/fonts.min.css') }}"],
            },
            active: function() {
                sessionStorage.fonts = true;
            },
        });
    </script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body>
