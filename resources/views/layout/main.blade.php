<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="{{asset('/')}}assets/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link href="{{asset('/')}}assets/plugins/fontawesome/css/all.min.css" rel="stylesheet">
</head>

<body>

    <!-- navbar -->
    <nav class="navbar navbar-expand-lg bg-success navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="#"> <img src=""> STMIK Lombok</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link {{(request()->segment('1')=='' || request()->segment('1') == 'home' ?
                        'active' : '')}}" aria-current="page" href="{{url('home')}}">
                            <i class="fas fa-tachometer-alt"></i> Home
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{( request()->segment('1') == 'mahasiswa' ?
                        'active' : '')}}" aria-current="page" href="{{url('mahasiswa')}}">
                            <i class="fas fa-user"></i> Mahasiswa
                        </a>
                    </li>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- /navbar -->

    <!-- Content -->
    <div class="mt-2">
        <div class="container">
            @yield('content')
        </div>
    </div>
    <!-- /Content -->
    <script src="{{asset('/')}}assets/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>