@extends('website.layouts.layout')

@section('css')
    <link rel="stylesheet" href="{{ asset('website/css/companyrequest.css') }}">
    <style>
        /* .li{
            text-align: start;
            direction: ltr;
        } */
    </style>
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
                            <li class="active" style="text-align: start;">{{ trans('website-requests.general_assoc_info') }}</li>
                            <li style="text-align: start;">{{ trans('website-requests.additional_info') }}</li>
                            <li style="text-align: start;">{{ trans('website-requests.additional_info') }}</li>
                            <li style="text-align: start;">{{ trans('website-requests.centers_info') }}</li>
                            <li style="text-align: start;">{{ trans('website-requests.enterprise_scope') }}</li>
                            <li style="text-align: start;">{{ trans('website-requests.enterprise_scope') }}</li>
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
                                    <input type="text" id="name" name="name"
                                        style=" font-size: 12px;"
                                        placeholder="{{ trans('website-requests.enterprise_full_name') }}">
                                </div>
                            </div>
                            <span>{{ trans('website-requests.organization_type') }}</span>
                            <div class="input-text" style="margin-bottom:5px;">
                                <div class="input-div" style="top: -20px;">
                                    <select name="organization_type" id="organization_type">
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
                                    <input id="address" name="address"
                                        placeholder="{{ trans('website-requests.main_address') }}" style=""
                                        type="text" value="">
                                    <span class="field-validation-valid" data-valmsg-for="Address"
                                        data-valmsg-replace="true"></span>
                                </div>
                            </div>
                            <span>{{ trans('website-requests.year_founded') }}</span>
                            <div class="input-text">
                                <div class="input-div" style="top: -20px;">
                                    <input type="date" name="foundation_year" id="foundation_year"
                                        placeholder="{{ trans('website-requests.year_founded') }}">
                                </div>
                            </div>
                            <div class="buttons" style="text-align: left;">
                                <button type="button"
                                class="next_button" onclick="validateForm(0);">{{ trans('website-requests.next_one') }}</button>
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
                                    <input type="url" name="website_url" id="website_url"
                                        placeholder="{{ trans('website-requests.official_website') }}">
                                </div>
                            </div>
                            <div class="input-text">
                                <div class="input-div">
                                    <input type="url" name="instagram_link" id="instagram_link"
                                        placeholder="{{ trans('website-requests.instagram') }}">
                                </div>
                            </div>
                            <div class="input-text">
                                <div class="input-div">
                                    <input type="url" name="facebook_link" id="facebook_link"
                                        placeholder="{{ trans('website-requests.facebook') }}">
                                </div>
                            </div>
                            <div class="input-text">
                                <div class="input-div">
                                    <input type="number" name="annual_budget" id="annual_budget"
                                        placeholder="{{ trans('website-requests.annual_budget') }}">
                                </div>
                                <div class="input-div">
                                    <input type="number" name="centers_count" id="centers_count"
                                        placeholder="{{ trans('website-requests.centers_num') }}">
                                </div>
                                <div class="input-div">
                                    <input type="number" name="employees_count" id="employees_count"
                                        placeholder="{{ trans('website-requests.employess_num') }}">
                                </div>
                            </div>
                            <div class="buttons button_space">
                                <button class="back_button">{{ trans('website-requests.back') }}</button>
                                <button type="button"
                                class="next_button" onclick="validateForm(1);">{{ trans('website-requests.next_one') }}</button>
                            </div>
                        </div>
                        <div class="main">
                            <div class="text">
                                <h2>{{ trans('website-requests.additional_info') }}</h2>
                                <p>{{ trans('website-requests.fill_data') }}</p>
                            </div>
                            <div class="input-text">
                                <div class="input-div">
                                    <textarea class="form-control" id="centers_address" name="centers_address" rows="4"
                                        placeholder="{{ trans('website-requests.center_location') }}" style="height: 100px;"
                                        style="font-family: 'Cairo', sans-serif;"></textarea>
                                </div>
                            </div>
                            <div class="input-text">
                                <div class="input-div">
                                    <input type="text" id="mi_registeration_number" name="mi_registeration_number"
                                        placeholder="{{ trans('website-requests.mi_reg_num') }}">
                                </div>

                            </div>
                            <div class="input-text">
                                <div class="input-div">
                                    <input type="text" id="mf_registeration_number" name="mf_registeration_number"
                                        placeholder="{{ trans('website-requests.mf_reg_num') }}">

                                </div>
                            </div>
                            <div class="buttons button_space">
                                <button class="back_button">{{ trans('website-requests.back') }}</button>
                                <button type="button"
                                class="next_button" onclick="validateForm(2);">{{ trans('website-requests.next_one') }}</button>
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
                                    <input type="text" id="current_projects_count"
                                        name="current_projects_count"
                                        placeholder="{{ trans('website-requests.current_projects_num') }}">

                                </div>
                            </div>
                            <div class="input-text">
                                <div class="input-div">
                                    <textarea class="form-control" id="main_donors" name="main_donors" rows="4"
                                        placeholder="{{ trans('website-requests.major_donors') }}" style="height: 100px;"
                                        style="font-family: 'Cairo', sans-serif;"></textarea>
                                </div>
                            </div>
                            <div class="input-text">
                                <div class="input-div">
                                    <textarea class="form-control" id="total_employess_count" name="total_employess_count" rows="4"
                                        placeholder="{{ trans('website-requests.total_employees_num') }}" style="height: 100px;"
                                        style="font-family: 'Cairo', sans-serif;"></textarea>

                                </div>
                            </div>

                            <div class="buttons button_space">
                                <button class="back_button">{{ trans('website-requests.back') }}</button>
                                <button type="button"
                                class="next_button" onclick="validateForm(3);">{{ trans('website-requests.next_one') }}</button>
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
                                    <textarea class="form-control" id="beneficiaries_nationalities" name="beneficiaries_nationalities"
                                        rows="4" placeholder="{{ trans('website-requests.nationalities') }}" style="height: 100px;"></textarea>

                                </div>
                            </div>
                            <div class="input-text">
                                <div class="input-div">
                                    <textarea class="form-control" id="beneficiaries_age" name="beneficiaries_age" rows="4"
                                        placeholder="{{ trans('website-requests.age') }}" style="height: 100px;"></textarea>

                                </div>
                            </div>
                            <div class="input-text">
                                <div class="input-div">
                                    <textarea class="form-control" id="main_objectives" name="main_objectives" rows="4"
                                        placeholder="{{ trans('website-requests.main_goals') }}" style="height: 100px;"></textarea>

                                </div>
                            </div>

                            <div class="buttons button_space">
                                <button class="back_button">{{ trans('website-requests.back') }}</button>
                                <button type="button"
                                class="next_button" onclick="validateForm(4);">{{ trans('website-requests.next_one') }}</button>
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
                                    <input type="file" id="registeration_certification"
                                        name="registeration_certification">
                                </div>
                            </div>
                            <span>{{ trans('website-requests.organizational_structure') }}</span>
                            <div class="input-text" style="margin-top: 5px;">
                                <div class="input-div fileinput">
                                    <input type="file" id="organization_structure" name="organization_structure">
                                </div>
                            </div>
                            <div class="buttons button_space">
                                <button class="back_button">{{ trans('website-requests.back') }}</button>
                                <button type="button"
                                class="next_button" onclick="validateForm(5);">{{ trans('website-requests.next_one') }}</button>
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
@stop
