@extends('website.layouts.layout')

@section('css')
    <link rel="stylesheet" href="{{ asset('website/css/volunteerrequest.css') }}">
@stop

@section('content')
    <div class="container">
        <div class="card">
            <form id="volunteer-request-form">
                <div class="form">
                    <div class="left-side">
                        <div class="left-heading">
                        </div>
                        <div class="steps-content">
                            <h3><span class="step-number"> </span>{{trans('website-requests.basic_info')}}</h3>
                        </div>
                        <ul class="progress-bar">
                            <li class="active" style="text-align: start;">{{trans('website-requests.basic_info')}}</li>
                            <li style="text-align: start;">{{trans('website-requests.additional_info')}}</li>
                        </ul>
                    </div>
                    <div class="right-side">
                        <div class="main active">
                            <div class="text">
                                <h2 style="font-weight: bold;">{{trans('website-requests.volunteer_req')}}</h2>
                                <p>{{trans('website-requests.fill_data')}}</p>
                            </div>
                            <div class="input-text">
                                <div class="input-div">
                                    <input type="text" id="full_name" name="full_name" value="{{request('full_name')}}"
                                        placeholder="{{trans('website-requests.full_name')}}">
                                </div>
                                <div class="input-div">
                                    <input type="text" value="{{request('phone')}}" id="phone" name="phone" placeholder="{{trans('website-requests.phone')}}">
                                </div>
                            </div>
                            <div class="input-text">
                                <div class="input-div">
                                    <input type="text" id="email" name="email" value="{{request('email')}}"
                                        placeholder="{{trans('website-requests.email')}}">
                                </div>
                                <div class="input-div">
                                    <input type="text" id="address" name="address" value="{{request('address')}}"
                                        placeholder="{{trans('website-requests.address')}}">
                                </div>
                            </div>
                            <span>{{ trans('website-requests.volunteered_before') }}</span>
                            <div class="input-text" style="margin-bottom: 10px">
                                <div class="input-div" style="top: -20px">
                                    <select id="volunteered_before" name="volunteered_before">
                                        <option value="1">{{trans('website-requests.yes')}}</option>
                                        <option value="0">{{trans('website-requests.no')}}</option>
                                    </select>
                                </div>
                            </div>
                            <div class="input-text" style="margin-top: -10px">
                                <div class="input-div">
                                    <input type="text" id="volunteer_info" name="volunteer_info" value="{{request('volunteered_info')}}"
                                        placeholder="{{trans('website-requests.mention_breifly')}}">
                                </div>
                            </div>
                            <span>{{ trans('website-requests.have_skills') }}</span>
                            <div class="input-text" style="margin-bottom: 10px">
                                <div class="input-div" style="top: -20px">
                                    <select id="have_skills" name="have_skills">
                                        <option value="1">{{trans('website-requests.yes')}}</option>
                                        <option value="0">{{trans('website-requests.no')}}</option>
                                    </select>
                                </div>
                            </div>
                            <div class="input-text" style="margin-top: -10px">
                                <div class="input-div">
                                    <input type="text" id="skills_info" name="skills_info" value="{{request('skills_info')}}"
                                        placeholder="{{trans('website-requests.mention_breifly')}}">
                                </div>
                            </div>
                            <div class="buttons">
                                <button type="button" onclick="validateForm(0);" class="next_button">{{ trans('website-requests.next_one') }}</button>
                            </div>
                        </div>
                        <div class="main">
                            <div class="text">
                                <h2>{{trans('website-requests.additional_info')}}</h2>
                                <p>{{trans('website-requests.fill_data')}}</p>
                            </div>
                            <span>{{ trans('website-requests.volunteer_beginning') }}</span>
                            <div class="input-text" style="margin-bottom: 5px;">
                                <div class="input-div" style="top: -20px;">
                                    <input type="date" id="volunteer_beginning" name="volunteer_beginning" value="{{request('volunteer_beginning')}}">
                                </div>
                            </div>
                            <span>{{ trans('website-requests.volunteer_ending') }}</span>
                            <div class="input-text" style="margin-bottom: -20px;">
                                <div class="input-div" style="top: -20px;">
                                    <input type="date" id="volunteer_ending" name="volunteer_ending" value="{{request('volunteer_ending')}}">
                                </div>
                            </div>
                            <div class="input-text">
                                <div class="input-div">
                                    <input type="text" id="educational_experience"
                                        name="educational_experience" style="height: 93px;" value="{{request('educational_experience')}}">
                                    <span>{{trans('website-requests.educational_experience')}}</span>
                                </div>
                            </div>
                            <span>{{ trans('website-requests.cv') }}</span>
                            <div class="input-text" style="margin-top: 5px;">
                                <div class="input-div fileinput">
                                    <input type="file" id="cv" name="cv">
                                </div>
                            </div>
                            <div class="buttons button_space" style="margin-top: 70px">
                                <button class="back_button">{{trans('website-requests.back')}}</button>
                                <button type="button" onclick="validateForm(1);" class="next_button">{{ trans('website-requests.next_one') }}</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@stop

@section('js')
    <script src="{{ asset('website/js/volunteerrequest.js') }}"></script>
@stop
