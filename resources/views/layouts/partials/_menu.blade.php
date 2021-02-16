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
                            <a href="{{ URL::to('annonce/list') }}">create</a>
                        </li>
                    </ul>
                </li>
            </ul>
        <li>
            <a href="/about">About</a>
        </li>
        <li>
            <a href="/help">Help</a>
        </li>
    </ul>
</nav>