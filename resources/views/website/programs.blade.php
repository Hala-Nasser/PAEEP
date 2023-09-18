@extends('website.layouts.layout')
@section('css')
    <link rel="stylesheet" href="{{ asset('website/css/news.css') }}">
    <link rel="stylesheet" href="{{ asset('website/css/programs.css') }}">
@stop
@section('content')
    <div class="containerr">
        <section class="hedsid">
            <h6><a href="{{ url('website/home') }}">{{ trans('website_navbar.home') }} / </a></h6>
            <h6>{{ trans('website-general.programs') }}</h6>
        </section>
        <section class="allnewss">
            <div class="newss progr ">
                <h1>{{ trans('website-general.programs') }}</h1>
                <div class="cardsside">
                    <div class="cardd">
                        <div class="rightside">
                            <div class="allcardpro">
                                @forelse ($programs as $program)
                                    <div class="cardpro">
                                        <a href="{{ url('website/program/' . $program->id) }}">
                                            <img src="{{ Storage::url($program->image) }}" alt="" data-tilt
                                                data-tilt-scale="1.1">
                                        </a>
                                        <h4>
                                            <a
                                                href="{{ url('website/program/' . $program->id) }}">{{ $program->getTitleAttribute() }}</a>
                                        </h4>
                                        <p
                                            style=" display: -webkit-box; -webkit-line-clamp: 4; -webkit-box-orient: vertical; overflow: hidden;">
                                            {{ $program->getDescriptionAttribute() }}</p>
                                    </div>
                                @empty
                                @endforelse
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pagg">
                    {{ $programs->links('pagination::bootstrap-4') }}
                </div>
        </section>
    </div>
@stop
