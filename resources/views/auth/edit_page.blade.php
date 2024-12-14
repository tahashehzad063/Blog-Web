@extends('sidebar.sidebar')
@section('content')
<div class="body-wrapper">
<div class="col-6 ms-auto">
</div>

<div class="login-page bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
         
              <a href="{{url('/admin/dashboard')}}"><button class="btn btn-primary">
                Back</button></a>
                <div class="bg-white shadow rounded">
                    <div class="row">
                        <div class="col-md-7 pe-0">
                            <div class="form-left h-100 py-5 px-5">
                                  
                                <form action="{{url('update_post',$post->id)}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <select name="category_id" id="category_id" class="form-select">
                                        @foreach($categories as $category)
                                            <option value="{{ $category->id }}" {{ ($post->category_id == $category->id) ? 'selected' : '' }}>
                                                {{ $category->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                    
                                    
                                    
                                    
                                <div class="col-12 ">
                                       <h1 class="text-center fw-bold">Update Post</h1>
                                    <h1>Title</h1> <input class=" w-100" style="height: 42px" type="text" name="title" id="title" value="{{$post->title}}">
                                    <br> <br><h1>Description</h1>
                                <textarea name="description" id="description" cols="57" rows="10">{{$post->description}}</textarea>
                                <br>
                                <div class="col-12 m-auto mt-5">
                                    <span class="fw-bolder fs-4"><h1>Prevoius image</h1></span><img class="h-100 w-100" src="/postimage/{{$post->image}}" alt="">
                                </div>
                               <h1> Update Old image</h1><input class="mt-5" type="file" id="myFile" name="image">
                                <br>
                                <input class="mt-5 btn btn-primary" name="submit" type="submit">
                                </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-md-5 ps-0 d-none d-md-block">
                            <div class="form-right h-100 bg-primary text-white text-center pt-5">
                              <div class="col-12">&nbsp;</div>
                              <br>
                              <br>
                              <br>
                              <br>
                              <br>
                              <br>
                              <br>
                              <br>
                              <br>
                              <br>
                              <br>
                                <h1 class="text-light pt-5">Welcome Back!!!</h1>
                            </div>
                        </div>
                    </div>
                </div>
                <p class="text-end text-secondary mt-3">Bootstrap 5 Login Page Design</p>
            </div>
        </div>
    </div>
</div>
</div>
@endsection