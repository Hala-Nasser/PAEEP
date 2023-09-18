@extends('website.layouts.layout')

@section('css')
    <link rel="stylesheet" href="{{ asset('website/css/companyrequest.css') }}">
@stop

@section('content')
<div class="container">
    <div class="card">
        <div class="form">
            <div class="left-side">
                <div class="left-heading">

                </div>
                <div class="steps-content">
                    <h3><span class="step-number">  </span>{{trans('website-requests.basic_info')}}</h3>
                </div>
                <ul class="progress-bar">
                    <li class="active">{{trans('website-requests.general_assoc_info')}}</li>
                    <li>{{trans('website-requests.additional_info')}}</li>
                    <li>{{trans('website-requests.additional_info')}}</li>
                    <li>{{trans('website-requests.centers_info')}}</li>
                    <li>{{trans('website-requests.enterprise_scope')}}</li>
                    <li>{{trans('website-requests.enterprise_scope')}}</li>


                </ul>
            </div>
            <div class="right-side">
                <div class="main active">
                    <!-- <small><i class="fa fa-smile-o"></i></small> -->
                    <div class="text">
                        <h2>{{trans('website-requests.general_assoc_info')}}</h2>
                        <p>{{trans('website-requests.fill_data')}}</p>
                    </div>
                    <div class="input-text">
                        <div class="input-div">
                            <input type="text" required require
                                id="user_name"  style=" font-size: 12px;" placeholder="{{trans('website-requests.enterprise_full_name')}}">
                        </div>
                    </div>
                    <div class="input-text">
                        <div class="input-div" style="top: -10px;">
                            <select>
                                <option selected hidden >{{trans('website-requests.organization_type')}}</option>
                                <option>مركز ثقافي وفني</option>
                                <option>مؤسسة تعليمية أو تعليم عالي</option>
                                <option>جهة حكومية</option>
                                <option>منظمة غير حكومية دولية</option>
                                <option>منظمة اعلام وصحافة </option>
                                <option>منظمة غير حكومية </option>
                                <option>منظمات الأشخاص ذوي الإعاقة
                                </option>
                                <option>شركة خاصة </option>
                                <option>مركز بحوث ومناصرة </option>
                                <option>مؤسسة اجتماعية</option>
                                <option>معهد تعليم تقني أو مهني</option>
                                <option>مجموعة شبابية</option>
                                <option>مركز تدريب الشباب</option>
                            </select>
                        </div>
                    </div>
                    {{-- <div class="input-text">
                        <div class="input-div">
                            <input type="text" required require  id="user_name" placeholder="{{trans('website-requests.organization_type')}}">
                        </div>

                    </div> --}}
                    <div class="input-text">
                        <div class="input-div">
                                <input type="date" >
                                <span >{{trans('website-requests.year_founded')}}</span>
                            </div>
                        </div>
                    <div class="buttons" style="text-align: left;">
                        <button class="next_button">{{trans('website-requests.next_one')}}</button>
                    </div>
                </div>
                <div class="main">
                    <div class="text">
                        <h2>{{trans('website-requests.additional_info')}}</h2>
                        <!-- --------------------------- -->
                        <p>{{trans('website-requests.fill_data')}}</p>
                    </div>
                    <div class="input-text">
                        <div class="input-div">
                            <input type="text" required require  placeholder="{{trans('website-requests.official_website')}}">
                        </div>

                    </div>
                    <div class="input-text">
                        <div class="input-div">
                            <input type="text" required require  placeholder="{{trans('website-requests.instagram')}}">

                        </div>
                    </div>
                    <div class="input-text">
                        <div class="input-div">
                            <input type="text" required require   placeholder="{{trans('website-requests.facebook')}}">

                        </div>
                    </div>
                    <div class="input-text">
                        <div class="input-div"  >
                            <input type="number" required require  placeholder="{{trans('website-requests.annual_budget')}}">

                        </div>
                        <div class="input-div" >
                            <input type="number" required require  placeholder="{{trans('website-requests.centers_num')}}">

                        </div>
                        <div class="input-div" >
                            <input type="number" required require placeholder="{{trans('website-requests.employess_num')}}">

                        </div>
                    </div>
                    <div class="buttons button_space" >
                        <button class="back_button"  >{{trans('website-requests.back')}}</button>
                        <button class="next_button">{{trans('website-requests.next_one')}}</button>
                    </div>
                </div>
                <div class="main">
                    <div class="text">
                        <h2>{{trans('website-requests.additional_info')}}</h2>
                        <p>{{trans('website-requests.fill_data')}}</p>
                    </div>
                    <div class="input-text">
                        <div class="input-div">
                            <textarea class="form-control" id="message" name="message" rows="4" placeholder="{{trans('website-requests.center_location')}}" style="height: 100px;" style="font-family: 'Cairo', sans-serif;"></textarea>

                        </div>
                    </div>
                    <div class="input-text">
                        <div class="input-div" >
                            <input type="number" required require placeholder="{{trans('website-requests.mi_reg_num')}}" >

                        </div>

                    </div>
                    <div class="input-text">
                        <div class="input-div"  >
                            <input type="number"   required require placeholder="{{trans('website-requests.mf_reg_num')}}" >

                        </div>
                    </div>
                    <div class="buttons button_space">
                        <button class="back_button" >{{trans('website-requests.back')}}</button>
                        <button class="next_button">{{trans('website-requests.next_one')}}</button>
                    </div>
                </div>




                <!-- ----------------------------- -->
                <div class="main">
                    <!-- <small><i class="fa fa-smile-o"></i></small> -->
                    <div class="text">
                        <h2>{{trans('website-requests.centers_info')}}</h2>
                        <p>{{trans('website-requests.fill_data')}}</p>
                    </div>
                    <div class="input-text">
                        <div class="input-div" >
                            <input type="number" placeholder="{{trans('website-requests.current_projects_num')}}">

                        </div>
                    </div>
                    <div class="input-text">
                        <div class="input-div" >
                            <textarea class="form-control" id="message" name="message" rows="4" placeholder="{{trans('website-requests.major_donors')}}" style="height: 100px;" style="font-family: 'Cairo', sans-serif;"></textarea>

                        </div>
                    </div>
                    <div class="input-text">
                        <div class="input-div" >
                            <textarea class="form-control" id="message" name="message" rows="4" placeholder="{{trans('website-requests.total_employees_num')}}" style="height: 100px;" style="font-family: 'Cairo', sans-serif;"></textarea>

                        </div>
                    </div>

                    <div class="buttons button_space">
                        <button class="back_button" >{{trans('website-requests.back')}}</button>
                        <button class="next_button">{{trans('website-requests.next_one')}}</button>
                    </div>
                </div>
                 <!-- ---------------- -->
                <div class="main">
                    <!-- <small><i class="fa fa-smile-o"></i></small> -->
                    <div class="text">
                        <h2>{{trans('website-requests.enterprise_scope')}}</h2>
                        <p>{{trans('website-requests.fill_data')}}</p>
                    </div>

                    <div class="input-text">
                        <div class="input-div" >
                            <textarea class="form-control" id="message" name="message" rows="4" placeholder="{{trans('website-requests.nationalities')}}" style="height: 100px;"></textarea>

                        </div>
                    </div>
                    <div class="input-text">
                        <div class="input-div" >
                            <textarea class="form-control" id="message" name="message" rows="4" placeholder="{{trans('website-requests.age')}}" style="height: 100px;"></textarea>

                        </div>
                    </div>
                    <div class="input-text">
                        <div class="input-div">
                            <textarea class="form-control" id="message" name="message" rows="4" placeholder="{{trans('website-requests.main_goals')}}" style="height: 100px;"></textarea>

                        </div>
                    </div>

                    <div class="buttons button_space">
                        <button class="back_button" >{{trans('website-requests.back')}}</button>
                        <button class="next_button">{{trans('website-requests.next_one')}}</button>
                    </div>
                </div>
                 <!-- ---------------- -->
                 <!-- ---------------- -->
                <div class="main">
                    <!-- <small><i class="fa fa-smile-o"></i></small> -->
                    <div class="text">
                        <h2>{{trans('website-requests.enterprise_scope')}}</h2>
                        <p>{{trans('website-requests.fill_data')}}</p>
                    </div>

                    <div class="input-text">
                        <div class="input-div fileinput">
                            <input type="file" >
                            <span>{{trans('website-requests.registration_certification')}}</span>
                        </div>
                    </div>
                    <div class="input-text">
                        <div class="input-div fileinput">
                            <input type="file">
                            <span>{{trans('website-requests.organizational_structure')}}</span>
                        </div>
                    </div>
                    <div class="buttons button_space">
                        <button class="back_button">{{trans('website-requests.back')}}</button>
                        <button class="next_button">{{trans('website-requests.next_one')}}</button>
                    </div>
                </div>
                 <!-- ---------------- -->
                <div class="main">
                    <svg class="checkmark"
                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0
                        52 52">
                        <circle class="checkmark__circle" cx="26"
                            cy="26" r="25" fill="none" />
                            <path class="checkmark__check" fill="none"
                                d="M14.1 27.2l7.1 7.2 16.7-16.8" />
                            </svg>

                            {{-- <div class="text congrats">
                                <h2>تم الطلب بنجاح</h2>
                                <p>شكرا لك <span class="shown_name"></span>تم
                                    إرسال معلوماتك بنجاح.</p>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
@stop

@section('js')
<script src="{{asset('website/js/volunteerrequest.js')}}"></script>
@stop
