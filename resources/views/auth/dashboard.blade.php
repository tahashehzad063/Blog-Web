{{-- 
@extends('layouts/master')
@section('content')
<div class="col-8    ms-auto">
<a href="logout"><button class="btn btn-success">Logout</button></a></div>
<div class="col-8 ">
    <h1>Blog Posts</h1>
</div>

    <div class="col-10  mb-5">
     
            <div class="row">
                @foreach($post as $post)
                <div class="col-4"><img class="h-100 w-100" src="/postimage/{{$post->image}}" alt="">
                    <h1>Name:{{$post->name}}</h1>
    <h3>Title{{$post->title}}</h3>
    
  
       <h3>{{$post->description}} </h3> 
        <a class="moreless-button mb-5" href="{{url('post_details',$post->id)}}"><button class="btn btn-primary">Read more</button></a>
    </div>
    @endforeach
</div>

</div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

@endsection --}}