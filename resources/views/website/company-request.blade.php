@extends('website.layouts.layout')

@section('css')
    <link rel="stylesheet" href="{{ asset('website/css/companyrequest.css') }}">
@stop

@section('content')
    <div class="container">
        <div class="card">
            <form id="company-request-form">

                <div class="form">
                    <div class="left-side">
                        <div class="left-heading">
                        </div>
                        <div class="steps-content">
                            <h3><span class="step-number"> </span>{{ trans('website-requests.basic_info') }}</h3>
                        </div>
                        <ul class="progress-bar">
                            <li class="active">{{ trans('website-requests.general_assoc_info') }}</li>
                            <li>{{ trans('website-requests.additional_info') }}</li>
                            <li>{{ trans('website-requests.additional_info') }}</li>
                            <li>{{ trans('website-requests.centers_info') }}</li>
                            <li>{{ trans('website-requests.enterprise_scope') }}</li>
                            <li>{{ trans('website-requests.enterprise_scope') }}</li>
                        </ul>
                    </div>
                    <div class="right-side">
                        <div class="main active">
                            <!-- <small><i class="fa fa-smile-o"></i></small> -->
                            <div class="text">
                                <h2>{{ trans('website-requests.general_assoc_info') }}</h2>
                                <p>{{ trans('website-requests.fill_data') }}</p>
                            </div>
                            <div class="input-text">
                                <div class="input-div">
                                    <input type="text" required require id="name" name="name"
                                        style=" font-size: 12px;"
                                        placeholder="{{ trans('website-requests.enterprise_full_name') }}">
                                </div>
                            </div>
                            <span>{{ trans('website-requests.organization_type') }}</span>
                            <div class="input-text" style="margin-bottom:5px;">
                                <div class="input-div" style="top: -20px;">
                                    <select requireed require name="organization_type" id="organization_type">
                                        {{-- <option hidden >{{trans('website-requests.organization_type')}}</option> --}}
                                        <option value="Cultural_and_artistic_center">{{trans('website-requests.Cultural_and_artistic_center')}}</option>
                                        <option value="Educational_or_higher_education_institution">{{trans('website-requests.Educational_or_higher_education_institution')}}</option>
                                        <option value="Government_agency">{{trans('website-requests.Government_agency')}}</option>
                                        <option value="International_non-governmental_organization">{{trans('website-requests.International_non-governmental_organization')}}</option>
                                        <option value="Media_and_Press_Organization">{{trans('website-requests.Media_and_Press_Organization')}}</option>
                                        <option value="NGO">{{trans('website-requests.NGO')}}</option>
                                        <option value="Organizations_of_people_with_disabilities">{{trans('website-requests.Organizations_of_people_with_disabilities')}}</option>
                                        <option value="Private_company">{{trans('website-requests.Private_company')}}</option>
                                        <option value="Research_and_Advocacy_Center">{{trans('website-requests.Research_and_Advocacy_Center')}}</option>
                                        <option value="Social_enterprise">{{trans('website-requests.Social_enterprise')}}</option>
                                        <option value="Technical_or_vocational_education_institute">{{trans('website-requests.Technical_or_vocational_education_institute')}}</option>
                                        <option value="Youth_group">{{trans('website-requests.Youth_group')}}</option>
                                        <option value="Youth_Training_Center">{{trans('website-requests.Youth_Training_Center')}}</option>

                                    </select>
                                </div>
                            </div>
                            <div class="input-text" style="margin-bottom:5px;">
                                <div class="input-div" style="top: -20px;">
                                    <input id="address" name="address" required require
                                        placeholder="{{ trans('website-requests.main_address') }}" style=""
                                        type="text" value="">
                                    <span class="field-validation-valid" data-valmsg-for="Address"
                                        data-valmsg-replace="true"></span>
                                </div>
                            </div>
                            <span>{{ trans('website-requests.year_founded') }}</span>
                            <div class="input-text">
                                <div class="input-div" style="top: -20px;">
                                    <input type="date" name="foundation_year" id="foundation_year" required require
                                        placeholder="{{ trans('website-requests.year_founded') }}">
                                </div>
                            </div>
                            <div class="buttons" style="text-align: left;">
                                <button class="next_button">{{ trans('website-requests.next_one') }}</button>
                            </div>
                        </div>
                        <div class="main">
                            <div class="text">
                                <h2>{{ trans('website-requests.additional_info') }}</h2>
                                <!-- --------------------------- -->
                                <p>{{ trans('website-requests.fill_data') }}</p>
                            </div>
                            <div class="input-text">
                                <div class="input-div">
                                    <input type="url" name="website_url" id="website_url" required require
                                        placeholder="{{ trans('website-requests.official_website') }}">
                                </div>
                            </div>
                            <div class="input-text">
                                <div class="input-div">
                                    <input type="url" name="instagram_link" id="instagram_link" required require
                                        placeholder="{{ trans('website-requests.instagram') }}">
                                </div>
                            </div>
                            <div class="input-text">
                                <div class="input-div">
                                    <input type="url" required require name="facebook_link" id="facebook_link"
                                        placeholder="{{ trans('website-requests.facebook') }}">
                                </div>
                            </div>
                            <div class="input-text">
                                <div class="input-div">
                                    <input type="number" required require name="annual_budget" id="annual_budget"
                                        placeholder="{{ trans('website-requests.annual_budget') }}">
                                </div>
                                <div class="input-div">
                                    <input type="number" required require name="centers_count" id="centers_count"
                                        placeholder="{{ trans('website-requests.centers_num') }}">
                                </div>
                                <div class="input-div">
                                    <input type="number" required require name="employees_count" id="employees_count"
                                        placeholder="{{ trans('website-requests.employess_num') }}">
                                </div>
                            </div>
                            <div class="buttons button_space">
                                <button class="back_button">{{ trans('website-requests.back') }}</button>
                                <button class="next_button">{{ trans('website-requests.next_one') }}</button>
                            </div>
                        </div>
                        <div class="main">
                            <div class="text">
                                <h2>{{ trans('website-requests.additional_info') }}</h2>
                                <p>{{ trans('website-requests.fill_data') }}</p>
                            </div>
                            <div class="input-text">
                                <div class="input-div">
                                    <textarea class="form-control" required id="centers_address" name="centers_address" rows="4"
                                        placeholder="{{ trans('website-requests.center_location') }}" style="height: 100px;"
                                        style="font-family: 'Cairo', sans-serif;"></textarea>
                                </div>
                            </div>
                            <div class="input-text">
                                <div class="input-div">
                                    <input type="number" id="mi_registeration_number" name="mi_registeration_number"
                                        required require placeholder="{{ trans('website-requests.mi_reg_num') }}">
                                </div>

                            </div>
                            <div class="input-text">
                                <div class="input-div">
                                    <input type="number" id="mf_registeration_number" name="mf_registeration_number"
                                        required require placeholder="{{ trans('website-requests.mf_reg_num') }}">

                                </div>
                            </div>
                            <div class="buttons button_space">
                                <button class="back_button">{{ trans('website-requests.back') }}</button>
                                <button class="next_button">{{ trans('website-requests.next_one') }}</button>
                            </div>
                        </div>




                        <!-- ----------------------------- -->
                        <div class="main">
                            <!-- <small><i class="fa fa-smile-o"></i></small> -->
                            <div class="text">
                                <h2>{{ trans('website-requests.centers_info') }}</h2>
                                <p>{{ trans('website-requests.fill_data') }}</p>
                            </div>
                            <div class="input-text">
                                <div class="input-div">
                                    <input type="number" required require id="current_projects_count"
                                        name="current_projects_count" required
                                        placeholder="{{ trans('website-requests.current_projects_num') }}">

                                </div>
                            </div>
                            <div class="input-text">
                                <div class="input-div">
                                    <textarea class="form-control" id="main_donors" name="main_donors" rows="4"
                                        placeholder="{{ trans('website-requests.major_donors') }}" style="height: 100px;"
                                        style="font-family: 'Cairo', sans-serif;" required></textarea>
                                </div>
                            </div>
                            <div class="input-text">
                                <div class="input-div">
                                    <textarea class="form-control" id="total_employess_count" name="total_employess_count" rows="4"
                                        placeholder="{{ trans('website-requests.total_employees_num') }}" style="height: 100px;"
                                        style="font-family: 'Cairo', sans-serif;" required></textarea>

                                </div>
                            </div>

                            <div class="buttons button_space">
                                <button class="back_button">{{ trans('website-requests.back') }}</button>
                                <button class="next_button">{{ trans('website-requests.next_one') }}</button>
                            </div>
                        </div>
                        <!-- ---------------- -->
                        <div class="main">
                            <!-- <small><i class="fa fa-smile-o"></i></small> -->
                            <div class="text">
                                <h2>{{ trans('website-requests.enterprise_scope') }}</h2>
                                <p>{{ trans('website-requests.fill_data') }}</p>
                            </div>

                            <div class="input-text">
                                <div class="input-div">
                                    <textarea class="form-control" required require id="beneficiaries_nationalities" name="beneficiaries_nationalities"
                                        rows="4" placeholder="{{ trans('website-requests.nationalities') }}" style="height: 100px;"></textarea>

                                </div>
                            </div>
                            <div class="input-text">
                                <div class="input-div">
                                    <textarea class="form-control" required require id="beneficiaries_age" name="beneficiaries_age" rows="4"
                                        placeholder="{{ trans('website-requests.age') }}" style="height: 100px;"></textarea>

                                </div>
                            </div>
                            <div class="input-text">
                                <div class="input-div">
                                    <textarea class="form-control" required require id="main_objectives" name="main_objectives" rows="4"
                                        placeholder="{{ trans('website-requests.main_goals') }}" style="height: 100px;"></textarea>

                                </div>
                            </div>

                            <div class="buttons button_space">
                                <button class="back_button">{{ trans('website-requests.back') }}</button>
                                <button class="next_button">{{ trans('website-requests.next_one') }}</button>
                            </div>
                        </div>
                        <!-- ---------------- -->
                        <!-- ---------------- -->
                        <div class="main">
                            <!-- <small><i class="fa fa-smile-o"></i></small> -->
                            <div class="text">
                                <h2>{{ trans('website-requests.enterprise_scope') }}</h2>
                                <p>{{ trans('website-requests.fill_data') }}</p>
                            </div>

                            <span>{{ trans('website-requests.registration_certification') }}</span>
                            <div class="input-text" style="margin-top: 5px;">
                                <div class="input-div fileinput">
                                    <input type="file" required require id="registeration_certification"
                                        name="registeration_certification">
                                </div>
                            </div>
                            <span>{{ trans('website-requests.organizational_structure') }}</span>
                            <div class="input-text" style="margin-top: 5px;">
                                <div class="input-div fileinput">
                                    <input type="file" id="organization_structure" name="organization_structure"
                                        required require>
                                </div>
                            </div>
                            <div class="buttons button_space">
                                <button class="back_button">{{ trans('website-requests.back') }}</button>
                                <button type="submit"
                                    class="next_button" onclick="performStore();">{{ trans('website-requests.next_one') }}</button>
                            </div>
                        </div>
                        <!-- ---------------- -->
                    </div>
                </div>
    </form>

        </div>
    </div>

@stop

@section('js')
    <script src="{{ asset('website/js/companyrequest.js') }}"></script>
    <script>
         $(document).ready(function() {
            $(window).keydown(function(event) {
                if (event.keyCode == 13) {
                    event.preventDefault();
                    return false;
                }
            });
        });
        function performStore() {
            let myform = document.getElementById("company-request-form");
            let formData = new FormData(myform);

            axios.post('/{{ LaravelLocalization::getCurrentLocale() }}/website/company-request', formData)
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
                window.location.href = "/website/company-request";

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
