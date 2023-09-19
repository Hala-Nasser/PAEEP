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
                                    <a
                                        class="fw-bolder text-dark text-hover-primary">{{ $jobRequest->first_name }} {{$jobRequest->last_name}}</a>
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
                            <span class="fw-bold text-muted text-end me-3">{{ $jobRequest->created_at }}</span>
                            <!--end::Date-->
                        </div>
                        <!--end::Actions-->
                    </div>
                    <!--end::Message header-->
                    <!--begin::Message content-->
                    <div class="collapse fade show" data-kt-inbox-message="message">
                        <!--begin::Card header-->
                        <div class="card-title" style="margin-top: 15px">
                            <h2>{{ trans('job-request.request_details') }}</h2>
                        </div>
                        <!--end::Card header-->
                        <!--begin::Card body-->
                        <div class="card-body pt-0" style="margin-top:15px;">
                            <div style="display: flex;">
                                <div class="mb-10 fv-row" style="display: flex;margin-bottom:1rem !important;width: 50%;">
                                    <!--begin::Label-->
                                    <label class="form-label" style="display: block;align-self: center; margin-inline-end: 15px; white-space: nowrap;">{{ trans('job-request.first_name') }}</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input type="text" class="form-control mb-2" value="{{ $jobRequest->first_name }}" style="display: block;width: 100%;" readonly="">
                                    <!--end::Input-->
                                </div>
                                <div style="width: 20px;"></div>
                                <div class="mb-10 fv-row" style="display: flex;margin-bottom:1rem !important;width: 50%;">
                                    <!--begin::Label-->
                                    <label class="form-label" style="display: block;align-self: center; margin-inline-end: 15px; white-space: nowrap;">{{ trans('job-request.father_name') }}</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input type="text" class="form-control mb-2" value="{{ $jobRequest->father_name }}" style="display: block;width: 100%;" readonly="">
                                    <!--end::Input-->
                                </div>
                            </div>

                            <div style="display: flex;">
                                <div class="mb-10 fv-row" style="display: flex;margin-bottom:1rem !important;width: 50%;">
                                    <!--begin::Label-->
                                    <label class="form-label" style="display: block;align-self: center; margin-inline-end: 15px; white-space: nowrap;">{{ trans('job-request.grandfather_name') }}</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input type="text" class="form-control mb-2" value="{{ $jobRequest->grandfather_name }}" style="display: block;width: 100%;" readonly="">
                                    <!--end::Input-->
                                </div>
                                <div style="width: 20px;"></div>
                                <div class="mb-10 fv-row" style="display: flex;margin-bottom:1rem !important;width: 50%;">
                                    <!--begin::Label-->
                                    <label class="form-label" style="display: block;align-self: center; margin-inline-end: 15px; white-space: nowrap;">{{ trans('job-request.last_name') }}</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input type="text" class="form-control mb-2" value="{{ $jobRequest->last_name }}" style="display: block;width: 100%;" readonly="">
                                    <!--end::Input-->
                                </div>
                            </div>

                            <div style="display: flex;">
                                <div class="mb-10 fv-row" style="display: flex;margin-bottom:1rem !important;width: 50%;">
                                    <!--begin::Label-->
                                    <label class="form-label" style="display: block;align-self: center; margin-inline-end: 15px; white-space: nowrap;">{{ trans('job-request.phone') }}</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input type="text" class="form-control mb-2" value="{{ $jobRequest->phone }}" style="display: block;width: 100%;" readonly="">
                                    <!--end::Input-->
                                </div>
                                <div style="width: 20px;"></div>
                                <div class="mb-10 fv-row" style="display: flex;margin-bottom:1rem !important;width: 50%;">
                                    <!--begin::Label-->
                                    <label class="form-label" style="display: block;align-self: center; margin-inline-end: 15px; white-space: nowrap;">{{ trans('job-request.email') }}</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input type="text" class="form-control mb-2" value="{{ $jobRequest->email }}" style="display: block;width: 100%;" readonly="">
                                    <!--end::Input-->
                                </div>
                            </div>

                            <div style="display: flex;">
                                <div class="mb-10 fv-row" style="display: flex;margin-bottom:1rem !important;width: 50%;">
                                    <!--begin::Label-->
                                    <label class="form-label" style="display: block;align-self: center; margin-inline-end: 15px; white-space: nowrap;">{{ trans('job-request.gender') }}</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input type="text" class="form-control mb-2" value="{{ trans('general.'.$jobRequest->gender.'')}}" style="display: block;width: 100%;" readonly="">
                                    <!--end::Input-->
                                </div>
                                <div style="width: 20px;"></div>
                                <div class="mb-10 fv-row" style="display: flex;margin-bottom:1rem !important;width: 50%;">
                                    <!--begin::Label-->
                                    <label class="form-label" style="display: block;align-self: center; margin-inline-end: 15px; white-space: nowrap;">{{ trans('job-request.birthday') }}</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input type="text" class="form-control mb-2" value="{{ $jobRequest->birthday }}" style="display: block;width: 100%;" readonly="">
                                    <!--end::Input-->
                                </div>
                            </div>
                            <div class="mb-10 fv-row" style="display: flex; margin-bottom:1rem !important">
                                <!--begin::Label-->
                                <label class="form-label"
                                    style="display: block;align-self: center; margin-inline-end: 15px; white-space: nowrap;">{{ trans('job-request.qualification') }}</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <p class="form-control mb-2">{!! $jobRequest->qualification !!}</p>

                                <!--end::Input-->
                            </div>
                            <div class="mb-10 fv-row" style="display: flex; margin-bottom:1rem !important">
                                <!--begin::Label-->
                                <label class="form-label"
                                    style="display: block;align-self: center; margin-inline-end: 15px; white-space: nowrap;">{{ trans('job-request.cv') }}</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                    <a class="form-label" style="color:blue"
                                        href="{{ Storage::url($jobRequest->cv) }}">{{ trans('job-request.here') }}</a>
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
