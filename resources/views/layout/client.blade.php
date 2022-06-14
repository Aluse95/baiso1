<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{asset('assets/clients/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/clients/css/style.css')}}">
</head>
<body>
@include('block.header')
    <main>
        <main class="py-5">
            <div class="container">
                <div class="row">
                    <div class="col-2">
                        <aside>
                            @section('sidebar')
                                @include('block.sidebar')           
                            @show
                        </aside>
                    </div>
                    <div class="col-10">
                        <div class="content">
                            @yield('content')
                        </div>
                    </div>
                </div>
            </div>
    </main>

@include('block.footer')  
</body>
<link rel="stylesheet" href="{{asset('assets/clients/css/bootstrap.min.js')}}">
</html>