@extends('website.layouts.layout')

@section('css')
    <link rel="stylesheet" href="{{ asset('website/css/about-association.css') }}" />
    <link rel="stylesheet" href="{{ asset('website/css/principles.css') }}" />
@stop

@section('content')
    @if (\Request::url() == URL('/' . LaravelLocalization::getCurrentLocale() . '/website/about'))
        <div class="containerr">
            <section class="hedsid">
                <h6><a href="{{ url('website/home') }}">{{ trans('website_navbar.home') }} / </a></h6>
                <h6>{{ trans('website_navbar.about-us') }}</h6>
            </section>
            <section class="aboutt">
                @if (LaravelLocalization::getCurrentLocale() == 'en')
                    <h1>{{ $settings[11]->value }}</h1>
                @else
                    <h1>{{ $settings[12]->value }}</h1>
                @endif
                <div class="card_about">
                    <div class="text_card">
                        @if (LaravelLocalization::getCurrentLocale() == 'en')
                            <p>{!! $settings[13]->value !!}</p>
                            {{-- <p>{!!$data[3]->value!!}</p> --}}
                        @else
                            <p>{!! $settings[14]->value !!}</p>
                            {{-- <p>{!!$data[4]->value!!}</p> --}}
                        @endif
                        <h5><a href="{{ url('website/news') }}">{{ trans('website-general.browse_news') }}</a></h5>
                    </div>
                    <div class="img_card_about">
                        {{-- <img src="{{Storage::url($data[0]->value)}}" alt=""> --}}
                        <img src="{{ Storage::url($settings[10]->value) }}" alt="">
                    </div>
                </div>
            </section>
        </div>
    @elseif(\Request::url() == URL('/' . LaravelLocalization::getCurrentLocale() . '/website/vision'))
        <div class="containerr">
            <section class="hedsid">
                <h6><a href="{{ url('website/home') }}">{{ trans('website_navbar.home') }} / </a></h6>
                <h6>{{ trans('website_navbar.vision') }}</h6>
            </section>
            <section class="aboutt">
                @if (LaravelLocalization::getCurrentLocale() == 'en')
                    <h1>{{ $settings[16]->value }}</h1>
                @else
                    <h1>{{ $settings[17]->value }}</h1>
                @endif
                <div class="card_about">
                    <div class="text_card">
                        @if (LaravelLocalization::getCurrentLocale() == 'en')
                            <p>{!! $settings[18]->value !!}</p>
                        @else
                            <p>{!! $settings[19]->value !!}</p>
                        @endif
                        <h5><a href="{{ url('website/news') }}">{{ trans('website-general.browse_news') }}</a></h5>
                    </div>
                    <div class="img_card_about">
                        <img src="{{ Storage::url($settings[15]->value) }}" alt="">
                    </div>
                </div>
            </section>
        </div>
    @elseif(\Request::url() == URL('/' . LaravelLocalization::getCurrentLocale() . '/website/mission'))
        <div class="containerr">
            <section class="hedsid">
                <h6><a href="{{ url('website/home') }}">{{ trans('website_navbar.home') }} / </a></h6>
                <h6>{{ trans('website_navbar.mission') }}</h6>
            </section>
            <section class="aboutt">
                @if (LaravelLocalization::getCurrentLocale() == 'en')
                    <h1>{{ $settings[21]->value }}</h1>
                @else
                    <h1>{{ $settings[22]->value }}</h1>
                @endif
                <div class="card_about">
                    <div class="text_card">
                        @if (LaravelLocalization::getCurrentLocale() == 'en')
                            <p>{!! $settings[23]->value !!}</p>
                        @else
                            <p>{!! $settings[24]->value !!}</p>
                        @endif
                        <h5><a href="{{ url('website/news') }}">{{ trans('website-general.browse_news') }}</a></h5>
                    </div>
                    <div class="img_card_about">
                        <img src="{{ Storage::url($settings[20]->value) }}" alt="">
                    </div>
                </div>
            </section>
        </div>
    @elseif(\Request::url() == URL('/' . LaravelLocalization::getCurrentLocale() . '/website/principle'))
        <div class="containerr">
            <section class="hedsid">
                <h6><a href="{{ url('website/home') }}">{{ trans('website_navbar.home') }} / </a></h6>
                <h6>{{ trans('website_navbar.principle') }}</h6>
            </section>
            <section class="aboutt">
                @if (LaravelLocalization::getCurrentLocale() == 'en')
                    <h1>{{ $settings[25]->value }}</h1>
                    {!! $settings[27]->value !!}
                @else
                    <h1>{{ $settings[26]->value }}</h1>
                    {!! $settings[28]->value !!}
                @endif
            </section>
        </div>
    @elseif(\Request::url() == URL('/' . LaravelLocalization::getCurrentLocale() . '/website/goals'))
        <div class="containerr">
            <section class="hedsid">
                <h6><a href="{{ url('website/home') }}">{{ trans('website_navbar.home') }} / </a></h6>
                <h6>{{ trans('website_navbar.goal') }}</h6>
            </section>
            <section class="aboutt">
                @if (LaravelLocalization::getCurrentLocale() == 'en')
                    <h1>{{ $settings[29]->value }}</h1>
                    {!! $settings[31]->value !!}
                @else
                    <h1>{{ $settings[30]->value }}</h1>
                    {!! $settings[32]->value !!}
                @endif
            </section>
        </div>
    @endif

@stop
