@extends('sidebar.sidebar')
@section('content')
<div class="body-wrapper">
<div class="col-6 ms-auto">
<a href="{{url('/admin/dashboard')}}"><button class="btn btn-primary">
    Back</button></a></div>
<form action="{{url('update_post',$post->id)}}" method="POST" enctype="multipart/form-data">
    @csrf
<marquee behavior="" direction="left"><h2>Email:{{$post->user_id}}</h2>
    <h2>Name:{{$post->name}}</h2></marquee>
<div class="col-8 m-auto">
       <h1 class="text-center fw-bold">Post</h1>
       <h1>Title:{{$post->title}}</h1>
       <h5>Description:{{$post->description}}</h5>
   
<div class="col-8 m-auto mt-5">
    <span class="fw-bolder fs-4">Image</span><img class="h-100 w-100" src="/postimage/{{$post->image}}" alt="">
</div>


</div>
</form>
</div>
@endsection