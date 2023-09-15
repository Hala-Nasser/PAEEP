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
                                        class="fw-bolder text-dark text-hover-primary">{{ $contact_u->email }}</a>
                                    {{-- <span class="text-muted fw-bolder">1 day ago</span> --}}
                                </div>
                                <!--end::Author details-->
                                <!--begin::Message details-->
                                <div data-kt-inbox-message="details">
                                    <span class="text-muted fw-bold">to me</span>
                                </div>
                                <!--end::Message details-->
                            </div>
                        </div>
                        <!--end::Author-->
                        <!--begin::Actions-->
                        <div class="d-flex align-items-center flex-wrap gap-2">
                            <!--begin::Date-->
                            <span class="fw-bold text-muted text-end me-3">{{ $contact_u->created_at }}</span>
                            <!--end::Date-->
                            <div class="d-flex">
                                <!--begin::Star-->
                                <button class="btn" onclick="DeleteMessage({{ $contact_u->id }},this);" type="button"
                                    style="width: 20px; height: 30px; align-items: center; display: flex; justify-content: center;">
                                    <i class="fa fa-trash" aria-hidden="true" style="color: #bdbdbd;"></i>
                                </button>
                                <!--end::Star-->
                            </div>
                        </div>
                        <!--end::Actions-->
                    </div>
                    <!--end::Message header-->
                    <!--begin::Message content-->
                    <div class="collapse fade show" data-kt-inbox-message="message">
                        <div class="py-5">
                            <p>{!! $contact_u->message !!}</p>
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
    <script>
        function DeleteMessage(id, element) {
            Swal.fire({
                title: '{{ trans('delete_popup.title') }}',
                text: "{{trans('delete_popup.message')}}",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: '{{ trans('delete_popup.confirm') }}',
                cancelButtonText: '{{ trans('delete_popup.cancel') }}'
            }).then((result) => {

                if (result.isConfirmed) {
                    performDelete(id, element)

                }
            })

        }

        function performDelete(id, element) {
            axios.delete('{{ LaravelLocalization::getCurrentLocale() }}/dashboard/contact-us/' + id)
                .then(function(response) {
                    console.log(response);
                    Swal.fire({
                        position: 'center',
                        icon: response.data.icon,
                        title: response.data.message,
                        showConfirmButton: false,
                        timer: 1500
                    })
                    window.location.href = "/dashboard/contact-us";
                })
                .catch(function(error) {
                    console.log(error);
                    Swal.fire({
                        position: 'center',
                        icon: error.response.data.icon,
                        title: error.response.data.message,
                        showConfirmButton: false,
                        timer: 1500
                    })
                });
        }
    </script>
@stop
