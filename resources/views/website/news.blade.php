@extends('website.layouts.layout')
@section('css')
    <link rel="stylesheet" href="{{ asset('website/css/news.css') }}">
@stop
@section('content')
    <div class="containerr">
        <section class="hedsid">
            <h6><a href="{{ url('website/home') }}">{{ trans('website_navbar.home') }} / </a></h6>
            <h6>{{ trans('website_footer.news') }}</h6>
        </section>
        <section class="allnewss">
            <div class="newss">
                <h1>{{ trans('website_footer.news') }}</h1>
                <div class="serch-news">
                    <i class='bx bx-search'></i>
                    <form>
                        <input type="search" placeholder="{{ trans('website_navbar.search-here') }}" name="search"
                            value="{{ request('search') }}">
                    </form>
                </div>
            </div>
            <div class="allcardnews">
                @forelse ($news as $single_news)
                    <div class=" card cardNews ">
                        <a href="{{ url('website/news/' . $single_news->slug) }}"> <img
                                src="{{ Storage::url($single_news->image) }}" class="card-img-top" alt="..."></a>
                        <div class="card-body">
                            <a href="{{ url('website/news/' . $single_news->slug) }}">
                                <h5 class="card-title">{{ $single_news->getTitleAttribute() }}</h5>
                            </a>
                            <p class="card-text">{{ $single_news->getShortDescriptionAttribute() }}</p>
                        </div>
                    </div>
                @empty
                @endforelse
            </div>

            <div class="pagg">
                {{ $news->links('pagination::bootstrap-4') }}
            </div>
        </section>

    </div>


@stop

@section('js')
    <script>
        $('#search').on('keyup', function() {
            $value = $(this).val();
            console.log($value);
        });
    </script>
@stop
