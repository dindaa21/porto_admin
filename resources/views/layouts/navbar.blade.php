<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- CDN Bootstrap 5 --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">

    {{-- CDN Fonts --}}
    <link href="https://fonts.cdnfonts.com/css/co-headline" rel="stylesheet">
    <style>
        @import url('https://fonts.cdnfonts.com/css/co-headline');
    </style>

    {{-- import CSS --}}
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">

    {{-- CDN FontAwesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

    {{-- gambar icon di tab browser --}}
    <link rel="shortcut icon" href="{{ asset('images/profile.png') }}" />

    {{-- Summernote --}}
     <!-- include libraries(jQuery, bootstrap) -->
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
     <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
     
     <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>


    <title>Portofolio | Admin</title>
</head>
<body>
    {{-- navbar --}}
    <div>
        <nav class="navbar fixed-top navbar-light bg-light navbar-expand-sm">
            <div class="container justify-content-around">

                <div class="">
                    <a class="navbar-brand d-flex align-items-center" href="{{ route('home.index') }}">
                        <img src="{{ $user->image }}" alt="" width="60" height="60" class="d-inline-block align-items-center">
                        <p class="h5">
                            {{ $user->name }}
                        </p>
                    </a>
                </div>

                <div class="h5">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link @if( Request::is('/')) active fw-bold @endif" aria-current="page" href="{{ route('home.index') }}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link @if( Request::is('portofolio')) active fw-bold @endif"  href="{{ route('portofolio') }}">Portofolio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link @if( Request::is('sosmed')) active fw-bold @endif"  href="{{ route('update.sosmed') }}">Socmed</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link @if( Request::is('profile')) active fw-bold @endif" href="{{ route('update.profile') }}">Profile</a>
                        </li>
                    </ul>
                    </div>
                </div>
            </div>
        </nav>
    </div>

    {{-- flash message --}}
    {{-- <div id="app">
        @yield('flash')
    </div> --}}

    {{-- isi --}}
    <div style="margin-top: 10rem">
        @yield('flash')
        @yield('content')
    </div>
      
    {{-- footer --}}
    <div>
        <div class="d-flex justify-content-around" style="padding: 5rem; background-color: #BA90C6">
            <div>
                &#169 2023 | Dinda Agustina
            </div>
            <div id="sosial-media" class="d-flex">
                    <div class="mx-3">
                        <a href="{{ route('update.sosmed') }}" class="text-dark" target="_blank"><i class="fa-brands fa-instagram fa-2xl"></i></a>
                    </div>
                    <div class="mx-3">
                        <a href="{{ route('update.sosmed') }}" class="text-dark" target="_blank"><i class="fa-brands fa-twitter fa-2xl"></i></a>
                    </div>
                    <div class="mx-3">
                        <a href="{{ route('update.sosmed') }}" class="text-dark" target="_blank"><i class="fa-brands fa-linkedin fa-2xl"></i></a>
                    </div>
                    <div class="mx-3">
                        <a href="{{ route('update.sosmed') }}" class="text-dark" target="_blank"><i class="fa-regular fa-envelope fa-2xl"></i></a>
                    </div>
            </div>
        </div>
    </div>
</body>

<!-- summernote css/js -->
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
<script type="text/javascript">
    $('#summernote_title').summernote({
        height: 400
    });
    $('#summernote_visi').summernote({
        height: 150
    });
    $('#summernote_deskripsi').summernote({
        height: 500, 
    });
</script>
</html>