<nav class="navbar navbar-expand-lg navbar-light bg-light navbar-static-top">
  <div class="container">
    <!-- Branding Image -->
    <a class="navbar-brand " href="{{ url('/') }}">
      LaraBBS
    </a>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <!-- Left Side Of Navbar -->
      <ul class="navbar-nav mr-auto">
        <li class="nav-item"><a class="nav-link {{ active_class(if_route('topics.index')) }}" href="{{route('topics.index')}}">话题</a></li>
        <li class="nav-item"><a class="nav-link {{ active_class(if_route('category.show') && if_route_param('category', 1))}}" href="{{route('category.show', 1)}}">分享</a></li>
        <li class="nav-item"><a class="nav-link {{ active_class(if_route('category.show') && if_route_param('category', 2))}}" href="{{route('category.show', 2)}}">教程</a></li>
        <li class="nav-item"><a class="nav-link {{ active_class(if_route('category.show') && if_route_param('category', 3))}}" href="{{route('category.show', 3)}}">问答</a></li>
        <li class="nav-item"><a class="nav-link {{ active_class(if_route('category.show') && if_route_param('category', 4))}}" href="{{route('category.show', 4)}}">公告</a></li>
      </ul>

      <!-- Right Side Of Navbar -->
      <ul class="navbar-nav navbar-right">
        @auth
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <img src="{{ Auth::user()->avatar }}" class="img-responsive img-circle" width="30px" height="30px">
          {{ Auth::user()->name }}
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="{{route('users.show', Auth::user())}}">个人中心</a>
          <a class="dropdown-item" href="{{route('users.edit', Auth::user())}}">编辑资料</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" id="logout">
              <form action="{{ route('logout') }}" method="POST">
              @csrf
              <button class="btn btn-block btn-danger" type="submit" name="button">退出</button>
              </form>
          </a>
          </div>
      </li>
        @else
        <li class="nav-item"><a class="nav-link" href="{{route('login')}}">登录</a></li>
        <li class="nav-item"><a class="nav-link" href="{{route('register')}}">注册</a></li>
        @endauth
      </ul>
    </div>
  </div>
</nav>
