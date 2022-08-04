 <!--Navbar-->
 <nav class="navbar navbar-expand-md py-3 color1">
    <div class="container">
        <!--not responsive logo-->
        <div class="logo col-3-md">
            <a href="{{url('/')}}" class="navbar-brand">
                <img src="{{asset('assets/img/XU Logo white.jpg')}}" alt="XU" border="0" width="70%">
            </a>
        </div>
        <div class="collapse navbar-collapse justify-content-center col-6-md" id="navmenu">
            <ul class="navbar-nav">
                <li class="nav-item ">
                    <a href="{{route('about')}}" class="nav-link text-color1 text-font1">About</a>
                </li>
                <li class="nav-item">
                    <a href="{{route('news')}}" class="nav-link text-color1 text-font1">News & Events</a>
                </li>
                <li class="nav-item">
                    <a href="{{route('admissions')}}" class="nav-link text-color1 text-font1">Admissions</a>
                </li>
                <li class="nav-item">
                    <a href="{{route('academics')}}" class="nav-link text-color1 text-font1">Academics</a>
                </li>
                <li class="nav-item">
                    <a href="{{route('offices')}}" class="nav-link text-color1 text-font1">Offices</a>
                </li>
                <li class="nav-item">
                    <a href="{{route('contacts')}}" class="nav-link text-color1 text-font1">Contacts</a>
                </li>
            </ul>
        </div>
        <!--search box not responsive-->
            <div class="form-outline">
              <input id="search-input" type="search" id="form1" class="form-control" style="width:170px;" />
            </div>
            <button id="search-button" type="button" class="btn btn-primary">
              <i class="fas fa-search"></i>
            </button>
            @guest
            @else
            <form id="logout-form"action="{{ route('logout') }}" method="POST">
                @csrf
                <button class="btn btn-primary" data-bs-toggle="button" type="submit" style="margin-left:15px;">
                    {{ __('Logout') }}
                </button>
            </form>
    @endguest
          </div>
</div>

</nav>
