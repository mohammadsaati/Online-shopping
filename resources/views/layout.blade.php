<html>

<head>
    <title>Street Shoping | فروشگاه</title>

<meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="/css/style.css" />
    
  <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>    
 
 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.4.0/dropzone.css" />
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.4.0/dropzone.js"></script>

    <script>
        Dropzone.options.myAwesomeDropzone = {
            paramName: "file", // The name that will be used to transfer the file
            maxFilesize: 3, // MB
            uploadMultiple : false,
        };
    </script>

    



   
    
</head>

<body id="body">
<!-- Static navbar -->
<div class="container-fluid">
<nav class="navbar navbar-expand-lg navbar-dark bg-info fixed-top">
    <a class="navbar-brand" href="#" style="font-family: BLKCHCRY;">Shut Market &nbsp; !</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">


        <ul class="navbar-nav mr-auto">
            <!-- Authentication Links -->
            @guest
                <li><a class="nav-link btn btn-danger" href="{{ route('login') }}">{{ __('ورود') }}</a></li>
                &nbsp; &nbsp;

                <li><a class="nav-link btn btn-success" href="{{ route('register') }}">{{ __('ثبت نام') }}</a></li>
            @else
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link btn btn-outline-warning dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>



                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            {{ __('خروج') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>
            @endguest

        @guest
        
        @else
                <li class="nav-item active">
                <a class="nav-link" href="{{ route('home') }}">
                    <span class="livicon" data-name="home" data-size="24" data-color="#fff"></span>
                    <span class="sr-only">(current)</span>
                </a>
            </li>
        @endguest
            <li class="nav-item nv-link">
                <a class="nav-link " href="{{ route('shop.show') }}">{{ __('فروشگاه') }}</a>
            </li>

            <li class="nav-item nv-link">
                <a class="nav-link " href="#">{{ __('مشاغل') }}</a>
            </li>

            <li class="nav-item nv-link">
                <a class="nav-link " href="#">{{ __('تبلیغات عالی') }}</a>
            </li>

            <li class="nav-item nv-link">
                <a class="nav-link " href="{{ route('product.show') }}">{{ __('محصولات') }}</a>
            </li>

            <li class="nav-item nv-link">
                <a class="nav-link " href="#">{{ __('برند های برتر') }}</a>
            </li>

            <li class="nav-item nv-link">
                <a class="nav-link " href="#">{{ __('همکاری در سایت') }}</a>
            </li>


        </ul>


    </div>
</nav>
</div>
<div class="top"></div>

    <div class="container">
        @yield('contant')
    </div>
    
<br /><br />

        @yield('one-passage')

<br /><br />
    @include('include.footer')

</body>


<script src="/livicon/allcode.js"></script>
<script src="/livicon/raphael-min.js"></script>



</html>