<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>空氣品質預報資料</title>
    <link rel="stylesheet" href="{{asset('dist/css/main.css')}}">
    <link rel="stylesheet" href="{{asset('dist/css/bootstrap.css')}}">
</head>

<body>
    <div class="container-fluid">
        <nav class="navbar  navbar-dark bg-primary">
            <div class="collapse navbar-toggleable-xs" id="navbar-header">
                <a class="navbar-brand" href="/notebooks">空氣品質預報資料Json列表</a>
            </div>
            <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    {{ (Auth::user()->name) }}
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    @if (Auth::guest())
                        <a class="dropdown-item" href="{{ url('/login') }}">登入</a>
                        <a class="dropdown-item" href="{{ url('/register') }}">註冊</a>
                    @else 
                        <a class="dropdown-item" href="{{ url('/logout') }}" onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                            Logout
                        </a>
                        <form action="{{ url('/logout') }}" id="logout-form" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    @endif
                </div>
            </div>
        </nav>
        @yield('content')
    </div>

    <script src="{{asset('dist/js/jquery3.min.js')}}"></script>
    <script src="{{asset('dist/js/bootstrap.js')}}"></script>
    <script src="{{asset('dist/js/air.js')}}"></script>
</body>

</html>
