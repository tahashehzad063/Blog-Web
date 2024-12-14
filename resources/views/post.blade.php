
@extends('layouts/master')
@section('content')
<div class="col-8 ms-auto">
    <h1>Blog Posts</h1>
</div>
@foreach($post as $post)
<div class="row">
    <div class="col-10 ms-auto">
        <div class="row">
<div class="col-4"><img class="h-50 w-50" src="/postimage/{{$post->image}}" alt="">

<h3>Title{{$post->title}}</h3>
<p>Decription{{$post->description}}</p>
<a href=""><button class="btn btn-primary">Read More</button></a>
</div>
</div>
</div>
</div>
@endforeach
@endsection