{{-- @extends('sidebar.sidebar')
@section('content')




<div class="body-wrapper">
    <div class="container my-5">
        <div class="ombre-externe">
            <div class="ombre-interne">
                    <div id="carouselExampleCaptions" class="carousel slide " data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="https://www.jellypir.at/CODEPEN/picture/autre/jellyfish_30.png" class="d-block w-100 peinture-ombre-interne-fine" alt="...">
                                <div class="carousel-caption">
                                    <h5 class="text-light">
                                        First slide
                                    </h5>
                                    <p>
                                    </p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="https://www.jellypir.at/CODEPEN/picture/autre/jellyfish_19.png" class="d-block w-100" alt="...">
                                <div class="carousel-caption">
                                    <h5 class="text-light">
                                        Second slide 
                                    </h5>
                                    <p>
                                    </p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="https://www.jellypir.at/CODEPEN/picture/autre/jellyfish_29.png" class="d-block w-100" alt="...">
                                <div class="carousel-caption">
                                    <h5 class="text-light">
                                        Third slide
                                    </h5>
                                    <p> 
                                    </p>
                                </div>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
            </div>
            <!-- ombre-interne -->
        </div>
        <!-- ombre-externe -->
    </div>
    
    


<h2 class="text-center">Recent Posts</h2>
<div class="col-12 ms-3 me-3">
    <div class="col-12">
<div class="row">
    @foreach($post as $post)
<div class="col-lg-4">
<div class="entry2">
<a ><img  src="/postimage/{{$post->image}}" alt="Image" class="img-fluid rounded"></a>
<div class="excerpt">
<span class="post-category text-white bg-secondary mb-3 rounded-3 mt-3">{{$post->category->name ?? 'N/A'}}</span>
<h2>Title{{$post->title}}</h2>
<div class="post-meta align-items-center text-left clearfix">
    <div class="row">
    <div class="col-2">
<img src="images/person_1.jpg" alt="Image" class="img-fluid rounded-circle">
</div>
<div class="col-8">
<span class="d-inline-block mt-1">By <a href="#" class="text-decoration-none">Carrol Atkinson</a></span>
<span>   {{ $post->created_at->format('d/m/Y') }}</span></div></div>
</div>
<p>{{$post->description}}</p>
<p><a href="{{url('post_details',$post->id)}}"><button class=" btn btn-primary">Read More</button></a></p>
</div>
</div>
</div>
        {{-- <div class="col-10  mb-5">
         
                <div class="row">
                    @foreach($post as $post)
                    <div class="col-4"><img class="h-25 w-25" src="/postimage/{{$post->image}}" alt="">
                        <h1>Name:{{$post->name}}</h1>
        <h3>Title{{$post->title}}</h3>
        
      
           <h3>{{$post->description}} </h3> 
            <a class="moreless-button mb-5" href="{{url('post_details',$post->id)}}"><button class="btn btn-primary">Read more</button></a>
        </div>
        @endforeach
    </div> --}}
    
    {{-- @endforeach
    </div>

</div>



</div>
</div>
</div>
@endsection --}} 

@extends('sidebar.bil')
@section('content')<div id="carouselExampleCaptions" class="carousel slide">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="https://codingyaar.com/wp-content/uploads/dark-flowers-1.png" class="d-block w-100" alt="...">
        <div class="carousel-caption d-flex flex-column h-100 align-items-center justify-content-center bottom-0">
          <h2 class="bg-dark bg-opacity-50 py-2 px-4">First slide label</h2>
         
        </div>
      </div>
      <div class="carousel-item">
        <img src="https://codingyaar.com/wp-content/uploads/dark-flowers-2.png" class="d-block w-100" alt="...">
        <div class="carousel-caption d-flex flex-column h-100 align-items-center justify-content-center bottom-0 ">
            <h2 class="bg-dark bg-opacity-50 py-2 px-4">Second slide label</h2>
        
        </div>
      </div>
      <div class="carousel-item">
        <img src="https://codingyaar.com/wp-content/uploads/dark-flowers-3.png" class="d-block w-100" alt="...">
        <div class="carousel-caption d-flex flex-column h-100 align-items-center justify-content-center bottom-0">
          <h2 class="bg-dark bg-opacity-50 py-2 px-4">Third slide label</h2>
          
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  

<h1 class="text-center fw-bold">Recent Posts</h1>
<div class="col-11 m-auto">
<div class="row">
    @foreach($post as $post)
<div class="col-lg-4 mb-4">
<div class="entry2">
<a href="{{url('post_details',$post->id)}}"><img src="/postimage/{{$post->image}}" alt="Image" class="img-fluid rounded"></a>
<div class="excerpt">
<span class="post-category text-white bg-secondary mb-3">{{$post->category->name ?? 'N/A'}}</span>
<h2><a href="{{ url('profile/user', $post->id) }}">{{$post->title}}</a></h2>
<div class="post-meta align-items-center text-left clearfix">
    <figure class="author-figure mb-0 mr-3 float-left">
        <a href="{{ url('profile/user', $post->id) }}">
            <img src="images/person_1.jpg" alt="Image" class="img-fluid">
        </a>
    </figure>
    
<span class="d-inline-block mt-1">By <a href="{{url('profile/user',$post->id)}}">{{$post->name}}</a></span>
<span>&nbsp;-&nbsp; {{ $post->created_at->format('d/m/Y') }}</span>
</div>
<p>{{$post->description}}</p>
<p><a href="{{url('post_details',$post->id)}}"><button class="btn btn-primary">Read More</button></a></p>
</div>
</div>
</div>
@endforeach
</div>
<div class="col-8 ms-auto">

    <div class="tab "style="margin-left:70px; ">
        {{-- @foreach ($postsTab1 as $post) --}}
        <!-- Display post content for tab 1 -->
        {{-- @endforeach --}}
        <!-- Pagination Links for Tab 1 -->
        {{ $postsTab1->links() }}
    </div>
    
   
</div>
</div></div>
</div>
<div class="site-section bg-light">
<div class="container">
<div class="row align-items-stretch retro-layout">
<div class="col-md-5 order-md-2">
<a href="single.html" class="hentry img-1 h-100 gradient" style="background-image: url('images/img_4.jpg');">
<span class="post-category text-white bg-danger">Travel</span>
<div class="text">
<h2>The 20 Biggest Fintech Companies In America 2019</h2>
<span>February 12, 2019</span>
</div>
</a>
</div>
<div class="col-md-7">
<a href="single.html" class="hentry img-2 v-height mb30 gradient" style="background-image: url('images/img_1.jpg');">
<span class="post-category text-white bg-success">Nature</span>
<div class="text text-sm">
<h2>The 20 Biggest Fintech Companies In America 2019</h2>
<span>February 12, 2019</span>
</div>
</a>
<div class="two-col d-block d-md-flex">
<a href="single.html" class="hentry v-height img-2 gradient" style="background-image: url('images/img_2.jpg');">
<span class="post-category text-white bg-primary">Sports</span>
<div class="text text-sm">
<h2>The 20 Biggest Fintech Companies In America 2019</h2>
<span>February 12, 2019</span>
</div>
</a>
<a href="single.html" class="hentry v-height img-2 ml-auto gradient" style="background-image: url('images/img_3.jpg');">
<span class="post-category text-white bg-warning">Lifestyle</span>
<div class="text text-sm">
<h2>The 20 Biggest Fintech Companies In America 2019</h2>
<span>February 12, 2019</span>
</div>
</a>
</div>
</div>
</div>
</div>
</div>zz
@endsection