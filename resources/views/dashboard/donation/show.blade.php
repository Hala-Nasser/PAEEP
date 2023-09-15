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
                        
                            </div>
                        </div>
                        <!--end::Author-->
                        <!--begin::Actions-->
                        <div class="d-flex align-items-center flex-wrap gap-2">
                            <!--begin::Date-->
                            <span class="fw-bold text-muted text-end me-3">{{ $donation->created_at }}</span>
                            <!--end::Date-->
                        </div>
                        <!--end::Actions-->
                    </div>
                    <!--end::Message header-->
                    <!--begin::Message content-->
                    <div class="collapse fade show" data-kt-inbox-message="message">
                        <!--begin::Card header-->
                        <div class="card-title" style="margin-top: 15px">
                            <h2>{{ trans('donation.donation_details') }}</h2>
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
                                <input type="text" class="form-control mb-2" value="{{ $donation->name }}"
                                    style="display: block;width: 100%;" readonly>
                                <!--end::Input-->
                            </div>
                            <div class="mb-10 fv-row" style="display: flex; margin-bottom:1rem !important">
                                <!--begin::Label-->
                                <label class="form-label"
                                    style="display: block;align-self: center; margin-inline-end: 15px; white-space: nowrap;">{{ trans('donation.email') }}</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <input type="text" class="form-control mb-2" value="{{ $donation->email }}"
                                    style="display: block;width: 100%;" readonly>
                                <!--end::Input-->
                            </div>
                            <div class="mb-10 fv-row" style="display: flex; margin-bottom:1rem !important">
                                <!--begin::Label-->
                                <label class="form-label"
                                    style="display: block;align-self: center; margin-inline-end: 15px; white-space: nowrap;">{{ trans('donation.phone') }}</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <input type="text" class="form-control mb-2" value="{{ $donation->phone }}"
                                    style="display: block;width: 100%;" readonly>
                                <!--end::Input-->
                            </div>
                            <div class="mb-10 fv-row" style="display: flex; margin-bottom:1rem !important">
                                <!--begin::Label-->
                                <label class="form-label"
                                    style="display: block;align-self: center; margin-inline-end: 15px; white-space: nowrap;">{{ trans('donation.amount') }}</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <input type="text" class="form-control mb-2" value="{{ $donation->amount }}"
                                    style="display: block;width: 100%;" readonly>
                                <!--end::Input-->
                            </div>

                        </div>
                        <!--end::Card header-->

                        <div class="card-title">
                            <h2>{{ trans('donation.donor_message') }}</h2>
                        </div>
                        <!--end::Card header-->
                        <!--begin::Card body-->
                        <div class="card-body pt-0" style="margin-top:15px;">
                            <p class="form-control mb-2">{!! $donation->message !!}</p>
                        </div>
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
