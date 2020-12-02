<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    @stack('prepend-style')
    @include('includes.style')
    @stack('addon-style')

    <title>@yield('title')</title>

    <link rel="stylesheet" href="css/style.css" />
</head>

<body>
    @include('includes.navbar')
    @yield('content')

    <!--================ Start footer Area  =================-->
    <!--================ Start footer Area  =================-->
    <footer class="footer-area section_gap">
        <div class="row footer-bottom d-flex justify-content-between">
            <div class="col-12">
            <p class=" footer-text text-white text-center">
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                Copyright &copy;<script>
                    document.write(new Date().getFullYear());
                </script> All rights reserved | This template is made with <i class="ti-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
            </div>
        </div>
    </footer>
    <!--================ End footer Area  =================-->

    @include('includes.script')
    @stack('addon-script')

</body>

</html>