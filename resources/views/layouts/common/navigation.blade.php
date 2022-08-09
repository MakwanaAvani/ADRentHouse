<header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="{{ route('dashboard') }}" class="logo">AD<em> Rent House</em></a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                        <li><a href="{{ route('dashboard') }}" class="active">Home</a></li>
                        <li><a href="{{ url('/rentyourproperty') }}">Rent your Property</a></li>
                        <!-- <li><a href="{{ route('tentant') }}">Tenant</a></li> -->
                        <li><a href="{{ route('viewhomeapartment') }}">Find Home and Apartment</a></li>
                        <li>
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Info</a>

                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="{{ route('aboutus') }}">About Us</a>
                                <a class="dropdown-item" href="{{ route('contactus') }}">Contact</a>
                                <a class="dropdown-item" href="{{ route('feedback') }}">feedback</a>
                            </div>
                        </li>
                        
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">{{ Auth::user()->name }}</a>
                            <div class="dropdown-menu">
                                <!-- Authentication -->
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <a class="dropdown-item" :href="route('logout')" onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                        {{ __('Log Out') }} </a>

                                </form>
                            </div>
                        </li>
                    </ul>
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
</header>