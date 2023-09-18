<nav class="navbar navbar-expand-lg bg-light" id="navbar">
    <div class="container-fluid ">
        <a class="navbar-brand" href="index.html"><img src="{{ asset('website/imges/Group 8541.png') }}" alt=""></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-0 mb-0 mb-lg-0">
                <li>
                    <div class="areasearcheee">
                        <div class="inputser">
                            <i class='bx bx-search searchnon'></i>
                            <input type="text" placeholder="{{ trans('website_navbar.search-here') }}">
                        </div>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link @if (\Request::url() == URL('/' . LaravelLocalization::getCurrentLocale() . '/website/home/')) active @endif" aria-current="page"
                        href="{{ url('website/home') }}">{{ trans('website_navbar.home') }}</a>
                </li>
                <li class="nav-item dropdown  ">
                    <a class="nav-link dropdown-toggle @if (\Request::url() == URL('/' . LaravelLocalization::getCurrentLocale() . '/website/about/') ||
                    \Request::url() == URL('/' . LaravelLocalization::getCurrentLocale() . '/website/vision/') ||
                    \Request::url() == URL('/' . LaravelLocalization::getCurrentLocale() . '/website/mission/') ||
                    \Request::url() == URL('/' . LaravelLocalization::getCurrentLocale() . '/website/principle/')||
                    \Request::url() == URL('/' . LaravelLocalization::getCurrentLocale() . '/website/goals/'))
                    ) active @endif" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">{{ trans('website_navbar.about-us') }}</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{url('website/about')}}">{{ trans('website_navbar.about-us') }}</a></li>
                        <li><a class="dropdown-item" href="{{url('website/vision')}}">{{ trans('website_navbar.vision') }}</a></li>
                        <li><a class="dropdown-item" href="{{url('website/mission')}}">{{ trans('website_navbar.mission') }}</a></li>
                        <li><a class="dropdown-item" href="{{url('website/principle')}}">{{ trans('website_navbar.principle') }}</a></li>
                        <li><a class="dropdown-item" href="{{url('website/goals')}}">{{ trans('website_navbar.goal') }}</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle @if (\Request::url() == URL('/' . LaravelLocalization::getCurrentLocale() . '/website/publications-and-reports')||
                    \Request::url() == URL('/' . LaravelLocalization::getCurrentLocale() . '/website/visual-library')
                    ) active @endif" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        {{ trans('website_navbar.library') }}
                    </a>
                    <ul class="dropdown-menu ">
                        <li><a class="dropdown-item"
                                href="{{url('website/publications-and-reports')}}">{{ trans('website_navbar.reports-and-publications') }}</a>
                        </li>
                        <li><a class="dropdown-item"
                                href="{{url('website/visual-library')}}">{{ trans('website_navbar.visual_library') }}</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link @if (\Request::url() == URL('/' . LaravelLocalization::getCurrentLocale() . '/website/news/')) active @endif" href="{{url('website/news')}}">{{ trans('website_navbar.news-and-announcement') }}</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle @if (\Request::url() == URL('/' . LaravelLocalization::getCurrentLocale() . '/website/job-request')||
                    \Request::url() == URL('/' . LaravelLocalization::getCurrentLocale() . '/website/volunteer-request') ||
                    \Request::url() == URL('/' . LaravelLocalization::getCurrentLocale() . '/website/company-request')
                    ) active @endif" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">{{ trans('website_navbar.join-us') }}</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item"
                                href="{{url('website/job-request')}}">{{ trans('website_navbar.job-req') }}</a></li>

                        <li><a class="dropdown-item"
                                href="{{url('website/volunteer-request')}}">{{ trans('website_navbar.volunteer-req') }}</a></li>

                        <li><a class="dropdown-item"
                                href="{{url('website/company-request')}}">{{ trans('website_navbar.company-req') }}</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link @if (\Request::url() == URL('/' . LaravelLocalization::getCurrentLocale() . '/website/contact-us/')) active @endif" href="{{url('website/contact-us')}}">{{ trans('website_navbar.contact-us') }}</a>
                </li>
                {{-- <li class="nav-item dropdown">
                    @foreach (LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" hreflang="{{ $localeCode }}">{{ strtoupper($localeCode) }}</a></li>
                    </ul>
                        @endforeach
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false"> AR</a>

                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#"> EN</a></li>
                    </ul>
                </li> --}}

                <ul class="navbar-nav ml-auto" style="margin-top: 7px; margin-inline-start:30px;">
                    <li class="nav-item dropdown">
                        @foreach (LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                            <a rel="alternate" hreflang="{{ $localeCode }}"
                                href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}"
                                @if ($localeCode == LaravelLocalization::getCurrentLocale()) style="color: #181c32;"
                            @else
                            style="color: #858ba9c4;" @endif>
                                {{ strtoupper($localeCode) }}
                            </a>
                        @endforeach
                    </li>
                </ul>
            </ul>

            <div class="btns">
                <div class="btnserch">
                    <i class='bx bx-search' id="search"></i>
                    <div>
                        <div class="areasearch">
                            <div class="inputser">
                                <i class='bx bx-search searchnon'></i>
                                <form>
                                <input type="search" placeholder="{{ trans('website_navbar.search-here') }}" name="search" value="{{ request('search') }}">
                            </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="btn_search">
                    <a href="{{url('website/donate')}}">
                        <div class="btnnow">
                            <h6>{{ trans('website_navbar.donate-now') }}</h6>
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                width="32.062" height="29.898" viewBox="0 0 32.062 29.898">
                                <defs>
                                    <clipPath id="clip-path">
                                        <rect id="Rectangle_14" data-name="Rectangle 14" width="32.062"
                                            height="29.898" fill="#fff" />
                                    </clipPath>
                                </defs>
                                <g id="Group_15" data-name="Group 15" clip-path="url(#clip-path)">
                                    <path id="Path_128" data-name="Path 128"
                                        d="M32.051,9.019a11.049,11.049,0,0,1-.267,2.78c-.151.752-.639.9-1.2.376-.483-.457-.943-.939-1.416-1.407-.689-.682-1.245-.773-1.725-.29-.442.445-.34,1.029.3,1.671.836.84,1.679,1.673,2.513,2.515.3.305.619.66.2,1.065-.4.387-.758.117-1.073-.2q-2.16-2.162-4.322-4.322c-.147-.147-.294-.3-.454-.427a.883.883,0,0,0-1.245.025.927.927,0,0,0-.172,1.245,3.034,3.034,0,0,0,.523.614q2.421,2.43,4.849,4.853a5.08,5.08,0,0,1,.425.455.515.515,0,0,1,.012.688.558.558,0,0,1-.729.16,2.257,2.257,0,0,1-.528-.429q-2.1-2.09-4.192-4.187a3.578,3.578,0,0,0-.457-.422.936.936,0,0,0-1.258.054A.954.954,0,0,0,21.7,15.1a2.526,2.526,0,0,0,.449.514q2.246,2.252,4.5,4.5a3.558,3.558,0,0,1,.416.462.538.538,0,0,1-.055.739.531.531,0,0,1-.735.07,3.46,3.46,0,0,1-.465-.412q-1.7-1.695-3.4-3.394A2.832,2.832,0,0,0,22,17.2a.949.949,0,0,0-1.306.072.935.935,0,0,0-.052,1.3,6.52,6.52,0,0,0,.686.723c1.086,1.09,2.18,2.172,3.26,3.268.505.512.478.823-.061,1.3a58.338,58.338,0,0,1-7.854,5.826,1.041,1.041,0,0,1-1.254,0,58.355,58.355,0,0,1-7.854-5.826c-.539-.477-.567-.787-.062-1.3,1.124-1.14,2.261-2.267,3.392-3.4.132-.132.268-.262.395-.4a1.045,1.045,0,0,0,.113-1.5,1.02,1.02,0,0,0-1.5.1c-.673.649-1.327,1.319-1.989,1.98q-.927.926-1.854,1.851c-.292.29-.628.474-.975.123s-.162-.684.129-.976Q7.547,18,9.885,15.66a4.8,4.8,0,0,0,.428-.453,1.048,1.048,0,0,0-.054-1.368.992.992,0,0,0-1.36.018c-.236.2-.448.434-.669.654Q6.288,16.45,4.346,18.389a2.711,2.711,0,0,1-.466.41.567.567,0,0,1-.787-.109.529.529,0,0,1,.013-.738,5.3,5.3,0,0,1,.385-.407q2.424-2.427,4.849-4.854a3.4,3.4,0,0,0,.532-.607.924.924,0,0,0-.132-1.25.9.9,0,0,0-1.25-.056,10.027,10.027,0,0,0-.813.772Q4.8,13.422,2.928,15.3q-.154.154-.31.308c-.3.29-.633.458-.986.137-.37-.336-.188-.68.094-.975.344-.361.7-.71,1.054-1.063.587-.589,1.185-1.168,1.759-1.769a1,1,0,0,0,.107-1.446.966.966,0,0,0-1.49.049c-.578.538-1.114,1.121-1.688,1.663-.506.477-1.024.345-1.15-.32a11.517,11.517,0,0,1,.74-7.667A7.486,7.486,0,0,1,7.034.116a8.844,8.844,0,0,1,8.672,3.8c.321.425.437.307.69-.037A9.039,9.039,0,0,1,23.914,0,8.008,8.008,0,0,1,31.93,6.965a12.287,12.287,0,0,1,.121,2.054M1.389,10.534c.449-.407.805-.779,1.21-1.088a2.113,2.113,0,0,1,3.155.515c.262.409.4.363.718.083a2.165,2.165,0,0,1,2.692-.394A2.073,2.073,0,0,1,10.2,12.039a.387.387,0,0,0,.224.492,2.118,2.118,0,0,1,1.159,2.893.451.451,0,0,0,.209.612,2.177,2.177,0,0,1,.288,3.64c-1.022,1.036-2.047,2.069-3.091,3.082-.306.3-.346.468.014.771a63.845,63.845,0,0,0,6.417,4.736.988.988,0,0,0,1.24,0,63.725,63.725,0,0,0,6.417-4.736c.35-.3.342-.464.027-.771C22,21.691,20.9,20.611,19.84,19.5a2.129,2.129,0,0,1,.343-3.387c.384-.254.4-.457.257-.857a2.078,2.078,0,0,1,1.046-2.636.582.582,0,0,0,.377-.757,2.077,2.077,0,0,1,1.261-2.328,2.229,2.229,0,0,1,2.568.556c.148.133.254.4.517.054,1.122-1.481,2.454-1.56,3.78-.265a1.888,1.888,0,0,0,.727.59,9.455,9.455,0,0,0,.014-3.208c-.6-4.5-4.483-6.609-8.421-5.879A8.157,8.157,0,0,0,16.775,5.49c-.513.836-.958.845-1.456.014A9.893,9.893,0,0,0,13.188,3C9.239-.328,2.366,1.091,1.407,6.936a9.241,9.241,0,0,0-.018,3.6"
                                        transform="translate(0 0)" fill="#fff" />
                                </g>
                            </svg>
                        </div>
                    </a>
                </div>
            </div>
        </div>
</nav>
