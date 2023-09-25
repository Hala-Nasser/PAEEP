@extends('dashboard.layouts.auth_layout')


@section('content')
    <!--begin::Wrapper-->
    <div class="w-lg-500px bg-body rounded shadow-sm p-10 p-lg-15 mx-auto">
        <!--begin::Form-->
        <form class="form w-100">
            <!--begin::Heading-->
            <div class="text-center mb-10">
                <!--begin::Title-->
                <h1 class="text-dark mb-3">{{trans('two_factory.two_factory_options')}}</h1>
                <!--end::Title-->
                <!--begin::Link-->
                <div class="text-gray-400 fw-bold fs-4">{{trans('two_factory.two_factory_through')}}</div>
                <!--end::Link-->
            </div>
            <!--begin::Heading-->
            <!--begin::Actions-->
            <div class="d-flex flex-wrap justify-content-center pb-lg-0">
                <a href="/dashboard/two_factory/email"
                    class="btn btn-lg btn-primary fw-bolder">{{ trans('two_factory.email') }}</a>
                <a href="/dashboard/two_factory/phone"
                    class="btn btn-lg btn-primary fw-bolder" style="margin-inline: 5px">{{ trans('two_factory.phone') }}</a>
            </div>
            <!--end::Actions-->
        </form>
        <!--end::Form-->
    </div>
    <!--end::Wrapper-->

@stop
@section('js')

@stop
