@extends('website.layouts.layout')

@section('css')
    <link rel="stylesheet" href="{{ asset('website/css/contact_us.css') }}">
@stop

@section('content')
    <div class="containerr">
        <section class="hedsid">
            <h6><a href="{{ url('website/home') }}">{{ trans('website_navbar.home') }} / </a></h6>
            <h6>{{ trans('website_footer.contact-us') }}</h6>
        </section>
        <section class="aboutt">
            <h1>{{ trans('website_footer.contact-us') }}</h1>

            <div class="body_cotact">
                <div class="right_contact">
                    <form id="contact-us-form" onsubmit="event.preventDefault(); performStore();">
                        <div class="input_name">
                            <input type="text" placeholder="{{ trans('website-requests.full_name') }}" name="full_name"
                                id="full_name">
                            <input type="text" placeholder="{{ trans('website-requests.email') }}" name="email"
                                id="email">
                        </div>
                        <textarea name="message" id="message" cols="30" rows="10"
                            placeholder="{{ trans('website-requests.message') }}"></textarea>
                        <div class="checkbox_text">
                            <input class="form-check-input" type="checkbox" value="" id="agree" name="agree">
                            <p>{{ trans('website-requests.agree') }}</p>
                        </div>
                        <button type="submit" class="btn_donate">{{ trans('website-requests.send') }}</button>
                    </form>
                </div>
                <div class="left_contact">
                    <h1>{{ trans('website-requests.contact_info') }}</h1>
                    <div class="line_contant"></div>
                    <div class="icon_text_contact">
                        <div class="imgd">
                            <img src="{{ asset('website/imges/Group 7904.png') }}" alt="">
                        </div>
                        <p>{{ $settings[5]->value }}</p>
                    </div>
                    <div class="icon_text_contact">
                        <div class="imgd">
                            <img src="{{ asset('website/imges/Group 7903.png') }}" alt="">
                        </div>
                        <p>{{ $settings[2]->value }}</p>
                    </div>
                    <div class="icon_text_contact">
                        <div class="imgd">
                            <img src="{{ asset('website/imges/Path 5860.png') }}" alt="">
                        </div>
                        @if (LaravelLocalization::getCurrentLocale() == 'ar')
                            <p>{!! $settings[7]->value !!}</p>
                        @else
                            <p>{!! $settings[6]->value !!}</p>
                        @endif
                    </div>

                    <div class="alliconbt">
                        <a href="{{ $settings[35]->value }}" target="_blank">
                            <div class="icon_footericon">
                                <div class="imgfooticon">
                                    <i class='bx bxl-twitter'></i>
                                </div>
                            </div>
                        </a>
                        <a href="{{ $settings[33]->value }}" target="_blank">
                            <div class="icon_footericon">
                                <div class="imgfooticon">
                                    <i class='bx bxl-facebook'></i>
                                </div>
                            </div>
                        </a>
                        <a href="{{ $settings[34]->value }}" target="_blank">
                            <div class="icon_footericon">
                                <div class="imgfooticon">
                                    <i class='bx bxl-instagram'></i>
                                </div>
                            </div>
                        </a>

                        {{-- <a href="#">
                      <div class="icon_footericon">
                        <div class="imgfooticon">
                          <i class='bx bx-lemon'></i>
                        </div>
                      </div>
                    </a> --}}
                    </div>

                </div>
            </div>
        </section>
    </div>
@stop

@section('js')
    <script>
        function performStore() {
            let myform = document.getElementById("contact-us-form");
            let formData = new FormData(myform);

            formData.append('agree', document.getElementById('agree').checked);

            axios.post('/{{ LaravelLocalization::getCurrentLocale() }}/website/contact-us', formData)
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
                    myform.reset();
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
