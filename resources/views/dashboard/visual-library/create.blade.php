@extends('dashboard.layouts.dashboard_layout')

@section('css')
    <link href="{{ asset('dist/assets/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
    <script src="{{ asset('dist/assets/plugins/global/plugins.bundle.js') }}"></script>
@endsection

@section('content')
    <!--begin::Content-->
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <!--begin::Container-->
        <div class="container-fluid" id="kt_content_container">
            <form id="kt_ecommerce_add_category_form" class="form d-flex flex-column flex-lg-row"
                onsubmit="event.preventDefault(); performStore();">
                <!--begin::Aside column-->
                <div class="d-flex flex-column gap-7 gap-lg-10 w-100 w-lg-300px mb-7 me-lg-10">
                    <!--begin::Thumbnail settings-->
                    <div class="card card-flush py-4">
                        <!--begin::Card header-->
                        <div class="card-header">
                            <!--begin::Card title-->
                            <div class="card-title required">
                                <h2>{{ trans('visual-library.thumbnail') }}</h2>
                            </div>
                            <!--end::Card title-->
                        </div>
                        <!--end::Card header-->
                        <!--begin::Card body-->
                        <div class="card-body text-center pt-0">
                            <!--begin::Image input-->
                            <div class="image-input image-input-empty image-input-outline mb-3" data-kt-image-input="true"
                                style="background-image: url({{ asset('dist/assets/media/svg/files/blank-image.svg') }})"
                                id="background">
                                <!--begin::Preview existing avatar-->
                                <div class="image-input-wrapper w-150px h-150px"></div>
                                <!--end::Preview existing avatar-->
                                <!--begin::Label-->
                                <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                    data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Change avatar">
                                    <!--begin::Icon-->
                                    <i class="bi bi-pencil-fill fs-7"></i>
                                    <!--end::Icon-->
                                    <!--begin::Inputs-->
                                    <input type="file" name="avatar" accept=".png, .jpg, .jpeg" id="image" />
                                    <input type="hidden" name="avatar_remove" />
                                    <!--end::Inputs-->
                                </label>
                                <!--end::Label-->
                                <!--begin::Cancel-->
                                <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                    data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="Cancel avatar"
                                    id="cancel_thumbnail">
                                    <i class="bi bi-x fs-2"></i>
                                </span>
                                <!--end::Cancel-->
                                <!--begin::Remove-->
                                <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                    data-kt-image-input-action="remove" data-bs-toggle="tooltip" title="Remove avatar">
                                    <i class="bi bi-x fs-2"></i>
                                </span>
                                <!--end::Remove-->
                            </div>
                            <!--end::Image input-->
                            <!--begin::Description-->
                            <div class="text-muted fs-7">{{ trans('visual-library.thumbnail_description') }}</div>
                            <!--end::Description-->
                        </div>
                        <!--end::Card body-->
                    </div>
                    <!--end::Thumbnail settings-->
                    <div class="card card-flush py-4">
                        <!--begin::Card header-->
                        <div class="card-header">
                            <!--begin::Card title-->
                            <div class="card-title">
                                <h2>{{ trans('visual-library.visual-library_details') }}</h2>
                            </div>
                            <!--end::Card title-->
                        </div>
                        <!--end::Card header-->
                        <!--begin::Card body-->
                        <div class="card-body pt-0">
                            <!--begin::Input group-->
                            <div class="mb-10 fv-row">
                                <!--begin::Label-->
                                <label class="required form-label">{{ trans('visual-library.visual-library_title_en') }}</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <input type="text" class="form-control mb-2"
                                    placeholder="{{ trans('visual-library.visual-library_title_en') }}" value="" id="title_en" />
                                <!--end::Input-->
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="mb-10 fv-row">
                                <!--begin::Label-->
                                <label class="required form-label">{{ trans('visual-library.visual-library_title_ar') }}</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <input type="text" class="form-control mb-2"
                                    placeholder="{{ trans('visual-library.visual-library_title_ar') }}" value="" id="title_ar" />
                                <!--end::Input-->
                            </div>
                            <!--end::Input group-->

                            <label class="required form-label">{{ trans('visual-library.media') }}</label>
                            <div class="mb-10 fv-row">
                                <!--begin::Dropzone-->
                                <div class="dropzone" id="dropzone">
                                    <!--begin::Message-->
                                    <div class="dz-message needsclick">
                                        <!--begin::Icon-->
                                        <i class="bi bi-file-earmark-arrow-up text-primary fs-3x"></i>
                                        <!--end::Icon-->
                                        <!--begin::Info-->
                                        <div class="ms-4">
                                            <h3 class="fs-5 fw-bolder text-gray-900 mb-1">{{trans('visual-library.drop_media_here')}}</h3>
                                            <span class="fs-7 fw-bold text-gray-400">{{trans('visual-library.upload_files')}}</span>
                                        </div>
                                        <!--end::Info-->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end::Card body-->

                    </div>
                </div>
                <!--end::Aside column-->
                <!--begin::Main column-->
                <div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-10">
                    <!--begin::General options-->
                    <div class="card card-flush py-4">
                        <!--begin::Card header-->
                        <div class="card-header">
                            <div class="card-title">
                                <h2>{{ trans('visual-library.general') }}</h2>
                            </div>
                        </div>
                        <!--end::Card header-->
                        <!--begin::Card body-->
                        <div class="card-body pt-0">
                            <!--begin::Input group-->
                            <div class="mb-10 fv-row">
                                <!--begin::Label-->
                                <label class="required form-label">{{ trans('visual-library.description_en') }}</label>
                                <!--end::Label-->
                                <!--begin::Editor-->
                                <textarea class="form-control my-text-area" id="description_en"></textarea>
                                <!--end::Editor-->
                            </div>
                            <!--begin::Input group-->
                            <div class="mb-10 fv-row">
                                <!--begin::Label-->
                                <label class="required form-label">{{ trans('visual-library.description_ar') }}</label>
                                <!--end::Label-->
                                <!--begin::Editor-->
                                <textarea class="form-control my-text-area" id="description_ar"></textarea>
                                <!--end::Editor-->
                            </div>

                        </div>
                        <!--end::Card header-->
                    </div>
                    <!--end::General options-->
                    <div class="d-flex justify-content-end">
                        <!--begin::Button-->
                        <a href="{{ route('visual-library.index') }}" id="kt_ecommerce_add_product_cancel"
                            class="btn btn-light me-5">{{ trans('general.cancel') }}</a>
                        <!--end::Button-->
                        <!--begin::Button-->
                        <button type="submit" id="kt_ecommerce_add_category_submit" class="btn btn-primary">
                            {{ trans('general.save') }}
                        </button>
                        <!--end::Button-->
                    </div>
                </div>
                <!--end::Main column-->
            </form>
        </div>
        <!--end::Container-->
    </div>
    <!--end::Content-->
@endsection

@section('js')
    <script>
        let myDropzone = new Dropzone("#dropzone", {
            autoProcessQueue: false,
            url: "https://keenthemes.com/scripts/void.php",
            paramName: "file",
            maxFiles: 15,
            // maxFilesize: 5,
            acceptedFiles: ".jpeg, .jpg, .png",
            addRemoveLinks: true,
            accept: function(e, t) {
                "wow.jpg" == e.name ? t("Naha, you don't.") : t();
            }
        });

        function Images() {
            return myDropzone.getAcceptedFiles();
        }


        function performStore() {

            let formData = new FormData();

            Images().forEach((e) => {
                formData.append('images[]', e);
            });

            formData.append('title_en', document.getElementById('title_en').value);
            formData.append('title_ar', document.getElementById('title_ar').value);
            formData.append('description_en', tinymce.get("description_en").getContent());
            formData.append('description_ar', tinymce.get("description_ar").getContent());

            if (document.getElementById('image').files.length > 0) {
                formData.append('image', document.getElementById('image').files[0]);
            }
            axios.post('{{ LaravelLocalization::getCurrentLocale() }}/dashboard/visual-library', formData).then(function(response) {
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
                window.location.href = "/dashboard/visual-library";


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
