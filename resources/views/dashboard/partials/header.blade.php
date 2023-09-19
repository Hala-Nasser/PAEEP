<div class="page-title d-flex justify-content-center flex-column me-5">
    <!--begin::Title-->
    @if ('ar' == LaravelLocalization::getCurrentLocale())
        <h1 class="d-flex flex-column text-dark fw-bolder fs-3 mb-0">{{ $settings[4]->value }}</h1>
    @else
        <h1 class="d-flex flex-column text-dark fw-bolder fs-3 mb-0">{{ $settings[3]->value }}</h1>
    @endif
</div>

<ul class="navbar-nav ml-auto" style="margin-top: 20px;">
    <li class="nav-item dropdown">
        @foreach (LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
            <a rel="alternate" hreflang="{{ $localeCode }}"
                href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}"
                @if ($localeCode == LaravelLocalization::getCurrentLocale())
            style="color: #181c32;"
            @else
            style="color: #858ba9c4;" @endif>
                {{ strtoupper($localeCode) }}
            </a>
        @endforeach

    </li>
</ul>
