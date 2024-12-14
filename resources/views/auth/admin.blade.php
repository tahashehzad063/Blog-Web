@extends('sidebar.sidebar')
@section('content')

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
    <div class="col-11 border border-1  m-auto mt-5 ps-3 pe-3">
        <h4 class="pt-4 ps-4 text-secondary fs-4 ps-2">
            Tickets</h4>
        <div class="row">
            <div class="col-lg-3 col-md-6 col-12">
                <div class="col-10 m-auto  pb-3 pt-3  alert-primary text-primary ">
                    <h2 class=" text-primary    justify-content-center d-flex">2,064</h2>
                    <h4 class="text-primary justify-content-center d-flex">Total Tickets</h4>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-12">
                <div class="col-10 m-auto pb-3 pt-3 alert-warning ">
                    <h2 class="text-warning      justify-content-center d-flex">1,738</h2>
                    <h4 class="text-warning justify-content-center d-flex">In Progress</h4>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-12">
                <div class="col-10 m-auto  pb-3 pt-3 alert-success">
                    <h2 class="text-success      justify-content-center d-flex">1100</h2>
                    <h4 class="text-success justify-content-center d-flex">Opened</h4>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-12">
                <div class="col-10 m-auto  pb-3 pt-3 alert-danger">
                    <h2 class="text-danger      justify-content-center d-flex">1,738</h2>
                    <h4 class="text-danger justify-content-center d-flex">In Progress</h4>
                </div>
            </div></div></div>
<div class="container-fluid pt-4 px-4">
    <div class="bg-dark text-center rounded p-4">
        <div class="d-flex align-items-center justify-content-between mb-4">
            <h6 class="mb-0">Recent Salse</h6>
            <a href="{{url('post_pageadmin')}}"><button class="btn btn-primary">Add Post</button></a>
        </div>
        <div class="table-responsive">
            <table class="table text-start align-middle table-bordered table-hover mb-0 table-sortable">
                <thead>
                    <tr class="text-white">
                       
                        <th>Post Title</th>
                        <th>Description</th>
                        <th>Post By</th>
                        <th>Writer id</th>
                        <th>Category</th>
                        <th>Comment By User</th>
                        <th>Post_status</th>
                       
                       
                        <th>Image</th>
                        <th>Delete</th>
                        <th>Edit</th>
                        <th>Show</th>
                        <th>Status Accept</th>
                        <th>Status Reject</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($post as $post) 
                    <tr>
                       
                        <td>{{$post->title}}</td>
                        <td>{{$post->description}}</td>
                        <td>{{$post->usertype}}</td>
                        <td>{{$post->writer_id ?? 'N/A'}}</td>
                        <td>{{$post->category->name ?? 'N/A'}}</td>
                        <td>{{$post->body ?? 'N/A'}}</td>
                        <td>
                            @if($post->post_status === 'active')
                                <button class="btn btn-success">Active</button>
                            @elseif($post->post_status === 'pending')
                                <button class="btn btn-warning">Pending</button>
                                @else
                                <button class="btn btn-danger">Rejected</button>
                                @endif
                        </td>
                    
                       
                        <td>
                            
                            <img style="height: 150px; width: 250px;" src="{{ asset('postimage/' . $post->image) }}" alt=""></td>
                            <td>
                                <a onclick="return confirm('Are you sure delete this post?')" href="{{url('delete_post',$post->id)}}"><button class="btn btn-danger">Delete</button></a>
                            </td>
                            <td>
                                <a href="{{url('edit_page',$post->id)}}"><button class="btn btn-primary">Edit</button></a>
                            </td>
                            <td>
                                <a href="{{url('show_post',$post->id)}}"><button class="btn btn-success">Show</button></a>
                            </td>
                            <td> <a href="{{url('accept_post',$post->id)}}"><button class="btn btn-dark">Accept</button></a></td>
                            <td> <a onclick="return confirm('Are you sure reject this post?')" href="{{url('reject_post',$post->id)}}"><button class="btn btn-warning">Reject</button></a></td>
                    </tr>
                  @endforeach
                  
                   
                </tbody>
            </table>
        </div>
    </div>
</div>
</div>
 {{--
<div class="col-12">
<marquee behavior="alternate" loop="" direction="right"><h1 class=" fw-bold">Admin</h1></marquee></div>
<div class="col-8    ms-auto">
    <a href="{{url('logout')}}"><button class="btn btn-success">Logout</button></a></div>
@if(session()->has('message'))
<div class="alert alert-danger">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">
{{session()->get('message')}}
    </button>
</div>
@endif
<div class="col-7 ms-auto">
    <h1>Show post</h1>
   <a href="{{url('post_pageadmin')}}"> <button class="btn btn-success mb-4">Add Post</button></a>
</div>
<table class="table table-bordered ">
    <tr class="table-info">
        <th>Post Title</th>
        <th>Description</th>
        <th>Post By</th>
        <th>Post Status</th>
        <th>Name</th>
        <th>User Email</th>
        <th>Category</th>
        <th>Image</th>
        <th>Delete</th>
        <th>Edit</th>
        <th>Show</th>
        <th>Status Accept</th>
        <th>Status Reject</th>
     
    </tr>
    @foreach($post as $post) 
<tr class="table-success">
    <td>{{$post->title}}</td>
    <td>{{$post->description}}</td>
    <td>{{$post->usertype}}</td>
    <td>{{$post->category->name ?? 'N/A'}}</td>
    <td>{{$post->post_status}}</td>
    <td>{{$post->name}}</td>
    <td>{{$post->user_id}}</td>
    <td>
        
        <img style="height: 150px; width: 250px;" src="{{ asset('postimage/' . $post->image) }}" alt=""></td>
        <td>
            <a onclick="return confirm('Are you sure delete this post?')" href="{{url('delete_post',$post->id)}}"><button class="btn btn-danger">Delete</button></a>
        </td>
        <td>
            <a href="{{url('edit_page',$post->id)}}"><button class="btn btn-primary">Edit</button></a>
        </td>
        <td>
            <a href="{{url('show_post',$post->id)}}"><button class="btn btn-success">Show</button></a>
        </td>
        <td> <a href="{{url('accept_post',$post->id)}}"><button class="btn btn-dark">Accept</button></a></td>
        <td> <a onclick="return confirm('Are you sure reject this post?')" href="{{url('reject_post',$post->id)}}"><button class="btn btn-warning">Reject</button></a></td>
</tr>
@endforeach

</table> --}}
<script src="./src/tablesort.js"></script>
@endsection