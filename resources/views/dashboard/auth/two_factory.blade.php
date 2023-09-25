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
            </div>
            <!--begin::Heading-->
            <!--begin::Input group-->
            <div class="fv-row mb-10">
                <label class="form-label fw-bolder text-gray-900 fs-6">{{ trans('two_factory.code') }}</label>
                <input class="form-control form-control-solid" type="text" placeholder="" name="code" autocomplete="off"
                    id="code" />
            </div>
            <!--end::Input group-->
            <!--begin::Actions-->
            <div class="d-flex flex-wrap justify-content-center pb-lg-0">
                <button type="button" onclick="checkCode();"
                    class="btn btn-lg btn-primary fw-bolder me-4">{{ trans('two_factory.verify') }}</button>
            </div>
            <!--end::Actions-->
        </form>
        <!--end::Form-->
    </div>
    <!--end::Wrapper-->

@stop
@section('js')
    <script>
        function checkCode() {
            axios.post('dashboard/two_factory/verify', {
                code: document.getElementById('code').value,
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
    </script>
@stop
