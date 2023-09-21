@extends('website.layouts.layout')

@section('css')

    @if (LaravelLocalization::getCurrentLocale() == 'ar')
        <link rel="stylesheet" href="{{ asset('website/css/donate.css') }}">
    @else
        <link rel="stylesheet" href="{{ asset('website/css/en/donate.ltr.css') }}">
    @endif
    <link rel="stylesheet" href="{{ asset('website/build/css/intlTelInput.min.css') }}">
    <link rel="stylesheet" href="{{ asset('website/build/css/demo.css') }}">
@stop

@section('content')
    <div class="containerr">
        <section class="hedsid">
            <h6><a href="{{ url('website/home') }}">{{ trans('website_navbar.home') }} / </a></h6>
            <h6>{{ trans('website_navbar.donate-now') }}</h6>
        </section>
        <section class="aboutt">
            <h1>{{ trans('website_navbar.donate-now') }}</h1>
            <form class="body_donate" id="donate_form" onsubmit="event.preventDefault(); performStore();">
                <div class="right_donate">
                    <h2>{{ trans('website-requests.donor_details') }}</h2>
                    <div class="blowline"></div>
                    <div class="input_donate">
                        <input type="text" id="name" name="name" placeholder="{{ trans('website-requests.donor_name') }}">
                        <input type="email" id="email" name="email" placeholder="{{ trans('website-requests.email') }}">
                    </div>
                    <div class="input_donate">
                        <div class="selectPhone">
                            <input class="inputPhoneI" type="tel" id="phone" name="phone"
                                placeholder="{{ trans('website-requests.phone') }}">
                        </div>
                        <select class="form-select" aria-label="" name="program_id" id="program_id">
                            <option selected value="-1">{{ trans('website-requests.choose_program') }}</option>
                            @foreach ($programs as $program)
                                <option value="{{ $program->id }}">{{ $program->getTitleAttribute() }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="input_donate">
                        <textarea name="message" id="message" cols="30" rows="10" placeholder="{{ trans('website-requests.message') }}"></textarea>
                    </div>
                    <div class="inputCheck">
                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1" name="is_agree">
                        <label class="form-check-label" for="defaultCheck1">
                            {{ trans('website-requests.donor_introducing') }}
                            <br>
                            {{ trans('website-requests.accept_introducing') }}
                        </label>
                    </div>
                </div>
                <div class="leftdonateForm">
                    <div class="mt-4">
                        <label style="font-weight: bold; font-size: 16px;" for="">{{ trans('website-requests.choose_amount') }}</label>
                        <div class="cardsDonate">
                            <div class="cardDonate active">
                                <i class='bx bx-check'></i>
                                <span>$20</span>
                            </div>
                            <div class="cardDonate">
                                <i class='bx bx-check'></i>
                                <span>$50</span>
                            </div>
                            <div class="cardDonate">
                                <i class='bx bx-check'></i>
                                <span>$100</span>
                            </div>
                            <div class="cardDonate">
                                <i class='bx bx-check'></i>
                                <span>$500</span>
                            </div>
                            <div class="cardDonate">
                                <i class='bx bx-check'></i>
                                <span>$1000</span>
                            </div>
                            <div class="cardDonate">
                                <i class='bx bx-check'></i>
                                <span>$2000</span>
                            </div>
                        </div>
                        <div>
                            <div class="inputCheck anotherAmount">
                                <input class="form-check-input inputCheckA" type="checkbox" value=""
                                    id="defaultCheck2">
                                <label class="form-check-label " for="defaultCheck2">
                                    {{ trans('website-requests.another_amount') }}
                                </label>
                            </div>
                        </div>
                        <div class="input_donate">
                            <div class=" inputPriceI  input-group mb-3" style=" max-width:300px;">
                                <span class=" input-group-text textDI inputCA">$</span>
                                <input type="number" name="amount" class="form-control inputCA" disabled
                                    aria-label="Amount (to the nearest dollar)">
                            </div>
                        </div>
                    </div>
                    <div class="mt-4">
                        <h5>{{ trans('website-requests.donation_type') }}</h5>
                        <div class="cardsDonate">
                            <div class="cardDonateS active">
                                <i class='bx bx-check'></i>
                                <img src="{{ asset('website/images/stripe-purple-300x300.svg') }}" alt="">
                            </div>
                        </div>
                    </div>
                    {{-- <button class="btnDonare">تبرع</button> --}}
                    <button type="submit" class="btnDonare">{{ trans('website-requests.donate') }}</button>

                    <div class="mt-4">
                        <h5>{{ trans('website-requests.trust_from') }}</h5>
                        <div class="imgGC">
                            <img src="{{ asset('website/images/masterCardS.svg') }}" alt="">
                            <img src="{{ asset('website/images/visaa.svg') }}" alt="">
                            <img src="{{ asset('website/images/3d-secure.svg') }}" alt="">
                            <img src="{{ asset('website/images/paypal.svg') }}" alt="">
                            <div class="d-flex gap-2">
                                <img class="imgS" src="{{ asset('website/images/secureCheckOut.svg') }}"
                                    alt="">
                                <img class="imgS" src="{{ asset('website/images/privacyProtected.svg') }}"
                                    alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </section>
    </div>
@stop

@section('js')

    <script src="{{ asset('website/js/jquery library.js') }}"></script>

    <script>
        var input = document.querySelector("#phone");
        window.intlTelInput(input, {});

        output = document.querySelector("#output");

        var iti = window.intlTelInput(input, {
            nationalMode: true,
            utilsScript: "../../build/js/utils.js?1678446285328" // just for formatting/placeholders etc
        });

        var handleChange = function() {
            var text = (iti.isValidNumber()) ? "International: " + iti.getNumber() : "Please enter a number below";
            var textNode = document.createTextNode(text);
            output.innerHTML = "";
            output.appendChild(textNode);
        };

        // listen to "keyup", but also "change" to update when the user selects a country
        input.addEventListener('change', handleChange);
        input.addEventListener('keyup', handleChange);
    </script>

    <script>
        $(".cardDonate").click(function() {

            $(".cardDonate").removeClass("active");
            $(".inputCheckA").prop("checked", false);
            $(".inputCA").prop("disabled", true);
            $(".inputCA").val("")
            $(this).addClass("active");

        });
        $(".anotherAmount").click(function() {
            $(".cardDonate").removeClass("active");
            if ($('.anotherAmount').attr('checked')) {
                $(".inputCA").prop("disabled", true);
            } else {
                $(".inputCA").prop("disabled", false);
            }
            $(".inputCA").val("")
        });
    </script>

    <script src="{{ asset('website/js/countrySelect.js') }}"></script>
    <script src="{{ asset('website/build/js/intlTelInput.min.js') }}"></script>
    <script src="{{ asset('website/build/js/nationalMode.js') }}"></script>

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
            let myform = document.getElementById("donate_form");
            let formData = new FormData(myform);
            if (document.getElementById('program_id').value != -1) {

                axios.post('/{{ LaravelLocalization::getCurrentLocale() }}/website/donate', formData)
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
            } else {
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
                    title: '{{trans('donation.select_program')}}'
                })
            }
        }
    </script>
@stop
