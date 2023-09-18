<footer class="footer">
    <div class="containerr">
        <div class="allfooter">
            <div class="rightfooter">
                <h5>{{ trans('website_footer.informaion') }}</h5>
                @if (LaravelLocalization::getCurrentLocale() == 'ar')
                    <p>{!! $settings[9]->value !!}</p>
                @else
                    <p>{!! $settings[8]->value !!}</p>
                @endif
                <div>
                    <h5>
                        {{ trans('website_footer.contact-details') }}
                    </h5>
                    <div class="point">
                        <div class="imgpoint">
                            <img src="{{ asset('website/imges/Group 7813.png') }}" alt="">
                        </div>
                        @if (LaravelLocalization::getCurrentLocale() == 'ar')
                            <p>{!! $settings[7]->value !!}</p>
                        @else
                            <p>{!! $settings[6]->value !!}</p>
                        @endif
                    </div>
                    <div class="point">
                        <div class="imgpoint">
                            <img src="{{ asset('website/imges/Group 9.png') }}" alt="">
                        </div>
                        <p>{{ $settings[5]->value }}</p>
                    </div>
                </div>
            </div>
            <div class="leftfooter">
                <div class="ppfoter">
                    <h5>{{ trans('website_footer.about-us') }}</h5>
                    <p><a href="{{url('website/about')}}">{{ trans('website_footer.about-us') }}</a></p>
                    <p><a href="{{url('website/vision')}}">{{ trans('website_footer.vision') }}</a></p>
                    <p><a href="{{url('website/mission')}}">{{ trans('website_footer.mission') }}</a></p>
                    <p><a href="{{url('website/principle')}}">{{ trans('website_footer.principle') }}</a></p>
                    <p><a href="{{url('website/goals')}}">{{ trans('website_footer.goal') }}</a></p>
                </div>
                <div class="ppfoter">
                    <h5>{{ trans('website_footer.library') }}</h5>
                    <p><a href="{{url('website/publications-and-reports')}}">{{ trans('website_footer.reports-and-publications') }}</a></p>
                    <p><a href="{{url('website/visual-library')}}">{{ trans('website_footer.visual-library') }} </a></p>
                    {{-- <p><a href="#">{{trans('website_footer.goal')}}</a></p> --}}
                    <h5>{{ trans('website_footer.news-and-announcement') }}</h5>
                    <p><a href="{{url('website/news')}}">{{ trans('website_footer.news') }}</a></p>
                    <p><a href="{{url('website/news')}}">{{ trans('website_footer.announcement') }}</a></p>
                </div>
                <div class="ppfoter">
                    <h5>{{ trans('website_footer.join-us') }}</h5>
                    <p><a href="{{url('website/job-request')}}">{{ trans('website_footer.job-req') }}</a></p>
                    <p><a href="{{url('website/volunteer-request')}}">{{ trans('website_footer.volunteer-req') }}</a></p>
                    <p><a href="{{url('website/company-request')}}">{{ trans('website_footer.company-req') }}</a></p>
                    <p><a href="#">{{ trans('website_footer.contact-us') }}</a></p>
                </div>
            </div>
        </div>
    </div>
    <div class="footerbotn">
        <div class="container ">
            <div class="footerall">
                <p>{{ trans('website_footer.rights') }}</p>
                <div class="alliconbt">
                    @foreach ($settings as $setting)
                        @if ($setting->group == 'social_media')
                            @switch($setting->key)
                                @case('facebook')
                                    <a href="{{ $setting->value }}" rel="noopener noreferrer" target="_blank">
                                        <div class="icon_footericon">
                                            <div class="imgfooticon">
                                                <i class='bx bxl-facebook'></i>
                                            </div>
                                        </div>
                                    </a>
                                @break

                                @case('instagram')
                                    <a href="{{ $setting->value }}" rel="noopener noreferrer" target="_blank">
                                        <div class="icon_footericon">
                                            <div class="imgfooticon">
                                                <i class='bx bxl-instagram'></i>
                                            </div>
                                        </div>
                                    </a>
                                @break

                                @default
                                    <a href="{{ $setting->value }}" rel="noopener noreferrer" target="_blank">
                                        <div class="icon_footericon">
                                            <div class="imgfooticon">
                                                <i class='bx bxl-twitter'></i>
                                            </div>
                                        </div>
                                    </a>
                            @endswitch
                        @endif
                    @endforeach
                    <a href="{{ $settings[2]->value }}" rel="noopener noreferrer" target="_blank">
                        <div class="icon_footericon">
                            <div class="imgfooticon">
                                <i class='bx bx-envelope'></i>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    </div>
</footer>
