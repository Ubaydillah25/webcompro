<nav class="colorlib-nav" role="navigation">
    <div class="top-menu">
        <div class="container">
            <div class="row">
                <div class="col-md-2">
                    <div id="colorlib-logo">
                        {{-- <img src="{{ asset('images/logo.png')" alt="logo"> --}}
                        <a href="#">Mahesa<span>Partnership.</span></a>
                    </div>
                </div>
                <div class="col-md-10 text-right menu-1">
                    <ul>
                        <li class="{{ request()->routeIs("front.index") ? 'active' : '' }}"><a href="{{ route('front.index') }}">Home</a></li>
                        <li class="{{ request()->routeIs("front.paractice") ? 'active' : '' }}"><a href="{{ route('front.paractice') }}">Practice Areas</a></li>
                        <li class="{{ request()->routeIs("front.client") ? 'active' : '' }}"><a href="{{ route('front.index') }}">Client</a></li>
                        <li class="{{ request()->routeIs("front.affiliaton") ? 'active' : '' }}"><a href="{{ route('front.affiliaton') }}">Affiliaton</a></li>
                        <li class="{{ request()->routeIs("front.career") ? 'active' : '' }}"><a href="{{ route('front.career') }}">Career</a></li>
                        <li class="{{ request()->routeIs("front.contact") ? 'active' : '' }}"><a href="{{ route('front.contact') }}">Contact</a></li>
                        {{-- <li class="btn-cta"><a href="#"><span>Make an Appointment</span></a></li> --}}
                        <!-- <li class="btn-cta"><a href="#"><span>Sign Up</span></a></li> -->
                    </ul>
                </div>
            </div>

        </div>
    </div>
</nav>
