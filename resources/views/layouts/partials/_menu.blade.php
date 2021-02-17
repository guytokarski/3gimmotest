<nav id="nav-menu">
    <div class="navbar-header">
        <!-- Home -->
        <a class="navbar-brand" href="#">3G IMMO</a>
    </div>

    <ul id="menu">
        <li><a href="#">Immo</a>
            <ul>
                <li>
                    <a href="{{ URL::to('annonce') }}">Annonces</a>
                    <ul>
                        <li>
                            <a href="{{ URL::to('annonce') }}">list</a>
                        </li>
                        <li>
                            <a href="{{ URL::to('annonce/create') }}">create</a>
                        </li>
                    </ul>
                </li>
            </ul>
        <li>
            <a href="/about">{{ __('About') }}</a>
        </li>
        <li>
            <a href="/help">{{ __('Help') }}</a>
        </li>
        <li id="lang-selector">


            @php ( $locale = Session::get('locale') )    

                <a href="#">
                    @switch($locale)
                        @case('us')
                        <img src="{{asset('img/en_GB.png')}}"> {{ __('English') }}
                        @break                 
                        @case('fr')
                        <img src="{{asset('img/fr_FR.png')}}"> {{ __('French') }}
                        @break
                        @default
                        <img src="{{asset('img/en_GB.png')}}"> {{ __('English') }}
                        @endswitch
                        <span class="caret"></span>
                </a>
            <ul class="navbar-nav ml-auto">


                <li class="nav-item dropdown">                    
                    <a class="dropdown-item" href="lang/en"><img src="{{asset('img/en_GB.png')}}"> {{ __('English') }}</a>
                </li>
                <li class="nav-item dropdown">                    
                    <a class="dropdown-item" href="lang/fr"><img src="{{asset('img/fr_FR.png')}}"> {{ __('French') }}</a>
                </li>
            </ul>
        </li>
    </ul>
</nav>