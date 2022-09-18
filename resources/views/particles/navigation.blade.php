<nav class="site-header d-none d-md-block">
    <div class="px-md-5 bg-dark">
        <div class="container">
            <div class="d-flex flex-md-row justify-content-start align-items-center">
                <a href="{{ App\Link::to('/') }}" data-turbo-action="replace" class="text-black me-auto" title="Heute Wichtig">
                    <x-logo/>
                </a>

                {{--
                <ul class="nav justify-content-center me-auto">
                    <li>
                        <a href="#" class="nav-link px-2 text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-card-list" viewBox="0 0 16 16">
                                <path d="M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h13zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z"/>
                                <path d="M5 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 5 8zm0-2.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm0 5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm-1-5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zM4 8a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zm0 2.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0z"/>
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="nav-link px-2 text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-view-stacked" viewBox="0 0 16 16">
                                <path d="M3 0h10a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2zm0 1a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3zm0 8h10a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-3a2 2 0 0 1 2-2zm0 1a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1v-3a1 1 0 0 0-1-1H3z"/>
                            </svg>
                        </a>
                    </li>
                </ul>
                --}}

                {{--
                <div class="my-2 my-md-0 d-none d-md-inline">
                    <x-exchange/>

                    <div class="p-2 text-black d-none d-md-inline" data-controller="current-time">
                        <span data-current-time-target="day">-</span>
                        <span data-current-time-target="month">-</span>,
                        <strong data-current-time-target="week">-</strong>,
                        <span data-current-time-target="hours">-</span>
                        <span class="blinker">:</span>
                        <span data-current-time-target="minutes">-</span>
                    </div>
                </div>
                --}}
            </div>
        </div>
    </div>
</nav>
