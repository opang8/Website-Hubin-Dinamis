
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    @stack('prepend-style')
    @include('includes.style_login')
    @stack('addon-style')

</head>
<body>
    <div class="container fixed-top">
        <nav class="row navbar navbar-expand-lg navbar-light bg-white ">
            <a href="#" class="navbar-brand ml-3">
                <img src="images/Logo hubin.svg" alt="logo hubin">
            </a>
            <button 
            class="navbar-toggler navbar-toggler-right" 
            type="button"
            data-toggle="collapse"
            data-target="#navb"
            >

            <span class="navbar-toggler-icon"></span>

            </button>
            <div class="collapse navbar-collapse" id="navb">
                <ul class="navbar-nav ml-auto mr-3">
                    @guest
                     <form method="POST" class="form-inline my-2 my-lg-0">
                        <button class="btn btn-login btn-navbar-right my-2 my-sm-0 px-4"
                     style="background: #26DCA2; color:white; " type="button" onclick="event.preventDefault(); location.href='{{ url('register')}}';">
                        Registrasi
                        </button>
                     </form>
                     @endguest

                     @auth
                    <form method="POST" class="form-inline my-2 my-lg-0" action="{{ url('logout') }}">
                        @csrf
                        <button class="btn btn-login btn-navbar-right my-2 my-sm-0 px-4" type="submit" style="background: #26DCA2; color:white; ">
                            Keluar
                        </button>
                     </form>
                     @endauth
                </ul>
            </div>
        </nav>  
    </div>
    @yield('content')
    

    @stack('prepend-script')
    @include('includes.script')
    @stack('addon-script')

    
</body>
</html>