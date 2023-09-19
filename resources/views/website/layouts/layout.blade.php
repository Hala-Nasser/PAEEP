<!DOCTYPE html>
@if (LaravelLocalization::getCurrentLocale() == 'ar')
    <html dir="rtl">
@else
    <html>
@endif

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @if (LaravelLocalization::getCurrentLocale() == 'ar')
        <title>{{ $settings[4]->value }}</title>
        <link rel="stylesheet" href="{{ asset('website/css/style.css') }}">
    @else
        <title>{{ $settings[3]->value }}</title>
        <link rel="stylesheet" href="{{ asset('website/css/en/style.ltr.css') }}">
    @endif

    @if ($settings[1]->value != null)
        <link rel="shortcut icon" href="{{ Storage::url($settings[1]->value) }}" />
    @else
        <link rel="shortcut icon" href="{{ asset('dist/assets/media/logos/logo_icon.png') }}" />
    @endif
    <link rel="stylesheet" href="{{ asset('website/css/swiper.css') }}" />
    <link rel="stylesheet" href="{{ asset('website/css/bootstrap.min.css') }}">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="{{ asset('website/css/animate.css') }}">
    @yield('css')
    <style>
        @font-face {
            font-family: "Font";
            src: url("{{ asset('dist/assets/fonts/ElMessiri-VariableFont_wght.ttf') }}");

        }
        *{
            font-family: "Font"
        }
    </style>
</head>


<body>

    @include('website.partials.header')

    @yield('content')

    @include('website.partials.footer')

    <a href="#" class="scrollup" id="scroll-up">
        <i class='bx bxs-chevron-up-circle'></i>
    </a>
    <script src="{{ asset('website/js/jquery library.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js"></script>
    <script src="{{ asset('website/js/vanila_tilt.js') }}"></script>
    <script src="{{ asset('website/js/swiper.js') }}"></script>
    <script src="{{ asset('website/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('website/js/scrollreveal.min.js') }}"></script>
    <script src="{{ asset('website/js/main.js') }}"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @yield('js')
</body>

</html>
