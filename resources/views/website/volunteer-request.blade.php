@extends('website.layouts.layout')

@section('css')
    <link rel="stylesheet" href="{{ asset('website/css/volunteerrequest.css') }}">
@stop

@section('content')
    <div class="container">
        <div class="card">
            <form id="volunteer-request-form" onsubmit="event.preventDefault(); performStore();">
                <div class="form">
                    <div class="left-side">
                        <div class="left-heading">
                        </div>
                        <div class="steps-content">
                            <h3><span class="step-number"> </span>{{trans('website-requests.basic_info')}}</h3>
                        </div>
                        <ul class="progress-bar">
                            <li class="active">{{trans('website-requests.basic_info')}}</li>
                            <li>{{trans('website-requests.additional_info')}}</li>
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
                                    <input type="text" required require id="full_name" name="full_name"
                                        placeholder="{{trans('website-requests.full_name')}}">
                                </div>
                                <div class="input-div">
                                    <input type="number" required require id="phone" name="phone" placeholder="{{trans('website-requests.phone')}}">
                                </div>
                            </div>
                            <div class="input-text">
                                <div class="input-div">
                                    <input type="text" required require id="email" name="email"
                                        placeholder="{{trans('website-requests.email')}}">
                                </div>
                                <div class="input-div">
                                    <input type="text" required require id="address" name="address"
                                        placeholder="{{trans('website-requests.address')}}">
                                </div>
                            </div>
                            <span>{{ trans('website-requests.volunteered_before') }}</span>
                            <div class="input-text" style="margin-bottom: 10px">
                                <div class="input-div" style="top: -20px">
                                    <select id="volunteered_before" name="volunteered_before" required require>
                                        <option value="1">{{trans('website-requests.yes')}}</option>
                                        <option value="0">{{trans('website-requests.no')}}</option>
                                    </select>
                                </div>
                            </div>
                            <div class="input-text" style="margin-top: -10px">
                                <div class="input-div">
                                    <input type="text" id="volunteer_info" name="volunteer_info"
                                        placeholder="{{trans('website-requests.mention_breifly')}}">
                                </div>
                            </div>
                            <span>{{ trans('website-requests.have_skills') }}</span>
                            <div class="input-text" style="margin-bottom: 10px">
                                <div class="input-div" style="top: -20px">
                                    <select id="have_skills" name="have_skills" required require>
                                        <option value="1">{{trans('website-requests.yes')}}</option>
                                        <option value="0">{{trans('website-requests.no')}}</option>
                                    </select>
                                </div>
                            </div>
                            <div class="input-text" style="margin-top: -10px">
                                <div class="input-div">
                                    <input type="text" id="skills_info" name="skills_info"
                                        placeholder="{{trans('website-requests.mention_breifly')}}">
                                </div>
                            </div>
                            <div class="buttons">
                                <button class="next_button">{{trans('website-requests.next_one')}}</button>
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
                                    <input type="date" id="volunteer_beginning" name="volunteer_beginning" required require>
                                </div>
                            </div>
                            <span>{{ trans('website-requests.volunteer_ending') }}</span>
                            <div class="input-text" style="margin-bottom: -20px;">
                                <div class="input-div" style="top: -20px;">
                                    <input type="date" id="volunteer_ending" name="volunteer_ending" required require>
                                </div>
                            </div>
                            <div class="input-text">
                                <div class="input-div">
                                    <input type="text" required require id="educational_experience"
                                        name="educational_experience" style="height: 93px;">
                                    <span>{{trans('website-requests.educational_experience')}}</span>
                                </div>
                            </div>
                            <span>{{ trans('website-requests.cv') }}</span>
                            <div class="input-text" style="margin-top: 5px;">
                                <div class="input-div fileinput">
                                    <input type="file" id="cv" name="cv" required require>
                                </div>
                            </div>
                            <div class="buttons button_space">
                                <button class="back_button">{{trans('website-requests.back')}}</button>
                                <button type="submit" class="next_button"
                                    >{{ trans('website-requests.next_one') }}</button>
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
            let myform = document.getElementById("volunteer-request-form");
            let formData = new FormData(myform);

            axios.post('/{{ LaravelLocalization::getCurrentLocale() }}/website/volunteer-request', formData)
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
                    window.location.href = "/website/volunteer-request";

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
