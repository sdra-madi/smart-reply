<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Kaiadmin - Bootstrap 5 Admin Dashboard</title>
    <meta
      content="width=device-width, initial-scale=1.0, shrink-to-fit=no"
      name="viewport"
    />
    <link rel="icon" href="{{ asset('portal/assets-dash/img/kaiadmin/favicon.ico') }}" type="image/x-icon"/> 
    <script src="{{ asset('portal/assets-dash/js/plugin/webfont/webfont.min.js') }}"></script>
    <script>
      WebFont.load({
        google: { families: ["Public Sans:300,400,500,600,700"] },
        custom: {
          families: [
            "Font Awesome 5 Solid",
            "Font Awesome 5 Regular",
            "Font Awesome 5 Brands",
            "simple-line-icons",
          ],
          urls: ["{{ asset('portal/assets-dash/css/fonts.min.css') }}"],
        },
        active: function () {
          sessionStorage.fonts = true;
        },
      });
    </script>
    <!-- CSS Files -->
    <!-- CSS Just for demo purpose, don't include it in your project -->
      <link rel="stylesheet" href={{ asset("portal/assets-dash/css/demo.css" )}}/>
      <link rel="stylesheet" href="{{ asset('portal/assets-dash/css/bootstrap.min.css') }}" />
      <link rel="stylesheet" href="{{ asset('portal/assets-dash/css/plugins.min.css') }}" />
      <link rel="stylesheet" href="{{ asset('portal/assets-dash/css/kaiadmin.min.css') }}" />
      <link rel="stylesheet" href="{{ asset('portal/assets-dash/css/demo.css') }}" />
      <script src="{{ asset('portal/assets-dash/js/plugin/webfont/webfont.min.js') }}"></script>
  </head>
  <body>