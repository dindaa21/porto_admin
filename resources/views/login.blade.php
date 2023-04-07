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

        <link rel="shortcut icon" href="{{ asset('images/profile.png') }}" />

        <title>Login</title>
</head>
<body>
        <div class="container mt-5 mb-5">
                <div class="card border-3" style="background-color: #C0DBEA; border-radius: 20px">
                        <div class="row" >
                                <div class="col-6">
                                        <img src="{{ asset('images/login.jpg') }}" class="img-fluid" style="border-top-left-radius: 20px; border-bottom-left-radius: 20px" alt="login">
                                </div>
                                <div class="col-6 mt-5">
                                        <div class="my-5 text-center">
                                                <p class="h1">
                                                        Admin Website
                                                </p>
                                        </div>
                                        <form action="{{ route('login') }}" method="post">
                                                {{ csrf_field() }}

                                                <div class="px-5">
                                                        <div class="form-floating mb-3">
                                                                <input type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                                                                <label for="floatingInput">Email address</label>
                                                        </div>
                                                        <div class="form-floating">
                                                                <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password">
                                                                <label for="floatingPassword">Password</label>
                                                        </div>
                                                </div>
                                                <div class="text-center mt-5">
                                                        <button type="submit" class="btn" style="background-color: #ffb7e9; color: white">Login</button>
                                                </div>
                                        </form>
                                </div>
                        </div>
                </div>
        </div>
</body>
</html>