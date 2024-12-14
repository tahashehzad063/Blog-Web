@extends('sidebar.bil')
@section('content')
<div class="col-12">
 
        <div class="row">
        <div class="col-6">
        <img src="{{ asset('images/person_2.jpg') }}" class="card-img-top" alt="...">
    </div>
    <div class="col-6">
        
      Age<h5 class="card-title">17 </h5>
{{-- @foreach ($post as $post) --}}
    
<h5 class="card-title">{{$post->name}} </h5>

{{-- @endforeach --}}
<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eos nobis, voluptate earum eveniet hic distinctio ab cum, eligendi reprehenderit magni provident sapiente animi delectus obcaecati labore ad quisquam eaque similique necessitatibus error sint! Minus maxime autem nisi temporibus! Quasi, error.</p>
<h5 class="card-title">{{$post->title}} </h5>

<img style="height: 150px; width: 250px;" src="{{ asset('postimage/' . $post->image) }}" alt="">
</div>
</div>
</div>

@endsection