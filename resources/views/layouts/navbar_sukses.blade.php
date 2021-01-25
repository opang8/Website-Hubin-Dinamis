
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
    
    
    <!-- Navbar -->
    <div class="container fixed-top">
        <nav class="row navbar navbar-expand-lg navbar-light">
            <div class="navbar-nav ml-auto mr-auto mr-sm-auto mr-lg-0 mr-md-auto">
                <a href="{{ url("/page_siswa") }}" class="navbar-brand"><img src="{{ url('images/logo hubin.svg') }}" alt="">
        
                </a>
            </div>
            <ul class="navbar-nav mr-auto d-none d-lg-block">
                <li>
                    <span class="text-muted">
                        | &nbsp; Hubungan Industri Smkn 1 Cibinong
                    </span>
                </li>
            </ul>
        </nav>  
        </div>
    
    </div>
   

    @yield('content')
    

    @stack('prepend-script')
    @include('includes.script')
    @stack('addon-script')

    
</body>
</html>