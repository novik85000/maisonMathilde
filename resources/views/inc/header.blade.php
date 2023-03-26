
@section('header')
    <header class="p-3 text-white">
        <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                <a href="{{route('home')}}" class="d-flex align-items-center mb-2 mb-lg-0 text-dark text-decoration-none me-5">
                    <div class="col">
                        <div class="row">
                            <img src={{asset("/images/logotype.svg")}} alt="logo" class="bi me-2" height="40" width="32">
                        </div>
                        <div class="row" style="font-family: Alex Brush; font-size: 1.3em; font-weight: bold">
                            MaisonMathilde
                        </div>
                    </div>
                </a>

                <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                    <li><a href="{{route('home')}}" class="nav-link px-2 text-dark">@lang('header.home')</a></li>
                    <li><a href="{{route('creations-add')}}" class="nav-link px-2 text-dark">@lang('header.shop')</a></li>
                    <li><a href="{{route('about')}}" class="nav-link px-2 text-dark">@lang('header.about_me')</a></li>
                    <li><a href="{{route('contacts')}}" class="nav-link px-2 text-dark">@lang('header.contacts')</a></li>




                @if(Illuminate\Support\Facades\Auth::user() && Illuminate\Support\Facades\Auth::user()->isAdmin == 1)
                    <li>

                        <li><a href="{{route('creations-add')}}" class="nav-link px-2 text-dark">@lang('header.shop')</a></li>
                        <li><a href="{{route('tarif-add')}}" class="nav-link px-2 text-dark"> Tarifs add </a></li>
                        <li><a href="{{route('tarifs-all')}}" class="nav-link px-2 text-dark"> Tarifs all </a></li>

                        <li>
                            <a href="{{route('messages-all')}}" class="nav-link px-2 text-dark">
                                @lang('header.messages')
                                @if(session('howManyMessages') > 0)
                                    <sup> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
                                            <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z"/>
                                        </svg>
                                        {{session('howManyMessages')}} </sup>
                                @endif


                            </a>
                        </li>

                        <li><a href="{{route('products-all')}}" class="nav-link px-2 text-dark">Products all</a></li>

                        <li><a href="{{route('settings')}}" class="nav-link px-2 text-dark">Settings</a></li>

                    @endif
                </ul>

                <div class="text-end">
                    @if(Illuminate\Support\Facades\Auth::user())
                    <a href="{{route('logout')}}"><button type="button" class="btn btn-outline-dark me-2">Logout</button></a>
                    @endif

                        @if(Illuminate\Support\Facades\Auth::user() == false)
                    <a href="{{route('login')}}"><button type="button" class="btn btn-outline-dark me-2">@lang('header.login')</button></a>
                    <a href="{{route('register')}}"><button type="button" class="btn btn-outline-dark me-2">@lang('header.sign_up')</button></a>
                        @endif

                    <a href="{{route('locale', __('main.set_lang')) }}">
                        <button type="button" class="btn btn-outline-dark me-2" style="text-transform: uppercase">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-translate" viewBox="0 0 16 16">
                                <path d="M4.545 6.714 4.11 8H3l1.862-5h1.284L8 8H6.833l-.435-1.286H4.545zm1.634-.736L5.5 3.956h-.049l-.679 2.022H6.18z"/>
                                <path d="M0 2a2 2 0 0 1 2-2h7a2 2 0 0 1 2 2v3h3a2 2 0 0 1 2 2v7a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2v-3H2a2 2 0 0 1-2-2V2zm2-1a1 1 0 0 0-1 1v7a1 1 0 0 0 1 1h7a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H2zm7.138 9.995c.193.301.402.583.63.846-.748.575-1.673 1.001-2.768 1.292.178.217.451.635.555.867 1.125-.359 2.08-.844 2.886-1.494.777.665 1.739 1.165 2.93 1.472.133-.254.414-.673.629-.89-1.125-.253-2.057-.694-2.82-1.284.681-.747 1.222-1.651 1.621-2.757H14V8h-3v1.047h.765c-.318.844-.74 1.546-1.272 2.13a6.066 6.066 0 0 1-.415-.492 1.988 1.988 0 0 1-.94.31z"/>
                            </svg>
                            @lang('main.set_lang')
                        </button>
                    </a>
                </div>
            </div>
        </div>
    </header>
