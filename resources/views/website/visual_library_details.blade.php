@extends('website.layouts.layout')
@section('css')
    <link rel="stylesheet" href="{{ asset('website/css/album_presentation.css') }}">
    <link rel="stylesheet" href="{{ asset('website/css/news.css') }}">
@stop
@section('content')
    <div class="containerr">
        <section class="hedsid">
            <h6><a href="{{ url('website/home') }}">{{ trans('website_navbar.home') }} / </a></h6>
            <h6><a href="{{ url('website/visual-library') }}">{{ trans('website_navbar.visual_library') }} / </a></h6>
        </section>

        <section class="allnewss">
            <div class="newss">
                <h1>{{ $visual_library->getTitleAttribute() }}</h1>
            </div>
            <div class="textalbomdet">
                <p>{!! $visual_library->getDescriptionAttribute() !!}</p>
            </div>

            <div class="allcardlib">
                <div class="cardslaib ">
                    @forelse ($visual_library->media as $media)
                        <div class="imgbig" href="{{ Storage::url($media->image) }}" data-fancybox="gallery">
                            <img class="imgbodyDetails" src="{{ Storage::url($media->image) }}" alt="" />
                        </div>
                    @empty
                    @endforelse
                </div>
            </div>
    </div>
@stop
