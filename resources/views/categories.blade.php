@extends('sidebar.sidebar')
@section('content')
{{-- <div class="body-wrapper">
    <form action="{{(url('add_category'))}}" method="POST" enctype="multipart/form-data">
        @csrf
    <input type="text" placeholder="Category" name="category" id="category">
    <input class="mt-5 btn btn-primary" name="submit" type="submit">
</form>
</div> --}}
<div class="body-wrapper">
<div id="app">
    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                {{ config('app.name', 'Laravel') }}
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav me-auto">

                </ul>
                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ms-auto">
                    <!-- Authentication Links -->
                    @guest
                        @if (Route::has('login'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                        @endif
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}  
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>
</div>
<div class="login-page bg-light">
<div class="container">
    <div class="row">
        <div class="col-lg-10 offset-lg-1">
          <h3 class="mb-3">Add category</h3>

            <div class="bg-white shadow rounded">
                <div class="row">
                    <div class="col-md-7 pe-0">
                        <div class="form-left h-100 py-5 px-5">
                              
                            <form action="{{(url('add_category'))}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <input type="text" class="w-100 " style="height: 70px" placeholder="Category" name="category" id="category">
                                <input class="mt-5 btn btn-primary" name="submit" type="submit">
                        </div>
                    </div>
                    <div class="col-md-5 ps-0 d-none d-md-block">
                        <div class="form-right h-100 bg-primary text-white text-center pt-5">
                          <div class="col-12">&nbsp;</div>
                          
                            <h1 class="text-light pt-5">Welcome Back!!!</h1>
                        </div>
                    </div>
                </div>
            </div>
         
        </div>
    </div>
</div>
</div>
</div>
@endsection