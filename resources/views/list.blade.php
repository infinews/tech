@extends('app')

@section('title', 'Neueste Nachrichten')

@section('content')

    <div class="row">
        <div class="col"
             data-controller="news"
             data-news-render="{{ config('smi.news.renderCount') }}"
        >
            {{--
            <div class="mb-3 mt-2">
                <h1 class="h5 text-muted font-weight-bold text-uppercase">Neueste Nachrichten</h1>
            </div>
            --}}
            <div class="row row-cols-1" data-target="news.news">
                @isset($lastNews)
                    @foreach($lastNews as $news)
                        <x-news :news="$news"/>
                    @endforeach
                @endif
            </div>
        </div>
    </div>


@endsection
