@extends('dashboard.layouts.auth_layout')

@section('content')
<div class="w-lg-500px bg-body rounded shadow-sm p-10 p-lg-15 mx-auto">
    <!--begin::Form-->
    <form class="form w-100" id="login_form" onsubmit="event.preventDefault(); performLogin();" autocomplete="off">
        <!--begin::Heading-->
        <div class="text-center mb-10">
            <!--begin::Title-->
            <h1 class="text-dark mb-3">{{ trans('login.title') }}</h1>
            <!--end::Title-->
            {{-- <!--begin::Link-->
            <div class="text-gray-400 fw-bold fs-4">New Here?
            <a href="../../demo8/dist/authentication/layouts/basic/sign-up.html" class="link-primary fw-bolder">Create an Account</a></div>
            <!--end::Link--> --}}
        </div>
        <!--begin::Heading-->
        <!--begin::Input group-->
        <div class="fv-row mb-10">
            <!--begin::Label-->
            <label class="form-label fs-6 fw-bolder text-dark">{{ trans('login.email') }}</label>
            <!--end::Label-->
            <!--begin::Input-->
            <input class="form-control form-control-lg form-control-solid" type="text" name="email" autocomplete="off" id="email"/>
            <!--end::Input-->
        </div>
        <!--end::Input group-->
        <!--begin::Input group-->
        <div class="fv-row mb-10">
            <!--begin::Wrapper-->
            <div class="d-flex flex-stack mb-2">
                <!--begin::Label-->
                <label class="form-label fw-bolder text-dark fs-6 mb-0">{{ trans('login.password') }}</label>
                <!--end::Label-->
                <!--begin::Link-->
                <a href="{{route('password.forget')}}" class="link-primary fs-6 fw-bolder">{{ trans('login.forgot_password') }}</a>
                <!--end::Link-->
            </div>
            <!--end::Wrapper-->
            <!--begin::Input-->
            <input class="form-control form-control-lg form-control-solid" type="password" name="password" autocomplete="off" id="password"/>
            <!--end::Input-->
        </div>
        <!--end::Input group-->
        <!--begin::Actions-->
        <div class="text-center">
            <!--begin::Submit button-->
            <button type="submit" class="btn btn-primary">{{ trans('login.continue') }}</button>
            <!--end::Submit button-->
        </div>
        <!--end::Actions-->
    </form>
    <!--end::Form-->
</div>
@endsection

@section('js')
<script>
    function performLogin() {

        axios.post('{{LaravelLocalization::getCurrentLocale()}}/dashboard/login', {
            email: document.getElementById('email').value,
            password: document.getElementById('password').value,
            // remember: document.getElementById('remember').checked,
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
            document.getElementById('login_form').reset();
            window.location.href = "/dashboard/two_factory_options";

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
@endsection
