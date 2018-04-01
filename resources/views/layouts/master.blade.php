<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{asset('admin/css/bootfixed.css')}}">
    <link rel="stylesheet" href="{{asset('admin/css/custom.css')}}">
</head>
<body>
@include('layouts.topmenu')

@include('layouts.leftmenu')

    <!-- MAIN -->
    <div class="col">

        <h1>
        @yield('content')
        </h1>




    </div><!-- Main Col END -->

</div><!-- body-row END -->


<footer class="bg-dark text-white text-right">
    <br/>
    <div class="container">
        Copyright &copy; 2018. Administrator Templates By <small> Habib </small>
    </div>
    <hr/>
</footer>

<!-- Bootstrap Javascript -->
<script type="text/javascript" src="{{asset('admin/js/java.js')}}"></script>
<script type="text/javascript" src="{{asset('admin/js/boot.min.js')}}"></script>
<script type="text/javascript" src="{{asset('admin/js/custom.js')}}"></script>
</body>
</html>