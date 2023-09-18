@extends('dashboard.layouts.dashboard_layout')

@section('css')
@endsection

@section('content')
    <div id="kt_content_container" class="container-xxl">

        <!--begin::Card-->
        <div class="card">
            <!--begin::Card header-->
            <div class="card-header">
                <!--begin::Card title-->
                <div class="card-title fs-3 fw-bolder">Project Settings</div>
                <!--end::Card title-->
            </div>
            <!--end::Card header-->
            <!--begin::Form-->
            <form id="setting-form" class="form d-flex flex-column flex-lg-row"
                onsubmit="event.preventDefault(); performUpdate();">
                <!--begin::Card body-->
                <div class="card-body p-9">
                    <!--begin::Row-->
                    @foreach ($data as $object)
                        <div class="row" style="margin-bottom:10px;">
                            <!--begin::Col-->
                            <div class="col-xl-3">
                                <div class="fs-6 fw-bold mt-2 mb-3">{{ $object->getLabel() }}</div>
                            </div>
                            <!--end::Col-->
                            @if ($object->type == 'text')
                                <!--begin::Col-->
                                <div class="col-xl-9 fv-row fv-plugins-icon-container">
                                    <input type="text" class="form-control form-control-solid" name="{{ $object->key }}"
                                        id="{{ $object->key }}" value="{{ $object->value }}">
                                </div>
                                <!--end::Col-->
                            @elseif($object->type == 'long-text')
                                <div class="col-xl-9 fv-row fv-plugins-icon-container">
                                    <textarea class="form-control my-text-area" name="{{ $object->key }}" id="{{ $object->key }}">{{ $object->value }}</textarea>
                                </div>
                            @elseif($object->type == 'image')
                                <div class="col-lg-8">
                                    <!--begin::Image input-->
                                        @if ($object->value)
                                            <div class="image-input image-input-empty image-input-outline mb-3"
                                                data-kt-image-input="true"
                                                style="background-image: url({{ Storage::url($object->value) }})"
                                                id="background">
                                            @else
                                                <div class="image-input image-input-empty image-input-outline mb-3"
                                                    data-kt-image-input="true"
                                                    style="background-image: url({{ asset('dist/assets/media/svg/files/blank-image.svg') }})"
                                                    id="background">
                                        @endif
                                        <!--begin::Preview existing avatar-->
                                        <div class="image-input-wrapper w-150px h-150px"></div>
                                        <!--end::Preview existing avatar-->
                                        <!--begin::Label-->
                                        <label
                                            class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-white shadow"
                                            data-kt-image-input-action="change" data-bs-toggle="tooltip" title=""
                                            data-bs-original-title="Change avatar">
                                            <i class="bi bi-pencil-fill fs-7"></i>
                                            <!--begin::Inputs-->
                                            <input type="file" accept=".png, .jpg, .jpeg" id="{{ $object->key }}"
                                                name="{{ $object->key }}">
                                            <input type="hidden">
                                            <!--end::Inputs-->
                                        </label>
                                        <!--end::Label-->
                                        <!--begin::Cancel-->
                                        <span
                                            class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-white shadow"
                                            data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title=""
                                            data-bs-original-title="Cancel avatar">
                                            <i class="bi bi-x fs-2"></i>
                                        </span>
                                        <!--end::Cancel-->
                                        <!--begin::Remove-->
                                        <span
                                            class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-white shadow"
                                            data-kt-image-input-action="remove" data-bs-toggle="tooltip" title=""
                                            data-bs-original-title="Remove avatar">
                                            <i class="bi bi-x fs-2"></i>
                                        </span>
                                        <!--end::Remove-->
                                    </div>
                                    <!--end::Image input-->
                                    <!--begin::Hint-->
                                    <div class="form-text">{{ trans('general.image_allowed_files') }}</div>
                                    <!--end::Hint-->
                                </div>
                            @endif
                        </div>
                    @endforeach
                    <!--begin::Card footer-->
                    <div class="d-flex justify-content-end">
                        <!--begin::Button-->
                        <button type="submit" id="kt_ecommerce_add_category_submit" class="btn btn-primary">
                            {{ trans('general.save') }}
                        </button>
                        <!--end::Button-->
                    </div>
                    <!--end::Card footer-->
                </div>
                <!--end::Card body-->

            </form>
            <!--end:Form-->
        </div>
        <!--end::Card-->
    </div>
@endsection

@section('js')
    <script>
        function performUpdate() {
            let myform = document.getElementById("setting-form");
            let formData = new FormData(myform);
            // formData.append('_method', 'PUT');

            if ("{{ $data[0]->group }}" == "contact-info") {
                formData.append('description_en', tinymce.get("description_en").getContent());
                formData.append('description_ar', tinymce.get("description_ar").getContent());
            }else if("{{ $data[0]->group }}" == "about"){
                formData.append('about_description_en', tinymce.get("about_description_en").getContent());
                formData.append('about_description_ar', tinymce.get("about_description_ar").getContent());
            }else if("{{ $data[0]->group }}" == "vision"){
                formData.append('vision_description_en', tinymce.get("vision_description_en").getContent());
                formData.append('vision_description_ar', tinymce.get("vision_description_ar").getContent());
            }else if("{{ $data[0]->group }}" == "message"){
                formData.append('message_description_en', tinymce.get("message_description_en").getContent());
                formData.append('message_description_ar', tinymce.get("message_description_ar").getContent());
            }else if("{{ $data[0]->group }}" == "principle"){
                formData.append('principle_description_en', tinymce.get("principle_description_en").getContent());
                formData.append('principle_description_ar', tinymce.get("principle_description_ar").getContent());
            }else if("{{ $data[0]->group }}" == "objective"){
                formData.append('objective_description_en', tinymce.get("objective_description_en").getContent());
                formData.append('objective_description_ar', tinymce.get("objective_description_ar").getContent());
            }

            axios.post('/{{ LaravelLocalization::getCurrentLocale() }}/dashboard/update-setting', formData)
                .then(function(response) {

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
                    // window.location.href = "/dashboard/report";


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
