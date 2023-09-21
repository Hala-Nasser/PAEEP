@extends('website.layouts.layout')
@section('css')
    <link rel="stylesheet" href="{{ asset('website/css/news.css') }}">
    <link rel="stylesheet" href="{{ asset('website/css/news_details.css') }}">

@stop
@section('content')
    <div class="containerr">
        <section class="hedsid">
            <h6><a href="{{ url('website/home') }}">{{ trans('website_navbar.home') }} / </a></h6>
            <h6><a href="{{ url('website/news') }}">{{ trans('website_footer.news') }} / </a></h6>
            <h6>{{ trans('website-general.news_details') }}</h6>
        </section>
        <section class="allnewss">
            <section class="allnewss">
                <div class="newss">
                    <h1>{{ $news->getTitleAttribute() }}</h1>
                    <div class="serch-news">
                        <i class='bx bx-search'></i>
                        <form>
                            <input type="search" placeholder="{{ trans('website_navbar.search-here') }}" name="search"
                                value="{{ request('search') }}">
                        </form>
                    </div>
                </div>
                <div class="allnewsdetails">
                    <div class="right_newsdeta">
                        <h5
                            style="display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden;">
                            {{ $news->getShortDescriptionAttribute() }}
                        </h5>
                        <div class="icons_ns">
                            <div class="icon_n">
                                <svg id="Group_35" data-name="Group 35" xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" width="30" height="27.954"
                                    viewBox="0 0 30 27.954">
                                    <defs>
                                        <clipPath id="clip-path">
                                            <rect id="Rectangle_23" data-name="Rectangle 23" width="30" height="27.954"
                                                fill="#0091de" />
                                        </clipPath>
                                    </defs>
                                    <g id="Group_34" data-name="Group 34" clip-path="url(#clip-path)">
                                        <path id="Path_141" data-name="Path 141"
                                            d="M15.117,65.276H29.227c.845,0,.869.023.869.858q0,7.887,0,15.774a3.13,3.13,0,0,1-3.255,3.27q-12.046.013-24.093,0c-1.6,0-2.594-1.079-2.622-2.86C.1,80.781.118,79.24.118,77.7q0-5.792,0-11.584c0-.811.026-.837.826-.838q7.086,0,14.172,0M14.762,68.9c-.349,0-.7.006-1.047,0-.574-.012-.823.3-.83.837q-.012.986,0,1.972a.729.729,0,0,0,.788.822c.719.009,1.438,0,2.156,0a.615.615,0,0,0,.694-.68q.006-.585.007-1.171c.005-1.848.129-1.8-1.768-1.78M5.591,70.671c0,.327-.007.655,0,.982.017.673.212.868.892.878.634.009,1.269,0,1.9,0a.74.74,0,0,0,.829-.784c.02-.716.015-1.432,0-2.148a.645.645,0,0,0-.7-.694c-.388-.013-.778-.006-1.166-.009-1.853-.015-1.782-.079-1.767,1.776m14.767,0c0,.328-.009.657,0,.984.022.7.2.87.889.879.636.009,1.272-.006,1.908,0A.744.744,0,0,0,24,71.706c.014-.656.02-1.313,0-1.969-.017-.615-.25-.822-.886-.839-.328-.009-.656,0-.985,0-1.884-.013-1.784-.08-1.773,1.772m0,8.4c0,.287-.005.574,0,.86.016.751.214.959.944.972q.86.015,1.721,0c.755-.014.97-.236.982-1.01.009-.533.007-1.065,0-1.6-.008-.848-.2-1.029-1.065-1.038-.266,0-.533,0-.8,0-1.9-.005-1.793-.121-1.786,1.814m-14.767,0c0,1.832,0,1.832,1.809,1.832S9.221,80.9,9.229,79.1c.008-1.87.118-1.856-1.849-1.846-1.881.01-1.8-.124-1.79,1.821m10.939-.012c0-.327-.009-.655,0-.982.018-.562-.235-.84-.807-.823-.327.01-.655,0-.982,0-1.86,0-1.86,0-1.86,1.836,0,1.813,0,1.813,1.8,1.813,1.845,0,1.845,0,1.843-1.844"
                                            transform="translate(-0.098 -57.232)" fill="#0091de" />
                                        <path id="Path_142" data-name="Path 142"
                                            d="M14.959,6.257q-7.055,0-14.109,0c-.81,0-.843-.018-.825-.828A18.673,18.673,0,0,1,.12,2.172,2.447,2.447,0,0,1,2.756.013C3.372.011,3.99.044,4.6,0c.578-.037.826.15.786.759-.042.634-.017,1.273-.006,1.909.011.616.345,1.02.829,1.027s.832-.384.844-1c.013-.678.018-1.356,0-2.033C7.047.2,7.206,0,7.7.006q6.9.02,13.8,0c.466,0,.618.192.612.623q-.017,1.047,0,2.095a.883.883,0,0,0,.811.975c.483.015.849-.393.861-.995.014-.678.028-1.356,0-2.033-.023-.518.19-.685.687-.666C25.254.035,26.036,0,26.816.02a3.124,3.124,0,0,1,3.078,3.125c.006.76,0,1.52,0,2.28,0,.815-.018.832-.825.832q-6.839,0-13.678,0h-.431"
                                            transform="translate(0 0)" fill="#0091de" />
                                    </g>
                                </svg>
                                <p>{{ $news->date }}</p>
                            </div>
                            <div class="icon_n">
                                <svg id="Group_37" data-name="Group 37" xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" width="30" height="30.019"
                                    viewBox="0 0 30 30.019">
                                    <defs>
                                        <clipPath id="clip-path">
                                            <rect id="Rectangle_24" data-name="Rectangle 24" width="30" height="30.019"
                                                fill="#0091de" />
                                        </clipPath>
                                    </defs>
                                    <g id="Group_36" data-name="Group 36" clip-path="url(#clip-path)">
                                        <path id="Path_143" data-name="Path 143"
                                            d="M30,14.988A15,15,0,1,1,15,0,15.031,15.031,0,0,1,30,14.988m-2.417.029A12.572,12.572,0,1,0,15.017,27.582,12.638,12.638,0,0,0,27.582,15.017"
                                            transform="translate(0 0)" fill="#0091de" />
                                        <path id="Path_144" data-name="Path 144"
                                            d="M120.6,63.564c0,.934.016,1.868-.008,2.8a.955.955,0,0,0,.437.88c1.223.9,2.433,1.813,3.641,2.731a1.2,1.2,0,0,1,.538,1.318,1.224,1.224,0,0,1-.959.918,1.144,1.144,0,0,1-.986-.246q-2.3-1.7-4.579-3.425a1.249,1.249,0,0,1-.5-1.065c0-2.276-.005-4.552.006-6.827a1.2,1.2,0,1,1,2.406,0c.014.972,0,1.945,0,2.918Z"
                                            transform="translate(-104.382 -52.444)" fill="#0091de" />
                                    </g>
                                </svg>
                                <p>{{ $news->time }}</p>
                            </div>
                            <div class="icon_n">
                                <svg id="Group_38" class="po" data-name="Group 38" xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" width="20.547" height="30.764"
                                    viewBox="0 0 20.547 30.764">
                                    <defs>
                                        <clipPath id="clip-path">
                                            <rect id="Rectangle_5" data-name="Rectangle 5" width="20.547" height="30.764"
                                                fill="#0091de" />
                                        </clipPath>
                                    </defs>
                                    <g id="Group_6" data-name="Group 6" clip-path="url(#clip-path)">
                                        <path id="Path_115" data-name="Path 115"
                                            d="M10.032,30.764a1.228,1.228,0,0,1-.455-.5q-2.909-5.266-5.822-10.53C2.861,18.109,1.939,16.5,1.09,14.86A9.769,9.769,0,0,1,.033,9.519a10.021,10.021,0,0,1,2.981-6.51A9.947,9.947,0,0,1,10,0,10,10,0,0,1,17.49,2.966,10,10,0,0,1,20.439,8.8a10.873,10.873,0,0,1-1.519,7.1c-2.532,4.5-5,9.028-7.5,13.544-.155.28-.317.556-.466.839a1.156,1.156,0,0,1-.44.478Zm.231-25.572a5.079,5.079,0,1,0,5.1,5.059,5.075,5.075,0,0,0-5.1-5.059"
                                            transform="translate(0 0)" fill="#0091de" />
                                    </g>
                                </svg>
                                <p>{{ $news->getLocationAttribute() }}</p>
                            </div>
                        </div>
                        <div class="img_news">
                            <div class="swiper mySwiper5 ">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide imgnewsd">
                                        <img src="{{ Storage::url($news->image) }}" alt="">
                                    </div>
                                </div>
                                {{-- <div class="swiper-button-next"></div>
                                <div class="swiper-button-prev"></div> --}}
                            </div>
                            <div class="sotial_news">
                                <a href="">
                                    <div class="shersotio">
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                            width="17.979" height="19.58" viewBox="0 0 17.979 19.58">
                                            <defs>
                                                <clipPath id="clip-path">
                                                    <rect id="Rectangle_33" data-name="Rectangle 33" width="17.979"
                                                        height="19.58" fill="#fff" />
                                                </clipPath>
                                            </defs>
                                            <g id="Group_57" data-name="Group 57" clip-path="url(#clip-path)">
                                                <path id="Path_157" data-name="Path 157"
                                                    d="M3.316,0A3.268,3.268,0,0,0,.008,3.16a3.306,3.306,0,0,0,2.84,3.378A3.139,3.139,0,0,0,5.4,5.8a.512.512,0,0,1,.7-.048Q8.619,7.215,11.16,8.643a.48.48,0,0,1,.279.613,2.438,2.438,0,0,0,.006,1.1.421.421,0,0,1-.222.535c-1.758.993-3.515,1.987-5.262,3-.268.155-.392,0-.557-.134a3.3,3.3,0,1,0,1.17,2.853,1.035,1.035,0,0,0,.024-.377c-.174-.562.1-.821.57-1.078,1.659-.909,3.3-1.86,4.935-2.8a.432.432,0,0,1,.571.034,3.252,3.252,0,0,0,3.967.055,3.3,3.3,0,0,0-2.188-5.943,3.121,3.121,0,0,0-1.782.7.4.4,0,0,1-.538.05C10.35,6.211,8.566,5.187,6.771,4.183c-.284-.159-.213-.367-.2-.582A3.275,3.275,0,0,0,3.959.052,3.294,3.294,0,0,0,3.316,0"
                                                    transform="translate(0 0)" fill="#fff" />
                                            </g>
                                        </svg>
                                        <p>{{ trans('website-general.share') }}</p>
                                    </div>
                                </a>
                                <div class="icon_sot">
                                    <a href="whatsapp://send?text={{ url()->current() }}"><i class='bx bxl-whatsapp'
                                            style='color:#ffffff'></i></a>
                                    <a href="https://www.facebook.com/sharer.php?u={{ url()->current() }}/"><i
                                            class='bx bxl-facebook' style='color:#ffffff'></i></a>
                                    <a href="https://twitter.com/intent/tweet?url={{ url()->current() }}/"><i
                                            class='bx bxl-twitter' style='color:#ffffff'></i></a>
                                </div>
                            </div>
                            <!-- </div> -->
                        </div>
                    </div>
                    <div class="left_newsdeta">
                        <div class="newssss">
                            <h3>{{ trans('website-general.latest_news') }}</h3>
                            <div class="line_news"></div>
                        </div>
                        <div class="allcnew">
                            @forelse ($latest_news as $latest)
                                <div class="lastnews">
                                    <div class="imglnews">
                                        <img width="150" height="90" src="{{ Storage::url($latest->image) }}"
                                            alt="">
                                    </div>
                                    <div class="textlnews">
                                        <a>
                                            <h6>{{ $latest->getTitleAttribute() }}</h6>
                                        </a>
                                        <p>{!! $latest->getDescriptionAttribute() !!}</p>
                                        <div class="nononews">
                                            <svg id="Group_37" data-name="Group 37" xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" width="16.477" height="16.487"
                                                viewBox="0 0 16.477 16.487">
                                                <defs>
                                                    <clipPath id="clip-path">
                                                        <rect id="Rectangle_24" data-name="Rectangle 24" width="16.477"
                                                            height="16.487" fill="#0091de" />
                                                    </clipPath>
                                                </defs>
                                                <g id="Group_36" data-name="Group 36" clip-path="url(#clip-path)">
                                                    <path id="Path_143" data-name="Path 143"
                                                        d="M16.476,8.232A8.238,8.238,0,1,1,8.24,0a8.256,8.256,0,0,1,8.236,8.232m-1.327.016a6.905,6.905,0,1,0-6.9,6.9,6.941,6.941,0,0,0,6.9-6.9"
                                                        transform="translate(0 0)" fill="#0091de" />
                                                    <path id="Path_144" data-name="Path 144"
                                                        d="M119.511,61.677c0,.513.009,1.026,0,1.538a.524.524,0,0,0,.24.483c.672.493,1.336,1,2,1.5a.659.659,0,0,1,.3.724.672.672,0,0,1-.527.5.628.628,0,0,1-.541-.135q-1.261-.935-2.515-1.881a.686.686,0,0,1-.275-.585c0-1.25,0-2.5,0-3.75a.662.662,0,1,1,1.322,0c.008.534,0,1.068,0,1.6Z"
                                                        transform="translate(-110.603 -55.57)" fill="#0091de" />
                                                </g>
                                            </svg>
                                            <p>{{ $latest->time }}</p>
                                        </div>
                                    </div>
                                </div>
                            @empty
                            @endforelse

                        </div>
                    </div>
                </div>
                <div class="textnewsbetails">
                    <h1>{{ $news->getTitleAttribute() }}</h1>
                    <p>{!! $news->getDescriptionAttribute() !!}</p>
                </div>
            </section>
            <div class="keyword">
                <h3>{{ trans('website-general.keywords') }}</h3>
                <hr>
                <div class="alltagkey">
                    @forelse (explode(',',$news->getKeywordsAttribute()) as $keyword)
                        <div class="tagkey">
                            <p>{{ $keyword }}</p>
                        </div>
                    @empty
                    @endforelse
                </div>
            </div>
        </section>
    </div>
@stop
