<article class="bg-white pt-3 px-3 mb-4 rounded shadow-sm">

    <div class="row">
        <div class="col d-flex flex-column">
            <div class="row">
                <div class="col d-flex flex-column">

                    @empty(!$image)
                        <div class="col-12 col-auto"> <!-- col-md-5 -->
                            <a href="{{ $link }}" target="_blank" class="d-block">
                                <img
                                    src="{{ $image }}"
                                    class="img-full rounded border bg-secondary bg-gradient-secondary mb-2"
                                    onerror="this.style.display='none';"
                                    onload="this.style.display='block';"
                                    alt="{{$title}}"
                                    style="display: none;"
                                >
                            </a>
                        </div>
                    @endempty

                    <h2 class="text-dark font-weight-bolder">
                        <a href="{{ $link }}" target="_blank">{{$title}}</a>
                    </h2>

                    <div class="d-flex align-items-center mb-2">

                        {{--
                        <div class="v-center me-2">
                            @if($sources->count() > 10)
                                @foreach($sources->take(5) as $domain => $favicon)
                                    <img src="{{ $favicon }}" class="me-1" alt="{{ $domain }}" loading="lazy">
                                @endforeach

                                <small class="text-muted">И ещё {{ $sources->count() - 5 }} источников написали об
                                                          этом</small>

                            @else

                                @foreach($sources as $domain => $favicon)
                                    <img src="{{ $favicon }}" class="me-1" alt="{{ $domain }}" loading="lazy">
                                @endforeach

                            @endif
                        </div>
                        --}}

                        <time class="text-muted small" datetime="{{ $pubDate }}" data-controller="news-time">
                            {{ $pubDate }}
                        </time>

                    </div>
                </div>
            </div>
        </div>
    </div>

    @if($single)
        <p>
            {!! Str::of($description)->words(25) !!}
        </p>
    @endif

    @if($items->isNotEmpty())
        <hr>
    @endif

    <div data-controller="story-items" class="position-relative">
        <div class="row row-cols-1 row-cols-sm-2">
            @foreach($items->take(2) as $news)
                <x-news :news="$news"/>
            @endforeach

            @foreach($items->skip(2) as $news)
                <x-news :news="$news" class="d-none"/>
            @endforeach
        </div>

        @if($items->count() > 2)
            <div class="text-center pb-3 position-absolute bottom-0 start-0 end-0 bg-white opacity-50">
                <button class="btn w-100" data-action="story-items#show" title="Больше источников" data-target="story-items.showMoreBtn">
                    <svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-arrow-down-short"
                         fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                              d="M4.646 7.646a.5.5 0 0 1 .708 0L8 10.293l2.646-2.647a.5.5 0 0 1 .708.708l-3 3a.5.5 0 0 1-.708 0l-3-3a.5.5 0 0 1 0-.708z"/>
                        <path fill-rule="evenodd"
                              d="M8 4.5a.5.5 0 0 1 .5.5v5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5z"/>
                    </svg>
                </button>
            </div>
        @endif
    </div>

</article>
