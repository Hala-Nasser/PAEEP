@extends('website.layouts.layout')
@section('css')
    <link rel="stylesheet" href="{{ asset('website/css/publications_and_reports.css') }}">
    <link rel="stylesheet" href="{{ asset('website/css/programs.css') }}">

@stop
@section('content')
    <div class="containerr">
        <section class="hedsid">
            <h6><a href="{{ url('website/home') }}">{{ trans('website_navbar.home') }} / </a></h6>
            <h6>{{ trans('website_navbar.reports-and-publications') }}</h6>
        </section>
        <section class="allnewss">
            <div class="newss">
                <h1> {{ trans('website_navbar.reports-and-publications') }}</h1>
            </div>
            <div class="allcardpro">
                @forelse ($reports as $report)
                    <div class="cardpubb">
                        <a href="{{ Storage::url($report->file) }}" target="_blank">
                            {{-- <a href="{{Storage::url($report->file)}}"> --}}
                            <img src="{{ Storage::url($report->image) }}" alt="">
                            <p class="popcc">{{ $report->date }}</p>
                            <p class="textcardpop">{{ $report->getTitleAttribute() }}</p>
                        </a>
                    </div>
                @empty
                @endforelse
            </div>
        </section>
    </div>
@stop
