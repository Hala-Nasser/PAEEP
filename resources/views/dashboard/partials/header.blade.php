<div class="page-title d-flex justify-content-center flex-column me-5">
    <!--begin::Title-->
    <h1 class="d-flex flex-column text-dark fw-bolder fs-3 mb-0">eCommerce Dashboard</h1>
    <!--end::Title-->
    <!--begin::Breadcrumb-->
    <ul class="breadcrumb breadcrumb-separatorless fw-bold fs-7 pt-1">
        <!--begin::Item-->
        <li class="breadcrumb-item text-muted">
            <a href="../../demo8/dist/index.html" class="text-muted text-hover-primary">Home</a>
        </li>
        <!--end::Item-->
        <!--begin::Item-->
        <li class="breadcrumb-item">
            <span class="bullet bg-gray-200 w-5px h-2px"></span>
        </li>
        <!--end::Item-->
        <!--begin::Item-->
        <li class="breadcrumb-item text-muted">Dashboards</li>
        <!--end::Item-->
        <!--begin::Item-->
        <li class="breadcrumb-item">
            <span class="bullet bg-gray-200 w-5px h-2px"></span>
        </li>
        <!--end::Item-->
        <!--begin::Item-->
        <li class="breadcrumb-item text-dark">eCommerce</li>
        <!--end::Item-->
    </ul>
    <!--end::Breadcrumb-->
</div>

<ul class="navbar-nav ml-auto" style="margin-top: 20px;">
    <li class="nav-item dropdown">
        @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)

        <a rel="alternate" hreflang="{{ $localeCode }}"
            href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}"
            @if ($localeCode == LaravelLocalization::getCurrentLocale()) ?
            style="color: #181c32;"
            @else
            style="color: #858ba9c4;"
            @endif>
            {{ strtoupper($localeCode) }}
        </a>
        @endforeach

    </li>
</ul>



{{-- <div class="menu-item px-5" data-select2-id="select2-data-125-chr6">
    <!--begin::Select2-->
    <select class="form-select mb-2 select2-hidden-accessible" data-control="select2" data-hide-search="true" data-placeholder="Select an option" id="kt_ecommerce_add_product_status_select" data-select2-id="select2-data-kt_ecommerce_add_product_status_select" tabindex="-1" aria-hidden="true">
        @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)

        {{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}
            @if ($localeCode == LaravelLocalization::getCurrentLocale()) ?
            <option value="{{ $localeCode }}" selected="selected" >
                <a rel="alternate" hreflang="{{ $localeCode }}"
            href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
            {{ strtoupper($localeCode) }}
        </a>
                </option>
            @else
            <option value="{{ $localeCode }}">
                <a rel="alternate" hreflang="{{ $localeCode }}"
            href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
            {{ strtoupper($localeCode) }}
        </a>
    </option>
            @endif
        @endforeach
    </select>
</div> --}}
