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
                                        class="fw-bolder text-dark text-hover-primary">{{ $volunteerRequest->full_name }}</a>
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
                            <span class="fw-bold text-muted text-end me-3">{{ $volunteerRequest->created_at }}</span>
                            <!--end::Date-->
                        </div>
                        <!--end::Actions-->
                    </div>
                    <!--end::Message header-->
                    <!--begin::Message content-->
                    <div class="collapse fade show" data-kt-inbox-message="message">
                        <!--begin::Card header-->
                        <div class="card-title" style="margin-top: 15px">
                            <h2>{{ trans('volunteer-request.request_details') }}</h2>
                        </div>
                        <!--end::Card header-->
                        <!--begin::Card body-->
                        <div class="card-body pt-0" style="margin-top:15px;">
                            <div style="display: flex;">
                                <div class="mb-10 fv-row" style="display: flex;margin-bottom:1rem !important;width: 50%;">
                                    <!--begin::Label-->
                                    <label class="form-label"
                                        style="display: block;align-self: center; margin-inline-end: 15px; white-space: nowrap;">{{ trans('volunteer-request.full_name') }}</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input type="text" class="form-control mb-2"
                                        value="{{ $volunteerRequest->full_name }}" style="display: block;width: 100%;"
                                        readonly="">
                                    <!--end::Input-->
                                </div>
                                <div style="width: 20px;"></div>
                                <div class="mb-10 fv-row" style="display: flex;margin-bottom:1rem !important;width: 50%;">
                                    <!--begin::Label-->
                                    <label class="form-label"
                                        style="display: block;align-self: center; margin-inline-end: 15px; white-space: nowrap;">{{ trans('volunteer-request.phone') }}</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input type="text" class="form-control mb-2" value="{{ $volunteerRequest->phone }}"
                                        style="display: block;width: 100%;" readonly="">
                                    <!--end::Input-->
                                </div>
                            </div>
                            <div style="display: flex;">
                                <div class="mb-10 fv-row" style="display: flex;margin-bottom:1rem !important;width: 50%;">
                                    <!--begin::Label-->
                                    <label class="form-label"
                                        style="display: block;align-self: center; margin-inline-end: 15px; white-space: nowrap;">{{ trans('volunteer-request.email') }}</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input type="text" class="form-control mb-2" value="{{ $volunteerRequest->email }}"
                                        style="display: block;width: 100%;" readonly="">
                                    <!--end::Input-->
                                </div>
                                <div style="width: 20px;"></div>
                                <div class="mb-10 fv-row" style="display: flex;margin-bottom:1rem !important;width: 50%;">
                                    <!--begin::Label-->
                                    <label class="form-label"
                                        style="display: block;align-self: center; margin-inline-end: 15px; white-space: nowrap;">{{ trans('volunteer-request.address') }}</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input type="text" class="form-control mb-2"
                                        value="{{ $volunteerRequest->address }}" style="display: block;width: 100%;"
                                        readonly="">
                                    <!--end::Input-->
                                </div>
                            </div>
                            <div class="mb-10 fv-row" style="display: flex; margin-bottom:1rem !important">
                                <!--begin::Label-->
                                <label class="form-label"
                                    style="display: block;align-self: center; margin-inline-end: 15px; white-space: nowrap;">{{ trans('volunteer-request.volunteered_before') }}</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <input type="text" class="form-control mb-2"
                                    value="{{ $volunteerRequest->getIsVolunteeredAttribute() }}"
                                    style="display: block;width: 100%;" readonly>
                                <!--end::Input-->
                            </div>
                            @if ($volunteerRequest->volunteered_before)
                                <div class="mb-10 fv-row" style="display: flex; margin-bottom:1rem !important">
                                    <!--begin::Label-->
                                    <label class="form-label"
                                        style="display: block;align-self: center; margin-inline-end: 15px; white-space: nowrap;">{{ trans('volunteer-request.volunteer_info') }}</label>
                                    <!--end::Label-->
                                    <p class="form-control mb-2">{!! $volunteerRequest->volunteer_info !!}</p>
                                </div>
                            @endif

                            <div class="mb-10 fv-row" style="display: flex; margin-bottom:1rem !important">
                                <!--begin::Label-->
                                <label class="form-label"
                                    style="display: block;align-self: center; margin-inline-end: 15px; white-space: nowrap;">{{ trans('volunteer-request.have_skills') }}</label>
                                <!--end::Label-->
                                <input type="text" class="form-control mb-2"
                                    value="{{ $volunteerRequest->getIsSkillsAttribute() }}"
                                    style="display: block;width: 100%;" readonly>
                            </div>

                            @if ($volunteerRequest->have_skills)
                                <div class="mb-10 fv-row" style="display: flex; margin-bottom:1rem !important">
                                    <!--begin::Label-->
                                    <label class="form-label"
                                        style="display: block;align-self: center; margin-inline-end: 15px; white-space: nowrap;">{{ trans('volunteer-request.skills_info') }}</label>
                                    <!--end::Label-->
                                    <p class="form-control mb-2">{!! $volunteerRequest->skills_info !!}</p>
                                </div>
                            @endif

                            <div style="display: flex;">
                                <div class="mb-10 fv-row" style="display: flex;margin-bottom:1rem !important;width: 50%;">
                                    <!--begin::Label-->
                                    <label class="form-label"
                                        style="display: block;align-self: center; margin-inline-end: 15px; white-space: nowrap;">{{ trans('volunteer-request.volunteer_beginning') }}</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input type="text" class="form-control mb-2"
                                        value="{{ $volunteerRequest->volunteer_beginning }}"
                                        style="display: block;width: 100%;" readonly="">
                                    <!--end::Input-->
                                </div>
                                <div style="width: 20px;"></div>
                                <div class="mb-10 fv-row" style="display: flex;margin-bottom:1rem !important;width: 50%;">
                                    <!--begin::Label-->
                                    <label class="form-label"
                                        style="display: block;align-self: center; margin-inline-end: 15px; white-space: nowrap;">{{ trans('volunteer-request.volunteer_ending') }}</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input type="text" class="form-control mb-2"
                                        value="{{ $volunteerRequest->volunteer_ending }}"
                                        style="display: block;width: 100%;" readonly="">
                                    <!--end::Input-->
                                </div>
                            </div>
                            <div class="mb-10 fv-row" style="display: flex; margin-bottom:1rem !important">
                                <!--begin::Label-->
                                <label class="form-label"
                                    style="display: block;align-self: center; margin-inline-end: 15px; white-space: nowrap;">{{ trans('volunteer-request.educational_experience') }}</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <p class="form-control mb-2">{!! $volunteerRequest->educational_experience !!}</p>

                                <!--end::Input-->
                            </div>

                            <div class="mb-10 fv-row" style="display: flex; margin-bottom:1rem !important">
                                <!--begin::Label-->
                                <label class="form-label"
                                    style="display: block;align-self: center; margin-inline-end: 15px; white-space: nowrap;">{{ trans('volunteer-request.cv') }}</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <a class="form-label" style="color:blue"
                                    href="{{ Storage::url($volunteerRequest->cv) }}">{{ trans('volunteer-request.here') }}</a>
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
