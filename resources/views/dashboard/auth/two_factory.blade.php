@extends('dashboard.layouts.auth_layout')


@section('content')
    <!--begin::Wrapper-->
    <div class="w-lg-500px bg-body rounded shadow-sm p-10 p-lg-15 mx-auto">
        <!--begin::Form-->
        <form class="form w-100">
            <!--begin::Heading-->
            <div class="text-center mb-10">
                <!--begin::Title-->
                <h1 class="text-dark mb-3">{{ trans('two_factory.two_factory') }}</h1>
                <!--end::Title-->
                <!--begin::Link-->
                <div class="text-gray-400 fw-bold fs-4">{{ trans('two_factory.enter_code') }}</div>
                <!--end::Link-->
                <div class="fw-bolder text-dark fs-3">{{ $to }}</div>

            </div>
            <!--begin::Heading-->
            <!--begin::Section-->
            <div class="mb-10 px-md-10">
                <!--begin::Label-->
                <div class="fw-bolder text-start text-dark fs-6 mb-1 ms-1">{{ trans('two_factory.type_code') }}</div>
                <!--end::Label-->
                <!--begin::Input group-->
                <div class="d-flex flex-wrap flex-stack">
                    <input type="text" data-inputmask="'mask': '9', 'placeholder': ''" maxlength="1"
                        class="form-control form-control-solid h-60px w-60px fs-2qx text-center border-primary border-hover mx-1 my-2"
                        value="" id="first_digit" />
                    <input type="text" data-inputmask="'mask': '9', 'placeholder': ''" maxlength="1"
                        class="form-control form-control-solid h-60px w-60px fs-2qx text-center border-primary border-hover mx-1 my-2"
                        value="" id="second_digit" />
                    <input type="text" data-inputmask="'mask': '9', 'placeholder': ''" maxlength="1"
                        class="form-control form-control-solid h-60px w-60px fs-2qx text-center border-primary border-hover mx-1 my-2"
                        value="" id="third_digit" />
                    <input type="text" data-inputmask="'mask': '9', 'placeholder': ''" maxlength="1"
                        class="form-control form-control-solid h-60px w-60px fs-2qx text-center border-primary border-hover mx-1 my-2"
                        value="" id="fourth_digit" />
                </div>
                <!--begin::Input group-->
            </div>
            <!--end::Section-->
            <!--begin::Actions-->
            <div class="d-flex flex-wrap justify-content-center pb-lg-0">
                <button type="button" onclick="checkCode();"
                    class="btn btn-lg btn-primary fw-bolder me-4">{{ trans('two_factory.verify') }}</button>
            </div>
            <!--end::Actions-->
        </form>
        <!--end::Form-->
        <!--begin::Notice-->
        <div class="text-center fw-bold fs-5" style="margin-top: 10px">
            <span class="text-muted me-1">{{ trans('two_factory.didnt_get_code') }}</span>
            <a onclick="resendCode();" class="link-primary fw-bolder fs-5 me-1">{{ trans('two_factory.resend') }}</a>
        </div>
        <!--end::Notice-->
    </div>
    <!--end::Wrapper-->

@stop
@section('js')
    <script>
        function checkCode() {
            first_digit = document.getElementById('first_digit').value;
            second_digit = document.getElementById('second_digit').value;
            third_digit = document.getElementById('third_digit').value;
            fourth_digit = document.getElementById('fourth_digit').value;
            var current_language = "{!! config('app.locale') !!}";
            if (current_language == "ar") {
                code = fourth_digit + third_digit + second_digit + first_digit;
            } else {
                code = first_digit + second_digit + third_digit + fourth_digit;
            }
            axios.post('dashboard/two_factory/verify', {
                code: code,
            }).then(function(response) {
                console.log(response);
                const Toast = Swal.mixin({
                    toast: true,
                    position: 'top-end',
                    showConfirmButton: false,
                    timer: 1500,
                    timerProgressBar: true,
                    didOpen: (toast) => {
                        toast.addEventListener('mouseenter', Swal.stopTimer)
                        toast.addEventListener('mouseleave', Swal.resumeTimer)
                    }
                })
                Toast.fire({
                    icon: 'success',
                    title: response.data.message
                })
                window.location.href = "/dashboard/home";
            }).catch(function(error) {
                console.log(error);
                const Toast = Swal.mixin({
                    toast: true,
                    position: 'top-end',
                    showConfirmButton: false,
                    timer: 1500,
                    timerProgressBar: true,
                    didOpen: (toast) => {
                        toast.addEventListener('mouseenter', Swal.stopTimer)
                        toast.addEventListener('mouseleave', Swal.resumeTimer)
                    }
                })
                Toast.fire({
                    icon: 'error',
                    title: error.response.data.message
                })
            });
        }


        function resendCode(){
            axios.post('dashboard/two_factory/resend/{{$option}}').then(function(response) {
                console.log(response);
                const Toast = Swal.mixin({
                    toast: true,
                    position: 'top-end',
                    showConfirmButton: false,
                    timer: 1500,
                    timerProgressBar: true,
                    didOpen: (toast) => {
                        toast.addEventListener('mouseenter', Swal.stopTimer)
                        toast.addEventListener('mouseleave', Swal.resumeTimer)
                    }
                })
                Toast.fire({
                    icon: 'success',
                    title: response.data.message
                })
                // window.location.href = "/dashboard/home";
            }).catch(function(error) {
                console.log(error);
                const Toast = Swal.mixin({
                    toast: true,
                    position: 'top-end',
                    showConfirmButton: false,
                    timer: 1500,
                    timerProgressBar: true,
                    didOpen: (toast) => {
                        toast.addEventListener('mouseenter', Swal.stopTimer)
                        toast.addEventListener('mouseleave', Swal.resumeTimer)
                    }
                })
                Toast.fire({
                    icon: 'error',
                    title: error.response.data.message
                })
            });
        }
    </script>
@stop
