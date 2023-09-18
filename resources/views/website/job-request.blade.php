@extends('website.layouts.layout')

@section('css')
    <link rel="stylesheet" href="{{ asset('website/css/jobrequest.css') }}">
@stop

@section('content')
    <div class="container">
        <div class="card">
            {{-- <form id="job-request-form" onsubmit="event.preventDefault(); performStore();"> --}}
            <form id="job-request-form">

                <div class="form">
                    <div class="left-side">
                        <div class="left-heading">
                        </div>
                        <div class="steps-content">
                            <h3><span class="step-number"> </span>{{ trans('website-requests.basic_info') }}</h3>
                        </div>
                        <ul class="progress-bar">
                            <li class="active">{{ trans('website-requests.basic_info') }}</li>
                            <li>{{ trans('website-requests.additional_info') }}</li>
                        </ul>
                    </div>
                    <div class="right-side">
                        <div class="main active">
                            <div class="text">
                                <h2>{{ trans('website-requests.job-req') }}</h2>
                                <p>{{ trans('website-requests.fill_data') }}</p>
                            </div>
                            <div class="input-text">
                                <div class="input-div">
                                    <input type="text" required require id="first_name" name="first_name"
                                        placeholder="{{ trans('website-requests.first_name') }}" value="{{request('first_name')}}">
                                </div>
                                <div class="input-div">
                                    <input type="text" id="father_name" name="father_name" required require
                                        placeholder="{{ trans('website-requests.father_name') }}" value="{{request('father_name')}}">
                                </div>
                            </div>
                            <div class="input-text">
                                <div class="input-div">
                                    <input type="text" required require id="grandfather_name" name="grandfather_name"
                                        placeholder="{{ trans('website-requests.grandfather_name') }}" value="{{request('grandfather_name')}}">
                                </div>
                                <div class="input-div">
                                    <input type="text" required require id="last_name" name="last_name"
                                        placeholder="{{ trans('website-requests.last_name') }}" value="{{request('last_name')}}">
                                </div>
                            </div>
                            <div class="input-text">
                                <div class="input-div numinputr">
                                    <input type="number" required require id="phone" name="phone"
                                        placeholder="{{ trans('website-requests.phone') }}" value="{{request('phone')}}">
                                </div>
                                <div class="input-div ">
                                    <input type="text" required require id="email" name="email"
                                        placeholder="{{ trans('website-requests.email') }}" value="{{request('email')}}">
                                </div>
                            </div>
                            <div class="input-text" style="margin-bottom: 10px">
                                <div style="width: 50%">
                                    <span>{{ trans('website-requests.choose_gender') }}</span>
                                    <div class="input-div" style="top: 10px">
                                        <select style="font-family: 'Cairo', sans-serif;" id="gender" name="gender">
                                            <option value="male" @selected(request('gender') == 'male')>{{ trans('website-requests.male') }}</option>
                                            <option value="female" @selected(request('gender') == 'female')>{{ trans('website-requests.female') }}</option>
                                        </select>
                                    </div>
                                </div>
                                <div style="width: 50%">
                                    <span>{{ trans('website-requests.qualification') }}</span>
                                    <div class="input-div" style="top: 10px">
                                        <select style="font-family: 'Cairo', sans-serif;" id="qualification"
                                            name="qualification">
                                            <option value="bachelor" @selected(request('qualification') == 'bachelor')>{{ trans('website-requests.bachelor') }}</option>
                                            <option value="diploma" @selected(request('qualification') == 'diploma')>{{ trans('website-requests.diploma') }}</option>
                                            <option value="college_student" @selected(request('qualification') == 'college_student')>{{ trans('website-requests.college_student') }}
                                            </option>
                                            <option value="high_school" @selected(request('qualification') == 'high_school')>{{ trans('website-requests.high_school') }}
                                            </option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="buttons" style="text-align: left; margin-top:20px;">
                                <button type="button"
                                    class="next_button" onclick="validateForm(0);">{{ trans('website-requests.next_one') }}</button>
                            </div>
                        </div>
                        <div class="main">
                            <div class="text">
                                <h2>{{ trans('website-requests.additional_info') }}</h2>
                                <p>{{ trans('website-requests.fill_data') }}</p>
                            </div>
                            <div class="input-text">
                                <div class="input-div">
                                    <input type="date" name="birthday" id="birthday">
                                    <span>{{ trans('website-requests.birthday') }}</span>
                                </div>
                            </div>
                            <span>{{ trans('website-requests.cv') }}</span>
                            <div class="input-text" style="margin-top: 5px;">
                                <div class="input-div fileinput">
                                    <input type="file" name="cv" id="cv">
                                </div>
                            </div>
                            <div class="buttons button_space">
                                <button class="back_button">{{ trans('website-requests.back') }}</button>
                                {{-- <button type="submit"
                                    class="next_button">{{ trans('website-requests.next_one') }}</button> --}}
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
    <script src="{{ asset('website/js/jobrequest.js') }}"></script>
    <script>
        $(document).ready(function() {
            $(window).keydown(function(event) {
                if (event.keyCode == 13) {
                    event.preventDefault();
                    return false;
                }
            });
        });

        // function validateForm($page_number) {
        //     let formData = new FormData();
        //     formData.append('first_name', document.getElementById('first_name').value);
        //     formData.append('father_name', document.getElementById('father_name').value);
        //     formData.append('grandfather_name', document.getElementById('grandfather_name').value);
        //     formData.append('last_name', document.getElementById('last_name').value);
        //     formData.append('gender', document.getElementById('gender').value);
        //     formData.append('qualification', document.getElementById('qualification').value);
        //     formData.append('page_number', $page_number);

        //     axios.post('/website/job-request', formData)
        //         .then(function(response) {

        //             console.log(response);
        //             const Toast = Swal.mixin({
        //                 toast: true,
        //                 position: 'top-end',
        //                 showConfirmButton: false,
        //                 timer: 1500,
        //                 timerProgressBar: true,
        //                 didOpen: (toast) => {
        //                     toast.addEventListener('mouseenter', Swal.stopTimer)
        //                     toast.addEventListener('mouseleave', Swal.resumeTimer)
        //                 }
        //             })
        //             Toast.fire({
        //                 icon: 'success',
        //                 title: response.data.message
        //             })

        //         }).catch(function(error) {
        //             console.log(error);
        //             const Toast = Swal.mixin({
        //                 toast: true,
        //                 position: 'top-end',
        //                 showConfirmButton: false,
        //                 timer: 1500,
        //                 timerProgressBar: true,
        //                 didOpen: (toast) => {
        //                     toast.addEventListener('mouseenter', Swal.stopTimer)
        //                     toast.addEventListener('mouseleave', Swal.resumeTimer)
        //                 }
        //             })
        //             Toast.fire({
        //                 icon: 'error',
        //                 title: error.response.data.message
        //             })
        //         });
        // }

        function performStore() {
            let myform = document.getElementById("job-request-form");
            let formData = new FormData(myform);

            // axios.post('/{{ LaravelLocalization::getCurrentLocale() }}/website/job-request', formData)
            axios.post('/website/job-request', formData)

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
                    window.location.href = "/website/job-request";

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
