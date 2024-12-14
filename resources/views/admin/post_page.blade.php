@extends('layouts/master')
@section('content')
<div class="col-7 ms-auto">
    <h1>Add post</h1>
</div>
<div class="col-8 m-auto">
       
    <form action="{{url('add_post')}}" method="POST" enctype="multipart/form-data">
        @csrf
        
    Title <input class=" w-75" style="height: 42px" type="text" name="title" id="title">
    <br> <br>Description
<textarea name="description" id="description" cols="83" rows="10"></textarea>
<br>

Upload image<input class="mt-5" type="file" id="myFile" name="image">
<br>
<input class="mt-5 btn btn-primary" name="submit" type="submit">
</div>

@endsection