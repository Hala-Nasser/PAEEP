@extends('website.layouts.layout')

@section('css')
    <link rel="stylesheet" href="{{ asset('website/css/programs.css') }}">
@stop

@section('content')
    <header class="heade">
        <div class="back_heder"></div>
        <div class="">
            <div class="slide_heder">
                <!-- Swiper -->
                <div class="swiper mySwiper arow d-flex">
                    <div class="swiper-wrapper ">
                        @forelse ($sliders as $slider)
                            <div class="swiper-slide centerimgheder">
                                <img src="{{ Storage::url($slider->image) }}" alt="">
                                <img class="shado" src="{{ asset('website/imges/Program icons/Rectangle 1502.png') }}"
                                    alt="">
                                <div class="textimg textimg1 animate__animated animate__fadeInUp">
                                    <h1>{{ $slider->getTitleAttribute() }}</h1>
                                    <p>{!! $slider->getDescriptionAttribute() !!}</p>
                                    @if ($slider->redirect_to != -1)
                                        {{-- <button class="mored">{{}}</button> --}}
                                        <a class="mored" href="{{ $slider->redirect_to }}">
                                            {{ $slider->getButtonTextAttribute() }}
                                        </a>
                                    @endif
                                </div>
                            </div>
                        @empty
                        @endforelse
                    </div>
                    <div class="next "><i class='bx bx-right-arrow-alt'></i></div>
                    <div class="prev"><i class='bx bx-left-arrow-alt'></i></div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>
    </header>

    <section class="news">
        <div class="containerr">
            <div class="textnews">
                <h1>{{ trans('website-general.latest_news') }}</h1>
                <a href="{{ url('/website/news/') }}">
                    <h6>{{ trans('website-general.view_all') }}</h6>
                </a>
            </div>
            <div class="swiper mySwiper2">
                <div class="swiper-wrapper ">
                    @forelse ($news as $single_news)
                        <a href="{{ url('/website/news/' . $single_news->slug) }}">
                            <div class=" card cardNews swiper-slide" style=" border: none;">
                                <img src="{{ Storage::url($single_news->image) }}" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <a href="{{ url('/website/news/' . $single_news->slug) }}">
                                        <h5 class="card-title">{{ $single_news->getTitleAttribute() }}</h5>
                                    </a>
                                    <p class="card-text">{{ $single_news->getShortDescriptionAttribute() }}
                                    </p>
                                </div>
                            </div>
                        </a>
                    @empty
                    @endforelse
                </div>
                <div class="swiper-pagination"></div>
            </div>
    </section>

    <section class="association_pro">
        <div class="containerr">
            <div class="textnews">
                <h1>{{ trans('website-general.programs') }}</h1>
                <a href="{{ url('/website/programs/') }}">
                    <h6>{{ trans('website-general.view_all') }}</h6>
                </a>
            </div>
            <div class="allcardpro">
                @forelse ($programs as $program)
                    <a href="{{ url('/website/program/' . $program->slug) }}">
                        <div class="cardpro">
                            <img src="{{ Storage::url($program->image) }}" alt="" data-tilt data-tilt-scale="1.1">
                            <h4><a
                                    href="{{ url('/website/program/' . $program->slug) }}">{{ $program->getTitleAttribute() }}</a>
                            </h4>
                        </div>
                    </a>
                @empty
                @endforelse
            </div>
        </div>
    </section>

    <section class="count_sec" id="count_sec">
        <div class="containerr">
            <div class="textnews">
                <h1>{{ trans('website-general.notable_achievements') }}</h1>
            </div>
            <div class="allcardpro">
                @forelse ($achievements as $achievement)
                    <div class="cardpro crad_achievements">
                        <img class="h" src="{{ Storage::url($achievement->image) }}" alt="" data-tilt
                            data-tilt-scale="1.1">
                        <h3>{{ $achievement->getTitleAttribute() }}</h3>
                        <div class="con">
                            <h2 class="counter" data-target="{{ $achievement->count }}"></h2>
                            <h2>+</span>
                        </div>
                    </div>
                @empty
                @endforelse
            </div>

        </div>
    </section>

    <section class="comp_section">
        <div class="containerr">
            <div class="textnews">
                <h1>{{ trans('website-general.partners') }}</h1>
            </div>
            <div class="arow3">
                <div class="swiper mySwiper3">
                    <div class="swiper-wrapper ">
                        @forelse ($partners as $partner)
                            <div class="swiper-slide">
                                <div class="card_comp">
                                    <a href="{{ $partner->website_url }}" target="_blank">
                                        <img src="{{ Storage::url($partner->image) }}" alt="">
                                    </a>
                                </div>
                            </div>
                        @empty
                        @endforelse
                    </div>
                    <div class="swiper-pagination"></div>
                </div>

                <div class="nextt "><i class='bx bx-right-arrow-alt'></i>
                    <h5>{{ trans('website-general.previous') }}</h5>
                </div>
                <div class="prevt"><i class='bx bx-left-arrow-alt'></i>
                    <h5>{{ trans('website-general.next') }}</h5>
                </div>
            </div>
        </div>
    </section>
@stop
