@extends('website.layouts.layout')
@section('css')
    <link rel="stylesheet" href="{{ asset('website/css/visual_library.css') }}">
    <link rel="stylesheet" href="{{ asset('website/css/news.css') }}">
@stop
@section('content')
<div class="containerr">
    <section class="hedsid">
        <h6><a href="{{ url('website/home') }}">{{ trans('website_navbar.home') }} / </a></h6>
        <h6>{{ trans('website_navbar.visual_library') }}</h6>
    </section>
    <section class="allnewss">
      <div class="newss">
        <h1>{{ trans('website_navbar.visual_library') }}</h1>
      </div>
      <div class="allcardnews">
        @forelse ($visual_libraries as $visual_library)
        <div class=" card cardNews ">
            <a href="{{url('website/visual-library/' . $visual_library->id)}}">
              <img src="{{Storage::url($visual_library->image)}}" class="card-img-top" alt="...">
              <div class="card-body"><a href="{{url('website/visual-library/' . $visual_library->id)}}">
              </a><a href="{{url('website/visual-library/' . $visual_library->id)}}"><h5 class="card-title">{{$visual_library->getTitleAttribute()}}</h5></a>
              <p class="card-text">
                {{$visual_library->getDescriptionAttribute()}}
              </p>
              </div>
              {{-- <div class="card-body">
                <h5 class="card-title">{{$visual_library->getTitleAttribute()}}</h5>
                <p class="card-text">{!!$visual_library->getDescriptionAttribute()!!}</p>
              </div> --}}
            </a>
          </div>
        @empty
        @endforelse
        </a>
      </div>
  </div>

  <div class="pagg">
    {{$visual_libraries->links("pagination::bootstrap-4")}}
    {{-- <nav aria-label="Page navigation example">
      <ul class="pagination">
        <li class="page-item">
          <a class="page-link" href="#" aria-label="Previous">
            <span aria-hidden="true">&laquo;</span>
          </a>
        </li>
        <li class="page-item"><a class="page-link" href="#">1</a></li>
        <li class="page-item"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item">
          <a class="page-link" href="#" aria-label="Next">
            <span aria-hidden="true">&raquo;</span>
          </a>
        </li>
      </ul>
    </nav> --}}
  </div>
@stop
