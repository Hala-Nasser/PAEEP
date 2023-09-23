@extends('dashboard.layouts.dashboard_layout')

@section('css')
@endsection

@section('content')
<div class="row g-5 g-xl-8">
    <div class="col-xl-4">
        <!--begin::Statistics Widget 5-->
        <a class="card bg-body-white hoverable card-xl-stretch mb-xl-8">
            <!--begin::Body-->
            <div class="card-body">
                <!--begin::Svg Icon | path: icons/duotune/ecommerce/ecm002.svg-->
                <span class="svg-icon svg-icon-primary svg-icon-3x ms-n1">
                    <img src="{{asset('dist/assets/media/aside/program_black.png')}}"/>
                </span>
                <!--end::Svg Icon-->
                <div class="text-gray-900 fw-bolder fs-2 mb-2 mt-5">{{ trans('general.programs') }}</div>
                <div class="fw-bold" style="font-size: 18px; color: #000 ;">
                    {{ $programs_count }}</div>
            </div>
            <!--end::Body-->
        </a>
        <!--end::Statistics Widget 5-->
    </div>
    <div class="col-xl-4">
        <!--begin::Statistics Widget 5-->
        <a class="card bg-primary hoverable card-xl-stretch mb-xl-8">
            <!--begin::Body-->
            <div class="card-body">
                <!--begin::Svg Icon | path: icons/duotune/general/gen008.svg-->
                <span class="svg-icon svg-icon-primary svg-icon-3x ms-n1">
                    <img src="{{asset('dist/assets/media/aside/partner_white.png')}}"/>
                </span>
                <!--end::Svg Icon-->
                <div class="text-white fw-bolder fs-2 mb-2 mt-5">{{ trans('general.partners') }}</div>
                <div class="fw-bold" style="font-size: 18px; color: #fff ;">
                    {{ $partners_count }}</div>
            </div>
            <!--end::Body-->
        </a>
        <!--end::Statistics Widget 5-->
    </div>
    <div class="col-xl-4">
        <!--begin::Statistics Widget 5-->
        <a class="card bg-dark hoverable card-xl-stretch mb-5 mb-xl-8">
            <!--begin::Body-->
            <div class="card-body">
                <!--begin::Svg Icon | path: icons/duotune/arrows/arr070.svg-->
                <span class="svg-icon svg-icon-primary svg-icon-3x ms-n1">
                    <img src="{{asset('dist/assets/media/aside/donation_white.png')}}"/>
                </span>
                <!--end::Svg Icon-->
                <div class="text-white fw-bolder fs-2 mb-2 mt-5">{{ trans('general.donations') }}</div>
                <div class="fw-bold" style="font-size: 18px; color: #fff ;">
                    {{ $donations_count }}</div>
            </div>
            <!--end::Body-->
        </a>
        <!--end::Statistics Widget 5-->
    </div>
</div>
<div class="row g-5 g-xl-8">
    <div class="col-xl-4">
        <!--begin::Statistics Widget 5-->
        <a class="card bg-body-white hoverable card-xl-stretch mb-xl-8">
            <!--begin::Body-->
            <div class="card-body">
                <!--begin::Svg Icon | path: icons/duotune/ecommerce/ecm002.svg-->
                <span class="svg-icon svg-icon-primary svg-icon-3x ms-n1">
                    <img src="{{asset('dist/assets/media/aside/company-request-black.png')}}"/>
                </span>
                <!--end::Svg Icon-->
                <div class="text-gray-900 fw-bolder fs-2 mb-2 mt-5">{{ trans('general.company-request') }}</div>
                <div class="fw-bold" style="font-size: 18px; color: #000 ;">
                    {{ $company_requests_count }}</div>
            </div>
            <!--end::Body-->
        </a>
        <!--end::Statistics Widget 5-->
    </div>
    <div class="col-xl-4">
        <!--begin::Statistics Widget 5-->
        <a class="card bg-primary hoverable card-xl-stretch mb-xl-8">
            <!--begin::Body-->
            <div class="card-body">
                <!--begin::Svg Icon | path: icons/duotune/general/gen008.svg-->
                <span class="svg-icon svg-icon-primary svg-icon-3x ms-n1">
                    <img src="{{asset('dist/assets/media/aside/job-request-white.png')}}"/>
                </span>
                <!--end::Svg Icon-->
                <div class="text-white fw-bolder fs-2 mb-2 mt-5">{{ trans('general.job-request') }}</div>
                <div class="fw-bold" style="font-size: 18px; color: #fff ;">
                    {{ $job_requests_count }}</div>
            </div>
            <!--end::Body-->
        </a>
        <!--end::Statistics Widget 5-->
    </div>
    <div class="col-xl-4">
        <!--begin::Statistics Widget 5-->
        <a class="card bg-dark hoverable card-xl-stretch mb-5 mb-xl-8">
            <!--begin::Body-->
            <div class="card-body">
                <!--begin::Svg Icon | path: icons/duotune/arrows/arr070.svg-->
                <span class="svg-icon svg-icon-primary svg-icon-3x ms-n1">
                    <img src="{{asset('dist/assets/media/aside/volunteer-request-white.png')}}"/>
                </span>
                <!--end::Svg Icon-->
                <div class="text-white fw-bolder fs-2 mb-2 mt-5">{{ trans('general.volunteer-request') }}</div>
                <div class="fw-bold" style="font-size: 18px; color: #fff ;">
                    {{ $volunteer_requests_count }}</div>
            </div>
            <!--end::Body-->
        </a>
        <!--end::Statistics Widget 5-->
    </div>
</div>
@endsection
