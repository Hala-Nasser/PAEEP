@extends('website.layouts.layout')
@section('css')
    <link rel="stylesheet" href="{{ asset('website/css/news.css') }}">
    <link rel="stylesheet" href="{{ asset('website/css/programs.css') }}">
    <link rel="stylesheet" href="{{ asset('website/css/Program_Details.css') }}">
@stop
@section('content')
    <div class="containerr">
        <section class="hedsid">
            <h6><a href="{{ url('website/home') }}">{{ trans('website_navbar.home') }} / </a></h6>
            <h6><a href="{{ url('website/programs') }}">{{ trans('website-general.programs') }} / </a></h6>
            <h6>{{ trans('website-general.program_details') }}</h6>
        </section>
        <section class="allnewss">
            <div class="newss">
                <h1>{{ $program->getTitleAttribute() }}</h1>
                <p>{!! $program->getDescriptionAttribute() !!}</p>
            </div>
            <div class="program_more">

                <h2>{{trans('website-general.other_programs')}}</h2>

                <div class="allcardpro">

                    @forelse ($other_programs as $other)
                        <a href="{{ url('/website/program/' . $other->id) }}">
                            <div class="cardpro">
                                <img src="{{ Storage::url($other->image) }}" alt="" data-tilt
                                    data-tilt-scale="1.1">
                                <h4><a
                                        href="{{ url('/website/program/$program->id') }}">{{ $other->getTitleAttribute() }}</a>
                                </h4>
                            </div>
                        </a>
                    @empty
                    @endforelse
                </div>

            </div>
        </section>
    </div>
@stop
