@extends('dashboard.layouts.dashboard_layout')
@section('css')
@stop

@section('content')
    <div class="flex-lg-row-fluid ms-lg-7 ms-xl-10">
        <!--begin::Card-->
        <div class="card">
            <div class="card-body">
                <!--begin::Message accordion-->
                <div data-kt-inbox-message="message_wrapper">
                    <!--begin::Message header-->
                    <div class="d-flex flex-wrap gap-2 flex-stack cursor-pointer" data-kt-inbox-message="header">
                        <!--begin::Author-->
                        <div class="d-flex align-items-center">
                            <div class="pe-5">
                                <!--begin::Author details-->
                                <div class="d-flex align-items-center flex-wrap gap-1">
                                    <a href="#"
                                        class="fw-bolder text-dark text-hover-primary">{{ $companyRequest->name }}</a>
                                    {{-- <span class="text-muted fw-bolder">1 day ago</span> --}}
                                </div>
                                <!--end::Author details-->
                                <!--begin::Message details-->
                            </div>
                        </div>
                        <!--end::Author-->
                        <!--begin::Actions-->
                        <div class="d-flex align-items-center flex-wrap gap-2">
                            <!--begin::Date-->
                            <span class="fw-bold text-muted text-end me-3">{{ $companyRequest->created_at }}</span>
                            <!--end::Date-->
                        </div>
                        <!--end::Actions-->
                    </div>
                    <!--end::Message header-->
                    <!--begin::Message content-->
                    <div class="collapse fade show" data-kt-inbox-message="message">
                        <!--begin::Card header-->
                        <div class="card-title" style="margin-top: 15px">
                            <h2>{{ trans('company-request.request_details') }}</h2>
                        </div>
                        <!--end::Card header-->
                        <!--begin::Card body-->
                        <div class="card-body pt-0" style="margin-top:15px;">
                            <div class="mb-10 fv-row" style="display: flex; margin-bottom:1rem !important">
                                <!--begin::Label-->
                                <label class="form-label"
                                    style="display: block;align-self: center; margin-inline-end: 15px; white-space: nowrap;">{{ trans('donation.name') }}</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <input type="text" class="form-control mb-2" value="{{ $companyRequest->name }}"
                                    style="display: block;width: 100%;" readonly>
                                <!--end::Input-->
                            </div>
                            <div class="mb-10 fv-row" style="display: flex; margin-bottom:1rem !important">
                                <!--begin::Label-->
                                <label class="form-label"
                                    style="display: block;align-self: center; margin-inline-end: 15px; white-space: nowrap;">{{ trans('company-request.organization_type') }}</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <input type="text" class="form-control mb-2"
                                    value="{{ $companyRequest->organization_type }}" style="display: block;width: 100%;"
                                    readonly>
                                <!--end::Input-->
                            </div>
                            <div class="mb-10 fv-row" style="display: flex; margin-bottom:1rem !important">
                                <!--begin::Label-->
                                <label class="form-label"
                                    style="display: block;align-self: center; margin-inline-end: 15px; white-space: nowrap;">{{ trans('company-request.address') }}</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <input type="text" class="form-control mb-2" value="{{ $companyRequest->address }}"
                                    style="display: block;width: 100%;" readonly>
                                <!--end::Input-->
                            </div>
                            <div class="mb-10 fv-row" style="display: flex; margin-bottom:1rem !important">
                                <!--begin::Label-->
                                <label class="form-label"
                                    style="display: block;align-self: center; margin-inline-end: 15px; white-space: nowrap;">{{ trans('company-request.foundation_year') }}</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <input type="text" class="form-control mb-2"
                                    value="{{ $companyRequest->foundation_year }}" style="display: block;width: 100%;"
                                    readonly>
                                <!--end::Input-->
                            </div>
                            <div class="mb-10 fv-row" style="display: flex; margin-bottom:1rem !important">
                                <!--begin::Label-->
                                <label class="form-label"
                                    style="display: block;align-self: center; margin-inline-end: 15px; white-space: nowrap;">{{ trans('company-request.website_url') }}</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <input type="text" class="form-control mb-2" value="{{ $companyRequest->website_url }}"
                                    style="display: block;width: 100%;" readonly>
                                <!--end::Input-->
                            </div>
                            <div class="mb-10 fv-row" style="display: flex; margin-bottom:1rem !important">
                                <!--begin::Label-->
                                <label class="form-label"
                                    style="display: block;align-self: center; margin-inline-end: 15px; white-space: nowrap;">{{ trans('company-request.instagram_link') }}</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <input type="text" class="form-control mb-2"
                                    value="{{ $companyRequest->instagram_link }}" style="display: block;width: 100%;"
                                    readonly>
                                <!--end::Input-->
                            </div>
                            <div class="mb-10 fv-row" style="display: flex; margin-bottom:1rem !important">
                                <!--begin::Label-->
                                <label class="form-label"
                                    style="display: block;align-self: center; margin-inline-end: 15px; white-space: nowrap;">{{ trans('company-request.facebook_link') }}</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <input type="text" class="form-control mb-2"
                                    value="{{ $companyRequest->facebook_link }}" style="display: block;width: 100%;"
                                    readonly>
                                <!--end::Input-->
                            </div>
                            <div class="mb-10 fv-row" style="display: flex; margin-bottom:1rem !important">
                                <!--begin::Label-->
                                <label class="form-label"
                                    style="display: block;align-self: center; margin-inline-end: 15px; white-space: nowrap;">{{ trans('company-request.annual_budget') }}</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <input type="text" class="form-control mb-2"
                                    value="{{ $companyRequest->annual_budget }}" style="display: block;width: 100%;"
                                    readonly>
                                <!--end::Input-->
                            </div>
                            <div class="mb-10 fv-row" style="display: flex; margin-bottom:1rem !important">
                                <!--begin::Label-->
                                <label class="form-label"
                                    style="display: block;align-self: center; margin-inline-end: 15px; white-space: nowrap;">{{ trans('company-request.centers_count') }}</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <input type="text" class="form-control mb-2"
                                    value="{{ $companyRequest->centers_count }}" style="display: block;width: 100%;"
                                    readonly>
                                <!--end::Input-->
                            </div>
                            <div class="mb-10 fv-row" style="display: flex; margin-bottom:1rem !important">
                                <!--begin::Label-->
                                <label class="form-label"
                                    style="display: block;align-self: center; margin-inline-end: 15px; white-space: nowrap;">{{ trans('company-request.centers_address') }}</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <p class="form-control mb-2">{!! $companyRequest->centers_address !!}</p>

                                <!--end::Input-->
                            </div>
                            <div class="mb-10 fv-row" style="display: flex; margin-bottom:1rem !important">
                                <!--begin::Label-->
                                <label class="form-label"
                                    style="display: block;align-self: center; margin-inline-end: 15px; white-space: nowrap;">{{ trans('company-request.employees_count') }}</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <input type="text" class="form-control mb-2"
                                    value="{{ $companyRequest->employees_count }}" style="display: block;width: 100%;"
                                    readonly>
                                <!--end::Input-->
                            </div>
                            <div class="mb-10 fv-row" style="display: flex; margin-bottom:1rem !important">
                                <!--begin::Label-->
                                <label class="form-label"
                                    style="display: block;align-self: center; margin-inline-end: 15px; white-space: nowrap;">{{ trans('company-request.mi_registeration_number') }}</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <input type="text" class="form-control mb-2"
                                    value="{{ $companyRequest->mi_registeration_number }}"
                                    style="display: block;width: 100%;" readonly>
                                <!--end::Input-->
                            </div>
                            <div class="mb-10 fv-row" style="display: flex; margin-bottom:1rem !important">
                                <!--begin::Label-->
                                <label class="form-label"
                                    style="display: block;align-self: center; margin-inline-end: 15px; white-space: nowrap;">{{ trans('company-request.mf_registeration_number') }}</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <input type="text" class="form-control mb-2"
                                    value="{{ $companyRequest->mf_registeration_number }}"
                                    style="display: block;width: 100%;" readonly>
                                <!--end::Input-->
                            </div>
                            <div class="mb-10 fv-row" style="display: flex; margin-bottom:1rem !important">
                                <!--begin::Label-->
                                <label class="form-label"
                                    style="display: block;align-self: center; margin-inline-end: 15px; white-space: nowrap;">{{ trans('company-request.current_projects_count') }}</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <input type="text" class="form-control mb-2"
                                    value="{{ $companyRequest->current_projects_count }}"
                                    style="display: block;width: 100%;" readonly>
                                <!--end::Input-->
                            </div>
                            <div class="mb-10 fv-row" style="display: flex; margin-bottom:1rem !important">
                                <!--begin::Label-->
                                <label class="form-label"
                                    style="display: block;align-self: center; margin-inline-end: 15px; white-space: nowrap;">{{ trans('company-request.main_donors') }}</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <p class="form-control mb-2">{!! $companyRequest->main_donors !!}</p>

                                <!--end::Input-->
                            </div>
                            <div class="mb-10 fv-row" style="display: flex; margin-bottom:1rem !important">
                                <!--begin::Label-->
                                <label class="form-label"
                                    style="display: block;align-self: center; margin-inline-end: 15px; white-space: nowrap;">{{ trans('company-request.total_employess_count') }}</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <p class="form-control mb-2">{!! $companyRequest->total_employess_count !!}</p>
                                <!--end::Input-->
                            </div>
                            <div class="mb-10 fv-row" style="display: flex; margin-bottom:1rem !important">
                                <!--begin::Label-->
                                <label class="form-label"
                                    style="display: block;align-self: center; margin-inline-end: 15px; white-space: nowrap;">{{ trans('company-request.beneficiaries_nationalities') }}</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <p class="form-control mb-2">{!! $companyRequest->beneficiaries_nationalities !!}</p>
                                <!--end::Input-->
                            </div>
                            <div class="mb-10 fv-row" style="display: flex; margin-bottom:1rem !important">
                                <!--begin::Label-->
                                <label class="form-label"
                                    style="display: block;align-self: center; margin-inline-end: 15px; white-space: nowrap;">{{ trans('company-request.beneficiaries_age') }}</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <p class="form-control mb-2">{!! $companyRequest->beneficiaries_age !!}</p>

                                <!--end::Input-->
                            </div>
                            <div class="mb-10 fv-row" style="display: flex; margin-bottom:1rem !important">
                                <!--begin::Label-->
                                <label class="form-label"
                                    style="display: block;align-self: center; margin-inline-end: 15px; white-space: nowrap;">{{ trans('company-request.main_objectives') }}</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <p class="form-control mb-2">{!! $companyRequest->main_objectives !!}</p>

                                <!--end::Input-->
                            </div>

                            <div class="mb-10 fv-row" style="display: flex; margin-bottom:1rem !important">
                                <!--begin::Label-->
                                <label class="form-label"
                                    style="display: block;align-self: center; margin-inline-end: 15px; white-space: nowrap;">{{ trans('company-request.registeration_certification') }}</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                    <a class="form-label" style="color:blue"
                                        href="{{ Storage::url($companyRequest->registeration_certification) }}">{{ trans('company-request.here') }}</a>
                                <!--end::Input-->
                            </div>
                            <div class="mb-10 fv-row" style="display: flex; margin-bottom:1rem !important">
                                <!--begin::Label-->
                                <label class="form-label"
                                    style="display: block;align-self: center; margin-inline-end: 15px; white-space: nowrap;">{{ trans('company-request.organization_structure') }}</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                    <a class="form-label" style="color:blue"
                                        href="{{ Storage::url($companyRequest->organization_structure) }}">{{ trans('company-request.here') }}</a>
                                <!--end::Input-->
                            </div>


                        </div>
                        <!--end::Card header-->
                    </div>
                    <!--end::Message content-->
                </div>
                <!--end::Message accordion-->
            </div>
        </div>
        <!--end::Card-->
    </div>
@stop

@section('js')
@stop
