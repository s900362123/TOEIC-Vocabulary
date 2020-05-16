<nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="/">{{env('APP_NAME')}}</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item ">
            <a class="nav-link" href="{{route('toeic.index')}}">Daily words <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('toeic.show')}}">History</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Level
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="{{route('toeic.level','A')}}">Level 1</a>
              <a class="dropdown-item" href="{{route('toeic.level','B')}}">Level 2</a>
              <a class="dropdown-item" href="{{route('toeic.level','C')}}">Level 3</a>
              <a class="dropdown-item" href="{{route('toeic.level','D')}}">Level 4</a>
              <a class="dropdown-item" href="{{route('toeic.level','E')}}">Level 5</a>
              <a class="dropdown-item" href="{{route('toeic.level','F')}}">Level 6</a>
            </div>
          </li>
        </ul>



        <form class="form-inline my-2 my-lg-0" id="search" method="get" action="{{route('toeic.search')}}">
          @csrf
          <input class="form-control mr-sm-2" type="search" name="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" onclick="event.preventDefault();
                        document.getElementById('search').submit();">Search</button>
        </form>

        <span class="navbar-text">
              <div class="links">
                @guest
                    <a href="{{ route('login') }}">Login</a>
                    <a href="{{ route('register') }}">Register</a>
                @endguest
                @auth
                  <ul class="navbar-nav ml-auto">
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ auth()->user()->name }} 你好<span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">

                            <a class="dropdown-item" href="{{ route('Settings.show') }}">
                                Setting
                            </a>
                             <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                </ul>
                @endauth
              </div>
        </span>
      </div>
</nav>
