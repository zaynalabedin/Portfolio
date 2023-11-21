<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>


    @include('link.headerLink')




</head>
<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        @guest

        @else
            @include('link.navbar')
            @include('link.sidebarLink')
        @endguest

        <div class="content-wrapper">
            <section class="content">
                <div class="container-fluid">
                    @yield('content')
                </div>
            </section>
        </div>
        {{-- <main class="py-4">

            @yield('content')
        </main> --}}
    </div>

    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> --}}
</body>
@include('link.footerLink')
</html>
