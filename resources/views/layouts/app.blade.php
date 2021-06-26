<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Contform</title>
</head>
<body>
    @include('inc.navbar')

    <div class="container">

    @if(Request::is('/'))
    @include('inc.showcase')
    @endif

        <div class="row">
            <div class="col-md-8">
            @include('inc._messages')
             @yield('content')
            </div>

            <div class="col-md-4">
                @include('inc.sidebar')
            </div>
        </div>
    </div>
    
    <footer id="footer" class="bg-dark mt-auto py-3 text-center">
  <div class="container">
    <span class="text-white">Copyright &copy; R_M_K</span>
  </div>
</footer>
</body>
</html>