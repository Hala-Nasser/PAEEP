<!DOCTYPE html>
@if (LaravelLocalization::getCurrentLocale() == 'ar')
    <html dir="rtl">
@else
    <html>
@endif

<!--begin::Head-->

<head>
    <base href="../../../">
    <title>PAEEP</title>
    <meta charset="utf-8" />
    <link rel="canonical" href="https://preview.keenthemes.com/metronic8" />
    <link rel="shortcut icon" href="{{ asset('dist/assets/media/logos/logo_icon.png') }}" />
    <!--begin::Fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <!--end::Fonts-->

    @if (LaravelLocalization::getCurrentLocale() == 'ar')
        <link href="{{ asset('dist/assets/plugins/global/plugins.bundle.rtl.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('dist/assets/css/style.bundle.rtl.css') }}" rel="stylesheet" type="text/css" />
    @else
        <link href="{{ asset('dist/assets/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('dist/assets/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />
    @endif
</head>
<!--end::Head-->
<!--begin::Body-->

<body id="kt_body" class="bg-body">
    <!--begin::Main-->
    <!--begin::Root-->
    <div class="d-flex flex-column flex-root">
        <!--begin::Authentication - Sign-in -->
        <div class="d-flex flex-column flex-column-fluid bgi-position-y-bottom position-x-center bgi-no-repeat bgi-size-contain bgi-attachment-fixed"
            style="background-image: url({{ asset('dist/assets/media/illustrations/sketchy-1/14.png') }})">
            <!--begin::Content-->
            <div class="d-flex flex-center flex-column flex-column-fluid p-10 pb-lg-20">
                <!--begin::Logo-->
                <a href="../../demo8/dist/index.html" class="mb-12">
                    <img alt="Logo" src="{{ asset('dist/assets/media/logos/logo.png') }}" class="h-40px" />
                </a>
                <!--end::Logo-->
                <!--begin::Wrapper-->
                @yield('content')
                <!--end::Wrapper-->
            </div>
            <!--end::Content-->
        </div>
        <!--end::Authentication - Sign-in-->
    </div>
    <!--end::Root-->
    <!--end::Main-->
    <!--begin::Javascript-->
    {{-- <script>var hostUrl = "assets/";</script> --}}
    <!--begin::Global Javascript Bundle(used by all pages)-->
    <script src="{{ asset('dist/assets/plugins/global/plugins.bundle.js') }}"></script>
    <script src="{{ asset('dist/assets/js/scripts.bundle.js') }}"></script>
    <!--end::Global Javascript Bundle-->
    <!--end::Javascript-->
    <!--axios and swwetalert-->
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @yield('js')
</body>
<!--end::Body-->

</html>
